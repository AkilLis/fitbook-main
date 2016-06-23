<!doctype html>
<html ng-app="fitwork">
<head>
    <title>Laravel</title>
    @include('includes.header')
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/angular.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/ng-map.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('app/app.js')}}" ></script>
    <script type="text/javascript" src="{{asset('app/controller/clubsearchcontroller.js')}}" ></script>
</head>
<body>
    <div class="container large-12 columns" ng-controller="searchCtrl">
		@yield('content')
    </div>
</body>
</html>