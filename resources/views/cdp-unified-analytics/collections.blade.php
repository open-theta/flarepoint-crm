@extends('layouts.master')
@section('heading')
    <h1>Media Data Collection List</h1>
@stop

@section('content')
    <table class="table table-striped" id="contacts-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Reach</th>
            <th>Profile</th>
            <th>Touchpoint</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function () {
        $('#contacts-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('contacts.mydata') !!}',
            columns: [
                {data: 'namelink', name: 'name'},
                {data: 'job_title', name: 'job_title'},
                {data: 'client_name', name: 'client_name'},
                {data: 'emaillink', name: 'email'},
                {data: 'primary_number', name: 'primary_number',},
                {data: 'actions', name: 'actions', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush

