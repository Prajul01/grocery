<div class="agileits_header fixed">
    <div class="w3l_offers">
        <a href="{{route('products')}}">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form action="{{ route('products') }}" method="GET" role="search">

            <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                <a href="{{ route('products') }}" class=" mt-1">
                            <span class="input-group-btn">

                            </span>
                </a>
            </div>
        </form>
    </div>

    <div class="product_list_header">
                <form action="{{ route('cart.list') }}" method="get" >
                    @csrf
                    <fieldset>
                        <input type="submit" name="submit" value="View your cart" class="button"/>
                    </fieldset>
                </form>
    </div>

    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <div class="mega-dropdown-menu">
                    @if(auth()->user() == NULL)
                        <div class="w3ls_vegetables">
                            <ul class="dropdown-menu drp-mnu">
                                <li><a href="{{url('/login')}}">Login</a></li>
                                <li><a href="{{url('/register')}}">Sign Up</a></li>
                            </ul>
                        </div>
                    @else
                        <ul class="dropdown-menu drp-mnu">
                            <li><a>{{auth()->user()->name}}</a></li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    @endif
                </div>
            </li>
        </ul>
    </div>


    <div class="w3l_header_right1">
        <h2><a href="{{route('contactus.index')}}">Contact Us</a></h2>
    </div>


    <div class="clearfix"></div>
</div>


<!-- script-for sticky-nav -->

<script>
    $(document).ready(function () {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function () {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });


</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="{{route('index')}}"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="{{route('event')}}">Events</a><i>/</i></li>
                <li><a href="{{route('aboutus')}}">About Us</a><i>/</i></li>
                <li><a href="{{route('bestdeal')}}">Best Deals</a><i>/</i></li>
                <li><a href="{{route('services')}}">Services</a><i>/</i></li>
                <li><a href="{{route('products')}}">Products</a><i>/</i></li>
                <li><a href="{{route('your-order')}}">Order(s)</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">

                <li><i class="fa fa-phone" aria-hidden="true"></i>{{$data['setting']->phone}}</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a
                        href="mailto:store@grocery.com">{{$data['setting']->email}}</a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@yield('ribbon')


