@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section class="content">
        <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">Selamat Datang di Sistem Informasi Manajemen FedCar-Rental</h3>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('dist/img/slidercar1.png')}}" class="d-block w-100" alt="slider1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('dist/img/slidercar2.png')}}" class="d-block w-100" alt="slider2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('dist/img/slidercar3.png')}}" class="d-block w-100" alt="slider3">
                        </div>
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

            <div class="card-body">
            FedCar-Rental adalah penyedia jasa sewa / rental mobil di kota Cirebon. Sejak berdiri di tahun 2019 lalu, 
            kami berfokus pada pelayanan transportasi bagi para wisatawan baik lokal maupun mancanegara. Customer yang 
            kami layani banyak dari berbagai daerah dan berbagai instansi perkantoran baik pemerintah ataupun swasta.</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills flex-column" id="cardPillVertical" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="contact-pill-vertical" href="#contactPillVertical" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="true">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" id="visi_misi-pill-vertical" href="#visi_misiPillVertical" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">About Us</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="cardPillContentVertical">
                	<div class="tab-pane fade show active" id="contactPillVertical" role="tabpanel" aria-labelledby="contact-pill-vertical">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Office: +62 00 000 0000 / +62 11 111 1111</p>
                        <p class="card-text">Whatsapp: +62 22 222 2222</p>
                        <p class="card-text">Mobile: +62 33 333 333</p>
                        <p class="card-text">Email: fedcarrent@gmail.com</p>
                        <p class="card-text">Address: Jln. Dr. Sutomo No.21 Cirebon</p>
                    </div>
                    <div class="tab-pane fade" id="visi_misiPillVertical" role="tabpanel" aria-labelledby="visi_misi-pill-vertical">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">FedCar-Rental ingin mewujudkan visi untuk menjadi rental mobil dengan layanan yang cepat, ramah dan jujur. 
                        Membangun kepercayaan bahwa layanan transportasi bukan sekedar layanan rental mobil biasa, tetapi menjadi pemandu layanan perjalanan 
                        wisata dan guide yang profesional.</p>
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">FedCar-Rental memiliki komitmen untuk menjaga perawatan kendaraan dengan sangat teliti. Kepuasan pelanggan sangat 
                        penting untuk kami jaga dengan sangat baik. Setiap tahunnya kami memperbaharui tipe mobil yang kami sewakan demi terus meningkatkan 
                        kemajuan layanan yang disesuaikan dengan kemajuan dunia otomotif dan transportasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>                  
                  

        
         

@endsection
