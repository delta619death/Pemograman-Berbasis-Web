@extends('layouts.main')
@section('title', 'home')
@section("content")
    <style>
        .jumbotron {
            background-image: url('https://img.freepik.com/free-psd/dark-smartphone-mockup_149660-807.jpg?t=st=1717040457~exp=1717044057~hmac=ce75f99b3121f7bc51a1d9f9d3cc25d553c9722e462b631a86fcffb996cac04d&w=900');
            background-size: auto;
            background-position: center;
            color: #FEFAF6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
    </style>

    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Royal Phone Store</h1>
        <p class="lead">Kami menyediakan berbagai pilihan handphone terbaru dengan harga terjangkau.</p>
        <hr class="my-4">
        <p>Silakan jelajahi produk kami dan temukan handphone yang sesuai dengan kebutuhan Anda.</p>
        <a class="btn btn-primary btn-lg" href="/phone" role="button">Lihat Handphone</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Promo Spesial</h5>
                    <p class="card-text">Dapatkan diskon besar-besaran untuk pembelian handphone tertentu!</p>
                    <a href="#" class="btn btn-primary">Lihat Promo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan Pelanggan</h5>
                    <p class="card-text">Kami siap membantu Anda dalam memilih handphone yang tepat.</p>
                    <a href="#" class="btn btn-primary">Hubungi Kami</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bergabunglah!</h5>
                    <p class="card-text">Daftar sebagai anggota dan dapatkan penawaran eksklusif.</p>
                    <a href="#" class="btn btn-primary">Bergabung Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
