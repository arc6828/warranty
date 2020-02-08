@extends('layouts.app')

@section('adaptivesidebar')
    @php
    $energyreport = $energyelectricitytransformer->energy_report ;
    @endphp
    @include('admin/sidebar-energy')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">แก้ไข ข้อมูลหม้อแปลงไฟฟ้า #{{ $energyelectricitytransformer->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/energy-electricity-transformer') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/energy-electricity-transformer/' . $energyelectricitytransformer->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('energy-electricity-transformer.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
