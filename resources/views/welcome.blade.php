@extends('layouts.welcome')

@section('content')

<section class="engine"><a href="https://mobirise.info/y">html web templates</a></section>
<section class="header12 cid-s2fw7tfn6W mbr-fullscreen mbr-parallax-background" id="header12-o">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1" style="margin-top:100px;">
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
                            <a href="https://api.whatsapp.com/send?phone=625113363002">
                                <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                            </a>
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

<section class="mbr-section form3 cid-s8DA9JuJJu" id="form3-t">
    <div class="container py-5">    
        <div class="row py-4 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <div class="input-group">
                    <input id="search_madings" type="text" class="form-control bg-light border-0 small" placeholder="Pencarian deskripsi..." aria-label="Search" aria-describedby="basic-addon2">
                </div>
                {{-- <form action="{{route('home')}}" method="GET" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <input type="hidden" name="cari" data-form-email="true">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                    </div>
                    <div class="dragArea row">
                        <div class="input-group">
                            <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Pencarian deskripsi..." aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
        <style>
            #filter_data label {
                margin: 10px
            }
            #filter_data span {
                position: relative;
                display: inline-block;
                background: #D3E0EA;
                padding: 15px 30px;
                border-radius: 30px;
                transition: 0.5s;
                user-select: none;
            }
            #filter_data input[type='checkbox']:checked ~ span {
                background: #276678;
                color: beige;
            }
        </style>
        <div class="row row-cols-auto g-4" id="filter_data">
            @forelse ($categories as $category)
            <label for="btn-{{ $category->id }}" style="cursor: pointer">
                <input type="checkbox" class="category-cb" style="display: none" name="btn-{{ $category->id }}" id="btn-{{ $category->id }}" value="{{ $category->id }}">
                <span>{{ $category->kategori }}</span>
            </label>
            @empty
                
            @endforelse
        </div>
    </div>
</section>

<section class="mbr-section " id="content7-e">
    <div class="container pb-5">
        <div class="row row-cols-3 g-4" id="data-madings-div">
            @forelse ($items as $item)
                <div class="my-3 mx-3">
                    <div class="card shadow text-center bg-white" style="width: 250px; height: 370px; background-color: #11638a;">
                        <div class="card-header">
                            <h3>{{$item ->kelola_kategori->kategori}}</h2>
                        </div>
                        <a href="{{ url('/mading/'.$item->id) }}">
                            <img class="card-img-top" style="width: 100%; height: 15vw; object-fit:cover;" src="{{asset('/storage/'.$item->gambar)}}" alt="">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title text-truncate"> {{$item->deskripsi}}</h6>
                            @if ($item->created_at == null || $item->created_at == '')
                                <p> Terbit: {{ __('Tidak diketahui') }}</p>
                            @else
                                <p> Terbit: {{$item->created_at->isoFormat('DD MMMM YYYY')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
            
            @endforelse
        </div>
        <div class="row-cols-12 mt-2" id="pagination-div">
            <div class="justify-content-center">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form3 cid-s8DA9JuJJu"  id="saran_page">
    <div class="container pb-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card shadow mx-5">
                    <div class="card-header text-center" style="background-color: #635A51; color: white;">
                        <h2>SARAN</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('suggest') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email_saran" class="form-label">Email</label>
                                <input type="" name="email" id="email_saran" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="saran" class="form-label">Saran</label>
                                <textarea name="content" id="saran" class="form-control" cols="30" rows="4" required minlength="10"></textarea>
                            </div>
                            <button class="btn-custom-block" type="submit">Kirim</button>    
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
    
@endsection