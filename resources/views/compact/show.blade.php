@extends('main')

@section('title','View Production')

@section('body_content')

	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-3">
					<h4>Lot Number</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->lotnumber}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>LDPE</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->useLDPE}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>LLDPE</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->useLLDPE}}</p>
					<h4></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>HDPE</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->useHDPE}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Re Use</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->useReuse}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Ca</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->Ca}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Total</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->total}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Date</h4>
				</div>
				<div class="col-md-9">
					<p class="lead">{{ $compact->date}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<h4>Comment</h4>
				</div>
				<div class="col-md-9">
					<p >{{ $compact->comment}}</p>
				</div>
			</div>
			
		</div>

		<div class="col-md-4">
			<div class="card" style="padding:5px; background-color:#D6FBDF">
				<dl>
				  <dt>Created at:</dt> 
				  <dd>{{date('M j, Y h:ia',strtotime($compact-> created_at))}}</dd>
				</dl>
				<dl>
					<dt>Last Updated:</dt>
					<dd>{{date('M j, Y h:ia',strtotime($compact-> updated_at))}}</dd>
				</dl>

				<hr>
				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('compact.edit','Edit',array($compact->id),array('class'=>'btn btn-primary btn-block'))!!}

					</div>
					<div class="col-md-6">
						{!!Form::open(['route' => array('compact.destroy', $compact->id), 'method'=>'delete'])!!}

							{{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
						
						{!!Form::close()!!}
					</div>
					<div class="col-md-12" style="padding-top:5px">
						{!! Html::linkRoute('pc.CompactDetails','See All Compacts',array($compact->id),array('class'=>'btn btn-success btn-block'))!!}
					</div>
					
				</div>
				
			</div>
			

		</div>
	</div>

	

@endsection