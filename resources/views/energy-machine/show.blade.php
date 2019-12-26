@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

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
                                        <th>ID</th><td>{{ $energymachine->id }}</td>
                                    </tr>
                                    <tr><th> System </th><td> {{ $energymachine->system }} </td></tr><tr><th> Machine Name </th><td> {{ $energymachine->machine_name }} </td></tr><tr><th> Power Type </th><td> {{ $energymachine->power_type }} </td></tr><tr><th> Spec </th><td> {{ $energymachine->spec }} </td></tr><tr><th> Spec Unit </th><td> {{ $energymachine->spec_unit }} </td></tr><tr><th> Quantity </th><td> {{ $energymachine->quantity }} </td></tr><tr><th> Lifetime </th><td> {{ $energymachine->lifetime }} </td></tr><tr><th> Average Active Hours </th><td> {{ $energymachine->average_active_hours }} </td></tr><tr><th> Electric Power </th><td> {{ $energymachine->electric_power }} </td></tr><tr><th> Heat Power </th><td> {{ $energymachine->heat_power }} </td></tr><tr><th> Fuel Type </th><td> {{ $energymachine->fuel_type }} </td></tr><tr><th> Fuel Unit </th><td> {{ $energymachine->fuel_unit }} </td></tr><tr><th> Performance Spec </th><td> {{ $energymachine->performance_spec }} </td></tr><tr><th> Performance Unit </th><td> {{ $energymachine->performance_unit }} </td></tr><tr><th> Performance Actual </th><td> {{ $energymachine->performance_actual }} </td></tr><tr><th> Performance Actual Unit </th><td> {{ $energymachine->performance_actual_unit }} </td></tr><tr><th> Remark </th><td> {{ $energymachine->remark }} </td></tr><tr><th> User Id </th><td> {{ $energymachine->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energymachine->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
