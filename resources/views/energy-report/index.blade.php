@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyreport</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-report/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyReport">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-report/create-modal')

                        <form method="GET" action="{{ url('/energy-report') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th> # </th> 
                                        <th> ชื่อนิติบุคคล </th> 
                                        <th> ชื่อโรงงานควบคุม </th> 
                                        <th> Tsic Id </th> 
                                        <th> ปี </th> 
                                        <th> User Id </th> 
                                        <th> Created at </th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyreport as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/energy-report/' . $item->id) }}" >{{ $item->legal_name }}</a></td>
                                        <td>{{ $item->factory_name }}</td>
                                        <td>{{ $item->tsic_id }}</td><td>{{ $item->year }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a class="d-none" href="{{ url('/energy-report/' . $item->id) }}" title="View EnergyReport"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-report/' . $item->id . '/edit') }}" title="Edit EnergyReport"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-report' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyReport" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyreport->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

