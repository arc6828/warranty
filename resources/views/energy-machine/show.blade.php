@extends('layout.main')

@section('title','Energy machine')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyMachine {{ $energymachine->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-machine') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
            </div>
        </div>
    </div>
@endsection
