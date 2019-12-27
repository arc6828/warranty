@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyConsumptionHeat {{ $energyconsumptionheat->id }}</div>
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
                                    <tr><th> Month </th><td> {{ $energyconsumptionheat->month }} </td></tr><tr><th> Fuel Oil Liter </th><td> {{ $energyconsumptionheat->fuel_oil_liter }} </td></tr><tr><th> Fuel Oil Baht </th><td> {{ $energyconsumptionheat->fuel_oil_baht }} </td></tr><tr><th> Diesel Oil Liter </th><td> {{ $energyconsumptionheat->diesel_oil_liter }} </td></tr><tr><th> Diesel Oil Baht </th><td> {{ $energyconsumptionheat->diesel_oil_baht }} </td></tr><tr><th> Lpg Kg </th><td> {{ $energyconsumptionheat->lpg_kg }} </td></tr><tr><th> Lpg Baht </th><td> {{ $energyconsumptionheat->lpg_baht }} </td></tr><tr><th> Natural Gas Millionbtu </th><td> {{ $energyconsumptionheat->natural_gas_millionbtu }} </td></tr><tr><th> Natural Gas Baht </th><td> {{ $energyconsumptionheat->natural_gas_baht }} </td></tr><tr><th> Coal Ton </th><td> {{ $energyconsumptionheat->coal_ton }} </td></tr><tr><th> Coal Baht </th><td> {{ $energyconsumptionheat->coal_baht }} </td></tr><tr><th> Steam Purchased Ton </th><td> {{ $energyconsumptionheat->steam_purchased_ton }} </td></tr><tr><th> Steam Purchased Baht </th><td> {{ $energyconsumptionheat->steam_purchased_baht }} </td></tr><tr><th> Other Unit </th><td> {{ $energyconsumptionheat->other_unit }} </td></tr><tr><th> Other Baht </th><td> {{ $energyconsumptionheat->other_baht }} </td></tr><tr><th> Renewable Energy Unit </th><td> {{ $energyconsumptionheat->renewable_energy_unit }} </td></tr><tr><th> Renewable Energy Baht </th><td> {{ $energyconsumptionheat->renewable_energy_baht }} </td></tr><tr><th> User Id </th><td> {{ $energyconsumptionheat->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyconsumptionheat->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
