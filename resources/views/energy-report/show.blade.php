@extends('layouts.app')

@section('adaptivesidebar')
    @php
    //$energyreport = $energyreport ;
    @endphp
    @include('admin/sidebar-energy')
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
                    $energycommittee = $energyreport->energy_committee;
                @endphp
                <div class="card mt-4" id="energy_committee">
                    <div class="card-header">EnergyCommittee {{ $energycommittee->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-committee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-committee/' . $energycommittee->id . '/edit') }}" title="Edit EnergyCommittee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energycommittee' . '/' . $energycommittee->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyCommittee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energycommittee->id }}</td>
                                    </tr>
                                    <tr><th> ประธาน </th><td> {{ $energycommittee->president }} </td></tr>
                                    <tr><th> ผู้รับผิดชอบสามัญ </th><td> {{ $energycommittee->common_responsible_person }} </td></tr>
                                    <tr><th> ผู้รับผิดชอบสามัญ ทะเบียนเลขที่ </th><td> {{ $energycommittee->common_responsible_person_code }} </td></tr>
                                    <tr><th> ผู้รับผิดชอบอาวุโส </th><td> {{ $energycommittee->senior_responsible_person }} </td></tr>
                                    <tr><th> ผู้รับผิดชอบอาวุโส ทะเบียนเลขที่ </th><td> {{ $energycommittee->senior_responsible_person_code }} </td></tr>
                                    <tr><th> เจ้าของโรงงาน </th><td> {{ $energycommittee->factory_owner }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energycommittee->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th>
                                    <td> {{ $energycommittee->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                
                @php
                    $energyfactoryinformation = $energyreport->energy_factory_information;
                @endphp
                <div class="card mt-4" id="energy_factory_information">
                    <div class="card-header">EnergyFactoryInformation {{ $energyfactoryinformation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-factory-information') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-factory-information/' . $energyfactoryinformation->id . '/edit') }}" title="Edit EnergyFactoryInformation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyfactoryinformation' . '/' . $energyfactoryinformation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyFactoryInformation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyfactoryinformation->id }}</td>
                                    </tr>
                                    <tr><th> กลุ่มโรงงาน </th><td> {{ $energyfactoryinformation->factory_size }} </td></tr>
                                    <tr><th> ที่อยู่โรงงาน </th><td> {{ $energyfactoryinformation->factory_address }} </td></tr>
                                    <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->factory_tel }} </td></tr>
                                    <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->factory_fax }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->factory_email }} </td></tr>
                                    <tr><th> ที่อยู่สำนักงาน </th><td> {{ $energyfactoryinformation->office_address }} </td></tr>
                                    <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->office_tel }} </td></tr>
                                    <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->office_fax }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->office_email }} </td></tr>
                                    <tr><th> ประเภทอุตสาหกรรม </th><td> {{ $energyfactoryinformation->factory_type }} </td></tr>
                                    <tr><th> พนักงงานโรงงาน </th><td> {{ $energyfactoryinformation->factory_employee }} </td></tr>
                                    <tr><th> เวลาดำเนินการ </th><td> {{ $energyfactoryinformation->factory_operation_time }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyfactoryinformation->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyfactoryinformation->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyorganizationchart = $energyreport->energy_organization_chart;
                @endphp
                <div class="card mt-4" id="energy_organization_chart">
                    <div class="card-header">EnergyOrganizationChart {{ $energyorganizationchart->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-organization-chart') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-organization-chart/' . $energyorganizationchart->id . '/edit') }}" title="Edit EnergyOrganizationChart"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyorganizationchart' . '/' . $energyorganizationchart->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyOrganizationChart" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyorganizationchart->id }}</td>
                                    </tr>
                                    <tr><th> แผนภูมิองค์กร </th><td> {{ $energyorganizationchart->organization_chart }} </td></tr>
                                    <tr><th> การส่งเสริมแผนผังองค์กร </th><td> {{ $energyorganizationchart->organization_chart_promotion }} </td></tr>
                                    <tr><th> จำนวน ติดประกาศ </th><td> {{ $energyorganizationchart->notice_number }} </td></tr>
                                    <tr><th> ติดประกาศ </th><td> {{ $energyorganizationchart->notice }} </td></tr>
                                    <tr><th> จำนวน โปสเตอร์ </th><td> {{ $energyorganizationchart->poster_number }} </td></tr>
                                    <tr><th> ปสเตอร์ </th><td> {{ $energyorganizationchart->poster_number }} </td></tr>
                                    <tr><th> จำนวน เอกสารเผยแพร่ </th><td> {{ $energyorganizationchart->publication_number }} </td></tr>
                                    <tr><th> เอกสารเผยแพร่ </th><td> {{ $energyorganizationchart->publication }} </td></tr>
                                    <tr><th> จำนวน เสียงตามสาย </th><td> {{ $energyorganizationchart->voice_number }} </td></tr>
                                    <tr><th> เสียงตามสาย </th><td> {{ $energyorganizationchart->voice }} </td></tr>
                                    <tr><th> จำนวน อีเมล </th><td> {{ $energyorganizationchart->email_number }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyorganizationchart->email }} </td></tr>
                                    <tr><th> จำนวน การประชุม </th><td> {{ $energyorganizationchart->meeting_number }} </td></tr>
                                    <tr><th> การประชุม </th><td> {{ $energyorganizationchart->meeting }} </td></tr>
                                    <tr><th> อื่นๆ จำนวน </th><td> {{ $energyorganizationchart->others_number }} </td></tr>
                                    <tr><th> อื่นๆ </th><td> {{ $energyorganizationchart->others }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyorganizationchart->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyorganizationchart->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                @php
                    $energyevaluation = $energyreport->energy_evaluation;
                @endphp
                <div class="card mt-4" id="energy_evaluation">
                    <div class="card-header">EnergyEvaluation {{ $energyevaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-evaluation/' . $energyevaluation->id . '/edit') }}" title="Edit EnergyEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyevaluation' . '/' . $energyevaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyevaluation->id }}</td>
                                    </tr>
                                    <tr><th> คะแนนนโยบาย </th><td> {{ $energyevaluation->policy_score }} </td></tr>
                                    <tr><th> คะแนนนการจัดองค์กร </th><td> {{ $energyevaluation->organization_score }} </td></tr>
                                    <tr><th> คะแนนนการสร้างแรงจูงใจ </th><td> {{ $energyevaluation->motivation_score }} </td></tr>
                                    <tr><th> คะแนนนข้อมูลข่าวสาร </th><td> {{ $energyevaluation->information_score }} </td></tr>
                                    <tr><th> คะแนนนประชาสัมพันธ์ </th><td> {{ $energyevaluation->public_relation_score }} </td></tr>
                                    <tr><th> คะแนนนการลงทุน </th><td> {{ $energyevaluation->investment_score }} </td></tr>
                                    <tr><th> Remark </th><td> {{ $energyevaluation->remark }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyevaluation->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyevaluation->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyconservationpolicy = $energyreport->energy_conservation_policy;
                @endphp
                <div class="card mt-4" id="energy_conservation_policy">
                    <div class="card-header">EnergyConservationPolicy {{ $energyconservationpolicy->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/energy-conservation-policy') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/energy-conservation-policy/' . $energyconservationpolicy->id . '/edit') }}" title="Edit EnergyConservationPolicy"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('energyconservationpolicy' . '/' . $energyconservationpolicy->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConservationPolicy" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $energyconservationpolicy->id }}</td>
                                    </tr>
                                    <tr><th> นโยบาย </th><td> {{ $energyconservationpolicy->policy }} </td></tr>
                                    <tr><th> จำนวน ติดประกาศ </th><td> {{ $energyconservationpolicy->notice_number }} </td></tr>
                                    <tr><th> ติดประกาศ </th><td> {{ $energyconservationpolicy->notice }} </td></tr>
                                    <tr><th> จำนวน โปสเตอร์ </th><td> {{ $energyconservationpolicy->poster_number }} </td></tr>
                                    <tr><th> โปสเตอร์ </th><td> {{ $energyconservationpolicy->poster_number }} </td></tr>
                                    <tr><th> จำนวน เอกสารเผยแพร่ </th><td> {{ $energyconservationpolicy->publication_number }} </td></tr>
                                    <tr><th> เอกสารเผยแพร่ </th><td> {{ $energyconservationpolicy->publication }} </td></tr>
                                    <tr><th> จำนวน เสียงตามสาย </th><td> {{ $energyconservationpolicy->voice_number }} </td></tr>
                                    <tr><th> เสียงตามสาย </th><td> {{ $energyconservationpolicy->voice }} </td></tr>
                                    <tr><th> จำนวน อีเมล </th><td> {{ $energyconservationpolicy->email_number }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $energyconservationpolicy->email }} </td></tr>
                                    <tr><th> จำนวน การประชุม </th><td> {{ $energyconservationpolicy->meeting_number }} </td></tr>
                                    <tr><th> การประชุม </th><td> {{ $energyconservationpolicy->meeting }} </td></tr>
                                    <tr><th> อื่นๆ จำนวน </th><td> {{ $energyconservationpolicy->others_number }} </td></tr>
                                    <tr><th> อื่นๆ </th><td> {{ $energyconservationpolicy->others }} </td></tr>
                                    <tr><th> User Id </th><td> {{ $energyconservationpolicy->user_id }} </td></tr>
                                    <tr><th> Enery Report Id </th><td> {{ $energyconservationpolicy->energy_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyproduction = $energyreport->energy_productions;
                @endphp
                <div class="card mt-4" id="energy_productions">
                    <div class="card-header">ข้อมูลการผลิต</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProduction">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-production/create-modal')

                        <form method="GET" action="{{ url('/energy-production') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <!--th>ลำดับที่</th-->
                                        <th>ชื่อผลิตภัณฑ์</th><th>กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)</th><th>ปริมาณผลผลิตจริง</th>
                                        <!--th>User Id</th><th>Enery Report Id</th-->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyproduction as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <!--td>{{ $item->code }}</td-->
                                        <td>{{ $item->product_name }}</td><td>{{ $item->capacity }}</td><td>{{ $item->yield }}</td>
                                        <!--td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td-->
                                        <td>
                                            <a href="{{ url('/energy-production/' . $item->id) }}" title="View EnergyProduction"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-production/' . $item->id . '/edit') }}" title="Edit EnergyProduction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-production' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProduction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



                @php
                    $energyproductions = $energyproduction;
                @endphp
                @foreach($energyproductions as $energyproduction)
                    <div class="card mt-4" >
                        <div class="card-header">ข้อมูลการผลิต {{ $energyproduction->id }}</div>
                        <div class="card-body">

                            <a href="{{ url('/energy-production') }}?energy_report_id={{ $energyproduction->energy_report_id }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/energy-production/' . $energyproduction->id . '/edit') }}" title="Edit EnergyProduction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('energyproduction' . '/' . $energyproduction->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProduction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>ID</th><td>{{ $energyproduction->id }}</td>
                                        </tr>
                                        <tr><th> ลำดับที่ </th><td> {{ $energyproduction->code }} </td></tr><tr><th> ชื่อผลิตภัณฑ์ </th><td> {{ $energyproduction->product_name }} </td></tr><tr><th> กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร) </th><td> {{ $energyproduction->capacity }} </td></tr><tr><th> ปริมาณผลผลิตจริง </th><td> {{ $energyproduction->yield }} </td></tr><tr><th> User Id </th><td> {{ $energyproduction->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $energyproduction->energy_report_id }} </td></tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    @php
                        $energyproductionoperation = $energyproduction->energy_production_operations;
                    @endphp
                    <div class="card mt-4">
                        <div class="card-header">ข้อมูลการผลิต(รายละเอียด)</div>
                        <div class="card-body">
                            <a href="{{ url('/energy-production-operation/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionOperation">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @include('energy-production-operation/create-modal')

                            <form method="GET" action="{{ url('/energy-production-operation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                            <th>#</th><th>ลำดับที่</th><th>วัตถุดิบหลัก</th><th>เดือนที่ผลิต</th><th>ชั่วโมงการทำงาน</th><th>หน่วยผลผลิต</th><th>ปริมาณผลผลิตจริง</th><th>กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($energyproductionoperation as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->energy_production_id }}</td><td>{{ $item->raw_material }}</td><td>{{ $item->month }}</td><td>{{ $item->working_hours }}</td><td>{{ $item->production_unit }}</td><td>{{ $item->yield }}</td><td>{{ $item->capacity }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                            <td>
                                                <a href="{{ url('/energy-production-operation/' . $item->id) }}" title="View EnergyProductionOperation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/energy-production-operation/' . $item->id . '/edit') }}" title="Edit EnergyProductionOperation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/energy-production-operation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionOperation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                
                            </div>

                        </div>
                    </div>

                    @php
                        $energyproductiondiagram = $energyproduction->energy_production_diagrams;
                    @endphp
                    <div class="card mt-4">
                        <div class="card-header">Energy production diagram</div>
                        <div class="card-body">
                            <a href="{{ url('/energy-production-diagram/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionDiagram">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>

                            @include('energy-production-diagram/create-modal')

                            <form method="GET" action="{{ url('/energy-production-diagram') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                            <th class="d-none">#</th>
                                            <th>แผนผังกระบวนการผลิต</th>
                                            <th>คำอธิบายกระบวนการผลิต</th>
                                            <th class="d-none">Energy Production Id</th>
                                            <th class="d-none">User Id</th>
                                            <th class="d-none">Enery Report Id</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($energyproductiondiagram as $item)
                                        <tr>
                                            <td class="d-none">{{ $loop->iteration }}</td>
                                            <td>{{ $item->photo_diagram }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td class="d-none">{{ $item->energy_production_id }}</td>
                                            <td class="d-none">{{ $item->user_id }}</td>
                                            <td class="d-none">{{ $item->energy_report_id }}</td>
                                            <td>
                                                <a href="{{ url('/energy-production-diagram/' . $item->id) }}" title="View EnergyProductionDiagram"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/energy-production-diagram/' . $item->id . '/edit') }}" title="Edit EnergyProductionDiagram"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/energy-production-diagram' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionDiagram" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                
                            </div>

                        </div>
                    </div>

                    @php
                        $energyproductionconsumption = $energyproduction->energy_production_consumptions;
                    @endphp
                    <div class="card mt-4">
                        <div class="card-header">Energy production consumption</div>
                        <div class="card-body">
                            <a href="{{ url('/energy-production-consumption/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyProductionConsumption">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @include('energy-production-consumption/create-modal')
                            <form method="GET" action="{{ url('/energy-production-consumption') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                            <th class="d-none">#</th>
                                            <th>เดือน</th>
                                            <th>ปริมาณผลผลิต (หน่วย)</th>
                                            <th>พลังงานไฟฟ้าที่ใช้ (กิโลวัตต์-ชั่วโมง)</th>
                                            <th>พลังงานความร้อนที่ใช้ (เมกะจูล)</th>
                                            <th class="d-none">Energy Production Id</th>
                                            <th class="d-none">User Id</th>
                                            <th class="d-none">Enery Report Id</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($energyproductionconsumption as $item)
                                        <tr>
                                            <td class="d-none">{{ $loop->iteration }}</td>
                                            <td>{{ $item->month }}</td>
                                            <td>{{ $item->yield }}</td>
                                            <td>{{ $item->consumption_electricity }}</td>
                                            <td>{{ $item->consumption_heat }}</td>
                                            <td class="d-none">{{ $item->energy_production_id }}</td>
                                            <td class="d-none">{{ $item->user_id }}</td>
                                            <td class="d-none">{{ $item->energy_report_id }}</td>
                                            <td>
                                                <a href="{{ url('/energy-production-consumption/' . $item->id) }}" title="View EnergyProductionConsumption"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/energy-production-consumption/' . $item->id . '/edit') }}" title="Edit EnergyProductionConsumption"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/energy-production-consumption' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyProductionConsumption" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                @endforeach

                @php
                    $energyelectricitytransformer = $energyreport->energy_electricity_transformers;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลหม้อแปลงไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-electricity-transformer/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyElectricityTransformer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-electricity-transformer/create-modal')

                        <form method="GET" action="{{ url('/energy-electricity-transformer') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>หมายเลขผู้ใช้ไฟฟ้า</th><th>หมายเลขเครื่องวัดไฟฟ้า</th><th>ประเภทผู้ใช้ไฟฟ้า</th><th>อัตราการใช้ไฟฟ้า</th><th>ขนาดหม้อแปลงไฟฟ้า</th><th>จำนวนหม้อแปลงไฟฟ้า</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyelectricitytransformer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user_serial }}</td><td>{{ $item->transformer_serial }}</td><td>{{ $item->user_type }}</td><td>{{ $item->usage_rate }}</td><td>{{ $item->transformer_size }}</td><td>{{ $item->transformer_quantity }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-electricity-transformer/' . $item->id) }}" title="View EnergyElectricityTransformer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-electricity-transformer/' . $item->id . '/edit') }}" title="Edit EnergyElectricityTransformer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-electricity-transformer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyElectricityTransformer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>


                @php
                    $energyconsumptionelectricity = $energyreport->energy_consumption_electricities;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลการใช้ไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-consumption-electricity/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyConsumptionElectricity">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-consumption-electricity/create-modal')

                        <form method="GET" action="{{ url('/energy-consumption-electricity') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Month</th><th>Maximum Power P</th><th>Maximum Power Pp</th><th>Maximum Power Op</th><th>Maximum Power Expenses</th><th>Electrical Energy Volume</th><th>Electrical Energy Expenses</th><th>Total Electric Bill</th>
                                        <!--th>User Id</th><th>Enery Report Id</th-->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyconsumptionelectricity as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->maximum_power_p }}</td><td>{{ $item->maximum_power_pp }}</td><td>{{ $item->maximum_power_op }}</td><td>{{ $item->maximum_power_expenses }}</td><td>{{ $item->electrical_energy_volume }}</td><td>{{ $item->electrical_energy_expenses }}</td><td>{{ $item->total_electric_bill }}</td>
                                        <!--td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td-->
                                        <td>
                                            <a href="{{ url('/energy-consumption-electricity/' . $item->id) }}" title="View EnergyConsumptionElectricity"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-consumption-electricity/' . $item->id . '/edit') }}" title="Edit EnergyConsumptionElectricity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-consumption-electricity' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionElectricity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyconsumptionheat = $energyreport->energy_consumption_heats;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลปริมาณการใช้เชื้อเพลิง</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-consumption-heat/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyConsumptionHeat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-consumption-heat/create-modal')

                        <form method="GET" action="{{ url('/energy-consumption-heat') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>เดือน</th><th>น้ำมันเตา (ลิตร)</th><th>น้ำมันเตา (บาท)</th><th>น้ำมันดีเซล (ลิตร)</th><th>น้ำมันดีเซล (บาท)</th><th>ก๊าซปิโตรเลียมเหลว (กิโลกรัม)</th><th>ก๊าซปิโตรเลียมเหลว (บาท)</th><th>ก๊าซธรรมชาติ (ล้านบีทียู)</th><th>ก๊าซธรรมชาติ (บาท)</th><th>ถ่านหิน (ตัน)</th><th>ถ่านหิน (บาท)</th><th>ไอน้ำที่ซื้อ (ตัน)</th><th>ไอน้ำที่ซื้อ (บาท)</th><th>อื่นๆ (หน่วย)</th><th>อื่นๆ (บาท)</th><th>พลังงานหมุนเวียน (หน่วย)</th><th>พลังงานหมุนเวียน (บาท)</th><th>User Id</th><th>Enery Report Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyconsumptionheat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->fuel_oil_liter }}</td><td>{{ $item->fuel_oil_baht }}</td><td>{{ $item->diesel_oil_liter }}</td><td>{{ $item->diesel_oil_baht }}</td><td>{{ $item->lpg_kg }}</td><td>{{ $item->lpg_baht }}</td><td>{{ $item->natural_gas_millionbtu }}</td><td>{{ $item->natural_gas_baht }}</td><td>{{ $item->coal_ton }}</td><td>{{ $item->coal_baht }}</td><td>{{ $item->steam_purchased_ton }}</td><td>{{ $item->steam_purchased_baht }}</td><td>{{ $item->other_unit }}</td><td>{{ $item->other_baht }}</td><td>{{ $item->renewable_energy_unit }}</td><td>{{ $item->renewable_energy_baht }}</td><td>{{ $item->user_id }}</td><td>{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-consumption-heat/' . $item->id) }}" title="View EnergyConsumptionHeat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-consumption-heat/' . $item->id . '/edit') }}" title="Edit EnergyConsumptionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-consumption-heat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyConsumptionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyheatgenerator = $energyreport->energy_heat_generators;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลการใช้เชื้อเพลิงในการผลิตไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-heat-generator/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyHeatGenerator">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-heat-generator/create-modal')

                        <form method="GET" action="{{ url('/energy-heat-generator') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>เดือน</th><th>กำลังผลิตติดตั้ง (กิโลวัตต์)</th><th>ปริมาณการใช้เชื้อเพลง(ชนิด)</th><th>ปริมาณการใช้เชื้อเพลง(ปริมาณ)</th><th>ปริมาณการใช้เชื้อเพลง(หน่วย)</th><th>ชั่วโมงการเดินเครื่อง</th><th>ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับใช้เอง</th><th>ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับจำหน่าย</th><th>ปริมาณไอน้ำที่ผลิต</th><th>ปริมาณไอน้ำที่จำหน่าย</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyheatgenerator as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->month }}</td><td>{{ $item->capacity }}</td><td>{{ $item->primary_fuel_consumption_type }}</td><td>{{ $item->primary_fuel_consumption_volume }}</td><td>{{ $item->primary_fuel_consumption_unit }}</td><td>{{ $item->operating_hours }}</td><td>{{ $item->electricity_use }}</td><td>{{ $item->electricity_sale }}</td><td>{{ $item->steam_use }}</td><td>{{ $item->steam_sale }}</td>
                                        <td>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id) }}" title="View EnergyHeatGenerator"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-heat-generator/' . $item->id . '/edit') }}" title="Edit EnergyHeatGenerator"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-heat-generator' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyHeatGenerator" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energyportionheat = $energyreport->energy_portion_heats;
                @endphp
                <div class="card mt-4">
                    <div class="card-header">ข้อมูลการใช้พลังงานความร้อน</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-portion-heat/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyPortionHeat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        @include('energy-portion-heat/create-modal')

                        <form method="GET" action="{{ url('/energy-portion-heat') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>ระบบ</th><th>อุปกรณ์</th><th>การใช้พลังงานเชื้อเพลิง (ชนิดเชื้อเพลง)</th><th>การใช้พลังงานเชื้อเพลิง (เมกะจูล/ปี)</th><th>วิธีการประเมิน</th><th>วิธีการตรวจวัด</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyportionheat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->system }}</td><td>{{ $item->equipment }}</td><td>{{ $item->fuel_consumption_type }}</td><td>{{ $item->fuel_consumption_megajoule }}</td><td>{{ $item->method_assessment }}</td><td>{{ $item->method_check }}</td>
                                        <td>
                                            <a href="{{ url('/energy-portion-heat/' . $item->id) }}" title="View EnergyPortionHeat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-portion-heat/' . $item->id . '/edit') }}" title="Edit EnergyPortionHeat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-portion-heat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyPortionHeat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>

                @php
                    $energyportionelectricity = $energyreport->energy_portion_electricities;
                @endphp
                <div class="card">
                    <div class="card-header">ข้อมูลสัดส่วนการใช้พลังงานไฟฟ้า</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-portion-electricity/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyPortionElectricity">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-portion-electricity/create-modal')

                        <form method="GET" action="{{ url('/energy-portion-electricity') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>ระบบ</th><th>การใช้พลังงานไฟฟ้า</th><th>วิธีการประเมิน</th><th>วิธีการตรวจวัด</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energyportionelectricity as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->system }}</td><td>{{ $item->electric_power_consumption }}</td><td>{{ $item->method_assessment }}</td><td>{{ $item->method_check }}</td>
                                        <td>
                                            <a href="{{ url('/energy-portion-electricity/' . $item->id) }}" title="View EnergyPortionElectricity"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-portion-electricity/' . $item->id . '/edit') }}" title="Edit EnergyPortionElectricity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-portion-electricity' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyPortionElectricity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                @php
                    $energymachine = $energyreport->energy_machines;
                @endphp
                <div class="card">
                    <div class="card-header">Energy machine</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-machine/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyMachine">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @include('energy-machine/create-modal')

                        <form method="GET" action="{{ url('/energy-machine') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th class="d-none">#</th>
                                        <th>ระบบที่ใช้พลังงาน</th>
                                        <th>ชื่ออุปกรณ์</th>
                                        <th>ประเภทพลังงาน</th>
                                        <th>พิกัด (ขนาด)</th>
                                        <th>พิกัด (หน่วย)</th>
                                        <th>จำนวน</th>
                                        <th>อายุการใช้งาน</th>
                                        <th>ชั่วโมงการใช้งานเฉลี่ย/ปี</th>
                                        <th>พลังงานไฟฟ้า (กิโลวัตต์-ชั่วโมง/ปี)</th>
                                        <th>พลังงานความร้อน (เมกะจูล/ปี)</th>
                                        <th>ชนิดการใช้เชื้อเพลิง</th>
                                        <th>การใช้เชื้อเพลิง (หน่วย)</th>
                                        <th>ค่าพิกัดประสิทธิภาพ</th>
                                        <th>ค่าประสิทธิภาพ (หน่วย)</th>
                                        <th>ค่าประสิทธิภาพ (ใช้งานจริง)</th>
                                        <th>ค่าประสิทธิภาพที่ใช้งานจริง (หน่วย)</th>
                                        <th>หมายเหตุ</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Enery Report Id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($energymachine as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->system }}</td>
                                        <td>{{ $item->machine_name }}</td>
                                        <td>{{ $item->power_type }}</td>
                                        <td>{{ $item->spec }}</td>
                                        <td>{{ $item->spec_unit }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->lifetime }}</td>
                                        <td>{{ $item->average_active_hours }}</td>
                                        <td>{{ $item->electric_power }}</td>
                                        <td>{{ $item->heat_power }}</td>
                                        <td>{{ $item->fuel_type }}</td>
                                        <td>{{ $item->fuel_unit }}</td>
                                        <td>{{ $item->performance_spec }}</td>
                                        <td>{{ $item->performance_unit }}</td>
                                        <td>{{ $item->performance_actual }}</td>
                                        <td>{{ $item->performance_actual_unit }}</td>
                                        <td>{{ $item->remark }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">{{ $item->energy_report_id }}</td>
                                        <td>
                                            <a href="{{ url('/energy-machine/' . $item->id) }}" title="View EnergyMachine"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/energy-machine/' . $item->id . '/edit') }}" title="Edit EnergyMachine"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/energy-machine' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachine" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                @php
                    $energymachines = $energymachine;
                @endphp
                @foreach( $energymachines as $energymachine)
                    <div class="card mb-4">
                        <div class="card-header">EnergyMachine {{ $energymachine->id }}</div>
                        <div class="card-body">

                            <a href="{{ url('/energy-machine?energy_report_id='.$energymachine->energy_report_id) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/energy-machine/' . $energymachine->id . '/edit') }}" title="Edit EnergyMachine"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('energymachine' . '/' . $energymachine->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachine" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $energymachine->id }}</td>
                                        </tr>
                                        <tr>
                                            <th> ระบบที่ใช้พลังงาน </th>
                                            <td> {{ $energymachine->system }} </td>
                                        </tr>
                                        <tr>
                                            <th> ชื่ออุปกรณ์ </th>
                                            <td> {{ $energymachine->machine_name }} </td>
                                        </tr>
                                        <tr>
                                            <th> ประเภทพลังงาน </th>
                                            <td> {{ $energymachine->power_type }} </td>
                                        </tr>
                                        <tr>
                                            <th> พิกัด (ขนาด) </th>
                                            <td> {{ $energymachine->spec }} </td>
                                        </tr>
                                        <tr>
                                            <th> พิกัด (หน่วย) </th>
                                            <td> {{ $energymachine->spec_unit }} </td>
                                        </tr>
                                        <tr>
                                            <th> จำนวน </th>
                                            <td> {{ $energymachine->quantity }} </td>
                                        </tr>
                                        <tr>
                                            <th> อายุการใช้งาน </th>
                                            <td> {{ $energymachine->lifetime }} </td>
                                        </tr>
                                        <tr>
                                            <th> ชั่วโมงการใช้งานเฉลี่ย/ปี </th>
                                            <td> {{ $energymachine->average_active_hours }} </td>
                                        </tr>
                                        <tr>
                                            <th> พลังงานไฟฟ้า (กิโลวัตต์-ชั่วโมง/ปี) </th>
                                            <td> {{ $energymachine->electric_power }} </td>
                                        </tr>
                                        <tr>
                                            <th> พลังงานความร้อน (เมกะจูล/ปี) </th>
                                            <td> {{ $energymachine->heat_power }} </td>
                                        </tr>
                                        <tr>
                                            <th> ชนิดการใช้เชื้อเพลิง </th>
                                            <td> {{ $energymachine->fuel_type }} </td>
                                        </tr>
                                        <tr>
                                            <th> การใช้เชื้อเพลิง (หน่วย) </th>
                                            <td> {{ $energymachine->fuel_unit }} </td>
                                        </tr>
                                        <tr>
                                            <th> ค่าพิกัดประสิทธิภาพ </th>
                                            <td> {{ $energymachine->performance_spec }} </td>
                                        </tr>
                                        <tr>
                                            <th> ค่าประสิทธิภาพ (หน่วย) </th>
                                            <td> {{ $energymachine->performance_unit }} </td>
                                        </tr>
                                        <tr>
                                            <th> ค่าประสิทธิภาพ (ใช้งานจริง) </th>
                                            <td> {{ $energymachine->performance_actual }} </td>
                                        </tr>
                                        <tr>
                                            <th> ค่าประสิทธิภาพที่ใช้งานจริง (หน่วย) </th>
                                            <td> {{ $energymachine->performance_actual_unit }} </td>
                                        </tr>
                                        <tr>
                                            <th> หมายเหตุ </th>
                                            <td> {{ $energymachine->remark }} </td>
                                        </tr>
                                        <tr>
                                            <th> User Id </th>
                                            <td> {{ $energymachine->user_id }} </td>
                                        </tr>
                                        <tr>
                                            <th> Enery Report Id </th>
                                            <td> {{ $energymachine->energy_report_id }} </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    @php
                        $energymachineevaluation = $energymachine->energy_machine_evaluations;
                    @endphp

                    <div class="card" id="two">
                        <div class="card-header">Energy machine evaluation</div>
                        <div class="card-body">
                            <a href="{{ url('/energy-machine-evaluation/create') }}" class="btn btn-success btn-sm d-none" title="Add New EnergyMachineEvaluation">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @include('energy-machine-evaluation/create-modal')

                            <form method="GET" action="{{ url('/energy-machine-evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                            <th class="d-none">#</th>
                                            <th>ขนาดการใช้พลังงาน</th>
                                            <th>ชั่วโมงการใช้งาน</th>
                                            <th>ศักยภาพในการปรับปรุง</th>
                                            <th>คะแนนรวม</th>
                                            <th>ลำดับความสำคัญ</th>
                                            <th>ประเภทพลังงาน</th>
                                            <th class="d-none">Energy Machine Id</th>
                                            <th class="d-none">User Id</th>
                                            <th class="d-none">Enery Report Id</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($energymachineevaluation as $item)
                                        <tr>
                                            <td class="d-none">{{ $loop->iteration }}</td>
                                            <td>{{ $item->power_consumption_size }}</td>
                                            <td>{{ $item->operating_hours }}</td>
                                            <td>{{ $item->improvement_potential }}</td>
                                            <td>{{ $item->total_score }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td class="d-none">{{ $item->energy_machine_id }}</td>
                                            <td class="d-none">{{ $item->user_id }}</td>
                                            <td class="d-none">{{ $item->energy_report_id }}</td>
                                            <td>
                                                <a href="{{ url('/energy-machine-evaluation/' . $item->id) }}" title="View EnergyMachineEvaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/energy-machine-evaluation/' . $item->id . '/edit') }}" title="Edit EnergyMachineEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/energy-machine-evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete EnergyMachineEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>                            
                            </div>

                        </div>
                    </div>

                @endforeach








            </div>
        </div>
    </div>
@endsection
