@extends('layouts.app')

@section('adaptivesidebar')
    @php
    //$energyreport = $energyorganizationchart->energy_report ;
    @endphp
    @include('admin/sidebar-energy')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
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
                            <div class="pagination-wrapper"> {!! $energyconsumptionheat->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
