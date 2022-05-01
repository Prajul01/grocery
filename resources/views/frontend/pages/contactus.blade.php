@extends('frontend.layout.frontend')
@section('ribbon')

    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span>
                </li>
                <li>Contact-Us</li>
            </ul>
        </div>
    </div>

@endsection
@section('slider')
{{--    @if(Session::has('success'))--}}
{{--        <p class="alert alert-success">{{Session::get('success')}}</p>--}}
{{--    @endif--}}
{{--    @if(Session::has('error'))--}}
{{--        <p class="alert alert-danger">{{Session::get('danger')}}</p>--}}
{{--    @endif--}}
{{--    @if(Session::has('warning'))--}}
{{--        <p class="alert alert-warning">{{Session::get('warning')}}</p>--}}
{{--    @endif--}}
    <div class="w3l_banner_nav_right">
        <!-- mail -->
        <div class="mail">

            <h3>Mail Us</h3>
            <div class="agileinfo_mail_grids">

                <div class="col-md-4 agileinfo_mail_grid_left">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i></li>
                        <li>address<span>{{$data['setting']->address}}</span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                        <li>email<span><a href="mailto:info@example.com">{{$data['setting']->email}}</a></span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>call to us<span>{{$data['setting']->phone}}</span></li>
                    </ul>
                </div>
                <div class="col-md-8 agileinfo_mail_grid_right">
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="name"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
                            <input type="email" name="email"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                        </div>
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="phone"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
                            <input type="text" name="subject"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //mail -->
    </div>
@endsection
@section('contents')
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.951559481293!2d85.3377355747762!3d27.702592731175404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199c57ba27b5%3A0xde93b6685bb60872!2sOld%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1649571970500!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
@endsection
@section('jss')
    <script>
        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('success') }}");
        @endif


            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error("{{ session('error') }}");
        @endif
    </script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  @endsection

