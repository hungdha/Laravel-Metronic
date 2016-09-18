@extends('app')
@section('content')

<div class="container">
	@if( $user )
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">User profile {{ $user->username }}</div>

					<div class="panel-body">
						
							<ul>
								@foreach( $user as $key => $value )
									<li>{{ $key}} : {{ $value }}</li>
								@endforeach
							</ul>
						
					</div>
				</div>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<div class="panel panel-default">					
					<div class="panel-body">						
						User not found!						
					</div>
				</div>
			</div>
		</div>
	@endif
</div>
	
@endsection