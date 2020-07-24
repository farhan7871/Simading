@extends('layouts.admin')


@section('title')
       Edit Data Kategori
    @endsection

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                       <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori {{$item->kategori}} </h1>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach  
        </ul>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
        <form action="{{route('kelola-kategori.update', $item->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="tkategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{$item->kategori}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </div>
        </div>
    </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection