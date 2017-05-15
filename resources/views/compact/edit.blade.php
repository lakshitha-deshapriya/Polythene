@extends('main')

@section('title','Edit Production')

@section('body_content')

	<div class="row">
		{!! Form::model($compact, array('route' => array('compact.update', $compact->id), 'files' => true, 'method' => 'PUT')) !!}

		<div class="col-md-8">
			<div class="form-group " style="padding-top:5px">
				<div class="col-md-3">
					{{Form::label('lotnumber','Lot Number',['style'=>'margin-bottom:1px'])}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{Form::text('lotnumber',null,['class'=>'form-control','disabled'=>''])}}
					</div>
				</div>
			</div>

			<div class="form-group " style="padding-top:30px">
				<div class="col-md-3">
					{{Form::label('useLDPE','LDPE')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{Form::text('useLDPE',null,array('class'=>'form-control'))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:7px">
				<div class="col-md-3">
					{{ Form:: label('useLLDPE','LLDPE')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: text('useLLDPE',null,array('class'=>'form-control'))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:7px">
				<div class="col-md-3">
					{{ Form:: label('useHDPE','HEDPE')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{ Form:: text('useHDPE',null,array('class'=>'form-control'))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:7px">
				<div class="col-md-3">
					{{ Form:: label('useReuse','Re Use')}}
				</div>

				<div class="col-md-6 col-md-offset-3">
					<div class="input-group input-group-sm">
						{{ Form:: text('useReuse',null,array('class'=>'form-control'))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:7px">
				<div class="col-md-3">
					{{ Form:: label('Ca','Ca')}}
				</div>

				<div class="col-md-6 ">
					<div class="input-group input-group-sm">
						{{ Form:: text('Ca',null,array('class'=>'form-control','required'=>''))}}
					</div>
				</div>
				(Kg)
			</div>

			<div class="form-group " style="padding-top:7px">
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
				  <dd>{{date('M j, Y h:ia',strtotime($compact-> created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j, Y h:ia',strtotime($compact-> updated_at))}}</dd>
				</dl>

				<div class="row">
					<div class="col-md-6">
						{{Form::submit('Update',['class'=>'btn btn-success btn-block'])}}
					</div>
					<div class="col-md-6">
						{!! Html::linkRoute('pc.CompactDetails','Cancel',null,array('class'=>'btn btn-danger btn-block'))!!}
					</div>
				</div>
				
			</div>
			
		</div>

		{!!Form::close()!!}
	</div>


@endsection