@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns m-t-20">
		<div class="column is-4">
			<h2 class="title is-admin">Add New Post</h2>
		</div>
	</div>

	<hr class="hr-special">
	<form action="{{ route("posts.store") }}" method="POST">
		{{ csrf_field() }}
		<div class="columns">
			<div class="column is-three-quarters-desktop">
				 <b-field>
		            <b-input type="text" placeholder="Post Title" size="is-large">
		            </b-input>
		          </b-field>
				<p>{{ url('/blog') }}</p>

				<b-field class='m-t-40'>
					<b-input type="textarea" placeholder="Comopser your masterpiece" row="50" ></b-input>
				</b-field>

			</div>
			<div class="column is-one-quarters-desktop is-narrow-tablet">
				
				<div class="card card-widget">
					<div class="author-widget widget-area">
						<div class="selected-author">
							<img src="https://placehold.it/50x50">
							<div class="author">
								<h4>Eslam Elbadry</h4>
								<p class="subtitle">
									(elbadry)
								</p>
							</div>
						</div>
					</div> <!-- End .author-widget -->

					<div class="post-status-widget widget-area">
						<div class="status-icon">
							<b-icon icon="assignment" size="is-medium"></b-icon>
						</div>
						<div class="status-details">
							<h4><sapn class="draft-emphasis">Draft</sapn> Saved</h4>
							<p>A Few Minutes Ago</p>
						</div>
					</div> <!-- End .post-status-widget -->

					<div class="publish-button-widget widget-area">
						<div class="secondary-action-button">
							<button class="button is-outlined is-fullwidth is-info">Save Draft</button>
						</div>
						<div class="primary-action-button">
							<button class="button is-primary is-fullwidth">Publish</button>
						</div>
					</div> <!-- End .publish-button-widget -->

				</div> <!-- end .card .card-widget -->

			</div>
		</div>
	</form>
</div>
@endsection

@section('scripts')
<script>
	var app = new Vue({
	 el: '#app',
	 data: {}
	});
</script>
@endsection