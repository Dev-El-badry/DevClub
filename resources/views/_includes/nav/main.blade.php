<div class="top-header">
    <div class="wrap-header ">
        <div class="container is-fluid">

            <div class="columns">
                <div class="column contact-details">
                    <p>Call To Free +02 (011) 5294-5713 or <a href="#">Request a call</a></p>
                </div>
                <div class="column is-half ">
                    <div class="columns">
                        <div class="column  " >
                            <div class="field ">
                                <p class="control search-box">
                                    <i class="fa fa-search"></i>
                                    <input class="input" type="text" placeholder="search">
                                </p>
                                
                              </div>
                        </div>
                        <div class="column navbar-end">
                            @guest
                            <div class="auth-header">
    
                                <a href="{{ route('login') }}" class="button  is-primary m-r-5 m-l-5">
                                    <span class="icon is-small">
                                        <i class="fa fa-sign-in p-r-15 "></i>
                                      </span>
                                    Sign In</a>
                                <a href="{{ route('register') }}" class="button is-outlined is-primary">Join The Community</a>
                            </div>
                            @else
                                <div class="navbar-item dropdown is-hoverable">
                                    <div class="dropdown-trigger">
                                        <a class="navbar-link">
                                        Hey {{ Auth::user()->name }}
                                         </a>
                                         </div>
                                        <div class="navbar-dropdown is-right">
                                            <a href="#" class="navbar-item">
        
                                                    <span class="icon">
                                                        <i class="fa fa-user-circle-o m-r-10"></i>
                                                    </span>
                                                Profile
                                            </a>
        
                                            <a href="#" class="navbar-item">
                                                <span class="icon">
                                                    <i class="fa fa-bell m-r-10"></i>
                                                </span>
                                            Notification</a>
        
        
                                            <a href="{{ route('manage.dashboard') }}" class="navbar-item">
                                                <span class="icon">
                                                    <i class="fa fa-cog m-r-10"></i>
                                                </span>
                                            Manage</a>
        
                                          <hr class="navbar-divider">
        
                                            <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                            ">
                                                <span class="icon">
                                                    <i class="fa fa-sign-out m-r-10"></i>
                                                </span>Logout</a>
                                                @include('_includes.forms.logout')
        
                                        </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar has-shadow ">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="navbar-item is-padding brand-item">
                    <img src="https://bulma.io/images/bulma-logo.png" alt="DevClub.png" />
                </a>

            @if(Request::segment(1) == 'manage')
                <a class="navbar-item is-hidden-desktop" id="btn-sidemenu-out">
                    <span class="icon">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </a>
            @endif

            <button class="button navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            </div>
            <div class="navbar-menu">
                <div class="navbar-end">

                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Prices</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Our Work</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Reviews</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Essays</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Our Services</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Contact Us</a>
                </div>
              
            </div>
        </div>

        <div class="is-divider" ></div>
    </nav>
  
</div>
