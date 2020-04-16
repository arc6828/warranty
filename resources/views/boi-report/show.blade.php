@extends('layouts.app')

@section('adaptivesidebar')
    @php
    //$energyreport = $energyreport ;
    @endphp
    @include('admin/sidebar-boi')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        EnergyReport {{ $energyreport->id }} 
                        <button  class="btn btn-sm btn-success float-right" onclick="print();">
                            <i class="fa fa-print"></i> Print
                        </button>
                        
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/energy-report') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-report/' . $energyreport->id . '/edit') }}" title="Edit EnergyReport"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyreport' . '/' . $energyreport->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyReport" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr class="d-none">
                                        <th>ID</th><td>{{ $energyreport->id }}</td>
                                    </tr>
                                    <tr><th> ชื่อนิติบุคคล </th><td> {{ $energyreport->legal_name }} </td></tr>
                                    <tr><th> ชื่อโรงงานควบคุม </th><td> {{ $energyreport->factory_name }} </td></tr>
                                    <tr><th> Tsic Id </th><td> {{ $energyreport->tsic_id }} </td></tr>
                                    <tr><th> ปี </th><td> {{ $energyreport->year }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyreport->user->name }} </td></tr>
                                </tbody>
                            </table> 
                        </div>
                        

                    </div>
                </div>

                @php
                    $sumpdf = $energyreport;
                @endphp
                
                <!-- Table A -->
                @php
                    $table_a = $sumpdf->table_a;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">Table_a : {{ $table_a->id }}</div>
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

                <!-- Table B -->
                @php
                    $table_b = $sumpdf->table_b;
                @endphp
                <div class="card  mt-4">
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

                <!-- Table C -->
                @php
                    $table_c = $sumpdf->table_c;
                @endphp
                <div class="card  mt-4">
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

                <!-- Table Duration -->
                @php
                    $duration = $sumpdf->duration;
                @endphp
                <div class="card  mt-4">
                    <div class="card-header">Duration {{ $duration->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/duration') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/duration/' . $duration->id . '/edit') }}" title="Edit Duration"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('duration' . '/' . $duration->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Duration" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $duration->id }}</td>
                                    </tr>
                                    <tr><th> Duration </th><td> {{ $duration->duration }} </td></tr><tr><th> Order M </th><td> {{ $duration->order_m }} </td></tr><tr><th> Install M </th><td> {{ $duration->install_m }} </td></tr><tr><th> Generate </th><td> {{ $duration->generate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- Table Schedule -->
                @php
                    $schedule = $sumpdf->schedule;
                @endphp
                <div class="card  mt-4">
                    <div class="card-header">Schedule {{ $schedule->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/schedule') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/schedule/' . $schedule->id . '/edit') }}" title="Edit Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('schedule' . '/' . $schedule->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $schedule->id }}</td>
                                    </tr>
                                    <tr><th> Menu </th><td> {{ $schedule->menu }} </td></tr><tr><th> Cost Cons </th><td> {{ $schedule->cost_cons }} </td></tr><tr><th> Cost Tool </th><td> {{ $schedule->cost_tool }} </td></tr><tr><th> Cost Install </th><td> {{ $schedule->cost_install }} </td></tr><tr><th> Cost Test </th><td> {{ $schedule->cost_test }} </td></tr><tr><th> Investment </th><td> {{ $schedule->investment }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- Table F -->
                @php
                    $table_f = $sumpdf->table_fs;
                @endphp
                <div class="card  mt-4">
                    <div class="card-header">Table_f</div>
                    <div class="card-body">
                        <a href="{{ url('/table_f/create') }}" class="btn btn-success btn-sm" title="Add New Table_f">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/table_f') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ประเทศ</th><th>จำนวน</th><th>มูลค่า (บาท)</th><th>การเชื่อมโยงกับอุตสาหกรรมฯในประเทศ (กรุณากาเครื่องหมาย√ในช่อง)</th><th>ค่าจ้างออกแบบทางวิศวกรรมจากต่างประเทศจากบริษัท</th><th>เครื่องจักรหรือชิ้นส่วนใหม่ที่นำเข้าจากต่างประเทศ</th><th>ค่าใช้จ่ายอื่นๆ (เช่น ค่าติดตั้ง ค่าทดลองเครื่อง เป็นต้น)</th><th>รวมมูลค่ากลุ่ม 1</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($table_f as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->country }}</td><td>{{ $item->number }}</td><td>{{ $item->cost }}</td><td>{{ $item->connect }}</td><td>{{ $item->wage_company }}</td><td>{{ $item->machinery_Imported }}</td><td>{{ $item->other }}</td><td>{{ $item->total }}</td>
                                        <td>
                                            <a href="{{ url('/table_f/' . $item->id) }}" title="View Table_f"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_f/' . $item->id . '/edit') }}" title="Edit Table_f"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/table_f' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_f" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
