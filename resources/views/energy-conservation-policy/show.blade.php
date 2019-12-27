@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EnergyConservationPolicy {{ $energyconservationpolicy->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-conservation-policy') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-conservation-policy/' . $energyconservationpolicy->id . '/edit') }}" title="Edit EnergyConservationPolicy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyconservationpolicy' . '/' . $energyconservationpolicy->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConservationPolicy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyconservationpolicy->id }}</td>
                                    </tr>
                                    <tr><th> Policy </th><td> {{ $energyconservationpolicy->policy }} </td></tr><tr><th> Notice Number </th><td> {{ $energyconservationpolicy->notice_number }} </td></tr><tr><th> Notice </th><td> {{ $energyconservationpolicy->notice }} </td></tr><tr><th> Poster Number </th><td> {{ $energyconservationpolicy->poster_number }} </td></tr><tr><th> Poster Number </th><td> {{ $energyconservationpolicy->poster_number }} </td></tr><tr><th> Publication Number </th><td> {{ $energyconservationpolicy->publication_number }} </td></tr><tr><th> Publication </th><td> {{ $energyconservationpolicy->publication }} </td></tr><tr><th> Voice Number </th><td> {{ $energyconservationpolicy->voice_number }} </td></tr><tr><th> Voice </th><td> {{ $energyconservationpolicy->voice }} </td></tr><tr><th> Email Number </th><td> {{ $energyconservationpolicy->email_number }} </td></tr><tr><th> Email </th><td> {{ $energyconservationpolicy->email }} </td></tr><tr><th> Meeting Number </th><td> {{ $energyconservationpolicy->meeting_number }} </td></tr><tr><th> Meeting </th><td> {{ $energyconservationpolicy->meeting }} </td></tr><tr><th> Others Number </th><td> {{ $energyconservationpolicy->others_number }} </td></tr><tr><th> Others </th><td> {{ $energyconservationpolicy->others }} </td></tr><tr><th> User Id </th><td> {{ $energyconservationpolicy->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyconservationpolicy->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
