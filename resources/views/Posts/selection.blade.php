@extends('master')


@section('content')
	@if($res)
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<select class="form-control">
					@foreach ($res as $select)
						<option>{{ "id : " . ( $select->id < 10 ? "0".$select->id : $select->id) }}{{" - Title : " . $select->title }} </option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	@else
	{{ "No Content Avialabe"}}
	@endif
@stop

