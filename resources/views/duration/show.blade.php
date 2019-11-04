@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Duration {{ $duration->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/duration') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/duration/' . $duration->id . '/edit') }}" title="Edit Duration"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('duration' . '/' . $duration->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Duration" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $duration->id }}</td>
                                    </tr>
                                    <tr><th> Duration </th><td> {{ $duration->duration }} </td></tr><tr><th> Order M </th><td> {{ $duration->order_m }} </td></tr><tr><th> Install M </th><td> {{ $duration->install_m }} </td></tr><tr><th> Generate </th><td> {{ $duration->generate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
