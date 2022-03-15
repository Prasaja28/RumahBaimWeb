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
        font-family: 'Poppins';
        font-style: normal;
        font-weight: bold;
        font-size: 32px;
    }
    .col-md-5 p{
        color: white;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        margin-left: -19px;
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
        font-family: Poppins;
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
        font-family: "Poppins";
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
        font-family: Poppins;
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
        font-size: 15px;
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
        font-weight: 500;
        font-family: Poppins;
        font-size: 10px;
        margin-top: 110px;
        margin-bottom: 20px;
    }
    #pricing .row .price-list span{
        color: #333333;
        font-weight: bold;
        font-size: 13px;
    }
    #pricing .row .price-list2 p{
        background-color: #FFEC45;
        font-weight: 500;
        font-family: Poppins;
        font-size: 10px;
        margin-top: 16px;
        margin-bottom: 20px;
    }
    #pricing .row .price-list2 span{
        color: #333333;
        font-weight: bold;
        font-size: 13px;
    }
    #pricing .row .t_button .btn-get-chat {
        border: none;
        background: #F17922;
        color: white;
        margin-top: 20px;
        font-family: "Poppins";
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
        font-family: Poppins;
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
        font-family: "Poppins";
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
    #contact .info {
        color: #222;
        margin-left: -165px;
    }
    #contact .section-title .title-kontak h2{
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 44px;
    }
    #contact .info p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        margin-left: -51px;
    }
    @media(max-width: 600px){
        .bi-list::before {
            content: "\f479";
            color: white;
        }
        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            border-radius: 6px;
            background-color: #333;
            overflow-y: auto;
            transition: 0.3s;
        }
        #hero h2 span {
            color: black;
            margin-bottom: 30px;
            font-size: 28px;
            font-family: 'Inter';
            font-weight: bold;
            line-height: 1.2;
        }
        #hero h2 {
            color: #F17922;
            margin-bottom: 30px;
            font-size: 28px;
            font-family: 'Inter';
            font-weight: bold;
            line-height: 1.2;
            margin-left: 20px;
        }
        #hero .col-md-5 p {
            color: #333333;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            margin-left: 0px;
            text-align: center;
        }
        #hero .btn-get-started {
            border: none;
            background: #F17922;
            color: white;
            margin-top: 20px;
            margin-left: 10px;
        }
        .carousel .carousel-inner{
            margin-left: 8px;
        }
        #img-about {
            Height: 140px;
            Width: auto;
            margin-top: 46px;
            margin-left: 122px;
        }
        .col-md-5 h2 {
            color: white;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: bold;
            font-size: 28px;
            margin-left: 88px;
        }
        .col-md-5 p {
            color: white;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            margin-left: 52px;
        }
        .about-content p {
            color: white;
            text-align: justify;
            margin-left: 16px;
            font-size: 12px;
        }
        .text-upper p {
            color: white;
            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 30px;
            text-align: justify;
        }
        .work-process img {
            width: auto;
            height: 305px;
            margin-left: -32px;
            margin-top: -24px;
        }
        #img-latest-bg {
            margin-top: 71px;
            width: auto;
            height: 292px;
        }
        #content-latest-porto .container .img-content {
            width: auto;
            height: 112px;
            margin-top: -115px;
            margin-right: -369px;
            margin-left: 39px;
        }
        #portofolios .btn-get-more {
            margin-top: 44px;
        }
        .title-jasa h2 {
            font-size: 25px;
        }
        #faq .container .btn {
            font-size: 14px;
        }
        #call-us .bg-image .container h1 {
            font-size: 40px;
        }
        #call-us .bg-image .container p {
            font-size: 10px;
            margin-top: -100px;
        }
        #contact .section-title .title-kontak h2 {
            font-size: 25px;
        }
        #contact .info {
            margin-left: 12px;
        }
        #contact .info p {
            margin-left: -52px;
        }
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
                        @if ($foto->count() != 0)
                            @foreach($foto as $dataFoto)
                                @if ($dataFoto->status == 1)
                                <div class="carousel-item active">
                                    <div class="top-top">
                                        <img style="width: 500px;height: 300px;" src="{{$dataFoto->foto}}" alt="">
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <div class="top-top">
                                        <img style="width: 500px;height: 300px;" src="{{$dataFoto->foto}}" alt="">
                                    </div>
                                </div>
                                @endif
                                
                            @endforeach
                        @endif
                        <!--<div class="carousel-item  active">
                            <div class="top-top">
                                <img style="width: auto;height: 396px;" src="img/home-carousel.png" alt="">
                            </div>
                        </div>
    
                        <div class="carousel-item ">
                            <div class="top-top">
                                <img style="width: auto;height: 396px;" src="img/home-carousel2.jpeg" alt="">
                            </div>
                        </div> -->
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
                            @if ($tentang->count() != 0)
                            @foreach ($tentang as $dataTentang)
                                <p style="font-size: 16px;">{{$dataTentang->deskripsi}}</p>
                            @endforeach
                            @endif
                            {{-- <p>Rumah Baim merupakan Studio Arsitek yang menyediakan<br>layanan jasa pada bidang Konstruksi. Layanan utama dari<br>Rumah Baim yakni pembuatan desain rumah, pembangunan,<br>renovasi, dan desain interior.
                            </p>
                            <br>
                            <p>Rumah Baim merupakan Studio Arsitek yang menyediakan<br>layanan jasa pada bidang Konstruksi. Layanan utama dari<br>Rumah Baim yakni pembuatan desain rumah, pembangunan,<br>renovasi, dan desain interior.
                            </p> --}}
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
                <a href="menu-porto" class="btn-get-more scrollto">Selengkapnya ></a>
                
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
                        @if($faq->count() != 0)
                            @foreach($faq as $dataFAQ)
                                @if($dataFAQ->tampilkan == 1)
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn" data-toggle="collapse" data-target="#collapse{{$dataFAQ->id}}" aria-expanded="true" aria-controls="collapse{{$dataFAQ->id}}">
                                                {{$dataFAQ->pertanyaan}}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse{{$dataFAQ->id}}" class="collapse" aria-labelledby="heading{{$dataFAQ->id}}" data-parent="#accordion">
                                            <div class="card-body">
                                                {{$dataFAQ->jawaban}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
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
                        <a 
                        @if($kontak->count() != 0)
                        @foreach($kontak as $dataHub)
                            @if($dataHub->jenis == "whatsapp")
                                target="_blank" href="https://wa.me/{{$dataHub->isian}}/"
                            @endif
                        @endforeach
                        @endif  class="btn-get-call scrollto">Hubungi Kami</a>
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
                            @if($kontak->count() != 0)
                            <div>
                                <h4>Alamat :</h4>
                                @foreach($kontak as $dataKontak)
                                @if($dataKontak->jenis == "alamat")
                                <p>{{$dataKontak->isian}}</p>
                                @endif
                                @endforeach
                            </div>
                            <div>
                                <h4>Jam Operasional :</h4>
                                <p>Senin - Jumat (08.00 - 16.00 WIB)</p>
                            </div>
                            <div>
                                <h4>Sosial Media :</h4>
                                @foreach($kontak as $dataSosmed)
                                @if($dataSosmed->jenis != "alamat")
                                <div class="row">
                                    <div class="col-lg-2 text-center">
                                        @if($dataSosmed->jenis == "email")
                                        <a target="_blank" href="mailto: {{$dataSosmed->isian}}"><img src="img/logo-gmail.png" alt=""></a>
                                        @endif
                                        @if($dataSosmed->jenis == "whatsapp")
                                        <a target="_blank" href="https://wa.me/{{$dataSosmed->isian}}/"><img src="img/logo-whatsapp.png" alt=""></a>
                                        @endif
                                        @if($dataSosmed->jenis == "instagram")
                                        <a target="_blank" href="https://www.instagram.com/{{substr($dataSosmed->isian,1)}}/"><img src="img/logo-instagram.png" alt=""></a>
                                        @endif
                                    </div>
                                    <div class="col-lg-10">
                                        <p>{{$dataSosmed->isian}}</p>
                                    </div>
                                </div>   
                                @endif                             
                                @endforeach
                            </div>
                            @endif
                            
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