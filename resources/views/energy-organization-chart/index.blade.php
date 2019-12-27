@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energyorganizationchart</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-organization-chart/create') }}" class="btn btn-success btn-sm" title="Add New EnergyOrganizationChart">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-organization-chart') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>แผนภูมิองค์กร</th>
                                        <th>การส่งเสริมแผนผังองค์กร</th>
                                        <th>จำนวน ติดประกาศ</th>
                                        <th>ติดประกาศ</th>
                                        <th>จำนวน โปสเตอร์ </th>
                                        <th>โปสเตอร์</th>
                                        <th>จำนวน เอกสารเผยแพร่</th>
                                        <th>เอกสารเผยแพร่</th>
                                        <th>จำนวน เสียงตามสาย</th>
                                        <th>เสียงตามสาย</th>
                                        <th>จำนวน อีเมล</th>
                                        <th>อีเมล</th>
                                        <th>จำนวน การประชุม</th>
                                        <th>การประชุม</th>
                                        <th>อื่นๆ จำนวน</th>
                                        <th>อื่นๆ</th>
                                        <th>User Id</th>
                                        <th>Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyorganizationchart as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->organization_chart }}</td>
                                        <td>{{ $item->organization_chart_promotion }}</td>
                                        <td>{{ $item->notice_number }}</td>
                                        <td>{{ $item->notice }}</td>
                                        <td>{{ $item->poster_number }}</td>
                                        <td>{{ $item->poster_number }}</td>
                                        <td>{{ $item->publication_number }}</td><td>{{ $item->publication }}</td><td>{{ $item->voice_number }}</td><td>{{ $item->voice }}</td><td>{{ $item->email_number }}</td><td>{{ $item->email }}</td><td>{{ $item->meeting_number }}</td><td>{{ $item->meeting }}</td><td>{{ $item->others_number }}</td><td>{{ $item->others }}</td><td>{{ $item->user_id }}</td><td>{{ $item->enery_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-organization-chart/' . $item->id) }}" title="View EnergyOrganizationChart"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-organization-chart/' . $item->id . '/edit') }}" title="Edit EnergyOrganizationChart"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-organization-chart' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyOrganizationChart" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energyorganizationchart->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
