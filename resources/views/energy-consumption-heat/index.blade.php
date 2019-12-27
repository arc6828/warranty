@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyconsumptionheat</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-consumption-heat/create') }}" class="btn btn-success btn-sm" title="Add New EnergyConsumptionHeat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-consumption-heat') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Month</th><th>Fuel Oil Liter</th><th>Fuel Oil Baht</th><th>Diesel Oil Liter</th><th>Diesel Oil Baht</th><th>Lpg Kg</th><th>Lpg Baht</th><th>Natural Gas Millionbtu</th><th>Natural Gas Baht</th><th>Coal Ton</th><th>Coal Baht</th><th>Steam Purchased Ton</th><th>Steam Purchased Baht</th><th>Other Unit</th><th>Other Baht</th><th>Renewable Energy Unit</th><th>Renewable Energy Baht</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyconsumptionheat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->fuel_oil_liter }}</td><td>{{ $item->fuel_oil_baht }}</td><td>{{ $item->diesel_oil_liter }}</td><td>{{ $item->diesel_oil_baht }}</td><td>{{ $item->lpg_kg }}</td><td>{{ $item->lpg_baht }}</td><td>{{ $item->natural_gas_millionbtu }}</td><td>{{ $item->natural_gas_baht }}</td><td>{{ $item->coal_ton }}</td><td>{{ $item->coal_baht }}</td><td>{{ $item->steam_purchased_ton }}</td><td>{{ $item->steam_purchased_baht }}</td><td>{{ $item->other_unit }}</td><td>{{ $item->other_baht }}</td><td>{{ $item->renewable_energy_unit }}</td><td>{{ $item->renewable_energy_baht }}</td><td>{{ $item->user_id }}</td><td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-consumption-heat/' . $item->id) }}" title="View EnergyConsumptionHeat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-consumption-heat/' . $item->id . '/edit') }}" title="Edit EnergyConsumptionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-consumption-heat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyconsumptionheat->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
