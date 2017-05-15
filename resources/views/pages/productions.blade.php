@extends('main')

@section('title','All Productions')

@section('body_content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>All Productions</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<a href="{{route('pc.DailyProduction')}}" class="btn btn-primary" style="padding-top:5px">Back</a>
			</div>
			<div class="col-md-3">
				<a href="{{route('dailyproductions.create')}}" class="btn btn-primary" style="padding-top:5px">Add Production</a>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover " style="margin-bottom:1px">
				  	<thead>
				  		<th>Roll Number</th>
				  		<th>Size</th>
				  		<th>Gauge</th>
				  		<th>Weight</th>
				  		<th>Finishing Type</th>
				  		<th>Start Time</th>
				  		<th>End Time</th>
				  		<th></th>
				  	</thead>

				  	<tbody>
				  		@foreach($productions as $production)
							<tr >
								<td>{{$production->rollnumber}}</td>
								<td>{{$production->size}}</td>
								<td>{{$production->gauge}}</td>
								<td>{{$production->weight}}</td>
								<td>{{$production->finishingtype}}</td>
								<td>{{$production->starttime}}</td>
								<td>{{$production->endtime}}</td>
								<td><a href="{{route('dailyproductions.show',$production->id)}}" class="btn btn-default btn-sm">View</a> 
									<a href="{{route('dailyproductions.edit',$production->id)}}" class="btn btn-default btn-sm">Edit</a></td>
							</tr>
				  		@endforeach
				  	</tbody>
				</table>
				
			</div>
		</div>
	</div>

@endsection