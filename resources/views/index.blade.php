@extends('layout-komponen.master')
@section('title','Rumah Baim Website') <!-- name title -->
@section('css-internal')
<style>
    .justify-content-center {
        margin-bottom: 145px;
    }
    #home-col5{
        margin-top: 35px;
    }
    .back-to-top{
        background: #F17922;
    }
    .back-to-top:hover {
        background: #FFE5D2;
    }
    #hero{
        background-image:none;
        height: auto;
        margin-top: 192px;
    }
    #hero h2{
        color: #F17922;
        margin-bottom: 30px;
        font-size: 32px;
        font-family: 'Inter';
        font-weight: bold;
    }
    #hero h2 span{
        color: black;
        margin-bottom: 30px;
        font-size: 32px;
        font-family: 'Inter';
        font-weight: bold;
    }
    #hero .col-md-5 p{
        color: #333333;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        margin-left: 1px;
    }
    .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
        color: #F17922;
    }
    #hero .btn-get-started {
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
    }
    #hero .btn-get-started:hover {
        background: #FFE5D2;
        color: #F17922;
        border-style: solid;
        border-color: #F17922;
    }
    .title-about{
        text-align: center;
        font-family: 'Poppins';
        font-size: 36px;
    }
    .title-about h2{
        color: white;
    }
    #img-about{
        Height: 240px;
        Width: auto;
        margin-top: 46px;
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
        margin-top: -6px;
    }
    .about-content p{
        color: white;
        text-align: justify;
        margin-left: -71px;
    }
    .about-content h2{
        font-size: 20px;
        line-height: 30px;
        margin-top: 85px;
    }
    #about-us{
        background-image: url("img/tentangkami1.png");
        background-size: 1831px;
        height: 100%;
        background-repeat: no-repeat;
        background-color: #333;
    }
    .col-md-5 h2{
        color: white;
        font-family: 'Red Hat Display';
        font-style: normal;
        font-weight: bold;
        font-size: 32px;
    }
    .col-md-5 p{
        color: white;
        font-family: 'Red Hat Display';
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        margin-left: 6px;
    }
    #about-us-extended{
        background-color: #333333;
    }
    .text-upper p{
        color: white;
        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 30px;
        text-align: justify;
    }
    .work-process img{
        width: auto;
        height: 910px;
        margin-left: -89px;
        margin-top: -24px;
    }
    .title-porto{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 44px;
        color: #333333;
    }
    #img-latest-bg{
        margin-top: 71px;
    }
    #content-latest-porto{
        background-image: url(img/porto-black.png);
        background-repeat: no-repeat;
        width: 740px;
        margin-left: -75px;
        margin-top: 100px;
    }
    #content-latest-porto .container{
        position:absolute;
        margin-left: -145px;
    }
    #content-latest-porto .container .img-content{
        width: auto;
        height: 220px;
        margin-top: 72px;
        margin-right: 40px;
        margin-left: -50px;
    }
    #portofolios .btn-get-more {
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        font-family: "Red Hat Display";
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 11px 36px;
        border-radius: 50px;
        transition: 0.5s;
        margin-bottom: 30px;
    }
    #portofolios .btn-get-more:hover {
        background: #FFE5D2;
        color: #F17922;
        border-style: solid;
        border-color: #F17922;
    }
    .title-jasa h2{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        color: #FFFFFF;
    }
    #pricing{
        background-color: #333333;
    }
    #pricing .row .block-pricing{
        border-radius: 25px;
    }
    #pricing .row h4{
        color: #F17922;
        margin-top: -20px;
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
    }
    #pricing .row #img-c1{
        width: auto;
        height: 154px;
        margin-left: -1px;
        margin-top: -27px;
    }
    #pricing .row #img-c2{
        margin-top: 22px;
        margin-bottom: 20px;
        margin-left: 10px;
    }
    #pricing .row .price-list p{
        background-color: #FFEC45;
        font-weight: normal;
        font-family: Poppins;
        font-size: 10px;
        margin-top: 110px;
        margin-bottom: 20px;
    }
    #pricing .row .price-list span{
        color: #333333;
        font-weight: 500;
        font-size: 13px;
    }
    #pricing .row .price-list2 p{
        background-color: #FFEC45;
        font-weight: normal;
        font-family: Poppins;
        font-size: 10px;
        margin-top: 16px;
        margin-bottom: 20px;
    }
    #pricing .row .price-list2 span{
        color: #333333;
        font-weight: 500;
        font-size: 13px;
    }
    #pricing .row .t_button .btn-get-chat {
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        font-family: "Red Hat Display";
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 11px 36px;
        border-radius: 50px;
        transition: 0.5s;
        margin-bottom: 30px;
    }
    #pricing .row .t_button .btn-get-chat{
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        margin-top: -14px;
        margin-bottom: -14px;
    }
    #pricing .row .t_button .btn-get-chat:hover {
        background: #FFE5D2;
        color: #F17922;
        border-style: solid;
        border-color: #F17922;
    }
    #pricing .row .pricing-table #img-c1-2{
        width: auto;
        height: 149px;
        margin-left: -1px;
        margin-top: -24px;
    }
    #pricing .row .pricing-table #img-c1-3{
        width: auto;
        height: 149px;
        margin-left: -1px;
        margin-top: -24px;
    }
    #pricing .row .pricing-table #img-c1-4{
        width: auto;
        height: 149px;
        margin-left: -1px;
        margin-top: -24px;
    }
    #faq .title-faq{
        font-family: Montserrat;
        font-weight: bold;
        font-size: 36px;
        color: #333333;
    }
    #faq .container #accordion{
        margin-top: 60px;
    }
    #faq .container .btn{
        font-family: Poppins;
        font-weight: bold;
        font-size: 16px;
        color: white;
        text-align: left;
        border: none;
    }
    #faq .container .card-body{
        font-family: Poppins;
        font-weight: normal;
        font-size: 12px;
        color: #5E5E5E;
    }
    #faq .container .card-header{
        background-color: #F17922;
    }
    #call-us .bg-image{
        background-image: url("img/hubungi-kami.png");
        height: 100%;
        background-repeat: no-repeat;
    }
    #call-us .bg-image .container h1{
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 48px;
        line-height: 72px;
        color: #FFFFFF;
    }
    #call-us .bg-image .container p{
        font-family: Poppins;
        font-weight: 500;
        font-size: 14px;
        line-height: 30px;
        text-align: justify;
        color: #FFFFFF;
        margin-top: -80px;
    }
    #call-us .bg-image .btn-get-call {
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        font-family: "Red Hat Display";
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 11px 36px;
        border-radius: 50px;
        transition: 0.5s;
        margin-bottom: 30px;
    }
    #call-us .bg-image .btn-get-call{
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        margin-top: -14px;
        margin-bottom: -14px;
    }
    #call-us .bg-image .btn-get-call:hover {
        background: #FFE5D2;
        color: #F17922;
        border-style: solid;
        border-color: #F17922;
    }
    #contact .section-title .title-kontak h2{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 44px;
    }
