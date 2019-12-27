@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการผลิต(รายละเอียด)</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-operation/create') }}" class="btn btn-success btn-sm" title="Add New EnergyProductionOperation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-production-operation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>ลำดับที่</th><th>วัตถุดิบหลัก</th><th>เดือนที่ผลิต</th><th>ชั่วโมงการทำงาน</th><th>หน่วยผลผลิต</th><th>ปริมาณผลผลิตจริง</th><th>กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproductionoperation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->energy_production_id }}</td><td>{{ $item->raw_material }}</td><td>{{ $item->month }}</td><td>{{ $item->working_hours }}</td><td>{{ $item->production_unit }}</td><td>{{ $item->yield }}</td><td>{{ $item->capacity }}</td><td>{{ $item->user_id }}</td><td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-production-operation/' . $item->id) }}" title="View EnergyProductionOperation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production-operation/' . $item->id . '/edit') }}" title="Edit EnergyProductionOperation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production-operation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionOperation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyproductionoperation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
