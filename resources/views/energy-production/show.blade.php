@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการผลิต {{ $energyproduction->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-production') }}?energy_report_id={{ $energyproduction->energy_report_id }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-production/' . $energyproduction->id . '/edit') }}" title="Edit EnergyProduction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyproduction' . '/' . $energyproduction->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProduction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyproduction->id }}</td>
                                    </tr>
                                    <tr><th> ลำดับที่ </th><td> {{ $energyproduction->code }} </td></tr><tr><th> ชื่อผลิตภัณฑ์ </th><td> {{ $energyproduction->product_name }} </td></tr><tr><th> กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร) </th><td> {{ $energyproduction->capacity }} </td></tr><tr><th> ปริมาณผลผลิตจริง </th><td> {{ $energyproduction->yield }} </td></tr><tr><th> User Id </th><td> {{ $energyproduction->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyproduction->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                @php
                    $energyproductionoperation = $energyproduction->energy_production_operations;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลการผลิต(รายละเอียด)</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-operation/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionOperation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-production-operation/create-modal')

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
                                        <td>{{ $item->energy_production_id }}</td><td>{{ $item->raw_material }}</td><td>{{ $item->month }}</td><td>{{ $item->working_hours }}</td><td>{{ $item->production_unit }}</td><td>{{ $item->yield }}</td><td>{{ $item->capacity }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
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
                            
                        </div>

                    </div>
                </div>

                @php
                    $energyproductiondiagram = $energyproduction->energy_production_diagrams;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">Energy production diagram</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-diagram/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionDiagram">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        @include('energy-production-diagram/create-modal')

                        <form method="GET" action="{{ url('/energy-production-diagram') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>แผนผังกระบวนการผลิต</th>
                                        <th>คำอธิบายกระบวนการผลิต</th>
                                        <th class="d-none">Energy Production Id</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproductiondiagram as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->photo_diagram }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="d-none">{{ $item->energy_production_id }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-production-diagram/' . $item->id) }}" title="View EnergyProductionDiagram"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production-diagram/' . $item->id . '/edit') }}" title="Edit EnergyProductionDiagram"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production-diagram' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionDiagram" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>

                @php
                    $energyproductionconsumption = $energyproduction->energy_production_consumptions;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">Energy production consumption</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-consumption/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionConsumption">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-production-consumption/create-modal')
                        <form method="GET" action="{{ url('/energy-production-consumption') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>เดือน</th>
                                        <th>ปริมาณผลผลิต (หน่วย)</th>
                                        <th>พลังงานไฟฟ้าที่ใช้ (กิโลวัตต์-ชั่วโมง)</th>
                                        <th>พลังงานความร้อนที่ใช้ (เมกะจูล)</th>
                                        <th class="d-none">Energy Production Id</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproductionconsumption as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td>
                                        <td>{{ $item->yield }}</td>
                                        <td>{{ $item->consumption_electricity }}</td>
                                        <td>{{ $item->consumption_heat }}</td>
                                        <td class="d-none">{{ $item->energy_production_id }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-production-consumption/' . $item->id) }}" title="View EnergyProductionConsumption"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production-consumption/' . $item->id . '/edit') }}" title="Edit EnergyProductionConsumption"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production-consumption' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionConsumption" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
