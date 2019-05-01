@extends('front-end.templates.default')

@section('content')
<div class="world-catagory-area">
        <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="title">Berita Terkini</li>
        </ul>

        <div class="tab-content" id="myTabContent2">

            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                            <img src="{{ asset('assets2/img/blog-img/1.jpeg') }}" alt="">
                                <!-- Catagory -->
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Tiga Siswa SMK N 1 Slawi Menjadi Duta Lingkungan Hidup Kabupaten Tegal Tahun 2018</h5>
                                </a>
                                <p>SLAWI - Bapak Kepala Sekolah SMK N 1 Slawi Drs. Sufian, M. Eng menyerahkan piala yang didapat oleh siswa pada acara pemilihan duta lingkungan hidup...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                            <img src="{{ asset('assets2/img/blog-img/2.jpg') }}" alt="">
                                <!-- Catagory -->
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>SMK NEGERI 1 SLAWI KEDATANGAN PELATIH BASKET ASAL FILIPINA</h5>
                                </a>
                                <p>Slawi - Kehebohan terjadi saat pelatih bola basket asal Filipina yang bernama Mathew mengunjungi...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                <img src="{{ asset('assets2/img/blog-img/4.jpg') }}" alt="">
                                    <!-- Catagory -->
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>Smean Games untuk memperingati ulang tahun ke-50</h5>
                                    </a>
                                    <p>Kegiatan pasca semester atau yang biasa disebut class meeting merupakan kegiatan yang diadakan..</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                <img src="{{ asset('assets2/img/blog-img/6.jpg') }}" alt="">
                                    <!-- Catagory -->
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>Buku Sekolah Digital SMK Kelas XIIBuku Sekolah Digital SMK Kelas XII</h5>
                                    </a>
                                    <p>Berikut ini adalah link untuk mendownload buku buku elektronik untuk menunjang pembelajaran Sekolah Mengah.../p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection