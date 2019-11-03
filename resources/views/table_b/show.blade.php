@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_b {{ $table_b->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/table_b') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/table_b/' . $table_b->id . '/edit') }}" title="Edit Table_b"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('table_b' . '/' . $table_b->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_b" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $table_b->id }}</td>
                                    </tr>

                                    <tr><th> ปีฐาน </th>
                                    <td> {{ $table_b->base_year }} </td></tr>

                                    <tr><th> ผลิตภัณฑ์/บริการ (ปีฐาน) </th>
                                    <td> {{ $table_b->products_baseyear }} </td></tr>

                                    <tr><th> กำลังผลิต/ขนาดกิจการ (ปีฐาน) </th>
                                    <td> {{ $table_b->capacity_baseyear }} </td></tr>

                                    <tr><th> เวลาทำงาน ชม./วัน (ปีฐาน) </th>
                                    <td> {{ $table_b->working_Hourday_byear }} </td></tr>

                                    <tr><th> เวลาทำงาน วัน/ปี (ปีฐาน) </th>
                                    <td> {{ $table_b->working_dayyear_byear }} </td></tr>

                                    <tr><th> ปีที่ประเมินผล </th>
                                    <td> {{ $table_b->evaluation_year }} </td></tr>

                                    <tr><th> ผลิตภัณฑ์/บริการ (ปีที่ประเมินผล) </th>
                                    <td> {{ $table_b->products_eyear }} </td></tr>

                                    <tr><th> กำลังผลิต/ขนาดกิจการ (ปีที่ประเมินผล) </th>
                                    <td> {{ $table_b->capacity_eyear }} </td></tr>

                                    <tr><th> เวลาทำงาน ชม./วัน (ปีที่ประเมินผล) </th>
                                    <td> {{ $table_b->working_Hourday_eyear }} </td></tr>

                                    <tr><th> เวลาทำงาน วัน/ปี (ปีที่ประเมินผล) </th>
                                    <td> {{ $table_b->working_dayyear_eyear }} </td></tr>

                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
