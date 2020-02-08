@extends('layout.main')

@section('title','Energy production diagram')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyProductionDiagram {{ $energyproductiondiagram->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-production-diagram') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-production-diagram/' . $energyproductiondiagram->id . '/edit') }}" title="Edit EnergyProductionDiagram"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyproductiondiagram' . '/' . $energyproductiondiagram->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionDiagram" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $energyproductiondiagram->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> แผนผังกระบวนการผลิต</th>
                                        <td> {{ $energyproductiondiagram->photo_diagram }} </td>
                                    </tr>
                                    <tr>
                                        <th> คำอธิบายกระบวนการผลิต </th>
                                        <td> {{ $energyproductiondiagram->description }} </td>
                                    </tr>
                                    <tr>
                                        <th> Energy Production Id </th>
                                        <td> {{ $energyproductiondiagram->energy_production_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> User Id </th>
                                        <td> {{ $energyproductiondiagram->user_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Enery Report Id </th>
                                        <td> {{ $energyproductiondiagram->energy_report_id }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
