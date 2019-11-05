@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_a</div>
                    <div class="card-body">
                        <a href="{{ url('/table_a/create') }}" class="btn btn-success btn-sm" title="Add New Table_a">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/table_a') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ประกอบคำขอเลขที่</th>
                                        <th>ลงวันที่</th>
                                        <th>ชื่อ</th>
                                        <th>ในนามบริษัท</th>
                                        <th>ดำเนินการผลิต</th>
                                        <th>บัตรส่งเสริมเลขที่</th>
                                        <th>ลงวันที่</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($table_a as $item)
                                    <tr>
                                        <td class="d-none">{{  $item->id  }}</td>
                                        <td>{{ $item->request_number }}</td>
                                        <td>{{ $item->registration_date }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->company }}</td>
                                        <td>{{ $item->production }}</td>
                                        <td>{{ $item->promotion_certificate_number }}</td>
                                        <td>{{ $item->promotion_date }}</td>
                                        <td>
                                            <a href="{{ url('/table_a/' . $item->id) }}" title="View Table_a"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_a/' . $item->id . '/edit') }}" title="Edit Table_a"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/table_a' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_a" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $table_a->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
