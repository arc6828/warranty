@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_f</div>
                    <div class="card-body">
                        <a href="{{ url('/table_f/create') }}" class="btn btn-success btn-sm" title="Add New Table_f">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/table_f') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ประเทศ</th><th>จำนวน</th><th>มูลค่า (บาท)</th><th>การเชื่อมโยงกับอุตสาหกรรมฯในประเทศ (กรุณากาเครื่องหมาย√ในช่อง)</th><th>ค่าจ้างออกแบบทางวิศวกรรมจากต่างประเทศจากบริษัท</th><th>เครื่องจักรหรือชิ้นส่วนใหม่ที่นำเข้าจากต่างประเทศ</th><th>ค่าใช้จ่ายอื่นๆ (เช่น ค่าติดตั้ง ค่าทดลองเครื่อง เป็นต้น)</th><th>รวมมูลค่ากลุ่ม 1</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($table_f as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->country }}</td><td>{{ $item->number }}</td><td>{{ $item->cost }}</td><td>{{ $item->connect }}</td><td>{{ $item->wage_company }}</td><td>{{ $item->machinery_Imported }}</td><td>{{ $item->other }}</td><td>{{ $item->total }}</td>
                                        <td>
                                            <a href="{{ url('/table_f/' . $item->id) }}" title="View Table_f"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_f/' . $item->id . '/edit') }}" title="Edit Table_f"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/table_f' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_f" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $table_f->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