</style>
@endsection
@section('konten')
<!-- ======= Home Section ======= -->
    <section id="hero">
        <div class="row justify-content-center">
            <div id="home-col5" class="col-md-5">
                <h2><span>Membangun Rumah itu Mudah Bersama Tim</span> Rumah Baim!</h2>
                <p>Kami Menyediakan Layanan Jasa Untuk Mewujudkan Rumah Impian Anda</p>
                <a href="#portofolios" class="btn-get-started scrollto">View Project</a>
                <a href="#contact" class="btn-get-started scrollto">Hubungi Kami</a>
            </div>

            <div class="col-md-7 col-lg-5">
                <!-- <div class="videoWrapper">
                    <iframe width="560" height="349" src="https://www.youtube.com/embed/kCPQUAtMZR4" frameborder="0" allowfullscreen></iframe>
                </div> -->
                <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item  active">
                            <div class="top-top">
                                <img style="width: auto;height: 396px;" src="img/home-carousel.png" alt="">
                            </div>
                        </div>
    
                        <div class="carousel-item ">
                            <div class="top-top">
                                <img style="width: auto;height: 396px;" src="img/home-carousel2.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="btm-btm">
                        <ul class="list-unstyled carousel-indicators">
                            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Home Section -->

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
                        <img id="img-about" src="img/logorb.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
                        <h2>RB PROPERTY</h2>
                        <p>"Membangun Rumah itu Mudah"</p>
                    </div>

                    <div class="col-md-7 col-lg-5">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <p>Rumah Baim merupakan Studio Arsitek yang menyediakan<br>layanan jasa pada bidang Konstruksi. Layanan utama dari<br>Rumah Baim yakni pembuatan desain rumah, pembangunan,<br>renovasi, dan desain interior.
                            </p>
                            <br>
                            <p>Rumah Baim merupakan Studio Arsitek yang menyediakan<br>layanan jasa pada bidang Konstruksi. Layanan utama dari<br>Rumah Baim yakni pembuatan desain rumah, pembangunan,<br>renovasi, dan desain interior.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- Proses Kerja section -->
        <section id="about-us-extended" class="about-us padd-section">
            <div class="container">
                <div class="text-upper" data-aos="fade-up">
                    <p>
                    Membangun rumah akan lebih mudah bersama Rumah Baim. Jadi percayakan kebutuhan bangunan Anda pada kami dan kami akan melayani dengan senang hati. Untuk mewujudkan bangunan rumah impian anda, berikut merupakan prosedur kerja layanan jasa kami. Prosedur tersebut dapat berubah sesuai dengan paket layanan jasa yang anda pilih.
                    </p>
                </div>
                <div class="work-process" data-aos="fade-up">
                    <img src="img/proses-kerja.png" alt="">
                </div>
            </div>
        </section>
        <!-- end Proses Kerja section -->

        <!-- ======= Portofolio Section ======= -->
        <section id="portofolios" class="padd-section text-center">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="title-porto">
                        <h2>Portofolio</h2>
                    </div>
    
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
    
                    <div class="col-md-5">
                        <img id="img-latest-bg" src="img/latest.png" alt="latest" data-aos="zoom-in"data-aos-delay="100">
                    </div>
    
                    <div id="content-latest-porto" class="col-md-7 col-lg-5">
                        <div class="container">
                            <img class="img-content" src="img/content-img.png" alt="">
                            <img class="img-content" src="img/content-img.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="#" class="btn-get-more scrollto">Selengkapnya ></a>
                
            </div>
        </section><!-- End Screenshots Section -->

        <!-- ======= service Section ======= -->
        <section id="pricing" class="padd-section text-cente">
            <div class="container" data-aos="fade-up">
                    <div class="section-title text-center">
                        <div class="title-jasa">
                            <h2>Paket Jasa</h2>
                        </div>
                
                        <div class="line-title">
                            <img id="img-about1" src="img/about1.png" alt="">
                        </div>
                    </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-3">
                        <div class="block-pricing">
                            <div class="pricing-table">
                                <h4>Desain</h4>
                                <img id="img-c1" src="img/img-service1.png" alt="">
                                <img id="img-c2" src="img/jasa-content1.png" alt="">
                                <div class="price-list">
                                    <p>
                                        Harga mulai dari <span>Rp 50 ribu /m2</span>
                                    </p>    
                                </div>
                                <div class="t_button">
                                    <a href="#" class="btn-get-chat scrollto">Konsultasi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing">
                        <div class="pricing-table">
                            <h4>Desain dan Bangun</h4>
                            <img id="img-c1-2" src="img/img-service2.png" alt="">
                            <img id="img-c2" src="img/jasa-content2.png" alt="">
                            <div class="price-list2">
                                <p>
                                    Harga mulai dari <span>Rp 2 juta / m2</span>
                                </p>    
                            </div>
                            <div class="t_button">
                                <a href="#" class="btn-get-chat scrollto">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing">
                        <div class="pricing-table">
                            <h4>Renovasi</h4>
                            <img id="img-c1-3" src="img/img-service3.png" alt="">
                            <img id="img-c2" src="img/jasa-content3.png" alt="">
                            <div class="price-list2">
                                <p>
                                    Harga mulai dari <span>Rp 2 juta / m2</span>
                                </p>    
                            </div>
                            <div class="t_button">
                                <a href="#" class="btn-get-chat scrollto">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing">
                        <div class="pricing-table">
                            <h4>Desain Interior</h4>
                            <img id="img-c1-4" src="img/img-service4.png" alt="">
                            <img id="img-c2" src="img/jasa-content4.png" alt="">
                            <div class="price-list2">
                                <p>
                                    Harga mulai dari <span>Rp 2 juta / m2</span>
                                </p>    
                            </div>
                            <div class="t_button">
                                <a href="#" class="btn-get-chat scrollto">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section><!-- End Pricing Section -->

        <!-- ======= faq Section ======= -->
        <section id="faq" class="padd-section">
            <div class="container" data-aos="fade-up">
                <div class="section-title-faq text-center">
                    <div class="title-faq">
                        <h2>FAQ</h2>
                    </div>
                    
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
                </div>
                <div class="container">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    CLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End faq Section -->

        <!-- ======= Hubungi Kami Section ======= -->
        <section id="call-us" class="call text-center">
            <div class="bg-image padd-section">
                <div class="container" data-aos="zoom-in">
                    <div class="row justify-content-center">
                        <h1>Konsultasi Gratis</h1>
                    </div>

                    <div class="container">
                        <p>
                            Jika ada yang ingin ditanyakan anda dapat melakukan konsultasi bersama tim kami secara gratis melalui WhatsApp. Jangan ragu untuk segera mewujudkan rumah impian anda, dengan senang hati kami akan bantu!
                        </p>
                        <a href="#" class="btn-get-call scrollto">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section><!-- End Hubungi Kami Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="padd-section">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <div class="title-kontak">
                        <h2>Kontak</h2>
                    </div>
                    
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
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
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.1409907669185!2d110.38376870218993!3d-7.797628036231348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5734088512fd%3A0x26690348ac8080f4!2secc.co.id%20(PT.%20ECC)!5e0!3m2!1sid!2sid!4v1646798364536!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

@section('js-internal')

@endsection