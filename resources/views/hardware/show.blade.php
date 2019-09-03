@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Hardware {{ $hardware->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/hardware') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/hardware/' . $hardware->id . '/edit') }}" title="Edit Hardware"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('hardware' . '/' . $hardware->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Hardware" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $hardware->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $hardware->title }} </td></tr><tr><th> Content </th><td> {{ $hardware->content }} </td></tr><tr><th> Place Type </th><td> {{ $hardware->place_type }} </td></tr><tr><th> Category </th><td> {{ $hardware->category }} </td></tr><tr><th> Date Begin </th><td> {{ $hardware->date_begin }} </td></tr><tr><th> Date End </th><td> {{ $hardware->date_end }} </td></tr><tr><th> Quantity </th><td> {{ $hardware->quantity }} </td></tr><tr><th> Watts </th><td> {{ $hardware->watts }} </td></tr><tr><th> Joules </th><td> {{ $hardware->joules }} </td></tr><tr><th> Hours Per Day </th><td> {{ $hardware->hours_per_day }} </td></tr><tr><th> Day Per Week </th><td> {{ $hardware->day_per_week }} </td></tr><tr><th> User Id </th><td> {{ $hardware->user_id }} </td></tr><tr><th> Photo </th><td> {{ $hardware->photo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
