@extends('layouts.master-layout')
@section('content')
	<div>
		<div class="header-container">
			<div class="login-name login-input login-item"><input type="text" placeholder="Username"></div>
			<div class="login-pass login-input login-item"><input type="password" placeholder="Password"></div>
			<div class="login-item"><a class="button btn-fb btn-1 btn-success">Primary Action</a></div>
			<div class="login-item"><a class="dropdown button arrow-only btn-fb btn-2 btn-success" type="button" data-toggle="example-dropdown" data-options="align:down">
			    <span class="show-for-sr">Show menu</span>
			</a></div>
			<ul id="example-dropdown" class="f-dropdown dropdown-pane dropdown-menu" data-dropdown>
				<li><a>Facebook</a></li>
				<li><a>Twitter</a></li>
			</ul>
			<div class="login-item"><a class="button btn-fb btn-trans">Forgot Password</a></div>
		</div>
	</div>
	<!-- <div map-lazy-load="https://maps.google.com/maps/api/js">
  		<ng-map center="location" zoom="16" style="height:900px;margin:12px;box-shadow:0 3px 25px black;">
  		</ng-map>
  		<button ng-click="findMyLocation()" style="background-color:green;">Find me</button>
	</div> -->
@stop