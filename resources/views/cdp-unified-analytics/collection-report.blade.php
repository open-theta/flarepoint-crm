@extends('layouts.master')
@section('heading')
    <h1>Unified Analytics for Collection</h1>
@stop

@section('content')




<div class="container-fluid">

    <!-- MAIN BODY here -->
    <div class="row">
        <div class="col-md-3">
            <div class="summary_metric">
                <div class="vcenter">
                    <h3><span class="label label-default"> 21,981 </span> &nbsp; impressions </h3>
                    <h3><span class="label label-default"> 2,319 </span> &nbsp; profiles </h3>
                    <h3><span class="label label-default">897</span> &nbsp; touchpoint </h3>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: center">Conversion Funnel</h3>
                    <div id="funnel"></div>
                </div>
                <div class="col-md-6">
                    <div id="venn_two" style=float:left>
                        <h3 style="text-align: center">Audience Set</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3 style="text-align: center">Performance from Media Channels </h3>
        <div id="chart">
            <svg></svg>
        </div>
    </div>

</div>
<br><br><br><br>

@stop

@push('scripts')
<script type="text/javascript">
 ///Js code
 console.log('collectionId ' + {{$collectionId}} );
 jQuery(document).ready(function(){
    loadDataMainDashboard()
 });
    
</script>
@endpush

