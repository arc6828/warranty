@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">EnergyUsage {{ $energyusage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-usage') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-usage/' . $energyusage->id . '/edit') }}" title="Edit EnergyUsage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyusage' . '/' . $energyusage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyUsage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyusage->id }}</td>
                                    </tr>
                                    <tr><th> hardware </th><td> {{$energyusage->hardware->name}} </td></tr>
                                    <tr><th> Place Type </th><td> {{ $energyusage->place_type }} </td></tr><tr><th> Category </th><td> {{ $energyusage->category }} </td></tr><tr><th> Date Begin </th><td> {{ $energyusage->date_begin }} </td></tr><tr><th> Date End </th><td> {{ $energyusage->date_end }} </td></tr><tr><th> Quantity </th><td> {{ $energyusage->quantity }} </td></tr><tr><th> Watts </th><td> {{ $energyusage->watts }} </td></tr><tr><th> Joules </th><td> {{ $energyusage->joules }} </td></tr><tr><th> Hours Per Day </th><td> {{ $energyusage->hours_per_day }} </td></tr><tr><th> Day Per Week </th><td> {{ $energyusage->day_per_week }} </td></tr><tr><th> User Id </th><td> {{ $energyusage->user_id }} </td></tr><tr><th> Photo </th><td> {{ $energyusage->photo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
