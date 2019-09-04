@extends('layouts.app')

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
            </div>
        </div>
    </div>
@endsection
