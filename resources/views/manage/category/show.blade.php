@extends('layouts.manage')

@section('content')

<div class="flex-container">
	<div class="columns m-t-20">
		<div class="column">
			<h2 class="title">Show Details Category</h2>
		</div>
		<div class="column">
			<a href="{{ route('category.edit', $category->id) }}" class="button is-primary is-pulled-right">
			<i class="fa fa-edit"></i> &nbsp; Edit Category
			</a>
		</div>
	</div>
	
	<hr class="hr-special">

	<div class="columns">
		<div class="column">
			<div class="field">
				<label for="name" class="label">Title:</label>
			</div>
            <p class="has-background-grey-lighter has-text-black		p-t-10 p-l-10 p-b-10 p-r-10">{{ $category->title_en }} <br> {{ $category->title_ar }}</p>
			
			<div class="field">
				<label for="email" class="label">Short Description:</label>
				<p class="has-background-grey-lighter has-text-black		p-t-10 p-l-10 p-b-10 p-r-10">{{ $category->short_description_en }} <br> {{ $category->short_description_ar }}</span>
			</div>

            <hr class="hr-special">
            <h2 class="title">List Of Prices</h2>
            <div class="card">
                <div class="card-content">
                    <table class="table is-striped is-narrow">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Level Academic</th>
                                <th>Deadline</th>
                                <th>Cost</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
                        <tbody>

                        @forelse($category->level_assign()->with('levels')->get() as $level)
                            <tr>
                                <td>{{ $level->id }}</td>
                                <td>{{ $level->levels->title_en }} <hr> {{ $level->levels->title_ar }} </td>
                                <td>{{ $level->deadlines->period }}  </td>
                                <td>{{ $level->cost }}  </td>
                                
                                <td><a href="{{ route('manage.levels_assign.delete', $level->id) }}" class="button is-danger">
                                    <i class="fa fa-trash fa-lg"></i>
                                </a></td>
                            </tr>
        
                        @empty
                        <tr style="color: red">
                          <td> List Of Prices  Is Empty</td>
                        </tr>
        
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        
		</div>
		
	</div>
</div>

@endsection