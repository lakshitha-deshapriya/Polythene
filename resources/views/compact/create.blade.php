@extends('main')

@section('title','Compacts')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('body_content')

	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<div class="col-md-11">
					<h1>Insert Compact Details</h1>
					<hr>
				</div>
					
				</div>
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-7 col-md-offset-3">
				{!! Form::open(['route' => 'compact.store','data-parsley-validate' => '']) !!} 
					<div class="form-group " style="padding-top:5px">
						<div class="col-md-2">
							{{ Form:: label('useLDPE','LDPE')}}
						</div>

						<div class="col-md-4">
							<div class="input-group input-group-sm">
								{{ Form:: text('useLDPE',null,array('class'=>'form-control'))}}
							</div>
						</div>
						(Kg)
					</div>
					
					<div class="form-group " style="padding-top:7px">
						<div class="col-md-2">
							{{ Form:: label('useLLDPE','LLDPE')}}
						</div>

						<div class="col-md-4 col-md-offset-3">
							<div class="input-group input-group-sm">
								{{ Form:: text('useLLDPE',null,array('class'=>'form-control'))}}
							</div>
						</div>
						(Kg)
					</div>

					<div class="form-group " style="padding-top:7px">
						<div class="col-md-2">
							{{ Form:: label('useHDPE','HDPE')}}
						</div>

						<div class="col-md-4 ">
							<div class="input-group input-group-sm">
								{{ Form:: text('useHDPE',null,array('class'=>'form-control'))}}
							</div>
						</div>
						(Kg)
					</div>

					<div class="form-group " style="padding-top:7px">
						<div class="col-md-2">
							{{ Form:: label('useReuse','Re Use')}}
						</div>

						<div class="col-md-4 col-md-offset-3">
							<div class="input-group input-group-sm">
								{{ Form:: text('useReuse',null,array('class'=>'form-control'))}}
							</div>
						</div>
						(Kg)
					</div>

					<div class="form-group " style="padding-top:7px">
						<div class="col-md-2">
							{{ Form:: label('Ca','Ca')}}
						</div>

						<div class="col-md-4 ">
							<div class="input-group input-group-sm">
								{{ Form:: text('Ca',null,array('class'=>'form-control','required'=>''))}}
							</div>
						</div>
						(Kg)
					</div>

					<div class="form-group " style="padding-top:20px">
						<div class="col-md-2">
							{{ Form:: label('comment','Comment')}}
						</div>

						<div class="col-md-6">
							<div class="input-group input-group-sm">
								{{ Form:: textarea('comment',null,array('class'=>'form-control','style'=>'height:130px;'))}}
							</div>
						</div>
					</div>
					
					{{ Form:: submit('Submit',array('class'=>'btn btn-success ', 'style'=> 'margin-top:20px; margin-left:220px; width:150px'))}}
				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
	

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection

