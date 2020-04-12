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
                        <div class="row">
                            <!--li class="ul-full-width-item active" data-filter="*">All</li-->
                            @foreach($categories as $category)
                                @if($category->id == 1)
                                    <div class="ul-full-width-item col-xs-12 col-sm-3 active  pdlr-min" id="id_{{ $category->id }}" >
                                        <a class="btn-link-portfolio btn-block">{{ $category->name }}</a>
                                    </div>
                                @else
                                    <div class="ul-full-width-item col-xs-12 col-sm-3 pdlr-min" id="id_{{ $category->id }}" >
                                        <a class="btn-link-portfolio btn-block">{{ $category->name }}</a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <hr>

                        <!--ul class="ul-full-width">
                           
                            foreach($categories as $category)
                                if($category->id == 1)
                                    <li class="ul-full-width-item col-xs-12 col-sm-3 active" class="col-xs-12" id="id_{{ $category->id }}" >{{ $category->name }}</li>
                                else
                                    <li class="ul-full-width-item col-xs-12 col-sm-3" class="col-xs-12" id="id_{{ $category->id }}" >{{ $category->name }}</li>
                                endif
                            endforeach
                        </ul-->


                    </div>
                    <!-- // portfolio menu wrpper -->
                    <div class="portfolio-content-wrapper" id="portfolio-content-wrapper" style="heigh: 400px;">
                        <!-- portfolio content wrapper -->
                        @foreach($categories as $category)
                            @if($category->id !== 1)
                                <div class="elemento single-portfolio-wrapper" id="id_portfl_{{ $category->id }}" style="margin:0px; display: none; padding:0px;">
                                    <a href="{{ route('services', $category->id) }}"  style="position: relative;" >
                                        <button class="boxed-btn btn-rounded blank btn-portfolio" >View </button>    
                                        <img src="{{ asset('img/portfolio/'.$category->image) }}" alt="portfolio images">
                                    </a>
                                </div>
                            @else
                                <div class="elemento single-portfolio-wrapper" id="id_portfl_{{ $category->id }}" style="margin:0px; padding:0px;">
                                    <a href="{{ route('services', $category->id) }}" class="link-portfolio">
                                        <button class="boxed-btn btn-rounded blank btn-portfolio" >View </button>    
                                        <img src="{{ asset('img/portfolio/'.$category->image) }}"  alt="portfolio images">
                                    </a>
                                </div>
                                
                            @endif
                        @endforeach
                    </div>
                    <!-- //portfolio content wrapper -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- //container -->
    </section>

 