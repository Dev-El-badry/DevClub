@extends('layouts.manage')

@section('content')

<div class="flex-container">
	<div class="columns m-t-20">
		<div class="column">
            <h2 class="title">Update Category</h2>
			<p class="subtitle is-italic">({{ $category->title_en }})</p> 
			<div class="buttons ">
				<a href="{{ route('manage.levels_assign.update', $category->id) }}" class="button is-info ">
					<i class="fa fa-upload m-r-10"></i> Upload New Prices
				</a>

				<form action="{{ route('category.destroy', $category->id) }}" method="POST">
					{!! method_field('delete') !!}
   					{!! csrf_field() !!}
					<button  class="button is-danger " type="submit">
						<i class="fa fa-trash m-r-10"></i> Delete Category
					</button>
				</form>

			</div>
        </div>
        
        <div class="column">
			
          
        </div>
	</div>
	
	<hr class="hr-special">
    @if(Session::has('msg'))
    <div class="notification is-success">
        <button class="delete"></button>
        {{ session('msg') }}
      </div>
    @endif

	<form action="{{ route('category.update', $category->id) }}" method="POST">

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
						<input type="text" name="title_en" id="title_en" value="{{ $category->title_en }}" class="input">
					</p>
				</div>

                <div class="field">
					<label for="title_ar" class="label">Title (عربى): </label>
					<p class="control">
						<input type="text" name="title_ar" id="title_ar" dir="auto" value="{{ $category->title_ar }}" class="input">
					</p>
                </div>
                
                <div class="field">
					<label for="short_description_en" class="label">Short Description (English): </label>
					<p class="control">
						<textarea class="textarea" name="short_description_en" id="short_description_en"  >{{ $category->short_description_en }}</textarea>
					</p>
				</div>

                <div class="field">
					<label for="short_description_ar" class="label">Short Description (عربى): </label>
					<p class="control">
						<textarea class="textarea" dir="auto" name="short_description_ar" id="short_description_ar"  >{{ $category->short_description_ar }}</textarea>
					</p>
				</div>


			
			</div> <!-- end .column -->

		</div>
		<div class="columns">
			<div class="column">
			<hr class="hr-special">
				<button class="button is-success" style="width: 250px">Update User</button>
			</div>
		</div>
	</form>
		
	
</div>

@endsection

