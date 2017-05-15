@extends('main')

@section('title','Compact Details')

@section('body_content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Compact Details</h3>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<a href="{{route('compact.create')}}" class="btn btn-primary" style="padding-top:5px; margin-left:110px">Add Compact</a>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover" style="margin-bottom:1px">
				  	<thead>
				  		<th style="text-align:center;">Lot Number</th>
				  		<th style="text-align:center;">LDPE (Kg)</th>
				  		<th style="text-align:center;">LLDPE (Kg)</th>
				  		<th style="text-align:center;">HDPE (Kg)</th>
				  		<th style="text-align:center;">Re Used (Kg)</th>
				  		<th style="text-align:center;">Ca (Kg)</th>
				  		<th style="text-align:center;">Total (Kg)</th>
				  		<th style="text-align:center;">Date</th>
				  		<th></th>
				  	</thead>

				  	<tbody>
				  		@foreach($compacts as $compact)
							<tr >
								<td style="text-align:center;">{{$compact->lotnumber}}</td>
								<td style="text-align:center;">{{$compact->useLDPE}}</td>
								<td style="text-align:center;">{{$compact->useLLDPE}}</td>
								<td style="text-align:center;">{{$compact->useHDPE}}</td>
								<td style="text-align:center;">{{$compact->useReuse}}</td>
								<td style="text-align:center;">{{$compact->Ca}}</td>
								<td style="text-align:center;">{{$compact->total}}</td>
								<td style="text-align:center;">{{$compact->date}}</td>
								<td><a href="{{route('compact.show',$compact->id)}}" class="btn btn-default btn-sm">View</a> 
									<a href="{{route('compact.edit',$compact->id)}}" class="btn btn-default btn-sm">Edit</a></td>
							</tr>
				  		@endforeach
				  	</tbody>
				</table>
				
			</div>
		</div>
	</div>

@endsection