@extends('layouts.admin')


@section('title')
       Edit Mading
    @endsection

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                       <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Mading</h1>
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
        <form action="{{route('kelola-mading.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" placeholder="gambar" value="{{$item->gambar}}">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$item->judul}}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$item->deskripsi}}">
            </div>
            <div class="form-group">
                <label for="kelola_kategori_id">Kategori</label>
                <select name="kelola_kategori_id" required class="form-control">
                    <option value="{{$item->kelola_kategori_id}}">Jangan Diubah</option>
                    @foreach ($kelola_kategori as $kelola_kategoris)
                        <option value="{{$kelola_kategoris->id}}">
                        {{$kelola_kategoris->kategori}}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </div>
        </div>
    </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection