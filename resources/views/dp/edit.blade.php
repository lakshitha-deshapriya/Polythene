@extends('main')

@section('title','Edit Production')

@section('body_content')

	<div class="row">
		{!! Form::model($production, array('route' => array('dailyproductions.update', $production->id), 'files' => true, 'method' => 'PUT')) !!}

		<div class="col-md-8">
			<div class="form-group " style="padding-top:5px">
				<div class="col-md-3">
					{{Form::label('rollnumber','Rollnumber:',['style'=>'margin-bottom:1px'])}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{Form::text('rollnumber',null,['class'=>'form-control','disabled'=>''])}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{Form::label('size','Size:')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{Form::text('size',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
				(Inches)
			</div>

			<div class="form-group " style="padding-top:7px">
				<div class="col-md-3">
					{{ Form:: label('gauge','Gauge:')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: text('gauge',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{ Form:: label('weight','Weight:')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{ Form:: text('weight',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:6px">
				<div class="col-md-3">
					{{ Form:: label('finishingtype','Finishing Type:')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: text('finishingtype',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{ Form:: label('starttime','Start Time:')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{ Form:: text('starttime',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{ Form:: label('endtime','End Time:')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: text('endtime',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{ Form:: label('comment','Comment:')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: textarea('comment',null,array('class'=>'form-control','style'=>'height:130px;'))}}
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			<div >
				<dl class="dl-horizontal">
				  <dt>Created at:</dt> 
				  <dd>{{date('M j, Y h:ia',strtotime($production-> created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j, Y h:ia',strtotime($production-> updated_at))}}</dd>
				</dl>

				<div class="row">
					<div class="col-md-6">
						{{Form::submit('Update',['class'=>'btn btn-success btn-block'])}}
					</div>
					<div class="col-md-6">
						{!! Html::linkRoute('pc.DailyProduction','Cancel',null,array('class'=>'btn btn-danger btn-block'))!!}
					</div>
				</div>
				
			</div>
			
		</div>

		{!!Form::close()!!}
	</div>


@endsection