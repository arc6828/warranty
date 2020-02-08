@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลหม้อแปลงไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-electricity-transformer/create') }}" class="btn btn-success btn-sm" title="Add New EnergyElectricityTransformer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-electricity-transformer') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>หมายเลขผู้ใช้ไฟฟ้า</th><th>หมายเลขเครื่องวัดไฟฟ้า</th><th>ประเภทผู้ใช้ไฟฟ้า</th><th>อัตราการใช้ไฟฟ้า</th><th>ขนาดหม้อแปลงไฟฟ้า</th><th>จำนวนหม้อแปลงไฟฟ้า</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyelectricitytransformer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user_serial }}</td><td>{{ $item->transformer_serial }}</td><td>{{ $item->user_type }}</td><td>{{ $item->usage_rate }}</td><td>{{ $item->transformer_size }}</td><td>{{ $item->transformer_quantity }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-electricity-transformer/' . $item->id) }}" title="View EnergyElectricityTransformer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-electricity-transformer/' . $item->id . '/edit') }}" title="Edit EnergyElectricityTransformer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-electricity-transformer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyElectricityTransformer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyelectricitytransformer->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
