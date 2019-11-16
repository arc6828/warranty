@extends('layout.main')

@section('title','เครื่องจักร')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@yield('title')</div>
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
                                        <th>ลำดับ</th>
                                        <th>ชื่อเครื่องจักร/รุ่น/ยี่ห้อ</th>
                                        <th>วันที่ซื้อเครื่องจักร</th>
                                        <th>มูลค่า</th>
                                        <th class="d-none">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hardware as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/hardware/' . $item->id) }}">{{ $item->name }} x {{ $item->quantity }}</a></td>
                                        
                                        <td>{{ $item->date_purchase }}</td>
                                        <td>{{ number_format($item->price,2) }}</td>                                      
                                        
                                        <td class="d-none">
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
            </div>
        </div>
    </div>
@endsection
