@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
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
                                        <th>#</th><th>Name</th>
                                        <th class="d-none">Detail</th>
                                        <th class="d-none">Tags</th>
                                        <th>Date Purchase</th><th>Date Warranty Expire</th><th>Warranty Duration</th><th>Quantity</th><th>Price</th><th>Vendor</th><th>About Vendor</th><th>User Id</th><th>Photo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hardware as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="d-none">{{ $item->detail }}</td>
                                        <td class="d-none">{{ $item->tags }}</td>
                                        <td>{{ $item->date_purchase }}</td><td>{{ $item->date_warranty_expire }}</td><td>{{ $item->warranty_duration }}</td><td>{{ $item->quantity }}</td><td>{{ $item->price }}</td><td>{{ $item->vendor }}</td><td>{{ $item->about_vendor }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->photo }}</td>
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
            </div>
        </div>
    </div>
@endsection
