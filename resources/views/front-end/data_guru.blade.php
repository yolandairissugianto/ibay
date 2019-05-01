@extends('front-end.templates.default')

@section('content')
<div class="world-catagory-area">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
        <li class="title">Data Guru</li>
    </ul>

    <div class="tab-content" id="myTabContent2">

        <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
            <div class="row">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                        <img src="{{ asset('assets2/img/blog-img/user7.png') }}" alt="" >
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Hanif Fuadi</h5>
                            </a>
                            <p>Pengampu : Multimedia</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Yolanda</a> on <a href="#" class="post-date">April 16, 2019 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('assets2/img/blog-img/user12.png') }}" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Rifqi Triawan</h5>
                            </a>
                            <p>Pengampu : Rekaya Perangkat Lunak</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Yolanda</a> on <a href="#" class="post-date">April 16, 2019 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('assets2/img/blog-img/user8.png') }}" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Novita Isnarosi</h5>
                            </a>
                            <p>Pengampu : Matematika</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Yolanda</a> on <a href="#" class="post-date">April 16, 2019 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{ asset('assets2/img/blog-img/user9.png') }}" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>Endang Titi Saptari</h5>
                            </a>
                            <p>Pengampu : Bahasa Indonesia</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Yolanda</a> on <a href="#" class="post-date">April 16, 2019 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection