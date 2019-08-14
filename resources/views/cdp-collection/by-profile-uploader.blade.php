@extends('layouts.master')
@section('heading')
    <h1>Customer Profile Data Uploader</h1>
@stop

@section('content')

    <form>
        <div class="form-group">
            <label for="exampleFormControlFile1"> CSV file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </form>

@stop
