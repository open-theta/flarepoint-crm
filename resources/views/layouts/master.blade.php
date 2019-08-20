<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} v{{ config('app.version') }}</title>
    <link href="{{ URL::asset('css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/dropzone.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/jquery.atwho.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset(elixir('css/app.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

   

    <style>
        .venntooltip {
            font-size: 14px;
            position: absolute;
            text-align: center;
            width: 128px;
            height: 85px;
            background: #333;
            color: #fff;
            padding: 2px;
            border: 0px;
            border-radius: 8px;
            opacity: 0;
        }
    
        div.vcenter {
            width: 100%;
            height: 200px;
        }

        div.profile_data {
            width: 100%;
        }
    
        div.summary_metric {
            height: 400px;
            display: flex;
            align-items: center;
            text-align: right;
            padding-right: 38px;
        }

        div.profile_info {
            height: 400px;
            display: flex;
            align-items: center;
            padding-left: 38px;
        }

        div.profile_info h4 {
            margin-top: 15px; 
        }

        div.profile_info span {
            margin-right: 5px; 
        }

        .slider-container {
            background-color: gray;
            cursor: pointer;
            height: 15px;
            margin: 4px 0 0;
            width: 100%;
            z-index: 11;
        }
        .slider-bar {
            background-color: #00BD9C;
            height: 15px;
        }

        .bar-module .name {
            margin-top: 5px;
            min-height: 20px;
        }

        div.line {
            height: 1px;
            width: 100%;
            margin:4px 0; 
            background-color: #333;
        }

        img.profile_avatar {
            border-radius: .3rem!important;
            max-width: 150px!important;
            max-height: 150px!important;;
            vertical-align: middle;
            border-style: none;
            margin: 10px;
        }
    
        .bar {
            fill: steelblue;
        }
    </style>
    
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body>

<div id="wrapper">

    <button type="button" class="navbar-toggle menu-txt-toggle" style=""><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>

    <div class="navbar navbar-default navbar-top">
        <!--NOTIFICATIONS START-->
<div class="menu">

    <div class="notifications-header"><p>{{__('Notifications')}}</p> </div>
  <!-- Menu -->
 <ul>
 <?php $notifications = auth()->user()->unreadNotifications; ?>

    @foreach($notifications as $notification)

    <a href="{{ route('notification.read', ['id' => $notification->id])  }}" onClick="postRead({{ $notification->id }})">
    <li>
 <img src="/{{ auth()->user()->avatar }}" class="notification-profile-image">
    <p>{{ $notification->data['message']}}</p></li>
    </a>
    @endforeach
  </ul>
</div>

       <div class="dropdown" id="nav-toggle">
            <a id="notification-clock" role="button" data-toggle="dropdown">
                <i class="glyphicon glyphicon-bell"><span id="notifycount">{{ $notifications->count() }}</span></i>
            </a>
                </div>
                    @push('scripts')
                    <script>
                    $('#notification-clock').click(function(e) {
                    e.stopPropagation();
                    $(".menu").toggleClass('bar')
                    });
                    $('body').click(function(e) {
                    if ($('.menu').hasClass('bar')) {
                        $(".menu").toggleClass('bar')
                    }
                    })
                  id = {};
                        function postRead(id) {
                            $.ajax({
                                type: 'post',
                                url: '{{url('/notifications/markread')}}',
                                data: {
                                    id: id,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                        }
                    </script>
                @endpush
        <!--NOTIFICATIONS END-->
        <button type="button" id="mobile-toggle" class="navbar-toggle mobile-toggle" data-toggle="offcanvas" data-target="#myNavmenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>


    <!-- /#sidebar-wrapper -->
    <!-- Sidebar menu -->

      @include('layouts.menu')

    <!-- Page Content -->
    <div id="page-content-wrapper">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if(Session::has('flash_message_warning'))
             <message message="{{ Session::get('flash_message_warning') }}" type="warning"></message>
        @endif
        @if(Session::has('flash_message'))
            <message message="{{ Session::get('flash_message') }}" type="success"></message>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>@yield('heading')</h1>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.caret.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.atwho.min.js') }}"></script>

    <!-- autocomplete -->
	<link href="https://cdn.jsdelivr.net/npm/easy-autocomplete@1.3.5/dist/easy-autocomplete.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/easy-autocomplete@1.3.5/dist/easy-autocomplete.themes.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/easy-autocomplete@1.3.5/dist/jquery.easy-autocomplete.min.js"></script>
    
    <!-- data visualization libs for report -->
	<script src="https://cdn.jsdelivr.net/npm/d3@4.13.0/build/d3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/d3-time@1.0.10/dist/d3-time.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/d3-funnel@1.2.1/dist/d3-funnel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/venn.js@0.2.20/build/venn.min.js"></script>

    <!-- Sankey diagrams JS -->
    <script src="https://unpkg.com/d3-array@1"></script>
    <script src="https://unpkg.com/d3-collection@1"></script>
    <script src="https://unpkg.com/d3-path@1"></script>
    <script src="https://unpkg.com/d3-shape@1"></script>
    <script src="https://unpkg.com/d3-sankey@0"></script>

    

    <script src="{{ asset('js/visualizations/collection-report.js') }}"></script>

@stack('scripts')

</body>

</html>
