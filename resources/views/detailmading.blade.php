@extends('layouts.welcome')

@section('content')

<section class="mbr-section" id="content7-e">
    <div class="container pt-5 pb-4">
        <div class="card shadow bg-white mt-5 mx-5">
            <div class="card-body">
                <div class="row row-cols-2">
                    <div class="col-5"> 
                        <div class="media">
                            <div class="mbr-figure">
                                <img style="width: 400px;" class="img-fluid rounded" src="{{asset('/storage/'.$mading->gambar)}}"><br>
                            </div>
                        </div>  
                    </div>
                    <div class="col-7">
                        <h2>{{$mading->kelola_kategori->kategori}}</h2>
                        <hr>
                        <h5 style="line-height:1.3; margin-bottom:20px"> {{$mading->deskripsi}}</h5>
                        <div class="row">
                            <div class="col-2">
                                <p>Penulis</p>
                            </div>
                            <div class="col-10">
                                <p>: {{ $mading->users->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Terbit</p>
                            </div>
                            <div class="col-10">
                                <p>: {{ $mading->created_at->isoFormat('DD MMMM YYYY') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection