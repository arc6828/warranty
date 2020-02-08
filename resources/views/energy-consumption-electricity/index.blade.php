@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการใช้ไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-consumption-electricity/create') }}" class="btn btn-success btn-sm" title="Add New EnergyConsumptionElectricity">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-consumption-electricity') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Month</th><th>Maximum Power P</th><th>Maximum Power Pp</th><th>Maximum Power Op</th><th>Maximum Power Expenses</th><th>Electrical Energy Volume</th><th>Electrical Energy Expenses</th><th>Total Electric Bill</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyconsumptionelectricity as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->maximum_power_p }}</td><td>{{ $item->maximum_power_pp }}</td><td>{{ $item->maximum_power_op }}</td><td>{{ $item->maximum_power_expenses }}</td><td>{{ $item->electrical_energy_volume }}</td><td>{{ $item->electrical_energy_expenses }}</td><td>{{ $item->total_electric_bill }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-consumption-electricity/' . $item->id) }}" title="View EnergyConsumptionElectricity"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-consumption-electricity/' . $item->id . '/edit') }}" title="Edit EnergyConsumptionElectricity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-consumption-electricity' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionElectricity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyconsumptionelectricity->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
