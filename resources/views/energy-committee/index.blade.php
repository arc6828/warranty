@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Energycommittee</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-committee/create') }}" class="btn btn-success btn-sm" title="Add New EnergyCommittee">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-committee') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>ประธาน</th>
                                        <th>ผู้รับผิดชอบสามัญ</th>
                                        <th>ผู้รับผิดชอบสามัญ ทะเบียนเลขที่</th>
                                        <th>ผู้รับผิดชอบอาวุโส</th>
                                        <th>ผู้รับผิดชอบอาวุโส ทะเบียนเลขที่</th>
                                        <th>เจ้าของโรงงาน</th>
                                        <th>User Id</th>
                                        <th>Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energycommittee as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->president }}</td>
                                        <td>{{ $item->common_responsible_person }}</td>
                                        <td>{{ $item->common_responsible_person_code }}</td>
                                        <td>{{ $item->senior_responsible_person }}</td>
                                        <td>{{ $item->senior_responsible_person_code }}</td>
                                        <td>{{ $item->factory_owner }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-committee/' . $item->id) }}" title="View EnergyCommittee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-committee/' . $item->id . '/edit') }}" title="Edit EnergyCommittee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-committee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyCommittee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $energycommittee->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
