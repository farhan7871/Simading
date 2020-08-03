@extends('layouts.welcome')

@section('content')

<section class="engine"><a href="https://mobirise.info/y">html web templates</a></section>
<section class="header12 cid-s2fw7tfn6W mbr-fullscreen mbr-parallax-background" id="header12-o">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">
                    MAJALAH DINDING ONLINE</h1>
                <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">
                    Fakultas Teknik Universitas Muhammadiyah Banjarmasin</p>
                <div class="mbr-section-btn align-center py-2"><a class="btn btn-md btn-secondary display-4" href="https://ft.umbjm.ac.id/">Selengkapnya</a></div>

                <div class="icons-media-container mbr-white">
                    <div class="card col-12 col-md-6 col-lg-3">
                        <div class="icon-block">
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNvwJtZGhRhDqnrhJdbKnsttFDkfjSztZfSXWrxMVnNGVwSFVdnQXFFdNlJxmBkWKTlqdq">
                                <span class="mbr-iconfont socicon-mail socicon"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">ft@umbjm.ac.id</h5>
                    </div>

                    <div class="card col-12 col-md-6 col-lg-3">
                        <div class="icon-block">
                            <a href="https://www.facebook.com/umbjm/">
                                <span class="mbr-iconfont socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">Facebook</h5>
                    </div>

                    <div class="card col-12 col-md-6 col-lg-3">
                        <div class="icon-block">
                            <a href="https://www.instagram.com/ft_umbjm/">
                                <span class="mbr-iconfont socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">Instagram</h5>
                    </div>

                    <div class="card col-12 col-md-6 col-lg-3">
                        <div class="icon-block">
                                <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                        </div>
                        <h5 class="mbr-fonts-style display-5">(0511) 3363002</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="carousel slide cid-s29GqyWEFF" data-interval="false" id="slider2-8">


    <div class="container content-slider">
        <div class="content-slider-wrap">
            <div>
                <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#slider2-8" data-slide-to="0"></li>
                        <li data-app-prevent-settings="" data-target="#slider2-8" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#slider2-8" class=" active" data-slide-to="2">
                        </li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(fronted/assets/images/background1.jpg);">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="{{URL::asset('frontend/assets/images/background1.jpg')}}" alt="" title="">
                                      
                                    {{-- <div class="carousel-caption justify-content-center">
                                        <div class="col-10 align-center">
                                            <p class="lead mbr-text mbr-fonts-style display-7"></p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/background3.jpg);">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="{{URL::asset('frontend/assets/images/background3.jpg')}}" alt="" title="">
                                    {{-- <div class="carousel-caption justify-content-center">
                                        <div class="col-10 align-center">
                                            <p class="lead mbr-text mbr-fonts-style display-7">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/4.jpg);">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="{{URL::asset('frontend/assets/images/4.jpg')}}" alt="" title="">
                                    <div class="carousel-caption justify-content-center">
                                        <div class="col-10 align-center">
                                            <p class="lead mbr-text mbr-fonts-style display-7">Fakultas Teknik merupakan salah satu Fakultas yang ada di Universitas Muhammadiyah Banjarmasin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-8"><span aria-hidden="true"
                            class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-8"><span aria-hidden="true"
                            class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-s29Gt3vK9o mbr-parallax-background" id="content5-9">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><br>BERITA TERKINI</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Majalah Dinding Online Fakultas Teknik<br>Universitas Muhammadiyah Banjarmasin</h3>


            </div>
        </div>
    </div>
</section>


<section class="mbr-section content6 cid-s29GQfgBqV" id="content7-e">
    <div class="container">
        <div class="container">
            @foreach ($items as $item)
            <div class="row">
              <div class="col"> <center>
                <div class="media-container-row mt-4">
                <div class="mbr-figure" style="width: 60%;">
                    <h2>{{$item -> kelola_kategori -> kategori}}</h2>
                    <p> {{$item -> deskripsi}}</p>
                    <img src="{{Storage::url($item->gambar)}}" > <br>
                    <p> Terbit: {{$item -> created_at}}</p>
                </div>
                </div></center>
                <br><br><br>
            </div>
              
              
            </div>
            @endforeach 
          </div>
        
        </div>
    </div>
</section>

<section class="cid-s29Hrb0Wk7" id="social-buttons3-i">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    BAGIKAN HALAMAN INI!
                </h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        {{-- <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span> --}}



                        <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection