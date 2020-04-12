<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.head')
<body data-ma-header="lightblue" id="top">
    <div id="app">
        @yield('content')
    </div>

    <!-- preloader area start -->
    <div class="preloader-area">
        <div class="preloader-inner" id="preloader">
            <div class='preloader-body'>
                <!-- preloader body start -->
                <span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                </span>
                <div class='base'>
                    <span></span>
                    <div class='face'></div>
                </div>
            </div>
            <!-- preloader body start -->
        </div>
    </div>
    <!-- preloader area end -->

    <!-- footer area start -->
    @include('partials.footer')
    <!-- footer area end -->

    <div class="back-to-top">
        <!-- back to top start -->
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    
    <!-- PLUGINS & SCRIPTS -->
    <!-- jquery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- way poin js-->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- imageloaded js-->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope js-->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- wow js-->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- bootstrap datetimepicker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <!-- counterup js-->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- main -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- scroll to html tag element -->
    <script src="{{ asset('js/scroll_to_tag.js') }}"></script>

    @yield('scripts')

    <script>
        $(".single-why-us-box").hover(
            function(){
                var item = $(this).data('id');
                var imageToShow = imageName(item, 'color_logo');
                $("#id_"+item).html('<img src="img/icons/'+imageToShow+'" alt="Continuous '+item+' Icon">');
            }, function(){
                var item = $(this).data('id');
                var imageToShow = imageName(item, 'color_white');
                $("#id_"+item).html('<img src="img/icons/'+imageToShow+'" alt="Continuous '+item+' Icon">');
            });

        function imageName(theName, color = 'color_logo'){
            if(color == 'color_logo'){
                return 'icon-'+theName+'_color_logo.png';
            }else if(color == 'color_white'){
                return 'icon-'+theName+'-white.png';
            }
        }
    </script>
    
</body>
</html>
