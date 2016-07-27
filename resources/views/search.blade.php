@extends('layouts.search-layout')
@section('content')
	<!-- <div class="search-tooltip" style="display:none;">
		<div class="row">
			<div class="small-4 column" style="height: 70px; background-image: url('../images/flexgym/08.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">
			</div>
			<div class="small-8 column" style="padding:5px">
				<label style="text-align: center;">Flex Gym</label>
				<div style="text-align: center;">
				  <i class="star-1" style="color:#f26a2c;">★</i>
				  <i class="star-2" style="color:#f26a2c;">★</i>
				  <i class="star-3" style="color:#f26a2c;">★</i>
				  <i class="star-4" style="color:#f26a2c;">★</i>
				  <i class="star-5" style="color:#aeaeae;">★</i>
				</div>
				<div style="font-size:10px; text-align:center;">Дэлгэрэнгүй ... <i style="text-decoration:underline;">/Товших/ </i></div>
			<div>
		</div>
	<div> -->
	<div id="omnibox" class="vasquette-margin-enabled" style="text-align: left; position: fixed;">
		<div class="searchbox-hamburger-container">
			<button class="searchbox-hamburger"></button>
		</div>
		<div id="searchbox" class="searchbox searchbox-shadow noprint directions-button-shown searchbox-empty suggestions-shown">
			<div style="position:relative;">
				<form>
					<input id="typeahead" placeholder="Клуб, Багш газрын зургаас хайх" class="tactile-searchbox-input searchbox-input" style="background: url(&quot;data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw%3D%3D&quot;) transparent;">
				</form>
			</div>
			<div class="searchbox-searchbutton-container">
				<button onclick="search()" class="searchbox-searchbutton"></button>
			</div>
			<div class="searchbox-findme">
				<button data-tooltip aria-haspopup="true" class="has-tip round find-mylocation" id="drop" title="Таны байршил" onclick="findMyLocation()">
			      <i style="line-height: inherit; height:24px; width:24px; color: #aeaeae;" class="fa fa-location-arrow" aria-hidden="true"></i>
			    </button>
			    <button onclick="resetSearch()" class="reset-button hide"></button>
		    </div>
		</div>
	</div>
	<div class="pane hide">
		<div class="pane-holder">
			<div style="pane-holder-small">
				<div class="pane-header" style="background-image: url({{ URL::asset('images/flexgym/08.jpg')}}); background-size: cover;">
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
				<div class="pane-content">
					<h1>Flex gym</h1>
					<p>4.45 сэтгэгдэл</p>
				</div>
			</div>
		</div>
	</div>
	<div id="map" style="height: 100%;">
	</div>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/typeahead.bundle.min.js')}}"></script>
	<script>	
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map;
      var me;
      var testClubs = [
        	{lat: 47.909820, lng: 106.827386,
        	content: '<div class="row">'+
			'<div class="small-4 column" style="height: 70px; background-image: url(\''+'../images/flexgym/08.jpg'+'\'); background-size: 100% 100%;'+'background-repeat: no-repeat;">'+
			'</div>'+
			'<div class="small-8 column" style="padding:5px">'+
			'	<label style="text-align: center;">Golden Gym</label>'+
			'	<div style="text-align: center;">'+
			'	  <i class="star-1" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-2" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-3" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-4" style="color:#aeaeae;">★</i>'+
			'	  <i class="star-5" style="color:#aeaeae;">★</i>'+
			'     <label>4.2</label>'+
			'	</div>'+
			'	<div style="font-size:10px; text-align:center;">Дэлгэрэнгүй ... <i style="text-decoration:underline;">/Товших/ </i></div>'+
			'	<div>'+
			'</div>'},
        	{lat: 47.912324, lng: 106.827843,
        	content: '<div class="row">'+
			'<div class="small-4 column" style="height: 70px; background-image: url(\''+'../images/flexgym/00.jpg'+'\'); background-size: 100% 100%;'+'background-repeat: no-repeat;">'+
			'</div>'+
			'<div class="small-8 column" style="padding:5px">'+
			'	<label style="text-align: center;">Flex Gym</label>'+
			'	<div style="text-align: center;">'+
			'	  <i class="star-1" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-2" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-3" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-4" style="color:#f26a2c;">★</i>'+
			'	  <i class="star-5" style="color:#aeaeae;">★</i>'+
			'	</div>'+
			'	<div style="font-size:10px; text-align:center;">Дэлгэрэнгүй ... <i style="text-decoration:underline;">/Товших/ </i></div>'+
			'	<div>'+
			'</div>'},,
      ];

      var currentBoxText = '<div class="current-box">test</div>';
      var markersClubs = [];

      function initMap() 
      {
      	map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 47.9118309, lng: 106.8276077},
          zoom: 16,
          minZoom: 13,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.BOTTOM_CENTER
          },
        });

        var testCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: {lat: 47.9118309, lng: 106.8276077},
            radius: 100,
            editable : true,
            draggable : true,
        });
      }
      	
      //Reset customer search result
      function resetSearch() {
      	$('.pane').addClass("hide", 1000, "easeOutBounce");
      	$('.reset-button').addClass('hide');
        $('.find-mylocation').removeClass('hide');
      }
      	
      //Customer search club, teacher etc results
      function search()
      {
		clearPrevSearchResult();
        for (var i = 0; i < testClubs.length; i++) {
          pinResults(testClubs[i], i, i*200);
        }
      }

      //Show rectangle when mouse hover event
      function createTooltip(marker, key) 
      {
        var tooltipOptions = {
            marker: marker,
            content: testClubs[key].content,
            cssClass: 'search-tooltip' // name of a css class to apply to tooltip
        };

        var tooltip = new Tooltip(tooltipOptions);
      }

	  function createInfoWindow(marker, key) 
	  {
        //let user show club detailed information
        google.maps.event.addListener(marker, 'click', function () {
            $('.pane').removeClass("hide", 1000, "easeInBack");
            $('.reset-button').removeClass('hide');
            $('.find-mylocation').addClass('hide');
        });
      }

      function pinResults(position, key, timeout) 
      {
        window.setTimeout(function() 
        {
          var marker = new google.maps.Marker({
            position: position,
            map: map,
            animation: google.maps.Animation.DROP
          });

          createTooltip(marker, key);
          createInfoWindow(marker, key);

          markersClubs.push(marker);
        }, timeout);
      }

      function clearPrevSearchResult()
      {
      	for (var i = 0; i < markersClubs.length; i++) {
          markersClubs[i].setMap(null);
        }
        markersClubs = [];
      }

      //Find user current location with accessor methods
      function findMyLocation()
      {
        if (navigator.geolocation) 
        {
          	navigator.geolocation.getCurrentPosition(function(position) 
          	{
	            var pos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };

	            if(me) 
	            	me.setMap(null);
	            
	            me = [];
	            me = new google.maps.Marker({
		            position: pos,
		            map: map,
		            animation: google.maps.Animation.DROP
		        });

		        map.panTo(pos);
		        map.setZoom(16);
          	},function() 
          	{
            	handleLocationError(true, infoWindow, map.getCenter());
          	});
        } 
        else 
        {
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) 
      {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: Алдаа гарлаа.' :
                              'Error: Таны хэрэглэж буй хөтөч байршил тогтоох үйлчилгээг дэмжихгүй байна.');
      }
      //Autocomplete search javascript
	  var substringMatcher = function(strs) {
	  return function findMatches(q, cb) {
	    var matches, substringRegex;

	    // an array that will be populated with substring matches
	    matches = [];

	    // regex used to determine if a string contains the substring `q`
	    substrRegex = new RegExp(q, 'i');

	    // iterate through the pool of strings and for any string that
	    // contains the substring `q`, add it to the `matches` array
	    $.each(strs, function(i, str) {
	      if (substrRegex.test(str)) {
	        matches.push(str);
	      }
	    });

	    cb(matches);
	  };
	};

	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
	  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
	  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
	  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
	  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
	  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
	  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
	  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
	  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];
	
	$('#typeahead').typeahead({
		  hint: true,
		  highlight: true,
		  minLength: 1
	  },
	  {
		  name: 'states',
		  source: substringMatcher(states)
	  });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
    <script type="text/javascript" src="{{asset('js/tooltip.js')}}"></script>
@stop