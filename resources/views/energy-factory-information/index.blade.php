@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyfactoryinformation</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-factory-information/create') }}" class="btn btn-success btn-sm" title="Add New EnergyFactoryInformation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-factory-information') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <th>กลุ่มโรงงาน</th>
                                        <th>ที่อยู่โรงงาน</th>
                                        <th>โทรศัพท์</th>
                                        <th>โทรสาร</th>
                                        <th>อีเมล</th>
                                        <th>ที่อยู่สำนักงาน</th>
                                        <th>โทรศัพท์</th>
                                        <th>โทรสาร</th>
                                        <th>อีเมล</th>
                                        <th>ประเภทอุตสาหกรรม</th>
                                        <th>พนักงงานโรงงาน</th>
                                        <th>เวลาดำเนินการ</th>
                                        <th>User Id</th>
                                        <th>Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyfactoryinformation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->factory_size }}</td><td>{{ $item->factory_address }}</td><td>{{ $item->factory_tel }}</td><td>{{ $item->factory_fax }}</td><td>{{ $item->factory_email }}</td><td>{{ $item->office_address }}</td><td>{{ $item->office_tel }}</td><td>{{ $item->office_fax }}</td><td>{{ $item->office_email }}</td><td>{{ $item->factory_type }}</td><td>{{ $item->factory_employee }}</td><td>{{ $item->factory_operation_time }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-factory-information/' . $item->id) }}" title="View EnergyFactoryInformation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-factory-information/' . $item->id . '/edit') }}" title="Edit EnergyFactoryInformation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-factory-information' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyFactoryInformation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyfactoryinformation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
