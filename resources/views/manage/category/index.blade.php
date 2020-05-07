@extends('layouts.manage')

@section('content')

<div class="flex-container">
	<div class="columns m-t-100">
		<div class="column">
			<h2 class="title">Manage Categories</h2>
		</div>
		<div class="column">
			<a href="{{ route('category.create') }}" class="button is-primary is-pulled-right">
				<i class="fa fa-user-add m-r-10"></i> Create New Category
			</a>
		</div>
	</div>
	@if(Session::has('msg_del'))
	<div class="notification is-danger">
		<button class="delete"></button>
		{{ session('msg_del') }}
	  </div>
	@endif
	<hr class="hr-special">
	
	<div class="card">
		<div class="card-content">
			<table class="table is-striped is-narrow">
				<thead>
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
				</thead>

				<tbody>
				@forelse($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->title_en }}<hr>{{ $category->title_ar }}</td>
						<td>{{ $category->short_description_en }} <hr> {{  $category->short_description_ar }}</td>
						<td><a href="{{ route('category.show', $category->id) }}" class="button is-outlined">View</a></td>
                    </tr>
                @empty
                    <tr style="color: red">
                        <td>Categories Table Is Empty</td>
                    </tr>
				@endforelse
				</tbody>
			</table>
		</div>
	</div>
	{{ $categories->links()  }}
</div>

@endsection