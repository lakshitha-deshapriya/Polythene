@extends('main')

@section('title','Productions')

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
					<h1>Insert Daily Production</h1>
					<hr>
				</div>
					
				</div>
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-7 col-md-offset-3">
				{!! Form::open(['route' => 'dailyproductions.store','data-parsley-validate' => '']) !!} 
					<div class="form-group " style="padding-top:5px">
						<div class="col-md-3">
							{{ Form:: label('size','Size:')}}
						</div>

						<div class="col-md-6 col-md-offset-3">
							<div class="input-group input-group-sm">
								{{ Form:: text('size',null,array('class'=>'form-control','required'=>''))}}
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

					<div class="form-group " style="padding-top:10px">
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

						<div class="col-md-6">
							<div class="col-md-3">
								<div class="input-group input-group-sm">
									{{ Form::select('starttime1', ['00','01','02','03','04','05','06','07','08','09','10','11','12'], null, ['class'=>'custom-select','required'=>'']) }} 
								</div>
							</div>

							<div class="col-md-1">
								<h3>:</h3>
							</div>
							
							<div class="col-md-3">
								<div class="input-group input-group-sm">
									{{ Form::select('starttime2', ['00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59'], null, ['class'=>'custom-select','required'=>'']) }} 
								</div>
							</div>
							<div class="col-md-2">
								<div class="input-group input-group-sm">
									{{ Form::select('starttime3', ['am','pm'], null, ['class'=>'custom-select','required'=>'']) }} 
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group " style="padding-top:35px">
						<div class="col-md-3">
							{{ Form:: label('endtime','End Time:')}}
						</div>

						<div class="col-md-6 col-md-offset-3">
							<div class="col-md-3">
								<div class="input-group input-group-sm">
									{{ Form::select('endtime1', ['00','01','02','03','04','05','06','07','08','09','10','11','12'], null, ['class'=>'custom-select','required'=>'']) }} 
								</div>
							</div>

							<div class="col-md-1">
								<h3>:</h3>
							</div>
							
							<div class="col-md-3">
								<div class="input-group input-group-sm">
									{{ Form::select('endtime2', ['00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59'], null, ['class'=>'custom-select']) }} 
								</div>
							</div>
							<div class="col-md-2">
								<div class="input-group input-group-sm">
									{{ Form::select('endtime3', ['am','pm'], null, ['class'=>'custom-select']) }} 
								</div>
							</div>
						</div>
					</div>					
					
					<div class="form-group " style="padding-top:40px">
						<div class="col-md-3">
							{{ Form:: label('comment','Comment:')}}
						</div>

						<div class="col-md-6">
							<div class="input-group input-group-sm">
								{{ Form:: textarea('comment',null,array('class'=>'form-control','style'=>'height:130px;'))}}
							</div>
						</div>
					</div>
					
					{{ Form:: submit('Submit',array('class'=>'btn btn-success ', 'style'=> 'margin-top:20px; margin-left:280px; width:150px'))}}
				{!! Form::close() !!}
				

			</div>
		</div>
	</div>
	

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection

