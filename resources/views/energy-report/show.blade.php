@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyReport {{ $energyreport->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-report') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-report/' . $energyreport->id . '/edit') }}" title="Edit EnergyReport"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyreport' . '/' . $energyreport->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyReport" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyreport->id }}</td>
                                    </tr>
                                    <tr><th> ชื่อนิติบุคคล </th><td> {{ $energyreport->legal_name }} </td></tr>
                                    <tr><th> ชื่อโรงงานควบคุม </th><td> {{ $energyreport->factory_name }} </td></tr>
                                    <tr><th> Tsic Id </th><td> {{ $energyreport->tsic_id }} </td></tr>
                                    <tr><th> ปี </th><td> {{ $energyreport->year }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyreport->user_id }} </td></tr>
                                </tbody>
                            </table> 
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
