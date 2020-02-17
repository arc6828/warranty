@extends('layouts.app')

@section('title','Energy machine evaluation')

@section('content')
    <div class="container">
        <div class="row">
            
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energy machine evaluation</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-machine-evaluation/create') }}" class="btn btn-success btn-sm" title="Add New EnergyMachineEvaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-machine-evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th class="d-none">#</th>
                                        <th>ขนาดการใช้พลังงาน</th>
                                        <th>ชั่วโมงการใช้งาน</th>
                                        <th>ศักยภาพในการปรับปรุง</th>
                                        <th>คะแนนรวม</th>
                                        <th>ลำดับความสำคัญ</th>
                                        <th>ประเภทพลังงาน</th>
                                        <th class="d-none">Energy Machine Id</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energymachineevaluation as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->power_consumption_size }}</td>
                                        <td>{{ $item->operating_hours }}</td>
                                        <td>{{ $item->improvement_potential }}</td>
                                        <td>{{ $item->total_score }}</td>
                                        <td>{{ $item->priority }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td class="d-none">{{ $item->energy_machine_id }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-machine-evaluation/' . $item->id) }}" title="View EnergyMachineEvaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-machine-evaluation/' . $item->id . '/edit') }}" title="Edit EnergyMachineEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-machine-evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachineEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energymachineevaluation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
