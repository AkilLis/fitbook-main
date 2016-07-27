<!doctype html>
<html ng-app="fitwork">
<head>
    <title>Laravel</title>
    @include('includes.header')    
</head>
<body>
    <div style="height:100%; ">
		@yield('content')
    </div>
    <script type="text/javascript" src="{{asset('js/angular.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/ng-map.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('app/app.js')}}" ></script>
    <script type="text/javascript" src="{{asset('app/controller/clubsearchcontroller.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</body>
</html>