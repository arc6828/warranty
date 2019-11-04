@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Schedule</div>
                    <div class="card-body">
                        <a href="{{ url('/schedule/create') }}" class="btn btn-success btn-sm" title="Add New Schedule">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/schedule') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ลำดับ</th><th>ปี</th>
                                        <th>ค่าก่อสร้างหรือปรับปรุงอาคาร</th>
                                        <th>ค่าเครื่องจักร/เครื่องมือ/อุปกรณ์</th>
                                        <th>ค่าติดตั้งเครื่องจักร</th>
                                        <th>ค่าทดลองเครื่อง</th>
                                        <th>รวมเงินลงทุน</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($schedule as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->menu }}</td>
                                        <td>{{ $item->cost_cons }}</td>
                                        <td>{{ $item->cost_tool }}</td>
                                        <td>{{ $item->cost_install }}</td>
                                        <td>{{ $item->cost_test }}</td>
                                        <td>{{ $item->investment }}</td>
                                        <td>
                                            <a href="{{ url('/schedule/' . $item->id) }}" title="View Schedule"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/schedule/' . $item->id . '/edit') }}" title="Edit Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/schedule' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $schedule->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
