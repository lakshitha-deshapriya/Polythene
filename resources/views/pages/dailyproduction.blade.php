@extends('main')

@section('title','Productions')

@section('body_content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Daily Productions</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<a href="{{route('pc.Productions')}}" class="btn btn-primary" style="padding-top:5px">All Productions</a>
			</div>
			<div class="col-md-3">
				<a href="{{route('dailyproductions.create')}}" class="btn btn-primary" style="padding-top:5px">Add Production</a>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover " style="margin-bottom:1px">
				  	<thead>
				  		<th style="text-align:center;">Roll Number</th>
				  		<th style="text-align:center;">Size</th>
				  		<th style="text-align:center;">Gauge</th>
				  		<th style="text-align:center;">Weight</th>
				  		<th style="text-align:center;">Finishing Type</th>
				  		<th style="text-align:center;">Start Time</th>
				  		<th style="text-align:center;">End Time</th>
				  		<th></th>
				  	</thead>

				  	<tbody>
				  		@foreach($productions as $production)
							<tr >
								<td style="text-align:center;">{{$production->rollnumber}}</td>
								<td style="text-align:center;">{{$production->size}}</td>
								<td style="text-align:center;">{{$production->gauge}}</td>
								<td style="text-align:center;">{{$production->weight}}</td>
								<td style="text-align:center;">{{$production->finishingtype}}</td>
								<td style="text-align:center;">{{$production->starttime}}</td>
								<td style="text-align:center;">{{$production->endtime}}</td>
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