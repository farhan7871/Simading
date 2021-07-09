@extends('layouts.welcome')

@section('content')

<section class="mbr-section " id="content7-e">
    <div class="container">
        <div class="row">
            <div class="col"> 
                <div class="media row mt-4">
                    <div class="mbr-figure" style="width: 60%; margin-top:100px;">
                      <center>
                        <h2>{{$mading->kelola_kategori->kategori}}</h2>
                        <img style="width: 300px; height: 250px;" class="img-thumbnail" src="{{asset('/storage/'.$mading->gambar)}}"><br>
                        <h5 style="line-height:1.3; margin-bottom:20px"> {{$mading -> deskripsi}}</h5>
                        <p> Terbit: {{$mading -> created_at}}</p>
                      </center>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

    
@endsection