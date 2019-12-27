@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyconservationpolicy</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-conservation-policy/create') }}" class="btn btn-success btn-sm" title="Add New EnergyConservationPolicy">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-conservation-policy') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Policy</th><th>Notice Number</th><th>Notice</th><th>Poster Number</th><th>Poster Number</th><th>Publication Number</th><th>Publication</th><th>Voice Number</th><th>Voice</th><th>Email Number</th><th>Email</th><th>Meeting Number</th><th>Meeting</th><th>Others Number</th><th>Others</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyconservationpolicy as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->policy }}</td><td>{{ $item->notice_number }}</td><td>{{ $item->notice }}</td><td>{{ $item->poster_number }}</td><td>{{ $item->poster_number }}</td><td>{{ $item->publication_number }}</td><td>{{ $item->publication }}</td><td>{{ $item->voice_number }}</td><td>{{ $item->voice }}</td><td>{{ $item->email_number }}</td><td>{{ $item->email }}</td><td>{{ $item->meeting_number }}</td><td>{{ $item->meeting }}</td><td>{{ $item->others_number }}</td><td>{{ $item->others }}</td><td>{{ $item->user_id }}</td><td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-conservation-policy/' . $item->id) }}" title="View EnergyConservationPolicy"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-conservation-policy/' . $item->id . '/edit') }}" title="Edit EnergyConservationPolicy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-conservation-policy' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConservationPolicy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyconservationpolicy->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
