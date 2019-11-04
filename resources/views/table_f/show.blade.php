@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_f {{ $table_f->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/table_f') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/table_f/' . $table_f->id . '/edit') }}" title="Edit Table_f"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('table_f' . '/' . $table_f->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_f" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $table_f->id }}</td>
                                    </tr>
                                    <tr><th> Country </th><td> {{ $table_f->country }} </td></tr><tr><th> Number </th><td> {{ $table_f->number }} </td></tr><tr><th> Cost </th><td> {{ $table_f->cost }} </td></tr><tr><th> Connect </th><td> {{ $table_f->connect }} </td></tr><tr><th> Wage Company </th><td> {{ $table_f->wage_company }} </td></tr><tr><th> Machinery Imported </th><td> {{ $table_f->machinery_Imported }} </td></tr><tr><th> Other </th><td> {{ $table_f->other }} </td></tr><tr><th> Total </th><td> {{ $table_f->total }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
