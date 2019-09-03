@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Hardware</div>
                    <div class="card-body">
                        <a href="{{ url('/hardware/create') }}" class="btn btn-success btn-sm" title="Add New Hardware">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/hardware') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Title</th><th>Content</th><th>Place Type</th><th>Category</th><th>Date Begin</th><th>Date End</th><th>Quantity</th><th>Watts</th><th>Joules</th><th>Hours Per Day</th><th>Day Per Week</th><th>User Id</th><th>Photo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hardware as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->content }}</td><td>{{ $item->place_type }}</td><td>{{ $item->category }}</td><td>{{ $item->date_begin }}</td><td>{{ $item->date_end }}</td><td>{{ $item->quantity }}</td><td>{{ $item->watts }}</td><td>{{ $item->joules }}</td><td>{{ $item->hours_per_day }}</td><td>{{ $item->day_per_week }}</td><td>{{ $item->user_id }}</td><td>{{ $item->photo }}</td>
                                        <td>
                                            <a href="{{ url('/hardware/' . $item->id) }}" title="View Hardware"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/hardware/' . $item->id . '/edit') }}" title="Edit Hardware"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/hardware' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Hardware" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hardware->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Heat</div>
                    <div class="card-body">
                      <div id="chart_heat_div"></div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Electricity</div>
                    <div class="card-body">
                      <div id="chart_electricity_div"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">

  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    drawHeat();
    drawElectricity();
  }

  function drawHeat(){
    var data = google.visualization.arrayToDataTable([
      ['Title', 'Heat',],
      @foreach($hardware as $item)
      ["{{ $item->title }}","{{ $item->joules }}"],
      @endforeach
    ]);

    var options = {
      title: 'Heat',
      chartArea: {width: '50%'},
      hAxis: {
        title: 'MJoules',
        minValue: 0
      },
      vAxis: {
        title: 'Title'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_heat_div'));

    chart.draw(data, options);
  }

  function drawElectricity(){
    var data = google.visualization.arrayToDataTable([
      ['Title', 'Watts',],
      @foreach($hardware as $item)
      ["{{ $item->title }}","{{ $item->watts }}"],
      @endforeach
    ]);

    var options = {
      title: 'Electricity',
      chartArea: {width: '50%'},
      hAxis: {
        title: 'Watts',
        minValue: 0
      },
      vAxis: {
        title: 'Title'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_electricity_div'));

    chart.draw(data, options);
  }
</script>
@endsection
