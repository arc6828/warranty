@extends('layouts.app')

@section('adaptivesidebar')
    @php
    //$energyreport = $energyorganizationchart->energy_report ;
    @endphp
    @include('admin/sidebar-energy')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลการผลิต</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProduction">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-production/create-modal')

                        <form method="GET" action="{{ url('/energy-production') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <!--th>ลำดับที่</th-->
                                        <th>ชื่อผลิตภัณฑ์</th><th>กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)</th><th>ปริมาณผลผลิตจริง</th>
                                        <!--th>User Id</th><th>Enery Report Id</th-->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproduction as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <!--td>{{ $item->code }}</td-->
                                        <td>{{ $item->product_name }}</td><td>{{ $item->capacity }}</td><td>{{ $item->yield }}</td>
                                        <!--td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td-->
                                        <td>
                                            <a href="{{ url('/energy-production/' . $item->id) }}" title="View EnergyProduction"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production/' . $item->id . '/edit') }}" title="Edit EnergyProduction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProduction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyproduction->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
