@extends('layouts.frontend')

@section('content')

    	<!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>Menu</span>
        </a>
    
        <!-- Top content -->
        {{-- <div class="top-content section-container" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn">Bootstrap 4 Template with <strong>Sidebar Menu</strong></h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                A template with Sidebar Menu made with the Bootstrap 4 framework. Download the template or learn how to create it, step by step, on 
                                <a href="https://azmind.com"><strong>AZMIND</strong></a>.
                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">							
                            <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                <i class="fas fa-book-open"></i> Learn More
                            </a>
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                <i class="fas fa-pencil-alt"></i> Our Projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="top-content">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
              </ol>
              <div class="carousel-inner" role="listbox" style="background-image: url({{ asset('frontend/assets/img/backgrounds/3.jpg')}})">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">First Slide</h2>
                    <p class="lead">This is a description for the first slide.</p>
                  </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/backgrounds/4.jpg')}})">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Second Slide</h2>
                    <p class="lead">This is a description for the second slide.</p>
                  </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                {{-- <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Third Slide</h2>
                    <p class="lead">This is a description for the third slide.</p>
                  </div>
                </div> --}}
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </header>

        <!-- Section 1 -->
        <div class="section-1-container section-container" id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col section-1 section-description wow fadeIn">
                        <h2><strong>PROFIL</strong></h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-magic"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>VISI</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInDown">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>MISI</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-location-arrow"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>FUNGSI & TUJUAN</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="fasilitas-container section-container section-container-gray-bg" id="fasilitas">
            <div class="container">
                <div class="row">
                    <div class="col section-2 section-description wow fadeIn">
                        <h2><strong>FASILITAS</strong> </h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-paperclip"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Fasilitas 1</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Fasilitas 2</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Fasilitas 3</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Fasilitas 4</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        {{-- <div class="section-2-container section-container section-container-gray-bg" id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col section-2 section-description wow fadeIn">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 section-2-box wow fadeInLeft">
                        <h3>About Us</h3>
                        <p class="medium-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud. 
                            Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                        </p>
                    </div>
                    <div class="col-4 section-2-box wow fadeInUp">
                        <img src="{{ asset('frontend/assets/img/about-us.jpg') }}" alt="about-us">
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Section 3 -->
        {{-- <div class="section-3-container section-container" id="section-3">
            <div class="container">
                
                <div class="row">
                    <div class="col section-3 section-description wow fadeIn">
                        <h2>Our Projects</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-paperclip"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Ut wisi enim ad minim</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Sed do eiusmod tempor</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Quis nostrud exerci tat</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Minim veniam quis nostrud</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        <!-- Section 4 -->
        {{-- <div class="section-4-container section-container section-container-image-bg" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col section-4 section-description wow fadeInLeftBig">
                        <h2>We Think That...</h2>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
                            aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                            <i class="fas fa-envelope"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- PRESTASI -->
        <div class="prestasi-container section-container" id="prestasi">
            <div class="container">
                <div class="row">
                    <div class="col section-5 section-description wow fadeIn">
                        <h2><strong>PRESTASI</strong> </h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 section-5-box wow fadeInUp">
                        <div class="section-5-box-image"><img src="{{ asset('frontend/assets/img/portfolio/1.jpg') }}" alt="portfolio-1"></div>
                        <h3><a href="#">Prestasi 1</a> <i class="fas fa-angle-right"></i></h3>
                        <div class="section-5-box-date"><i class="far fa-calendar"></i> June 2019</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-md-4 section-5-box wow fadeInDown">
                        <div class="section-5-box-image"><img src="{{ asset('frontend/assets/img/portfolio/2.jpg') }}" alt="portfolio-2"></div>
                        <h3><a href="#">Prestasi 2</a> <i class="fas fa-angle-right"></i></h3>
                        <div class="section-5-box-date"><i class="far fa-calendar"></i> February 2019</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-md-4 section-5-box wow fadeInUp">
                        <div class="section-5-box-image"><img src="{{ asset('frontend/assets/img/portfolio/3.jpg') }}" alt="portfolio-3"></div>
                        <h3><a href="#">Prestasi 3</a> <i class="fas fa-angle-right"></i></h3>
                        <div class="section-5-box-date"><i class="far fa-calendar"></i> November 2018</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized" href="#" role="button">
                            <i class="fas fa-sync"></i> View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 6 -->
        <div class="contact-us-container section-container" id="contact-us" style="background-image: url({{ asset('frontend/assets/img/backgrounds/1.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col section-6 section-description wow fadeIn">
                        <h2 style="color: white;"><strong>CONTACT US</strong></h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        {{-- <p>Send us an email using the form below or follow us on our social media channels.</p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 section-6-box wow fadeInUp">
                        {{-- <h3>By eMail</h3> --}}
                        {{-- <div class="section-6-form">
                            <form role="form" action="assets/contact.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">Subject</label>
                                    <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">Message</label>
                                    <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-customized"><i class="fas fa-paper-plane"></i> Send Message</button>
                            </form>
                        </div> --}}
                        <h4 style="color: white;">Address</h4>
                        <h6> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quibusdam nemo ad id quis vitae sit repellat dolorem! Ea perferendis quam ipsam id quaerat nemo? Dolores, assumenda possimus. Neque, veniam?</h6> <br>

                        <h4 style="color: white;">No. Telepon :</h4>
                        <h6>021-299-8999</h6>
                    </div>
                    <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
                        <h3 style="color: white;">Follow us</h3>
                        <div class="section-6-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            {{-- <a href="#"><i class="fab fa-dribbble"></i></a> --}}
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            {{-- <a href="#"><i class="fab fa-pinterest"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
@endsection