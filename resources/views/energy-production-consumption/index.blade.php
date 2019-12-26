@extends('layout.main')

@section('title','Energy production consumption')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Energy production consumption</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-consumption/create') }}" class="btn btn-success btn-sm" title="Add New EnergyProductionConsumption">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-production-consumption') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th class="d-none">#</th>
                                        <th>Month</th>
                                        <th>Yield</th>
                                        <th>Consumption Electricity</th>
                                        <th>Consumption Heat</th>
                                        <th>Energy Production Id</th>
                                        <th>User Id</th>
                                        <th>Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproductionconsumption as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td>
                                        <td>{{ $item->yield }}</td>
                                        <td>{{ $item->consumption_electricity }}</td>
                                        <td>{{ $item->consumption_heat }}</td>
                                        <td>{{ $item->energy_production_id }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-production-consumption/' . $item->id) }}" title="View EnergyProductionConsumption"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production-consumption/' . $item->id . '/edit') }}" title="Edit EnergyProductionConsumption"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production-consumption' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionConsumption" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyproductionconsumption->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
