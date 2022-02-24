@extends('layout-komponen.master')
@section('title','Rumah Baim Website') <!-- name title -->
@section('css-internal')
<style>
    .title-about{
        text-align: center;
        font-family: 'Poppins';
        font-size: 36px;
    }
    #img-about{
        Height: 468px;
        Width: 428px;
        margin-top: 80px;
    }
    #img-about1{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 120px;
        height: 8px;
        margin-top: 24px;
    }
    .about-content{
        font-size: 20px;
        line-height: 30px;
        margin-top: 85px;
    }
    .btn-more{
        font-family: "Poppins";
        text-transform: uppercase;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 6px 24px;
        border-radius: 50px;
        transition: 0.5s;
        margin-bottom: 30px;
        border: 2px solid #71c55d;
        background: #fff;
        color: #71c55d;
        text-decoration: none;
        margin-left: 150px;
    }
</style>
@endsection
@section('konten')
<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
        <h1>Welcome to Rumah Baim</h1>
        <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
        <img src="assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
        <a href="#about-us" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us padd-section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">

            <div class="title-about">
                <h2>Tentang Kami</h2>
            </div>
            
            <div class="line-title">
                <img id="img-about1" src="img/about1.png" alt="">
            </div>

            <div class="col-md-5">
                <img id="img-about" src="img/about.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-md-7 col-lg-5">
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                
                <a href="#" class="btn-more">Selengkapnya</a>

                </div>
            </div>

            </div>
        </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="padd-section text-center">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
            <h2>Amazing Features.</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/paint-palette.svg" alt="img">
                <h4>creative design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/vector.svg" alt="img">
                <h4>Retina Ready</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/design-tool.svg" alt="img">
                <h4>easy to use</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/asteroid.svg" alt="img">
                <h4>Free Updates</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/asteroid.svg" alt="img">
                <h4>Free Updates</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/cloud-computing.svg" alt="img">
                <h4>App store support</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/pixel.svg" alt="img">
                <h4>Perfect Pixel</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                <img src="assets/img/svg/code.svg" alt="img">
                <h4>clean codes</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            </div>
        </div>
        </section><!-- End Features Section -->

        <!-- ======= Screenshots Section ======= -->
        <section id="screenshots" class="padd-section text-center">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
            <h2>App Gallery</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            </div>

            <div class="screens-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/screen/1.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/2.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/3.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/4.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/5.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/6.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/7.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/8.jpg" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>

        </section><!-- End Screenshots Section -->

        <!-- ======= Video Section ======= -->
        <section id="video" class="text-center">
        <div class="overlay">
            <div class="container-fluid container-full" data-aos="zoom-in">

            <div class="row">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q&feature=emb_title" class="glightbox play-btn"></a>
            </div>

            </div>
        </div>
        </section><!-- End Video Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="padd-section text-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="testimonials-content">
                <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner" role="listbox">

                    <div class="carousel-item  active">
                        <div class="top-top">

                        <h2>Our Users Speack volumes us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries.</p>
                        <h4>Kimberly Tran<span>manager</span></h4>

                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="top-top">

                        <h2>Our Users Speack volumes us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries.</p>
                        <h4>Henderson<span>manager</span></h4>

                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="top-top">

                        <h2>Our Users Speack volumes us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries.</p>
                        <h4>David Spark<span>manager</span></h4>

                        </div>
                    </div>

                    </div>

                    <div class="btm-btm">

                    <ul class="list-unstyled carousel-indicators">
                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                    </ul>

                    </div>

                </div>
                </div>
            </div>

            </div>
        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="padd-section text-cente">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">

            <h2>Meet With Price</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-3">
                <div class="block-pricing">
                <div class="pricing-table">
                    <h4>basic</h4>
                    <h2>$29</h2>
                    <ul class="list-unstyled">
                    <li><b>4 GB</b> Ram</li>
                    <li><b>7/24</b> Tech Support</li>
                    <li><b>40 GB</b> SSD Cloud Storage</li>
                    <li>Monthly Backups</li>
                    <li>Palo Protection</li>
                    </ul>
                    <div class="table_btn">
                    <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="block-pricing">
                <div class="pricing-table">
                    <h4>PERSONAL</h4>
                    <h2>$29</h2>
                    <ul class="list-unstyled">
                    <li><b>4 GB</b> Ram</li>
                    <li><b>7/24</b> Tech Support</li>
                    <li><b>40 GB</b> SSD Cloud Storage</li>
                    <li>Monthly Backups</li>
                    <li>Palo Protection</li>
                    </ul>
                    <div class="table_btn">
                    <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="block-pricing">
                <div class="pricing-table">
                    <h4>BUSINESS</h4>
                    <h2>$29</h2>
                    <ul class="list-unstyled">
                    <li><b>4 GB</b> Ram</li>
                    <li><b>7/24</b> Tech Support</li>
                    <li><b>40 GB</b> SSD Cloud Storage</li>
                    <li>Monthly Backups</li>
                    <li>Palo Protection</li>
                    </ul>
                    <div class="table_btn">
                    <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="block-pricing">
                <div class="pricing-table">
                    <h4>profeesional</h4>
                    <h2>$29</h2>
                    <ul class="list-unstyled">
                    <li><b>4 GB</b> Ram</li>
                    <li><b>7/24</b> Tech Support</li>
                    <li><b>40 GB</b> SSD Cloud Storage</li>
                    <li>Monthly Backups</li>
                    <li>Palo Protection</li>
                    </ul>
                    <div class="table_btn">
                    <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="padd-section text-center">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">

            <h2>Team Member</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            </div>

            <div class="row">

            <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="team-block bottom">
                <img src="assets/img/team/1.jpg" class="img-responsive" alt="img">
                <div class="team-content">
                    <ul class="list-unstyled">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                    <span>manager</span>
                    <h4>Kimberly Tran</h4>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="team-block bottom">
                <img src="assets/img/team/2.jpg" class="img-responsive" alt="img">
                <div class="team-content">
                    <ul class="list-unstyled">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                    <span>manager</span>
                    <h4>Kimberly Tran</h4>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="team-block bottom">
                <img src="assets/img/team/3.jpg" class="img-responsive" alt="img">
                <div class="team-content">
                    <ul class="list-unstyled">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                    <span>manager</span>
                    <h4>Kimberly Tran</h4>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="team-block bottom">
                <img src="assets/img/team/4.jpg" class="img-responsive" alt="img">
                <div class="team-content">
                    <ul class="list-unstyled">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                    <span>manager</span>
                    <h4>Kimberly Tran</h4>
                </div>
                </div>
            </div>

            </div>
        </div>
        </section><!-- End Team Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="padd-sectio">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">

            <h2>Latest posts</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                <a href="#"><img src="assets/img/blog/blog-image-1.jpg" alt="img"></a>
                <div class="content-blog">
                    <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                    <span>05, juin 2017</span>
                    <a class="float-end readmore" href="#">read more</a>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                <a href="#"><img src="assets/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
                <div class="content-blog">
                    <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                    <span>05, juin 2017</span>
                    <a class="float-end readmore" href="#">read more</a>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                <a href="#"><img src="assets/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
                <div class="content-blog">
                    <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                    <span>05, juin 2017</span>
                    <a class="float-end readmore" href="#">read more</a>
                </div>
                </div>
            </div>

            </div>
        </div>
        </section><!-- End Blog Section -->

        <!-- ======= Newsletter Section ======= -->
        <section id="newsletter" class="newsletter text-center">
        <div class="overlay padd-section">
            <div class="container" data-aos="zoom-in">

            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6">
                <form class="d-flex" method="POST" action="#">
                    <input type="email" class="form-control " placeholder="Email Adress" name="email">
                    <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribe</button>
                </form>
                </div>
            </div>

            <ul class="list-unstyled">
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>

            </div>
        </div>
        </section><!-- End Newsletter Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="padd-section">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
            <h2>Contact</h2>
            <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-3 col-md-4">

                <div class="info">
                <div>
                    <i class="bi bi-geo-alt"></i>
                    <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <p>info@example.com</p>
                </div>

                <div>
                    <i class="bi bi-phone"></i>
                    <p>+1 5589 55488 55s</p>
                </div>
                </div>

                <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

@section('js-internal')

@endsection