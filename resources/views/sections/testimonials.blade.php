<section class="testimonial-area" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-inner">
                    <!-- section title inner -->
                    <span class="subtitle">Testimonials</span>
                    <h2 class="title">Our Happy Clients Says About Us</h2>
                </div>
                <!-- //.section title inner-->
                <!-- //.TO ACTIVE THE CAROUSEL SET THE ID "testimonial-carousel" TO THE FOLLOWED DIV-->
                <div class="testimonial-wrapper" id="testimonial-carousel-REMOVE-FROM-ID">
                    <!-- tesimonial wrapper -->
                    <div class="single-testimonial-item">
                        <!-- single testimonial item -->
                        <div class="descripton">
                            <ul class="ratigs">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                    </a>
                                </li>
                            </ul>
                            <p>With the development of LanCASS Latam Airlines began its technological transformation in the area of Aeronautical Maintenance in Agence's hand, 
                                now we are leaders in productivity, control and continuous improvement tools. The value of Agence is not only the high technology, but also the 
                                flexibility and agility to work as true consultants in technological solutions.
                            </p>
                        </div>
                        <div class="clients-details">
                            <div class="thumb">
                                <img src="{{ asset('img/testimonial/fernandoandrade.jpeg') }}" alt="tesimonial image">
                            </div>
                            <div class="content">
                                <h4 class="title">Fernando Andrade</h4>
                                <span class="post">Director of Lean Projects </span><br>
                                <span class="post"><img src="{{ asset('img/Latam_logo_small.png') }}" width="120px;" alt=""></span>
                            </div>
                        </div>
                    </div>
               
                </div>
                <!-- //.tesimonial wrapper -->
            </div>
            <div class="col-lg-6">
                    <div class="section-title-inner">
                        <!-- section title inner -->
                        <span class="subtitle">Get in Touch</span>
                        <h2 class="title">Send Us Your Comments</h2>
                    </div> 
                    <div class="subscribe-form-wrapper">
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
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>