@extends('master')

@section('content')
	<ul>
	@foreach ($data as $name)
		<li><h1>{{ $name->author }}</h1></li>
	@endforeach
	</ul>
@stop