@extends('layouts.app')

@section('title','Energy machine')

@section('content')
    <div class="container">
        <div class="row">
           

            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header">EnergyMachine {{ $energymachine->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-machine?energy_report_id='.$energymachine->energy_report_id) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-machine/' . $energymachine->id . '/edit') }}" title="Edit EnergyMachine"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energymachine' . '/' . $energymachine->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachine" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $energymachine->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ระบบที่ใช้พลังงาน </th>
                                        <td> {{ $energymachine->system }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่ออุปกรณ์ </th>
                                        <td> {{ $energymachine->machine_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> ประเภทพลังงาน </th>
                                        <td> {{ $energymachine->power_type }} </td>
                                    </tr>
                                    <tr>
                                        <th> พิกัด (ขนาด) </th>
                                        <td> {{ $energymachine->spec }} </td>
                                    </tr>
                                    <tr>
                                        <th> พิกัด (หน่วย) </th>
                                        <td> {{ $energymachine->spec_unit }} </td>
                                    </tr>
                                    <tr>
                                        <th> จำนวน </th>
                                        <td> {{ $energymachine->quantity }} </td>
                                    </tr>
                                    <tr>
                                        <th> อายุการใช้งาน </th>
                                        <td> {{ $energymachine->lifetime }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชั่วโมงการใช้งานเฉลี่ย/ปี </th>
                                        <td> {{ $energymachine->average_active_hours }} </td>
                                    </tr>
                                    <tr>
                                        <th> พลังงานไฟฟ้า (กิโลวัตต์-ชั่วโมง/ปี) </th>
                                        <td> {{ $energymachine->electric_power }} </td>
                                    </tr>
                                    <tr>
                                        <th> พลังงานความร้อน (เมกะจูล/ปี) </th>
                                        <td> {{ $energymachine->heat_power }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชนิดการใช้เชื้อเพลิง </th>
                                        <td> {{ $energymachine->fuel_type }} </td>
                                    </tr>
                                    <tr>
                                        <th> การใช้เชื้อเพลิง (หน่วย) </th>
                                        <td> {{ $energymachine->fuel_unit }} </td>
                                    </tr>
                                    <tr>
                                        <th> ค่าพิกัดประสิทธิภาพ </th>
                                        <td> {{ $energymachine->performance_spec }} </td>
                                    </tr>
                                    <tr>
                                        <th> ค่าประสิทธิภาพ (หน่วย) </th>
                                        <td> {{ $energymachine->performance_unit }} </td>
                                    </tr>
                                    <tr>
                                        <th> ค่าประสิทธิภาพ (ใช้งานจริง) </th>
                                        <td> {{ $energymachine->performance_actual }} </td>
                                    </tr>
                                    <tr>
                                        <th> ค่าประสิทธิภาพที่ใช้งานจริง (หน่วย) </th>
                                        <td> {{ $energymachine->performance_actual_unit }} </td>
                                    </tr>
                                    <tr>
                                        <th> หมายเหตุ </th>
                                        <td> {{ $energymachine->remark }} </td>
                                    </tr>
                                    <tr>
                                        <th> User Id </th>
                                        <td> {{ $energymachine->user_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Enery Report Id </th>
                                        <td> {{ $energymachine->energy_report_id }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                @php
                    $energymachineevaluation = $energymachine->energy_machine_evaluations;
                @endphp

                <div class="card" id="two">
                    <div class="card-header">Energy machine evaluation</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-machine-evaluation/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyMachineEvaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-machine-evaluation/create-modal')

                        <form method="GET" action="{{ url('/energy-machine-evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ขนาดการใช้พลังงาน</th>
                                        <th>ชั่วโมงการใช้งาน</th>
                                        <th>ศักยภาพในการปรับปรุง</th>
                                        <th>คะแนนรวม</th>
                                        <th>ลำดับความสำคัญ</th>
                                        <th>ประเภทพลังงาน</th>
                                        <th class="d-none">Energy Machine Id</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energymachineevaluation as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->power_consumption_size }}</td>
                                        <td>{{ $item->operating_hours }}</td>
                                        <td>{{ $item->improvement_potential }}</td>
                                        <td>{{ $item->total_score }}</td>
                                        <td>{{ $item->priority }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td class="d-none">{{ $item->energy_machine_id }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-machine-evaluation/' . $item->id) }}" title="View EnergyMachineEvaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-machine-evaluation/' . $item->id . '/edit') }}" title="Edit EnergyMachineEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-machine-evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachineEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
