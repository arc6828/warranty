@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการใช้พลังงานความร้อน {{ $energyportionheat->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-portion-heat') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-portion-heat/' . $energyportionheat->id . '/edit') }}" title="Edit EnergyPortionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyportionheat' . '/' . $energyportionheat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyPortionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyportionheat->id }}</td>
                                    </tr>
                                    <tr><th> ระบบ </th><td> {{ $energyportionheat->system }} </td></tr><tr><th> อุปกรณ์ </th><td> {{ $energyportionheat->equipment }} </td></tr><tr><th> การใช้พลังงานเชื้อเพลิง (ชนิดเชื้อเพลง) </th><td> {{ $energyportionheat->fuel_consumption_type }} </td></tr><tr><th> การใช้พลังงานเชื้อเพลิง (เมกะจูล/ปี) </th><td> {{ $energyportionheat->fuel_consumption_megajoule }} </td></tr><tr><th> วิธีการประเมิน </th><td> {{ $energyportionheat->method_assessment }} </td></tr><tr><th> วิธีการตรวจวัด </th><td> {{ $energyportionheat->method_check }} </td></tr><tr><th> User Id </th><td> {{ $energyportionheat->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyportionheat->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
