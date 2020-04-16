@extends('layouts.app')

@section('adaptivesidebar')
    @php
    $energyreport = $table_a->energy_report ;
    @endphp
    @include('admin/sidebar-boi')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Table_a #{{ $table_a->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/table_a') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/table_a/' . $table_a->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('table_a.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
