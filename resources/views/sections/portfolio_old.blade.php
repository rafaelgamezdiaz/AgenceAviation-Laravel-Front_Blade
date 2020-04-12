<section class="portfolio-area" id="portfolio"> <!-- style="background-color: #f9f7d8;" -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="section-title">
                    <!-- section title -->
                    <h2>Our Portfolio</h2>
                    <p>We offer an integrated portfolio of solutions giving companies a variety of choices that can be applied depending on your need.</p>
                </div>
                <!-- /.section title -->
            </div>
        </div>
        <hr>
        <br><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme team-area-bottom" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
                    @foreach($categories as $category)
                        <div class="single-team-member">
                            <!-- single team member -->
                            <div class="thumb">
                                <img class="img-responsive" src="{{ asset('img/portfolio/'.$category->image) }}" alt="portfolio images">
                            </div>
                            <div class="content">
                                <h6 class="title">{{ $category->name }}</h6>
                                <span class="post"><a  class="btn btn-info btn-sm" style="background-color: #002f43;" href="{{ route('services', $category->id) }}"> Read More!</a></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="section-title">
                        <!-- section title -->
                        <h2>Our Portfolio</h2>
                        <p>We offer an integrated portfolio of solutions giving companies a variety of choices that can be applied depending on your need.</p>
                    </div>
                    <!-- /.section title -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu-wrapper text-center">
                        <!-- portfolio menu wrpper -->
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".heli">Helocopter</li>
                            <li data-filter=".flight">Flight</li>
                            <li data-filter=".aviation">Aviation</li>
                            <li data-filter=".pilot">Pilot</li>
                        </ul>
                    </div>
                    <!-- // portfolio menu wrpper -->
                    <div class="portfolio-content-wrapper" id="portfolio-content-wrapper">
                        <!-- portfolio content wrapper -->
                        <div class="single-portfolio-wrapper grid-item heli flight">
                            <img src="assets/img/portfolio/01.jpg" alt="portfolio images">
                        </div>
                        <div class="single-portfolio-wrapper grid-item flight">
                            <img src="assets/img/portfolio/02.jpg" alt="portfolio images">
                        </div>
                        <div class="single-portfolio-wrapper grid-item aviation">
                            <img src="assets/img/portfolio/03.jpg" alt="portfolio images">
                        </div>
                        <div class="single-portfolio-wrapper grid-item pilot">
                            <img src="assets/img/portfolio/04.jpg" alt="portfolio images">
                        </div>
                    </div>
                    <!-- //portfolio content wrapper -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- //container -->
    </section>

    <!--script>
     //  $('#boton').click(function(e){
         //  e.preventDefault();
           
         //  alert('hizo click');
            //$('.single-portfolio-wrapper').css('width', '100%');
            //$(".single-portfolio-wrapper").removeClass("col-md-6");
      //  });

       /* function prevenir(event){
            event.preventDefault();
            alert('Ok');
        }*/
        
    </script-->