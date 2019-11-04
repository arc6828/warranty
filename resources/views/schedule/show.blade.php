@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Schedule {{ $schedule->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/schedule') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/schedule/' . $schedule->id . '/edit') }}" title="Edit Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('schedule' . '/' . $schedule->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $schedule->id }}</td>
                                    </tr>
                                    <tr><th> Menu </th><td> {{ $schedule->menu }} </td></tr><tr><th> Cost Cons </th><td> {{ $schedule->cost_cons }} </td></tr><tr><th> Cost Tool </th><td> {{ $schedule->cost_tool }} </td></tr><tr><th> Cost Install </th><td> {{ $schedule->cost_install }} </td></tr><tr><th> Cost Test </th><td> {{ $schedule->cost_test }} </td></tr><tr><th> Investment </th><td> {{ $schedule->investment }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
