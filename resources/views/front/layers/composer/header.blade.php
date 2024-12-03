<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{route('Index')}}" class="active">Home</a></li>
                      <li><a href="{{route('Ourshops')}}">Our Shop</a></li>
                      <li><a href="{{route('Productdetails')}}">Product Details</a></li>
                      <li><a href="{{route('Contactus')}}">Contact Us</a></li>

                      @guest
                      <li><a href="{{route('user.login')}}">Sign In</a></li>
                      <li><a href="{{route('user.logout')}}">Registration</a></li>
                      @endguest
                      @auth
                      <li><a href="{{route('admin.dashboard')}}">Admin</a><li>
                      <li><a href="{{route('user.logout')}}">Logout</a></li>
                      <li><a href="{{route('user.profile')}}">{{auth()->user()->name}}</a></li>
                      @endauth

                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
