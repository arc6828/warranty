@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_b</div>
                    <div class="card-body">
                        <a href="{{ url('/table_b/create') }}" class="btn btn-success btn-sm" title="Add New Table_b">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/table_b') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="d-none">#</th>
                                        <th>ปีฐาน</th>
                                        <th>ผลิตภัณฑ์/บริการ (ปีฐาน)</th>
                                        <th>กำลังผลิต/ขนาดกิจการ (ปีฐาน)</th>
                                        <th>เวลาทำงาน ชม./วัน (ปีฐาน)</th>
                                        <th>เวลาทำงาน วัน/ปี (ปีฐาน)</th>
                                        <th>ปีที่ประเมินผล</th>
                                        <th>ผลิตภัณฑ์/บริการ (ปีที่ประเมินผล)</th>
                                        <th>กำลังผลิต/ขนาดกิจการ (ปีที่ประเมินผล)</th>
                                        <th>เวลาทำงาน ชม./วัน (ปีที่ประเมินผล)</th>
                                        <th>เวลาทำงาน วัน/ปี (ปีที่ประเมินผล)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($table_b as $item)
                                    <tr>
                                        <td class="d-none">{{ $item->id }}</td>
                                        <td>{{ $item->base_year }}</td>
                                        <td>{{ $item->products_baseyear }}</td>
                                        <td>{{ $item->capacity_baseyear }}</td>
                                        <td>{{ $item->working_Hourday_byear }}</td>
                                        <td>{{ $item->working_dayyear_byear }}</td>
                                        <td>{{ $item->evaluation_year }}</td>
                                        <td>{{ $item->products_eyear }}</td>
                                        <td>{{ $item->capacity_eyear }}</td>
                                        <td>{{ $item->working_Hourday_eyear }}</td>
                                        <td>{{ $item->working_dayyear_eyear }}</td>
                                        <td>
                                            <a href="{{ url('/table_b/' . $item->id) }}" title="View Table_b"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_b/' . $item->id . '/edit') }}" title="Edit Table_b"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/table_b' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_b" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $table_b->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
