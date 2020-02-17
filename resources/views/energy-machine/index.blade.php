@extends('layouts.app')

@section('title','Energy machine')

@section('content')
    <div class="container">
        <div class="row">
           
            @include('admin.sidebar')

            <div class="col-md-16">
                <div class="card">
                    <div class="card-header">Energy machine</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-machine/create') }}" class="btn btn-success btn-sm" title="Add New EnergyMachine">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-machine') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ระบบที่ใช้พลังงาน</th>
                                        <th>ชื่ออุปกรณ์</th>
                                        <th>ประเภทพลังงาน</th>
                                        <th>พิกัด (ขนาด)</th>
                                        <th>พิกัด (หน่วย)</th>
                                        <th>จำนวน</th>
                                        <th>อายุการใช้งาน</th>
                                        <th>ชั่วโมงการใช้งานเฉลี่ย/ปี</th>
                                        <th>พลังงานไฟฟ้า (กิโลวัตต์-ชั่วโมง/ปี)</th>
                                        <th>พลังงานความร้อน (เมกะจูล/ปี)</th>
                                        <th>ชนิดการใช้เชื้อเพลิง</th>
                                        <th>การใช้เชื้อเพลิง (หน่วย)</th>
                                        <th>ค่าพิกัดประสิทธิภาพ</th>
                                        <th>ค่าประสิทธิภาพ (หน่วย)</th>
                                        <th>ค่าประสิทธิภาพ (ใช้งานจริง)</th>
                                        <th>ค่าประสิทธิภาพที่ใช้งานจริง (หน่วย)</th>
                                        <th>หมายเหตุ</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energymachine as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->system }}</td>
                                        <td>{{ $item->machine_name }}</td>
                                        <td>{{ $item->power_type }}</td>
                                        <td>{{ $item->spec }}</td>
                                        <td>{{ $item->spec_unit }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->lifetime }}</td>
                                        <td>{{ $item->average_active_hours }}</td>
                                        <td>{{ $item->electric_power }}</td>
                                        <td>{{ $item->heat_power }}</td>
                                        <td>{{ $item->fuel_type }}</td>
                                        <td>{{ $item->fuel_unit }}</td>
                                        <td>{{ $item->performance_spec }}</td>
                                        <td>{{ $item->performance_unit }}</td>
                                        <td>{{ $item->performance_actual }}</td>
                                        <td>{{ $item->performance_actual_unit }}</td>
                                        <td>{{ $item->remark }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-machine/' . $item->id) }}" title="View EnergyMachine"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-machine/' . $item->id . '/edit') }}" title="Edit EnergyMachine"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-machine' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachine" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energymachine->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
