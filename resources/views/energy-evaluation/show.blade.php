@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyEvaluation {{ $energyevaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-evaluation/' . $energyevaluation->id . '/edit') }}" title="Edit EnergyEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyevaluation' . '/' . $energyevaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyevaluation->id }}</td>
                                    </tr>
                                    <tr><th> คะแนนนโยบาย </th><td> {{ $energyevaluation->policy_score }} </td></tr>
                                    <tr><th> คะแนนนการจัดองค์กร </th><td> {{ $energyevaluation->organization_score }} </td></tr>
                                    <tr><th> คะแนนนการสร้างแรงจูงใจ </th><td> {{ $energyevaluation->motivation_score }} </td></tr>
                                    <tr><th> คะแนนนข้อมูลข่าวสาร </th><td> {{ $energyevaluation->information_score }} </td></tr>
                                    <tr><th> คะแนนนประชาสัมพันธ์ </th><td> {{ $energyevaluation->public_relation_score }} </td></tr>
                                    <tr><th> คะแนนนการลงทุน </th><td> {{ $energyevaluation->investment_score }} </td></tr>
                                    <tr><th> Remark </th><td> {{ $energyevaluation->remark }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyevaluation->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyevaluation->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
