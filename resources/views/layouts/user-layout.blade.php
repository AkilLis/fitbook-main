<!doctype html>
<html ng-app="fitwork">
<head>
    <title>Laravel</title>
    @include('includes.header')
</head>
<body class="nav-md">
    <div class="container body">
    	<div>
    		@include('includes.user-header')
    	</div>
    	<div>
    		@include('includes.user-left-side')
    	</div>
        <div class="main_container">
            @yield('content')
    	</div>
    </div>
   
</body>
</html>