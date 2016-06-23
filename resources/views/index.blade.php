@extends('layouts.master-layout')
@section('content')
	<div map-lazy-load="https://maps.google.com/maps/api/js">
  		<ng-map center="location" zoom="16" style="height:900px;margin:12px;box-shadow:0 3px 25px black;">
  		</ng-map>
  		<button ng-click="findMyLocation()" style="background-color:green;">Find me</button>
	</div>
@stop