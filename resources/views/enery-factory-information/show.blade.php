@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EneryFactoryInformation {{ $eneryfactoryinformation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/enery-factory-information') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/enery-factory-information/' . $eneryfactoryinformation->id . '/edit') }}" title="Edit EneryFactoryInformation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('eneryfactoryinformation' . '/' . $eneryfactoryinformation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EneryFactoryInformation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $eneryfactoryinformation->id }}</td>
                                    </tr>
                                    <tr><th> Factory Size </th><td> {{ $eneryfactoryinformation->factory_size }} </td></tr><tr><th> Factory Address </th><td> {{ $eneryfactoryinformation->factory_address }} </td></tr><tr><th> Factory Tel </th><td> {{ $eneryfactoryinformation->factory_tel }} </td></tr><tr><th> Factory Fax </th><td> {{ $eneryfactoryinformation->factory_fax }} </td></tr><tr><th> Factory Email </th><td> {{ $eneryfactoryinformation->factory_email }} </td></tr><tr><th> Office Address </th><td> {{ $eneryfactoryinformation->office_address }} </td></tr><tr><th> Office Tel </th><td> {{ $eneryfactoryinformation->office_tel }} </td></tr><tr><th> Office Fax </th><td> {{ $eneryfactoryinformation->office_fax }} </td></tr><tr><th> Office Email </th><td> {{ $eneryfactoryinformation->office_email }} </td></tr><tr><th> Factory Type </th><td> {{ $eneryfactoryinformation->factory_type }} </td></tr><tr><th> Factory Employee </th><td> {{ $eneryfactoryinformation->factory_employee }} </td></tr><tr><th> Factory Operation Time </th><td> {{ $eneryfactoryinformation->factory_operation_time }} </td></tr><tr><th> User Id </th><td> {{ $eneryfactoryinformation->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $eneryfactoryinformation->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
