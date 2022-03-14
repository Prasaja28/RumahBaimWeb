@extends('layout-komponen.master')
@section('title','Menu Portofolio') <!-- name title -->
@section('css-internal')
<style>
    .header1 .container{
        background-color: #FFE5D2;
        margin-top: 146px;
        height: 126px;
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
        font-size: 36px;
        line-height: 48px;
        color: #333333;
        line-height: 120px;
    }
    .porto-list .container {
        margin-top: 20px;
        margin-left: 94px;
    }
    .porto-list .row img{
        position: absolute;
        width: auto;
        height: 300px;
    }
    .porto-list .column {
        float: left;
        width: 33.33%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */
    .porto-list .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
@endsection

@section('konten')
<div class="header1">
    <div class="container" data-aos="fade-up">
        <h1>Portofolio</h1>
    </div>
</div>
<div class="porto-list">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="column">
                <img src="img/img-porto-list.png" alt="Snow">
            </div>
            <div class="column">
                <img src="img/img-porto-list.png" alt="Forest">
            </div>
            <div class="column">
                <img src="img/img-porto-list.png" alt="Mountains">
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-internal')

@endsection