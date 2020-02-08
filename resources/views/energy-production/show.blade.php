@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการผลิต {{ $energyproduction->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-production') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
            </div>
        </div>
    </div>
@endsection
