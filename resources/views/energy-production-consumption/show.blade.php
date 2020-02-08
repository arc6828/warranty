@extends('layout.main')

@section('title','Energy production consumption')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyProductionConsumption {{ $energyproductionconsumption->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-production-consumption') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-production-consumption/' . $energyproductionconsumption->id . '/edit') }}" title="Edit EnergyProductionConsumption"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyproductionconsumption' . '/' . $energyproductionconsumption->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionConsumption" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $energyproductionconsumption->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> เดือน </th>
                                        <td> {{ $energyproductionconsumption->month }} </td>
                                    </tr>
                                    <tr>
                                        <th> ปริมาณผลผลิต </th>
                                        <td> {{ $energyproductionconsumption->yield }} </td>
                                    </tr>
                                    <tr>
                                        <th> พลังงานไฟฟ้าที่ใช้ (กิโลวัตต์-ชั่วโมง) </th>
                                        <td> {{ $energyproductionconsumption->consumption_electricity }} </td>
                                    </tr>
                                    <tr>
                                        <th> พลังงานความร้อนที่ใช้ (เมกะจูล) </th>
                                        <td> {{ $energyproductionconsumption->consumption_heat }} </td>
                                    </tr>
                                    <tr>
                                        <th> Energy Production Id </th>
                                        <td> {{ $energyproductionconsumption->energy_production_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> User Id </th>
                                        <td> {{ $energyproductionconsumption->user_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Enery Report Id </th>
                                        <td> {{ $energyproductionconsumption->energy_report_id }} </td>
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
