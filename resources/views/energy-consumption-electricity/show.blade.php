@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyConsumptionElectricity {{ $energyconsumptionelectricity->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-consumption-electricity') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-consumption-electricity/' . $energyconsumptionelectricity->id . '/edit') }}" title="Edit EnergyConsumptionElectricity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyconsumptionelectricity' . '/' . $energyconsumptionelectricity->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionElectricity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyconsumptionelectricity->id }}</td>
                                    </tr>
                                    <tr><th> Month </th><td> {{ $energyconsumptionelectricity->month }} </td></tr><tr><th> Maximum Power P </th><td> {{ $energyconsumptionelectricity->maximum_power_p }} </td></tr><tr><th> Maximum Power Pp </th><td> {{ $energyconsumptionelectricity->maximum_power_pp }} </td></tr><tr><th> Maximum Power Op </th><td> {{ $energyconsumptionelectricity->maximum_power_op }} </td></tr><tr><th> Maximum Power Expenses </th><td> {{ $energyconsumptionelectricity->maximum_power_expenses }} </td></tr><tr><th> Electrical Energy Volume </th><td> {{ $energyconsumptionelectricity->electrical_energy_volume }} </td></tr><tr><th> Electrical Energy Expenses </th><td> {{ $energyconsumptionelectricity->electrical_energy_expenses }} </td></tr><tr><th> Total Electric Bill </th><td> {{ $energyconsumptionelectricity->total_electric_bill }} </td></tr><tr><th> User Id </th><td> {{ $energyconsumptionelectricity->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyconsumptionelectricity->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
