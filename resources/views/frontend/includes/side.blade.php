<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    @foreach($data['category']  as $categories)
                        <li class="dropdown mega-dropdown active">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $categories->name }}
                                </a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        @foreach($data['subcategory']  as $sub)
                                            @if($categories->id == $sub->category_id )
                                                <li><a href="{{route('subcategory',$sub->id)}}" id="sub_category_id" >{{$sub->name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    @yield('slider')
    <div class="clearfix"></div>
</div>
