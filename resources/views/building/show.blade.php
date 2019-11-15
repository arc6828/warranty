@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Building {{ $building->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/building') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/building/' . $building->id . '/edit') }}" title="Edit Building"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('building' . '/' . $building->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Building" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $building->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $building->name }} </td></tr><tr><th> Address </th><td> {{ $building->address }} </td></tr><tr><th> Telephone </th><td> {{ $building->telephone }} </td></tr><tr><th> Email </th><td> {{ $building->email }} </td></tr><tr><th> Branch Id </th><td> {{ $building->branch_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
