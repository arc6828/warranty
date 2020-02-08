@extends('layout.main')

@section('title','Energy machine evaluation')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyMachineEvaluation {{ $energymachineevaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-machine-evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-machine-evaluation/' . $energymachineevaluation->id . '/edit') }}" title="Edit EnergyMachineEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energymachineevaluation' . '/' . $energymachineevaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachineEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $energymachineevaluation->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ขนาดการใช้พลังงาน </th>
                                        <td> {{ $energymachineevaluation->power_consumption_size }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชั่วโมงการใช้งาน </th>
                                        <td> {{ $energymachineevaluation->operating_hours }} </td>
                                    </tr>
                                    <tr>
                                        <th> ศักยภาพในการปรับปรุง </th>
                                        <td> {{ $energymachineevaluation->improvement_potential }} </td>
                                    </tr>
                                    <tr>
                                        <th> คะแนนรวม </th>
                                        <td> {{ $energymachineevaluation->total_score }} </td>
                                    </tr>
                                    <tr>
                                        <th> ลำดับความสำคัญ </th>
                                        <td> {{ $energymachineevaluation->priority }} </td>
                                    </tr>
                                    <tr>
                                        <th> ประเภทพลังงาน </th>
                                        <td> {{ $energymachineevaluation->department }} </td>
                                    </tr>
                                    <tr>
                                        <th> Energy Machine Id </th>
                                        <td> {{ $energymachineevaluation->energy_machine_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> User Id </th>
                                        <td> {{ $energymachineevaluation->user_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Enery Report Id </th>
                                        <td> {{ $energymachineevaluation->energy_report_id }} </td>
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
