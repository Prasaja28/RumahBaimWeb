@extends('layout-komponen.master')
@section('title','Rumah Baim Website') <!-- name title -->
@section('css-internal')
<style>
    h1,h2,h3,h4,h5{
        font-family: 'Inter',
    }
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
        font-weight: 900;
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
        Height: 35%;
        Width: auto;
        margin-top: 7%;
        margin-bottom: 0;
    }
    #img-about1{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 120px;
        height: 60%;
    }
    .about-content{
        font-size: 20px;
        line-height: 30px;
        margin-top: -6px;
    }
    .about-content p{
        color: white;
        text-align: justify;
    }
    .about-content h2{
        font-size: 20px;
        line-height: 30px;
        margin-top: 85px;
    }
    #about-us{
        background-image: url("img/tentangkami1.png");
        background-size: 100% 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-color: #333;
        padding-top: 3%;
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
    #team .center-block{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    #team .team-content p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 36px;
        text-align: center;
        color: #FFFFFF;
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
    #carousel{
        text-align: right;
    }
    .no-padding{
        padding: 0px;
    }
    #home-slogan{
        padding-top: 140pt;
    }
    #home-foto{
        padding-top: 100pt;
        padding-right:0.7%;
        padding-left:0.2% 
    }
    #home-row{
        margin-bottom: 0px;
        background-image: url("/assets/img/bgHalamanUtama.png");
        background-size: 95% 100%;
        background-repeat: no-repeat;
    }
    .section-row{
        margin-bottom: -4%;

    }
    .vl{
        border-right: 2px dashed white;
        height: 100%;
        margin-left:auto;
        margin-right:auto;
        margin-top:auto;
        margin-bottom:auto;
        left:0;
        right:0;
        top:0;
        bottom:0;
    }
    #img-ikon-prosedur{
        height: 50%;
        width: auto;
        margin-left: -60%;
    }
    .img-porto{
        max-width:100%;
        max-height:100%;
    }
