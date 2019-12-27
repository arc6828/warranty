@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">EneryCommittee {{ $enerycommittee->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/enery-committee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/enery-committee/' . $enerycommittee->id . '/edit') }}" title="Edit EneryCommittee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('enerycommittee' . '/' . $enerycommittee->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete EneryCommittee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $enerycommittee->id }}</td>
                                    </tr>
                                    <tr><th> President </th><td> {{ $enerycommittee->president }} </td></tr><tr><th> Common Responsible Person </th><td> {{ $enerycommittee->common_responsible_person }} </td></tr><tr><th> Common Responsible Person Code </th><td> {{ $enerycommittee->common_responsible_person_code }} </td></tr><tr><th> Senior Responsible Person </th><td> {{ $enerycommittee->senior_responsible_person }} </td></tr><tr><th> Senior Responsible Person Code </th><td> {{ $enerycommittee->senior_responsible_person_code }} </td></tr><tr><th> Factory Owner </th><td> {{ $enerycommittee->factory_owner }} </td></tr><tr><th> User Id </th><td> {{ $enerycommittee->user_id }} </td></tr><tr><th> Enery Report Id </th><td> {{ $enerycommittee->enery_report_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
