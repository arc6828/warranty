@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
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
                            <div class="pagination-wrapper"> {!! $energyusage->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Electricity</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="chart_electricity_factory_div"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="chart_electricity_office_div"></div>
                            </div>
                        </div>
                      </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Heat</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="chart_heat_factory_div"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="chart_heat_office_div"></div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('head')
  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">

  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    drawHeat("factory");
    drawHeat("office");
    drawElectricity("factory");
    drawElectricity("office");
  }

  function drawHeat(place_type){
    var big_array = JSON.parse('@json($energyusage)');
    var target_array = [['Title', 'Joules',]];
    big_array.data.forEach(function(element){
      if(element.place_type == place_type){
        target_array.push([element.title, element.joules!==""?element.joules:0 ]);
      }
    });
    var data = google.visualization.arrayToDataTable(target_array);

    var options = {
      title: 'Heat '+place_type,
      chartArea: {width: '50%'},
      hAxis: {
        title: 'MJoules',
        minValue: 0
      },
      vAxis: {
        title: 'Title'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_heat_'+place_type+'_div'));

    if(target_array.length > 1 ){
      chart.draw(data, options);
    }
  }

  function drawElectricity(place_type){
    var big_array = JSON.parse('@json($energyusage)');
    var target_array = [['Title', 'Watts',]];
    big_array.data.forEach(function(element){
      if(element.place_type == place_type){
        target_array.push([element.title, element.watts!==""?element.watts:0 ]);
      }
    });
    var data = google.visualization.arrayToDataTable(target_array);

    var options = {
      title: 'Electricity '+place_type,
      chartArea: {width: '50%'},
      hAxis: {
        title: 'Watts',
        minValue: 0
      },
      vAxis: {
        title: 'Title'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_electricity_'+place_type+'_div'));

    if(target_array.length > 1 ){
      chart.draw(data, options);
    }
  }
</script>
@endsection