</style>
@endsection
@section('konten')
<!-- ======= Home Section ======= -->
    
    <section id="hero">
        <div id="home-row" class="row justify-content-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-5" id="home-slogan">
                <h2><span>Membangun Rumah itu Mudah Bersama Tim</span> Rumah Baim!</h2>
                <p>Kami Menyediakan Layanan Jasa Untuk Mewujudkan Rumah Impian Anda</p>
                <a href="#portofolios" class="btn-get-started scrollto">View Project</a>
                <a href="#contact" class="btn-get-started scrollto">Hubungi Kami</a>
            </div>
            
            <div class="col-lg-5 no-padding" id="home-foto">
                <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
                    <div id="carousel" class="carousel-inner" role="listbox">
                        @if ($foto->count() != 0)
                            @foreach($foto as $dataFoto)
                                @if ($dataFoto->status == 1)
                                <div class="carousel-item active">
                                    <div class="top-top">
                                        <img style="width: 500px;height: 350px;" src="{{$dataFoto->foto}}" alt="">
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
                    </div>
                    <div class="btm-btm">
                        <ul class="list-unstyled carousel-indicators">
                            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        
    </section><!-- End Home Section -->
    
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
                <div class="row justify-content-center section-row"  data-aos="fade-up">

                    <div class="title-about">
                        <p class="h4 text-white font-weight-bold">Tentang Kami</p>
                    </div>
                    
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 text-center mb-0">
                        <img id="img-about" src="{{url('/img/logorb.png')}}" alt="About" data-aos="zoom-in" data-aos-delay="100">
                        <p class="text-white h5 mb-0">RB PROPERTY</p>
                        <p class="text-white mt-0 mb-0">"Membangun Rumah itu Mudah"</p>
                    </div>

                    <div class="col-lg-5 no-padding">
                        <div class="mt-4" data-aos="fade-left" data-aos-delay="100">
                            @if ($tentang->count() != 0)
                            @foreach ($tentang as $dataTentang)
                                <p class="text-white" style="font-size: 13px; text-align:left;">{{$dataTentang->deskripsi}}</p>
                            @endforeach
                            @endif
                        </div>

                        <!--<div class="about-content no-padding" data-aos="fade-left" data-aos-delay="100">
                            @if ($tentang->count() != 0)
                            @foreach ($tentang as $dataTentang)
                                <p style="font-size: 16px;">{{$dataTentang->deskripsi}}</p>
                            @endforeach
                            @endif
                        </div>-->
                    </div>
                    <div class="col-lg-1"></div>
                </div>
        </section><!-- End About Us Section -->

        <!-- Proses Kerja section -->
        <section id="about-us-extended" class="about-us">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="text-center" data-aos="fade-up" style="padding-left:-10px;padding-right:-10px;">
                        <p class="text-center text-white" style="font-size: 13px;"><b>
                            Membangun rumah akan lebih mudah bersama Rumah Baim. 
                            Percayakan kebutuhan bangunan Anda pada kami dan kami akan 
                            melayani dengan senang hati. <br>Untuk mewujudkan bangunan rumah impian Anda, 
                            berikut merupakan prosedur kerja layanan jasa kami. 
                            Prosedur tersebut dapat berubah sesuai dengan paket layanan jasa 
                            yang Anda pilih.</b>
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
            
            {{-- Prosedure --}}
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" style="text-align: right;padding-top:7%;">
                        <p class="h5" style="color:#F17922;">Survey</p>
                        <p class="text-white" style="">Melakukan pengecekan lokasi, 
                            pengumpulan data client, serta membuat estimasi atau 
                            memperkirakan harga desain & pembangunan
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up"  style="padding-right: 0px;">
                    <div class="vl"></div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up" >
                    <img id="img-ikon-prosedur" src="{{url('/img/Survey.png')}}" alt="desain">
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-1"  data-aos="fade-up"  style="padding-right: 0px;">
                    <div class="vl"></div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up" >
                    <img id="img-ikon-prosedur" src="{{url('/img/Desain.png')}}" alt="desain">
                </div>
                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" style="text-align: left;;padding-top:7%;">
                        <p class="h5" style="color:#F17922;">Desain</p>
                        <p class="text-white">Membuat desain pemodelan 3D untuk bangunan dengan 
                            proses rendering tampak bangunan</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class=""  data-aos="fade-up"  style="text-align: right;;padding-top:7%;">
                        <p class="h5" style="color:#F17922;">Gambar Detail & RAB</p>
                        <p class="text-white">
                            Melakukan pendalaman desain detail bangunan untuk 
                            membuat perhitungan RAB atau biaya yang diperlukan 
                            untuk pelaksanaan pembangunan proyek
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up"  style="padding-right: 0px;">
                    <div class="vl"></div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up" >
                    <img id="img-ikon-prosedur" src="{{url('/img/RAB.png')}}" alt="desain">
                </div>
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-1"  data-aos="fade-up"  style="padding-right: 0px;">
                    <div class="vl"></div>
                </div>
                <div class="col-lg-1"  data-aos="fade-up" >
                    <img id="img-ikon-prosedur" src="{{url('/img/Pembangunan.png')}}" alt="desain">
                </div>
                <div class="col-lg-4">
                    <div class=""  data-aos="fade-up"  style="text-align: left;;padding-top:7%;">
                        <p class="h5" style="color:#F17922;">Pembangunan</p>
                        <p class="text-white" style="">
                            Melakukan pendalaman desain detail bangunan 
                            untuk membuat perhitungan RAB atau biaya yang 
                            diperlukan untuk pelaksanaan pembangunan proyek
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </section>
        <!-- end Proses Kerja section -->

        <!-- ======= Portofolio Section ======= -->
        <!-- <section id="portofolios" class="padd-section text-center">
            <div data-aos="fade-up">
                <div class="row">
                    <div class="title-porto">
                        <h2>Portofolio</h2>
                    </div>
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
                    
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-block bottom">
                            <img class="img-porto" src="{{url('/img/porto-img/1647334169-Halaman Utama.jpg')}}" alt="img">
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
                    <div class="col-lg-5">
                        <img class="img-porto" src="{{url('/img/porto-img/1647334182-Halaman Utama 2.jpg')}}" alt="latest" data-aos="zoom-in"data-aos-delay="100">
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                
            </div>
        </section>End Screenshots Section -->

        <section id="team" class="padd-section text-center">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <div class="title-porto">
                        <h2>Portofolio</h2>
                    </div>
                    <div class="line-title">
                        <img id="img-about1" src="img/about1.png" alt="">
                    </div>
                </div>

                <div class="row center-block">
                    <div class="col-md-6 col-md-2 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="{{url('/img/porto-img/1647334169-Halaman Utama.jpg')}}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <div class="container">
                                    <p>Pembangunan Rumah Tahfiz Nurul Ilmi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-2 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="{{url('/img/porto-img/1647334182-Halaman Utama 2.jpg')}}" class="img-responsive" alt="img">
                            <div class="team-content">
                                <div class="container">
                                    <p>Pembangunan Rumah Tahfiz Nurul Ilmi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

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