
@extends('layouts.app')
@section('title','Homepage')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')

    <!-- support bar area start  -->
    @include('sections.support_bar')
    <!-- support bar area end  -->

    <!-- navbar area start -->
    @include('partials.navbar-home')
    <!-- navbar area end -->

    <!-- header area start  -->
    @include('sections.header')
    <!-- header area end  -->

    <!-- about area start  -->
    @include('sections.about')
    <!-- about area end -->

    <!-- why us area start -->
    @include('sections.whyus')
    <!-- why us area end -->

    <!-- portfolio area start -->
    @include('sections.portfolio')
    <!-- portfolio area end -->

    <!-- our service area start -->
    @include('sections.ourservices')
    <!-- our service area end -->

    <!-- teastimonal area start -->
    @include('sections.testimonials')
    <!-- teastimonal area end -->

@endsection

@section('scripts')
    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/toastr/toastr-personalized.js') }}"></script>
    <script>

    $('.ul-full-width-item').click(function(){
        var id = $(this).attr('id');
        var idNum = id.substr(3,id.length);
        $('.elemento').hide();
        $('#id_portfl_'+idNum).show();
        $('#id_portfl_'+idNum).addClass('animated zoomIn');
    });

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
            if (!message) {
                    $('#message').removeClass('error');
                    $('#message').addClass('error').attr('placeholder','Please Enter Your Message')
                }else{
                    $('#message').removeClass('error');
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
                    $(this)[0].reset();
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

