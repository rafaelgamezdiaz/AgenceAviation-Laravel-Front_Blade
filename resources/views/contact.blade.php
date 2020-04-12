@extends('layouts.app')
@section('title','Contact us')

@section('content')

    <!-- support bar area start  -->
    @include('sections.support_bar')
    <!-- support bar area end  -->

    <!-- navbar area start -->
    @include('partials.navbar')
    <!-- navbar area end -->

        <div class="breadcumb-area contact-breadcumb-bg">
        <!-- breadcumb area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcumb-inner">
                        <!-- breadcumb inner area -->
                        <h1 class="title">Contact Now</h1>
                    </div>
                    <!-- //.breadcumb inner area -->
                </div>
            </div>
        </div>
    </div>
    <!-- //.breadcumb area -->

    <!-- contact page content area start -->
    <section class="contact-page-content-area" style="background-color: #e8e8fa;">
        <div class="contact-top-area"> <!--  contact-top-bg -->
            <!-- contact top area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-contact-info-box">
                            <!-- cotnact info box -->
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span class="title">The Graybar ,</span>  
                                <span class="title">Building - 420</span> 
                                <span class="title">Lexington Avenue, Suite 300</span>
                            </div>
                        </div>
                        <!-- //.contact info box -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-contact-info-box">
                            <!-- cotnact info box -->
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                            <div class="content">
                                <span class="title">contact@agence.us</span>
                            </div>
                        </div>
                        <!-- //.contact info box -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-contact-info-box">
                            <!-- cotnact info box -->
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="content">
                                <span class="title">+1 (212) 652-3305</span>
                            </div>
                        </div>
                        <!-- //.contact info box -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-contact-info-box">
                            <!-- cotnact info box -->
                            <div class="icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="content">
                                <span class="title">9.00am - 18.00pm</span>
                            </div>
                        </div>
                        <!-- //.contact info box -->
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </div>
        <!-- //. contact top area -->
        <div class="contact-bottom-area">
            <!-- contact bottom area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-bottom-inner">
                            <!-- contact bottom inner -->
                            <div class="row">
                                <div class="col-lg-5 ">
                                    <div class="left-content-area">
                                        <iframe class="resp-iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3022.4220491508177!2d-73.97812878508762!3d40.7527411793275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sThe+Graybar+Building+-+420+Lexington+Avenue%2C+Suite+300!5e0!3m2!1ses!2sve!4v1541183452065" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="right-content-area">
                                        <h3 class="title text-center">Get In Touch</h3>
                                        <div class="contact-form-wrapper">
                                            <form id="contact_form_submit" method="POST" action="{{ route('getintouch') }}">
                                                <input name="_token" type="hidden" value = "{{ csrf_token() }}" id="token">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-element margin-bottom-20">
                                                            <input type="text" id="name" name="name" placeholder="Your Name" class="input-field borderd">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-element margin-bottom-20">
                                                            <input type="email" id="email" name="email" placeholder="Email Address" class="input-field borderd">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea rows="10" cols="30" id="message" name="message" placeholder="Your Message" class="input-field borderd textarea"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" id="submit-btn" class="submit-btn btn-rounded btn-center">GET IN TOUCH</button>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- contact bottom inner -->
                    </div>
                    <!-- //.col-lg-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container  -->
        </div>
        <!-- //.contact bottom area -->
    </section>
    <!-- contact page content area end -->

@endsection

@section('scripts')
    <!-- counterup js-->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi-rrw9lb-uKY1vHd9gkzuBpj4-hiBsUA&callback=initMap" async defer></script>
    <!-- google map activate js -->
    <script src="{{ asset('js/goolg-map-activate.js') }}"></script>
    <script>
	     /* Save the Avatar */
    $("#contact_form_submit").submit(function(e){
        e.preventDefault();
        var url = '/getintouch';

        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        
        if(!name || !email || !message) {
            // VALIDATIONS
            if (!name) {
                $('#name').removeClass('error');
                $('#name').addClass('error').attr('placeholder','Please Enter Name');
            }else{
                $('#name').removeClass('error');
            }
            if (!email) {
                    $('#email').removeClass('error');
                    $('#email').addClass('error').attr('placeholder','Please Enter Email')
                }else{
                    $('#email').removeClass('error');
                }
  	}else{
            var token = $('#token').val(); 
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': token },
                beforeSend: function(){
                    $('#submit-btn').html('SENDING ...');
                },
                success: function(result){
                    $('#submit-btn').html('Get in Touch');
                    toast = toastr['info'](result.message, 'Success!'); 
                },
                error: function(message){
                    console.log('Something happend!');
                    toast = toastr['error']('Something happend!', 'Sorry'); 
                }
            });
        }
    })

    </script>
@endsection
