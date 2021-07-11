@extends('layouts.welcome')

@section('content')

<section class="mbr-section" id="content7-e">
    <div class="container py-5">
        <div class="row row-cols-2 mt-5">
            <div class="col "> 
                <div class="media">
                    <div class="mbr-figure" style="width: 60%;">
                        <img style="width: 300px; height: 250px;" class="img-thumbnail" src="{{asset('/storage/'.$mading->gambar)}}"><br>
                    </div>
                </div>  
            </div>
            <div class="col">
                <h2>{{$mading->kelola_kategori->kategori}}</h2>
                <h5 style="line-height:1.3; margin-bottom:20px"> {{$mading -> deskripsi}}</h5>
                <p> Terbit: {{$mading -> created_at}}</p>
            </div>
        </div>
    </div>
</section>

    
@endsection