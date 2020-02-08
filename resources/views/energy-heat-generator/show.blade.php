@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการใช้เชื้อเพลิงในการผลิตไฟฟ้า {{ $energyheatgenerator->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-heat-generator') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-heat-generator/' . $energyheatgenerator->id . '/edit') }}" title="Edit EnergyHeatGenerator"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyheatgenerator' . '/' . $energyheatgenerator->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyHeatGenerator" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyheatgenerator->id }}</td>
                                    </tr>
                                    <tr><th> เดือน </th><td> {{ $energyheatgenerator->month }} </td></tr><tr><th> กำลังผลิตติดตั้ง (กิโลวัตต์) </th><td> {{ $energyheatgenerator->capacity }} </td></tr><tr><th> ปริมาณการใช้เชื้อเพลง(ชนิด) </th><td> {{ $energyheatgenerator->primary_fuel_consumption_type }} </td></tr><tr><th> ปริมาณการใช้เชื้อเพลง(ปริมาณ) </th><td> {{ $energyheatgenerator->primary_fuel_consumption_volume }} </td></tr><tr><th> ปริมาณการใช้เชื้อเพลง(หน่วย) </th><td> {{ $energyheatgenerator->primary_fuel_consumption_unit }} </td></tr><tr><th> ชั่วโมงการเดินเครื่อง </th><td> {{ $energyheatgenerator->operating_hours }} </td></tr><tr><th> ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับใช้เอง </th><td> {{ $energyheatgenerator->electricity_use }} </td></tr><tr><th> ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับจำหน่าย </th><td> {{ $energyheatgenerator->electricity_sale }} </td></tr><tr><th> ปริมาณไอน้ำที่ผลิต </th><td> {{ $energyheatgenerator->steam_use }} </td></tr><tr><th> ปริมาณไอน้ำที่จำหน่าย </th><td> {{ $energyheatgenerator->steam_sale }} </td></tr><tr><th> User Id </th><td> {{ $energyheatgenerator->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyheatgenerator->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
