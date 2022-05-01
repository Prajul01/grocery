<div class="container">
    <div class="w3agile_newsletter_left">
        <h3>sign up for our newsletter</h3>
    </div>
    <div class="w3agile_newsletter_right">
        <form action="{{route('suscribers.store')}}" method="post">
            @csrf
            @if(auth()->user() != NULL)
                <input type="text" value="{{auth()->user()->name}}" name="name" id="name" hidden>
            @endif
            @if(auth()->user()!= NULL)
            <input type="email" name="email"  onfocus="this.value = '';"
                   onblur="if (this.value == '') {this.value = 'Email';}" required="" >
            <input type="submit" value="subscribe now">
            @else
                <input type="email" name="email" value="" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="subscribe now">
            @endif
        </form>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 w3_footer_grid">
            <h3>information</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="{{route('event')}}">Events</a></li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('bestdeal')}}">Best Deals</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
{{--                <li><a href="short-codes.html">Short Codes</a></li>--}}
            </ul>
            <div class="clearfix"></div>
        </div>



        <div class="col-md-3 w3_footer_grid">
            <h3>policy info</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('privacy')}}">privacy policy</a></li>

            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>what in stores</h3>
            <ul class="w3_footer_grid_list">
                @foreach($data['top'] as $pro)
                <li><a href="{{route('subcategory',$pro->id)}}"">{{$pro->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>100% secure payments</h4>
                    <img src="{{asset('frontend/images/Stripe.png')}}" alt=" " style="height: 50px; width: 150px;"/>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="wthree_footer_copy">
            <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
