@extends('master')

@section('content')
	<div class="container">
	<div class="row">
		@foreach ($posts as $post)
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{$post->title}}</h>
				</div>
				<div class="panel-body">
					{{ $post->body }}
					<hr>
					<div class="row">
						<div class="col-md-6 col-xs-6 ">
							<span class="glyphicon glyphicon-time"></span>
							{{ $post->created_at->diffForHumans()}}
						</div>
						<div class="col-md-6 col-xs-6 pull-right">
							<span class="glyphicon glyphicon-user"></span>
							{{ $post->author}}
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
	
@stop