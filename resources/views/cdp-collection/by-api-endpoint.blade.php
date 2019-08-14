@extends('layouts.master')
@section('heading')
    <h1>CDP API</h1>
@stop

@section('content')

<div class="alert alert-primary" role="alert">
Use the API for getting CDP programmatically. 
This automates creating counters, setting up goals, getting statistics and other actions available in the CDP web interface.
</div>

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">1. Get an OAuth access token.</a>
    <a href="#" class="list-group-item list-group-item-action">2. Review the information about request parameter.</a>
    <a href="#" class="list-group-item list-group-item-action">3. Learn how to use the Reports API.</a>
    <a href="#" class="list-group-item list-group-item-action">4. Check out the API usage examples. </a>
</div>

@stop
