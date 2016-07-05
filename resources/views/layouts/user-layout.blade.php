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
        <div class="row">
    	<div class="small-12 medium-4 columns">
    		@include('includes.user-left-side')
    	</div>
        <div class="small-12 medium-8 columns">
            @yield('content')
    	</div>
        </div>
    </div>
   <!-- FOR WIDGET ANIMATION -->
   <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/imagesloaded.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/AnimOnScroll.js')}}"></script>
    <script>
        new AnimOnScroll( 
                document.getElementById( 'scrollAbleWizard' ),
                document.getElementById( 'grid' ), {
                    minDuration : 0.4,
                    maxDuration : 0.7,
                    viewportFactor : 0.2
                } );
    </script>
</body>
</html>