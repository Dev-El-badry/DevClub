<div class="top-header">
    <nav class="navbar has-shadow">
        <div class="container is-fluid">
            <div class="navbar-start">
                <a href="{{ route('home') }}" class="navbar-item">
                    <img src="https://bulma.io/images/bulma-logo.png" alt="DevClub.png" />
                </a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuess</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
            </div>
            <div class="navbar-end">
                @if(Auth::guest())
                    <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                    <a href="{{ route('register') }}" class="navbar-item is-tab">Join The Community</a>
                @else
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="is-tab dropdown navbar-item">
                            Hey {{ Auth::user()->name }} <span class="icon"><i class="fa fa-caret-down"></i></span>
                             </button>
                             </div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-user-circle-o m-r-10"></i>
                                            </span> 
                                        Profile</a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-bell m-r-10"></i>
                                            </span>
                                        Notification</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('manage.dashboard') }}">
                                            <span class="icon">
                                                <i class="fa fa-cog m-r-10"></i>
                                            </span>
                                        Manage</a>
                                    </li>

                                    <li class="seperator"></li>

                                    <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                    ">
                                        <span class="icon">
                                            <i class="fa fa-sign-out m-r-10"></i>
                                        </span>Logout</a>
                                        @include('_includes.forms.logout')
                                    </li>
                                </ul>
                           
                       
                    </div>
                @endif
            </div>
        </div>
    </nav> 
</div>