@extends('layout-komponen.master')
@section('title','Detail Portofolio') <!-- name title -->
@section('css-internal')
<style>
    .header1 .container{
        background-color: #FFE5D2;
        margin-top: 146px;
        height: 72px;
    }
    .back-to-top{
        background: #F17922;
    }
    .back-to-top:hover {
        background: #FFE5D2;
    }
    .header1 .container h1{
        text-align: center;
        font-family: 'Poppins';
        font-weight: bold;
        font-size: 30px;
        color: #333333;
        line-height: 35px;
    }
    .explanation .row{
        margin-top: 35px;
    }
    .explanation .row .col-md-5{
        margin-top: 45px;
    }
    .explanation .row .col-md-5 .title-desc p{
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 29px;
        color: #333333;
    }
    .explanation .row .col-md-5 .desc p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        text-align: justify;
        color: #333333;
    }
    .explanation .row .col-md-7 img{
        position: absolute;
        width: 566px;
        height: 341.44px;
    }
    .row .title-gal{
        margin-left: 114px;
    }
    .row .title-gal p{
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 29px;
        color: #333333;
    }
    .explanation .container #myCarousel .carousel-inner img{
        width:100%;
    }
    .explanation .container #myCarousel{
        margin-bottom: 20px;
    }
    .explanation #bottom-text-gal{
        margin-bottom: 100px;
    }
    .explanation #bottom-text-gal p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        text-align: justify;
        color: #333333;
        margin-left: 410px;
    }
    @media(max-width: 600px){
        
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@endsection

@section('konten')
<div class="header1">
    <div class="container" data-aos="fade-up">
        <h1>Pembangunan Rumah Tahfiz</h1>
    </div>
</div>
<div class="explanation">
    <div class="row justify-content-center">
        <div class="col-md-5" data-aos="fade-right">
            <div class="title-desc">
                <p>Deskripsi Proyek</p>
            </div>
            <div class="desc">
                <p>Proyek pembangunan untuk Rumah Tahfidz Nurul Ilmi dilaksanakan pada tahun 2018 sampai dengan tahun 2019. Proyek ini merupakan salah satu proyek menarik yang kami kerjakan dimana kami membangun rumah 3 lantai yang cukup kompleks dalam pelaksanaannya. Luas tanah sekitar 90 m2 dan luas bangunannya 240 m2.</p>
            </div>
        </div>
        <div class="col-md-7 col-lg-5" data-aos="fade-left">
            <div class="container">
                <img src="img/gambar-utama.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5" data-aos="fade-right">
            <div class="title-gal">
                <p>Galeri</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/renovasi-gal.jpg" alt="gambar1">
                </div>

                <div class="item">
                    <img src="img/renovasi-gal.jpg" alt="gambar2">
                </div>
                
                <div class="item">
                    <img src="img/renovasi-gal.jpg" alt="gambar3">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container" id="bottom-text-gal">
        <p>Dokumentasi Tahap Pembangunan</p>
    </div>
</div>
@endsection

@section('js-internal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection