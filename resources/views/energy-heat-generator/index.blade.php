@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyheatgenerator</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-heat-generator/create') }}" class="btn btn-success btn-sm" title="Add New EnergyHeatGenerator">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-heat-generator') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Month</th><th>Capacity</th><th>Primary Fuel Consumption Type</th><th>Primary Fuel Consumption Volume</th><th>Primary Fuel Consumption Unit</th><th>Operating Hours</th><th>Electricity Use</th><th>Electricity Sale</th><th>Steam Use</th><th>Steam Sale</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyheatgenerator as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->capacity }}</td><td>{{ $item->primary_fuel_consumption_type }}</td><td>{{ $item->primary_fuel_consumption_volume }}</td><td>{{ $item->primary_fuel_consumption_unit }}</td><td>{{ $item->operating_hours }}</td><td>{{ $item->electricity_use }}</td><td>{{ $item->electricity_sale }}</td><td>{{ $item->steam_use }}</td><td>{{ $item->steam_sale }}</td><td>{{ $item->user_id }}</td><td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id) }}" title="View EnergyHeatGenerator"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id . '/edit') }}" title="Edit EnergyHeatGenerator"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-heat-generator' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyHeatGenerator" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyheatgenerator->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
