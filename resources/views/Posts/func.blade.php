@extends('master')

@section('content')

	@if ($data)
	<table class="table table-striped">
	<th>ID</th>
	<th>Post Title</th>
	<th>Post Author</th>
	<th>Post Creation Date</th>
		@foreach ($data as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->author}}</td>
			<td>{{$post->created_at}}</td>
		</tr>
		@endforeach 
		</tr>
	@endif 

	</table>
@stop