@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyOrganizationChart {{ $energyorganizationchart->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-organization-chart') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-organization-chart/' . $energyorganizationchart->id . '/edit') }}" title="Edit EnergyOrganizationChart"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyorganizationchart' . '/' . $energyorganizationchart->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyOrganizationChart" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyorganizationchart->id }}</td>
                                    </tr>
                                    <tr><th> แผนภูมิองค์กร </th><td> {{ $energyorganizationchart->organization_chart }} </td></tr>
                                    <tr><th> การส่งเสริมแผนผังองค์กร </th><td> {{ $energyorganizationchart->organization_chart_promotion }} </td></tr>
                                    <tr><th> จำนวน ติดประกาศ </th><td> {{ $energyorganizationchart->notice_number }} </td></tr>
                                    <tr><th> ติดประกาศ </th><td> {{ $energyorganizationchart->notice }} </td></tr>
                                    <tr><th> จำนวน โปสเตอร์ </th><td> {{ $energyorganizationchart->poster_number }} </td></tr>
                                    <tr><th> ปสเตอร์ </th><td> {{ $energyorganizationchart->poster_number }} </td></tr>
                                    <tr><th> จำนวน เอกสารเผยแพร่ </th><td> {{ $energyorganizationchart->publication_number }} </td></tr>
                                    <tr><th> เอกสารเผยแพร่ </th><td> {{ $energyorganizationchart->publication }} </td></tr>
                                    <tr><th> จำนวน เสียงตามสาย </th><td> {{ $energyorganizationchart->voice_number }} </td></tr>
                                    <tr><th> เสียงตามสาย </th><td> {{ $energyorganizationchart->voice }} </td></tr>
                                    <tr><th> จำนวน อีเมล </th><td> {{ $energyorganizationchart->email_number }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyorganizationchart->email }} </td></tr>
                                    <tr><th> จำนวน การประชุม </th><td> {{ $energyorganizationchart->meeting_number }} </td></tr>
                                    <tr><th> การประชุม </th><td> {{ $energyorganizationchart->meeting }} </td></tr>
                                    <tr><th> อื่นๆ จำนวน </th><td> {{ $energyorganizationchart->others_number }} </td></tr>
                                    <tr><th> อื่นๆ </th><td> {{ $energyorganizationchart->others }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyorganizationchart->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyorganizationchart->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
