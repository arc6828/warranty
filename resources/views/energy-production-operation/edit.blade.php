@extends('layouts.app')

@section('adaptivesidebar')
    @php
    $energyreport = $energyproductionoperation->energy_report ;
    @endphp
    @include('admin/sidebar-energy')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"> แก้ไข ข้อมูลการผลิต(รายละเอียด) #{{ $energyproductionoperation->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-production-operation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/energy-production-operation/' . $energyproductionoperation->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('energy-production-operation.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
