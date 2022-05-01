

@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>FAQ's</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
    <div class="banner">

        <div class="w3l_banner_nav_right">
            <!-- faq -->
            <!--Section: FAQ-->
            <section>
                <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
                <p class="text-center mb-5">
                    Find the answers for the most frequently asked questions below
                </p>

                <div class="row">
                    @foreach($data['FAQ'] as $faq)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> {{$faq->question}}</h6>
                        <p>
                            <strong></strong> {{$faq->answer}}
                        </p>
                    </div>
                    @endforeach

                </div>
            </section>
            <!--Section: FAQ-->
            <!-- //faq -->
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

{{--<!-- //footer -->--}}
{{--<!-- Bootstrap Core JavaScript -->--}}
@section('jss')
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        // $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="{{asset('frontend/js/minicart.js')}}"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });

</script>
@endsection
{{--</body>--}}
{{--</html>--}}
