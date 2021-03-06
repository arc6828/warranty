@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการผลิต(รายละเอียด) {{ $energyproductionoperation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-production-operation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-production-operation/' . $energyproductionoperation->id . '/edit') }}" title="Edit EnergyProductionOperation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyproductionoperation' . '/' . $energyproductionoperation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionOperation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyproductionoperation->id }}</td>
                                    </tr>
                                    <tr><th> ลำดับที่ </th><td> {{ $energyproductionoperation->energy_production_id }} </td></tr><tr><th> วัตถุดิบหลัก </th><td> {{ $energyproductionoperation->raw_material }} </td></tr><tr><th> เดือนที่ผลิต </th><td> {{ $energyproductionoperation->month }} </td></tr><tr><th> ชั่วโมงการทำงาน </th><td> {{ $energyproductionoperation->working_hours }} </td></tr><tr><th> หน่วยผลผลิต </th><td> {{ $energyproductionoperation->production_unit }} </td></tr><tr><th> ปริมาณผลผลิตจริง </th><td> {{ $energyproductionoperation->yield }} </td></tr><tr><th> กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร) </th><td> {{ $energyproductionoperation->capacity }} </td></tr><tr><th> User Id </th><td> {{ $energyproductionoperation->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyproductionoperation->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
