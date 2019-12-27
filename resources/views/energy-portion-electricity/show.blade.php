@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyPortionElectricity {{ $energyportionelectricity->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-portion-electricity') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-portion-electricity/' . $energyportionelectricity->id . '/edit') }}" title="Edit EnergyPortionElectricity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyportionelectricity' . '/' . $energyportionelectricity->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyPortionElectricity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyportionelectricity->id }}</td>
                                    </tr>
                                    <tr><th> System </th><td> {{ $energyportionelectricity->system }} </td></tr><tr><th> Electric Power Consumption </th><td> {{ $energyportionelectricity->electric_power_consumption }} </td></tr><tr><th> Method Assessment </th><td> {{ $energyportionelectricity->method_assessment }} </td></tr><tr><th> Method Check </th><td> {{ $energyportionelectricity->method_check }} </td></tr><tr><th> User Id </th><td> {{ $energyportionelectricity->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyportionelectricity->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
