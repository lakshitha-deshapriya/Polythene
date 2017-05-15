@extends('main')

@section('title','View Production')

@section('body_content')

	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-3">
					<h4>Roll Number</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production -> rollnumber}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Size</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->size}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Gauge</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->gauge}}</p>
					<h4></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Weight</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->weight}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Finishing Type</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->finishingtype}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Start Time</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->starttime}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>End Time</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $production->endtime}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Comment</h4>
				</div>
				<div class="col-md-9">
					<p >{{ $production->comment}}</p>
				</div>
			</div>
			
		</div>

		<div class="col-md-4">
			<div class="card" style="padding:5px; background-color:#D6FBDF">
				<dl>
				  <dt>Created at:</dt> 
				  <dd>{{date('M j, Y h:ia',strtotime($production-> created_at))}}</dd>
				</dl>
				<dl>
					<dt>Last Updated:</dt>
					<dd>{{date('M j, Y h:ia',strtotime($production-> updated_at))}}</dd>
				</dl>

				<hr>
				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('dailyproductions.edit','Edit',array($production->id),array('class'=>'btn btn-primary btn-block'))!!}

					</div>
					<div class="col-md-6">
						{!!Form::open(['route' => array('dailyproductions.destroy', $production->id), 'method'=>'delete'])!!}

							{{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
						
						{!!Form::close()!!}
					</div>
					<div class="col-md-12" style="padding-top:5px">
						{!! Html::linkRoute('pc.DailyProduction','See All Productions',array($production->id),array('class'=>'btn btn-success btn-block'))!!}
					</div>
					
				</div>
				
			</div>
			

		</div>
	</div>

	

@endsection