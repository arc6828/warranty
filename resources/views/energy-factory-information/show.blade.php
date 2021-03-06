@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyFactoryInformation {{ $energyfactoryinformation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-factory-information') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-factory-information/' . $energyfactoryinformation->id . '/edit') }}" title="Edit EnergyFactoryInformation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyfactoryinformation' . '/' . $energyfactoryinformation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyFactoryInformation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyfactoryinformation->id }}</td>
                                    </tr>
                                    <tr><th> กลุ่มโรงงาน </th><td> {{ $energyfactoryinformation->factory_size }} </td></tr>
                                    <tr><th> ที่อยู่โรงงาน </th><td> {{ $energyfactoryinformation->factory_address }} </td></tr>
                                    <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->factory_tel }} </td></tr>
                                    <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->factory_fax }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->factory_email }} </td></tr>
                                    <tr><th> ที่อยู่สำนักงาน </th><td> {{ $energyfactoryinformation->office_address }} </td></tr>
                                    <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->office_tel }} </td></tr>
                                    <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->office_fax }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->office_email }} </td></tr>
                                    <tr><th> ประเภทอุตสาหกรรม </th><td> {{ $energyfactoryinformation->factory_type }} </td></tr>
                                    <tr><th> พนักงงานโรงงาน </th><td> {{ $energyfactoryinformation->factory_employee }} </td></tr>
                                    <tr><th> เวลาดำเนินการ </th><td> {{ $energyfactoryinformation->factory_operation_time }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyfactoryinformation->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyfactoryinformation->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
