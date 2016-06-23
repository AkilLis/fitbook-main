@extends('layouts.master-layout')
@section('content')
	<div class="full-body">
		<div class="header-container">
			<div class="login-name login-input login-item"><input type="text"></div>
			<div class="login-pass login-input login-item"><input type="password"></div>
			<div><a class="button login-item">Primary Action</a></div>
			<div><a class="dropdown button arrow-only login-item" type="button" data-toggle="example-dropdown" data-options="align:right">
			    <span class="show-for-sr">Show menu</span>
			</a></div>
				<ul id="example-dropdown" class="f-dropdown dropdown-pane" data-dropdown>
					<li><a>Facebook</a></li>
					<li><a>Twitter</a></li>
				</ul>
			<div class="login-item"><a>Forgot Password</a></div>
		</div>
	</div>
	<!-- <div map-lazy-load="https://maps.google.com/maps/api/js">
  		<ng-map center="location" zoom="16" style="height:900px;margin:12px;box-shadow:0 3px 25px black;">
  		</ng-map>
  		<button ng-click="findMyLocation()" style="background-color:green;">Find me</button>
	</div> -->
@stop