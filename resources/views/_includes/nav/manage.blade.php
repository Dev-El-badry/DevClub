<div class="side-menu" id="admin-side-menu">
	<div class="menu m-t-30 m-l-10">
		<p class="menu-label">General</p>
		<ul class="menu-list">
			<li><a href="{{ route('manage.dashboard') }}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a></li>
		</ul>

		<p class="menu-label">Content</p>
		<ul class="menu-list">
			<li>
			<a href="{{ route('posts.index') }}" class="{{ Nav::isResource('posts') }}">Blog Posts</a></li>
		</ul>

		<p class="menu-label">Quote</p>
		<ul class="menu-list">
			<li>
			<a href="{{ route('manage.academic_level') }}" class="{{ Nav::isRoute('manage.academic_level') }}">Academic Levels</a></li>
			<a href="{{ route('manage.deadline') }}" class="{{ Nav::isRoute('manage.deadline') }}">Deadlines</a></li>
			<a href="{{ route('category.index') }}" class="{{ Nav::isResource('category') }}">Manage Categories</a></li>
		</ul>

		<p class="menu-label">Administration</p>
		<ul class="menu-list">
			<li><a href="{{ route('users.index') }}" class="{{ Nav::isResource('users') }}">Manage Users</a></li>
			<li><a class="has-submenu {{ Nav::hasSegment(['roles', 'permissions'], 2) }}">Roles &amp; Permissions</a>
				<ul class="submenu">
					<li><a href="{{ route('roles.index') }}" class="{{ Nav::isResource('roles') }}">Roles</a></li>
					<li><a href="{{ route('permissions.index') }}" class="{{ Nav::isResource('permissions') }}">Permissions</a></li>
				</ul>
			</li>

			<li><a class="has-submenu">Example Accordion</a>
				<ul class="submenu">
					<li><a href="{{ route('roles.index') }}">Roles</a></li>
					<li><a href="{{ route('permissions.index') }}">Permissions</a></li>
				</ul>
			</li>
			
			<li><a class="has-submenu">Another Example</a>
				<ul class="submenu">
					<li><a href="{{ route('roles.index') }}">Roles</a></li>
					<li><a href="{{ route('permissions.index') }}">Permissions</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>