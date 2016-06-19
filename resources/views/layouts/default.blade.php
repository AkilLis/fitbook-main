<!doctype html>
<html ng-app="fitwork">
<head>
    <title>Laravel</title>
    <style>
	    ul#club-info {
		    padding: 0;
		}

		ul#club-info li {
		    display: inline;
		}

		ul#club-info li a {
		    background-color: black;
		    color: white;
		    padding: 10px 20px;
		    text-decoration: none;
		    border-radius: 4px 4px 0 0;
		}

		ul#club-info li a:hover {
		    background-color: orange;
		}
    </style>
</head>
<body class="nav-md" id="style-3">
    <div class="container body">
        <div class="main_container">
            @include('includes.club-header')
            @foreach ($widgets as $widget)
     			@include($widget)
            @endforeach
            @yield('content')
    	</div>
    </div>
</body>
</html>