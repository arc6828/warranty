@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_a {{ $table_a->id }}</div>
                    <div class="card-body">
 
                        <a href="{{ url('/table_a') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/table_a/' . $table_a->id . '/edit') }}" title="Edit Table_a"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('table_a' . '/' . $table_a->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_a" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $table_a->id }}</td>
                                    </tr>
                                    <tr>

                                        <th> ประกอบคำขอเลขที่ </th>
                                        <td> {{ $table_a->request_number }} </td></tr>

                                        <tr><th> ลงวันที่ </th>
                                        <td> {{ $table_a->registration_date }} </td></tr>

                                        <tr><th> ชื่อ </th>
                                        <td> {{ $table_a->fullname }} </td></tr>

                                        <tr><th> ในนามบริษัท </th>
                                        <td> {{ $table_a->company }} </td></tr>

                                        <tr><th> ดำเนินการผลิต </th>
                                        <td> {{ $table_a->production }} </td></tr>

                                        <tr><th> บัตรส่งเสริมเลขที่ </th>
                                        <td> {{ $table_a->promotion_certificate_number }} </td></tr>

                                        <tr><th> ลงวันที่ </th>
                                        <td> {{ $table_a->promotion_date }} </td></tr>
                                        
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
