@extends('layout.main')

@section('title','Hardware')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hardware {{ $hardware->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/hardware') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/hardware/' . $hardware->id . '/edit') }}" title="Edit Hardware"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('hardware' . '/' . $hardware->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Hardware" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $hardware->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $hardware->name }} </td></tr><tr><th> Detail </th><td> {{ $hardware->detail }} </td></tr><tr><th> Tags </th><td> {{ $hardware->tags }} </td></tr><tr><th> Date Purchase </th><td> {{ $hardware->date_purchase }} </td></tr><tr><th> Date Warranty Expire </th><td> {{ $hardware->date_warranty_expire }} </td></tr><tr><th> Warranty Duration </th><td> {{ $hardware->warranty_duration }} </td></tr><tr><th> Quantity </th><td> {{ $hardware->quantity }} </td></tr><tr><th> Price </th><td> {{ $hardware->price }} </td></tr><tr><th> Vendor </th><td> {{ $hardware->vendor }} </td></tr><tr><th> About Vendor </th><td> {{ $hardware->about_vendor }} </td></tr><tr><th> User Id </th><td> {{ $hardware->user_id }} </td></tr><tr><th> Photo </th><td> {{ $hardware->photo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                @php
                    $energyusage = $hardware->energy_usages;
                @endphp
                <div class="card mb-4">
                    <div class="card-header">Energyusage</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-usage/create') }}" class="btn btn-success btn-sm" title="Add New EnergyUsage">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/energy-usage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>hardware name</th>
                                        <th>Watts - Joules</th>                                       
                                        <th>Hours/Year</th>
                                        <th class="d-none">User Id</th>
                                        <th>Photo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyusage as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="d-none">{{ $item->hardware_id }}</td>
                                        <td>
                                          <div>
                                            {{$item->hardware->name}} x {{ $item->quantity }}
                                            @switch($item->place_type)
                                              @case("factory")
                                                <span class="badge badge-pill  badge-primary">
                                                  <i class="fa fa-industry"></i>
                                                </span>
                                                @break
                                              @case("office")
                                              
                                                <span class="badge badge-pill  badge-success">
                                                  <i class="fa fa-building"></i>
                                                </span>
                                                @break
                                            @endswitch
                                        
                                            @switch($item->category)
                                              @case("electricity")
                                                <span class="badge badge-pill  badge-warning">
                                                  <i class="fa fa-bolt"></i>
                                                </span>
                                              
                                                @break
                                              @case("heat")
                                              
                                                <span class="badge badge-pill  badge-danger">
                                                  <i class="fa fa-fire"></i>
                                                </span>
                                                @break
                                            @endswitch
                                          </div>
                                          <div>{{ $item->date_begin }} - {{ $item->date_end }}</div>
                                        </td>
                                        
                                        
                                        <td>
                                          <span class="badge badge-pill  badge-warning">
                                            <i class="fa fa-bolt"></i>
                                            {{ $item->watts }}
                                          </span>
                                        
                                          <span class="badge badge-pill  badge-danger">
                                            <i class="fa fa-fire"></i>
                                            {{ $item->joules }}
                                          </span>
                                        </td>
                                        
                                        <td>
                                          <span class="badge badge-pill  badge-success">                                            
                                            {{ number_format($item->day_per_week*$item->hours_per_day*52,0) }}
                                          </span>
                                        </td>
                                        <td class="d-none">{{ $item->user->name }}</td>
                                        <td>
                                          @if(!empty($item->photo))
                                          <a href="{{ url('/') }}/storage/{{ $item->photo }}" target="_blank">Link</a>
                                          @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/energy-usage/' . $item->id) }}" title="View EnergyUsage"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-usage/' . $item->id . '/edit') }}" title="Edit EnergyUsage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-usage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyUsage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
