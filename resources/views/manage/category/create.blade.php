@extends('layouts.manage')

@section('content')

<div class="flex-container">
	<div class="columns m-t-20">
		<div class="column">
			<h2 class="title">Create New Category</h2>
		</div>
	</div>
	
	<hr class="hr-special">

	<form action="{{ route('category.store') }}" method="POST">

	@if($errors->any())
		@foreach ($errors->all() as $error)
		<div class="notification is-danger">
			<button class="delete"></button>
			{{ $error }}
		</div>
		@endforeach
	@endif

	{{ csrf_field() }}
		<div class="columns">
			<div class="column">
				<div class="field">
					<label for="title_en" class="label">Title (English): </label>
					<p class="control">
						<input type="text" name="title_en" id="title_en" class="input">
					</p>
				</div>

                <div class="field">
					<label for="title_ar" class="label">Title (عربى): </label>
					<p class="control">
						<input type="text" name="title_ar" dir="auto" id="title_ar" class="input">
					</p>
                </div>
                
                <div class="field">
					<label for="short_description_en" class="label">Short Description (English): </label>
					<p class="control">
						<textarea class="textarea" name="short_description_en" id="short_description_en"  ></textarea>
					</p>
				</div>

                <div class="field">
					<label for="short_description_ar" class="label">Short Description (عربى): </label>
					<p class="control">
						<textarea class="textarea" dir="auto" name="short_description_ar" id="short_description_ar"  ></textarea>
					</p>
				</div>


			
			</div> <!-- end .column -->

		</div>
		<div class="columns">
			<div class="column">
			<hr class="hr-special">
				<button class="button is-success" style="width: 250px">Create New User</button>
			</div>
		</div>
	</form>
		
	
</div>

@endsection

