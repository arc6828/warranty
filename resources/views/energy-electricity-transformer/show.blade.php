@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyElectricityTransformer {{ $energyelectricitytransformer->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-electricity-transformer') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-electricity-transformer/' . $energyelectricitytransformer->id . '/edit') }}" title="Edit EnergyElectricityTransformer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyelectricitytransformer' . '/' . $energyelectricitytransformer->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyElectricityTransformer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyelectricitytransformer->id }}</td>
                                    </tr>
                                    <tr><th> User Serial </th><td> {{ $energyelectricitytransformer->user_serial }} </td></tr><tr><th> Transformer Serial </th><td> {{ $energyelectricitytransformer->transformer_serial }} </td></tr><tr><th> User Type </th><td> {{ $energyelectricitytransformer->user_type }} </td></tr><tr><th> Usage Rate </th><td> {{ $energyelectricitytransformer->usage_rate }} </td></tr><tr><th> Transformer Size </th><td> {{ $energyelectricitytransformer->transformer_size }} </td></tr><tr><th> Transformer Quantity </th><td> {{ $energyelectricitytransformer->transformer_quantity }} </td></tr><tr><th> User Id </th><td> {{ $energyelectricitytransformer->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyelectricitytransformer->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
