@extends('layouts.manage')

@section("content")

<div class="flex-container">
	<div class="columns">
		<div class="column">
			<h2 class="title">Manage Bolg Posts</h2>
		</div>
		<div class="column">
			<a href="{{ route('posts.create') }}" class="button is-primary">
				<i class="fa fa-add"></i> &nbsp; Add New Post
			</a>
		</div>
	</div>
	<hr class="hr-speical">

</div> <!-- end flex-container -->

@endsection