@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_c</div>
                    <div class="card-body">
                        <a href="{{ url('/table_c/create') }}" class="btn btn-success btn-sm" title="Add New Table_c">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/table_c') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ปีฐาน</th>
                                        <th>ต้นทุนทางตรงต่อหน่วยการผลิต/การบริการ</th>
                                        <th>อัตราการได้มา(Yield)</th>
                                        <th>ตัวชี้วัดผลผลิตภาพแรงงานเชิงมูลค่าเพิ่ม(Amount of Processing per Employee)</th>
                                        <th>ตัวชี้วัดประสิทธิภาพการลงทุนในเครื่องจักรและอุปกรณ์(Efficiency of Machinery Investment Ratio)</th>
                                        <th>ตัวชี้วัดประสิทธิผลโดยรวมของเครื่องจัก(Overall Equipment Effectiveness (OEE))</th>
                                        <th>ตัวชี้วัดอัตราการใช้เครื่องจักร(Equipment Operating Ratio(EOR))</th>
                                        <th>ตัวชี้วัดการประเมินอายุการใช้งานของชิ้นส่วน,อุปกรณ์และเครื่องจักร(Mean Time between Failures(MTBF))</th>
                                        <th>ตัวชี้วัดประสิทธิภาพของการผลิตได้จริงเปรียบเทียบกับความสามารถในการผลิตที่ควรทำได้(Actual Production Rate as a Percentage of the Maximum Capable Production Rate)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($table_c as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->peetharn }}</td>
                                        <td>{{ $item->cost }}</td>
                                        <td>{{ $item->yield }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->efficiency }}</td>
                                        <td>{{ $item->overall }}</td>
                                        <td>{{ $item->equipment }}</td>
                                        <td>{{ $item->mean }}</td>
                                        <td>{{ $item->actual }}</td>
                                        <td>
                                            <a href="{{ url('/table_c/' . $item->id) }}" title="View Table_c"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_c/' . $item->id . '/edit') }}" title="Edit Table_c"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/table_c' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Table_c" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $table_c->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
