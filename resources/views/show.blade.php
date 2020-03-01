@extends('layouts.app')

@section('content')
<div class="container">
<div class="card" align="center" style=" width: 500px">
	@foreach($posts as $post)
		<img class="card-img-top" src="https://images.wallpaperscraft.ru/image/kotyata_koty_art_nezhnost_96804_1920x1080.jpg"/ enctype="multipart/form-data">
		<div class="card-body">
			<div class="card-title"><b>{{ $post->name }}</b></div>
			<p class="card-text">{{ $post->detail }}</p>
			<a href="{{ action('PostController@index') }}" class="btn btn-primary">Back</a>
		</div>
	@endforeach
</div>
</div>
@endsection