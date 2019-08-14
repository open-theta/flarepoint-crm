@extends('layouts.master')
@section('heading')
    <h1>Profile collector with Pixel Code Tagging</h1>
@stop

@section('content')

    <form action="/action_page.php">
        <div class="form-group">
            <label for="tagname">Tag name:</label>
            <input type="text" class="form-control" id="tagname" required >
        </div>
        
        <div class="form-group">
            <label for="website">Website address:</label>
            <input type="text" class="form-control" id="website">
        </div>

        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="filtering_traffic" > Receive data only from specified adresses
            </label>
        </div>

        <div class="form-group">
            <label for="timezone">Time zone:</label>
            <select id="timezone" class="form-control">
                <option selected value="Asia/Bangkok">(GMT+07:00) Bangkok, Jakarta, Hanoi</option>
                <option selected value="Asia/Singapore">(GMT+08:00) Kuala Lumpur, Singapore</option>
            </select>
        </div>

        <div class="card">
            <div class="card-header bold">
                <h4>Code snippet for website</h4>
            </div>
            <div class="card-body">
                <button type="button" >Click here to copy code snippet</button>
                <p class="card-text">By embedding the code snippet on your site, you agree to the terms and conditions of the User Agreement. </p>
               
                <pre class="highlight"><code>&lt;script type="text/javascript"&gt;
                        var unomiOption = {
                            scope: 'cdpDemoManager',
                            url: 'http://cdpstatic.bigdatavietnam.org'
                        };
                        window.unomiTracker||(window.unomiTracker={}),function(){function e(e){for(unomiTracker.initialize({"Apache Unomi":unomiOption});n.length&gt;0;){var r=n.shift(),t=r.shift();unomiTracker[t]&amp;&amp;unomiTracker[t].apply(unomiTracker,r)}}for(var n=[],r=["trackSubmit","trackClick","trackLink","trackForm","initialize","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","personalize"],t=0;t&lt;r.length;t++){var i=r[t];window.unomiTracker[i]=function(e){return function(){var r=Array.prototype.slice.call(arguments);return r.unshift(e),n.push(r),window.unomiTracker}}(i)}unomiTracker.load=function(){var n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=unomiOption.url+"/tracker/unomi-tracker.min.js",n.addEventListener?n.addEventListener("load",function(n){"function"==typeof e&amp;&amp;e(n)},!1):n.onreadystatechange=function(){"complete"!==this.readyState&amp;&amp;"loaded"!==this.readyState||e(window.event)};var r=document.getElementsByTagName("script")[0];r.parentNode.insertBefore(n,r)},document.addEventListener("DOMContentLoaded",unomiTracker.load),unomiTracker.page()}();
                &lt;/script&gt;</code></pre>
            </div>
        </div>

        <hr>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@stop
