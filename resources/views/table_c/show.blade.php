@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_c {{ $table_c->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/table_c') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/table_c/' . $table_c->id . '/edit') }}" title="Edit Table_c"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('table_c' . '/' . $table_c->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_c" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $table_c->id }}</td>
                                    </tr>
                                    <tr><th> ปีฐาน </th><td> {{ $table_c->peetharn }} </td></tr>
                                    <tr><th> ต้นทุนทางตรงต่อหน่วยการผลิต/การบริการ </th><td> {{ $table_c->cost }} </td></tr>
                                    <tr><th> อัตราการได้มา(Yield) </th><td> {{ $table_c->yield }} </td></tr>
                                    <tr><th> ตัวชี้วัดผลผลิตภาพแรงงานเชิงมูลค่าเพิ่ม(Amount of Processing per Employee) </th><td> {{ $table_c->amount }} </td></tr>
                                    <tr><th> ตัวชี้วัดประสิทธิภาพการลงทุนในเครื่องจักรและอุปกรณ์(Efficiency of Machinery Investment Ratio) </th><td> {{ $table_c->efficiency }} </td></tr>
                                    <tr><th> ตัวชี้วัดประสิทธิผลโดยรวมของเครื่องจัก(Overall Equipment Effectiveness (OEE)) </th><td> {{ $table_c->overall }} </td></tr>
                                    <tr><th> ตัวชี้วัดอัตราการใช้เครื่องจักร(Equipment Operating Ratio(EOR)) </th><td> {{ $table_c->equipment }} </td></tr>
                                    <tr><th> ตัวชี้วัดการประเมินอายุการใช้งานของชิ้นส่วน,อุปกรณ์และเครื่องจักร(Mean Time between Failures(MTBF)) </th><td> {{ $table_c->mean }} </td></tr>
                                    <tr><th> ตัวชี้วัดประสิทธิภาพของการผลิตได้จริงเปรียบเทียบกับความสามารถในการผลิตที่ควรทำได้(Actual Production Rate as a Percentage of the Maximum Capable Production Rate) </th><td> {{ $table_c->actual }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
