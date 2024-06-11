@extends('layouts.main')
@section('title', 'FAQ')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-white">Frequently Asked Questions (FAQ)</h1>
    <div id="faqAccordion" class="accordion">
        <div class="card">
            <div class="card-header bg-primary" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu layanan kami?
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    Layanan kami menyediakan berbagai solusi digital untuk membantu bisnis Anda berkembang melalui teknologi inovatif dan layanan pelanggan yang luar biasa.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara menghubungi dukungan pelanggan?
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body">
                    Anda dapat menghubungi dukungan pelanggan kami melalui email support@example.com atau telepon di (123) 456-7890. Tim kami tersedia 24/7 untuk membantu Anda.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apa kebijakan pengembalian dana?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body">
                    Kami menawarkan kebijakan pengembalian dana penuh dalam 30 hari pertama setelah pembelian. Jika Anda tidak puas dengan layanan kami, Anda dapat mengajukan pengembalian dana melalui akun Anda atau dengan menghubungi dukungan pelanggan.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Bagaimana cara mendaftar ke layanan kami?
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                <div class="card-body">
                    Untuk mendaftar, kunjungi halaman pendaftaran di situs kami dan isi formulir dengan informasi yang diperlukan. Setelah mendaftar, Anda akan menerima email konfirmasi dengan petunjuk lebih lanjut.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaTJojyld9UyrQ6s7eFZp6w5U" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+djy62tM6TppU8OSTjEN5RS5/8ka9FdhgWjvXGIUENNE3N7U" crossorigin="anonymous"></script>
@endsection
