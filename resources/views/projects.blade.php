@extends('layouts.app')
@section('title','Project Description')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themeforest/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themeforest/default.css') }}">


@endsection
@section('content')

    <!-- support bar area start  -->
    @include('sections.support_bar')
    <!-- support bar area end  -->

    <!-- navbar area start -->
    @include('partials.navbar')
    <!-- navbar area end -->

    <div class="breadcumb-area contact-breadcumb-bg" style="background-image: url(../img/portfolio/{{ $category->image }});">
        <!-- breadcumb area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcumb-inner">
                        <!-- breadcumb inner area -->
                        <h1 class="title">{{ $category->name }}</h1>
                    </div>
                    <!-- //.breadcumb inner area -->
                </div>
            </div>
        </div>
    </div>
    <!-- //.breadcumb area -->


        <!-- blog details page content area start -->
        <section class="blog-details-content">
            <div class="container">
                @foreach($projects as $project)
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <div class="single-blog-post"><!-- single blog post -->
                                <div class="meta-time"><!-- meta time -->
                                    <span class="date">{{ $indice++ }}</span>
                                </div><!-- //.meta time -->
                                <div class="details-container"><!-- details contaienr -->
                                    <div class="post-body"><!-- post body -->
                                            <h3 class="title">{{ $project->name }}</h3>
                                            <?php echo $project->description; ?>
                                            @foreach($project->videos as $video)
                                                @if($video->url !== '' && $video->url !== null)
                                                    <div class="resp-container-youtube">
                                                        <iframe width="100%" height="315" class="resp-iframe"  src="{{ $video->url }}?rel=0&amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <br>
                                            <?php echo $project->description2; ?>
                                    </div><!-- //.post body -->
                                        @if(count($project->images) > 0)
                                                <hr>
                                                <h5>Example Images</h5>
                                                <div class="sort-destination-loader sort-destination-loader-showing" style="display: inline;">
                                                    <div class="image-gallery sort-destination lightbox row" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                                        @foreach($project->images as $images)
                                                            <div class="col-md-3 col-sm-6 col-xs-12  isotope-item websites">
                                                                    <div class="image-gallery-item">
                                                                        <a href="{{ asset('img/portfolio/project'.$images->project_id.'/'.$images->name) }}" class="lightbox-portfolio">
                                                                            <span class="thumb-info">
                                                                                <span class="thumb-info-wrapper">
                                                                                    <img src="{{ asset('img/portfolio/project'.$images->project_id.'/'.$images->name) }}" class="img-responsive" alt="">
                                                                                    <span class="thumb-info-action">
                                                                                        <span class="thumb-info-action-icon"><i class="fas fa-expand"></i></span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                        @endif
                                    
                                </div>
                            </div>
                        </div><!-- //.col-lg-8 -->  
                    </div><!-- //.row -->

                    <div class="single-post-separator"></div>
                @endforeach
            </div><!-- //.container -->

        <!--div class="body">
            <div role="main" class="main" id="main">
                    <div class="container-fluid p-none">
                        <div id="photographyLightbox" class="mfp-hide">
                            <div class="thumb-gallery">
                                <div class="owl-carousel owl-theme manual thumb-gallery-detail" id="thumbGalleryDetail">
                                    <div>
                                        <span class="img-thumbnail">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom1.jpg') " class="img-responsive">
                                        </span>
                                    </div>
                                    <div>
                                        <span class="img-thumbnail">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom2.jpg') " class="img-responsive">
                                        </span>
                                    </div>
                                    <div>
                                        <span class="img-thumbnail">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom3.jpg') " class="img-responsive">
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="owl-carousel owl-theme manual thumb-gallery-thumbs show-thumbs mt" id="thumbGalleryThumbs">
                                    <div>
                                        <span class="img-thumbnail cur-pointer">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom1.jpg') ">
                                        </span>
                                    </div>
                                    <div>
                                        <span class="img-thumbnail cur-pointer">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom2.jpg') ">
                                        </span>
                                    </div>
                                    <div>
                                        <span class="img-thumbnail cur-pointer">
                                            <img alt="" src=" asset('img/Portfolio/project1/zoom3.jpg') ">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <ul id="portfolioGrid" class="p-none">
                            <span class="grid-sizer col-sm-6 col-md-3"></span>
                            <li class="col-sm-12 col-md-6 isotope-item p-none">
                                <div class="portfolio-grid-item">
                                    <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                        <span class="thumb-info">
                                            <span class="thumb-info-wrapper size-1 m-none">
                                                <span class="thumb-info-background" style="background-image: url(' asset('img/Portfolio/project1/zoom1.jpg') ');"></span>
                                                <h2 class="thumb-info-title font-weight-bold center">
                                                    New challenges
                                                    <span class="thumb-info-sub-title font-weight-light">
                                                        Lorem ipsum dolor sit a met
                                                    </span>
                                                </h2>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-sm-6 col-md-3 isotope-item p-none">
                                <div class="portfolio-grid-item">
                                    <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                        <span class="thumb-info">
                                            <span class="thumb-info-wrapper size-2 m-none">
                                                <span class="thumb-info-background" style="background-image: url(' asset('img/Portfolio/project1/zoom2.jpg') ');"></span>
                                                <span class="thumb-info-plus"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-sm-6 col-md-3 isotope-item p-none">
                                <div class="portfolio-grid-item">
                                    <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                        <span class="thumb-info">
                                            <span class="thumb-info-wrapper size-2 m-none">
                                                <span class="thumb-info-background" style="background-image: url(' asset('img/Portfolio/project1/zoom3.jpg') ');"></span>
                                                <h2 class="thumb-info-title font-weight-bold center">
                                                    Make it happen
                                                    <span class="thumb-info-sub-title font-weight-light">
                                                        Lorem ipsum dolor sit a met
                                                    </span>
                                                </h2>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                
                        </ul>
                    </div>
            </div>
        </div-->

    </section>
    <!-- blog details page content area end -->

@endsection

@section('scripts')
    <script src="{{ asset('js/themeforest/theme.js') }}"></script>
    <script src="{{ asset('js/themeforest/theme.init.js') }}"></script>
@endsection