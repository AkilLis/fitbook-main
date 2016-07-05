<!doctype html>
<html ng-app="fitwork">
<head>
    <title>Laravel</title>
    @include('includes.header')
    <link rel="stylesheet" type="text/css" href="{{asset('css/widget/hw-default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/widget/cw-default.css')}}">
</head>
<body>
    <div class="container body">
    	<div>
    		@include($header_widget)
    	</div>
    	<div>
    		@yield('content');
    	</div>
      <div>
        @include($footer_widget)
    	</div>
    </div>
   <!-- FOR WIDGET ANIMATION -->
   <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/angular.min.js')}}" ></script>
   <script type="text/javascript" src="{{asset('js/ng-map.min.js')}}" ></script>
   <script type="text/javascript" src="{{asset('app/app.js')}}" ></script>
   <script type="text/javascript" src="{{asset('app/controller/clubsearchcontroller.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/what-input.js')}}"></script>
</body>
</html>