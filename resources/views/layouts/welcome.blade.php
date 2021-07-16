<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{URL::asset('frontend/assets/images/logo-1.png')}}" type="image/x-icon">
    <meta name="description" content="">

    <title>Mading Online Fakultas Teknik</title>

    <link rel="stylesheet" href="{{url('frontend/assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/theme/css/style.css')}}">
    <link rel="preload" as="style" href="{{url('frontend/assets/mobirise/css/mbr-additional.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/mobirise/css/mbr-additional.css')}}" type="text/css">

    <style>
        .btn-custom-block {
            display: block; 
            border: none; 
            width: 100%; 
            height: 56px;
            background-color: #198754; 
            color: white;
            border-radius: 5px;
            cursor: pointer;    
        }

        .btn-custom-block:hover {
            background-color: #0f6d41; 
        }

        .btn-custom-block:focus {
            outline: none;
        }

    </style>

</head>

<body>
    <section class="menu cid-s2aANidyVH" once="menu" id="menu2-n">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                            <img src="{{URL::asset('frontend/assets/images/logo-1.png')}}" alt="Mobirise" title="" style="height: 3.8rem;">
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-info display-4"
                            href="{{ route('home') }}">Majalah Dinding Online Fakultas Teknik</a></span>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-info display-4" href="{{route('home')}}"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link link text-info display-4" href="#content5-9"></span>Berita</a></li>
                    <li class="nav-item"><a class="nav-link link text-info display-4" href="#saran_page"></span>Saran</a></li>
                    <li class="nav-item"><a class="nav-link link text-info display-4" href="{{route('upload_mading_view')}}"></span>Unggah Mading</a></li>
                    <li class="nav-item"><a class="nav-link link text-info display-4" href="#social-buttons3-i"></span>Tentang Kami</a></li>
                    @if (Auth::check()) 
                        <li class="nav-item"><a class="nav-link link text-info display-4" href="{{route('logout_request')}}"></span>Keluar</a></li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link link text-info display-4 dropdown-toggle" href="#" id="userMenuDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __(Auth::user()->name) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userMenuDropDown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> --}}
                    @else
                        <li class="nav-item"><a class="nav-link link text-info display-4" href="{{ route('login_view') }}"></span>Masuk</a></li>
                    @endif
                </ul>


            </div>
            
            
        </nav>
    </section>

   @yield('content')

   <section class="cid-s29Hyh8jdc" id="footer1-j">


    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">
                        <img src="{{URL::asset('frontend/assets/images/logo-1.png')}}" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Alamat
                </h5>
                <p class="mbr-text">Jl. Gubernur Syarkawi Kab. Barito Kuala, Kalimantan Selatan</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Kontak
                </h5>
                <p class="mbr-text">
                    Email: ft@umbjm.ac.id<br>Telepon: (0511) 3363002&nbsp;</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-4">
                <h5 class="pb-3">
                    Link
                </h5>
                <p class="mbr-text">Temukan kami di &nbsp;<a href="https://www.instagram.com/ft_umbjm">Instagram<br></a><br></p>
            </div>
        </div>

        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © 2020 Fakultas Teknik | Universitas Muhammadiyah Banjarmasin.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{url('frontend/assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{url('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/assets/popper/popper.min.js')}}"></script>
<script src="{{url('frontend/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
<script src="{{url('frontend/assets/vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
<script src="{{url('frontend/assets/parallax/jarallax.min.js')}}"></script>
<script src="{{url('frontend/assets/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
<script src="{{url('frontend/assets/tether/tether.min.js')}}"></script>
<script src="{{url('frontend/assets/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{url('frontend/assets/sociallikes/social-likes.js')}}"></script>
<script src="{{url('frontend/assets/dropdown/js/nav-dropdown.js')}}"></script>
<script src="{{url('frontend/assets/dropdown/js/navbar-dropdown.js')}}"></script>
<script src="{{url('frontend/assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script src="{{url('frontend/assets/theme/js/script.js')}}"></script>
<script src="{{url('frontend/assets/slidervideo/script.js')}}"></script>
{{-- <script src="{{ url('frontend/assets/custom_JS/filter.js') }}"></script>
<script src="{{ url('frontend/assets/custom_JS/search.js') }}"></script> --}}
    
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>