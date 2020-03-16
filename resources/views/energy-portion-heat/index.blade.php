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
                    <div class="card-header">ข้อมูลการใช้พลังงานความร้อน</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-portion-heat/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyPortionHeat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        @include('energy-portion-heat/create-modal')

                        <form method="GET" action="{{ url('/energy-portion-heat') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>ระบบ</th><th>อุปกรณ์</th><th>การใช้พลังงานเชื้อเพลิง (ชนิดเชื้อเพลง)</th><th>การใช้พลังงานเชื้อเพลิง (เมกะจูล/ปี)</th><th>วิธีการประเมิน</th><th>วิธีการตรวจวัด</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyportionheat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->system }}</td><td>{{ $item->equipment }}</td><td>{{ $item->fuel_consumption_type }}</td><td>{{ $item->fuel_consumption_megajoule }}</td><td>{{ $item->method_assessment }}</td><td>{{ $item->method_check }}</td>
                                        <td>
                                            <a href="{{ url('/energy-portion-heat/' . $item->id) }}" title="View EnergyPortionHeat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-portion-heat/' . $item->id . '/edit') }}" title="Edit EnergyPortionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-portion-heat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyPortionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyportionheat->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
