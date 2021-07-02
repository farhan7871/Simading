@extends('layouts.welcome')

@section('content')


<section class="mbr-section " id="content7-e">
    <div class="container">
            <div class="row">
            @foreach ($items as $item)
              <div class="col"> 
                <div class="media row mt-4">
                <div class="mbr-figure" style="width: 60%;"><center>
                    <h2>{{$item -> kelola_kategori_kategori}}</h2>
                    <a href=""><img style="width: 300px; height: 250px;" class="img-thumbnail" src="{{Storage::url($item->gambar)}}"> <br></a>
                    <h5 style="line-height:1.3; margin-bottom:20px"> {{$item -> deskripsi}}</h5>
                    <p> Terbit: {{$item -> created_at}}</p>
                    </center></div>
            </div>
            </div>
            @endforeach 
        </div>
</section>

    
@endsection