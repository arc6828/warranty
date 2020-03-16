@extends('layouts.app')

@section('adaptivesidebar')
    @php
    //$energyreport = $energyorganizationchart->energy_report ;
    @endphp
    @include('admin/sidebar-energy')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการใช้เชื้อเพลิงในการผลิตไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-heat-generator/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyHeatGenerator">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-heat-generator/create-modal')

                        <form method="GET" action="{{ url('/energy-heat-generator') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>เดือน</th><th>กำลังผลิตติดตั้ง (กิโลวัตต์)</th><th>ปริมาณการใช้เชื้อเพลง(ชนิด)</th><th>ปริมาณการใช้เชื้อเพลง(ปริมาณ)</th><th>ปริมาณการใช้เชื้อเพลง(หน่วย)</th><th>ชั่วโมงการเดินเครื่อง</th><th>ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับใช้เอง</th><th>ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับจำหน่าย</th><th>ปริมาณไอน้ำที่ผลิต</th><th>ปริมาณไอน้ำที่จำหน่าย</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyheatgenerator as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->capacity }}</td><td>{{ $item->primary_fuel_consumption_type }}</td><td>{{ $item->primary_fuel_consumption_volume }}</td><td>{{ $item->primary_fuel_consumption_unit }}</td><td>{{ $item->operating_hours }}</td><td>{{ $item->electricity_use }}</td><td>{{ $item->electricity_sale }}</td><td>{{ $item->steam_use }}</td><td>{{ $item->steam_sale }}</td>
                                        <td>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id) }}" title="View EnergyHeatGenerator"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id . '/edit') }}" title="Edit EnergyHeatGenerator"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-heat-generator' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyHeatGenerator" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyheatgenerator->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
