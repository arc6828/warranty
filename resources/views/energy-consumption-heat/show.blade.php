@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลปริมาณการใช้เชื้อเพลิง {{ $energyconsumptionheat->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-consumption-heat') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-consumption-heat/' . $energyconsumptionheat->id . '/edit') }}" title="Edit EnergyConsumptionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyconsumptionheat' . '/' . $energyconsumptionheat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyconsumptionheat->id }}</td>
                                    </tr>
                                    <tr><th> เดือน </th><td> {{ $energyconsumptionheat->month }} </td></tr><tr><th> น้ำมันเตา (ลิตร) </th><td> {{ $energyconsumptionheat->fuel_oil_liter }} </td></tr><tr><th> น้ำมันเตา (บาท) </th><td> {{ $energyconsumptionheat->fuel_oil_baht }} </td></tr><tr><th> น้ำมันดีเซล (ลิตร) </th><td> {{ $energyconsumptionheat->diesel_oil_liter }} </td></tr><tr><th> น้ำมันดีเซล (บาท) </th><td> {{ $energyconsumptionheat->diesel_oil_baht }} </td></tr><tr><th> ก๊าซปิโตรเลียมเหลว (กิโลกรัม) </th><td> {{ $energyconsumptionheat->lpg_kg }} </td></tr><tr><th> ก๊าซปิโตรเลียมเหลว (บาท) </th><td> {{ $energyconsumptionheat->lpg_baht }} </td></tr><tr><th> ก๊าซธรรมชาติ (ล้านบีทียู) </th><td> {{ $energyconsumptionheat->natural_gas_millionbtu }} </td></tr><tr><th> ก๊าซธรรมชาติ (บาท) </th><td> {{ $energyconsumptionheat->natural_gas_baht }} </td></tr><tr><th> ถ่านหิน (ตัน) </th><td> {{ $energyconsumptionheat->coal_ton }} </td></tr><tr><th> ถ่านหิน (บาท) </th><td> {{ $energyconsumptionheat->coal_baht }} </td></tr><tr><th> ไอน้ำที่ซื้อ (ตัน) </th><td> {{ $energyconsumptionheat->steam_purchased_ton }} </td></tr><tr><th> ไอน้ำที่ซื้อ (บาท) </th><td> {{ $energyconsumptionheat->steam_purchased_baht }} </td></tr><tr><th> อื่นๆ (หน่วย) </th><td> {{ $energyconsumptionheat->other_unit }} </td></tr><tr><th> อื่นๆ (บาท) </th><td> {{ $energyconsumptionheat->other_baht }} </td></tr><tr><th> พลังงานหมุนเวียน (หน่วย) </th><td> {{ $energyconsumptionheat->renewable_energy_unit }} </td></tr><tr><th> พลังงานหมุนเวียน (บาท) </th><td> {{ $energyconsumptionheat->renewable_energy_baht }} </td></tr><tr><th> User Id </th><td> {{ $energyconsumptionheat->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyconsumptionheat->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
