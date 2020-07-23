@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Mading</h1>
    </a>
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
        <form action="{{route('kelola-mading.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" placeholder="gambar" >
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{old('judul')}}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                {{-- <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{old('deskripsi')}}"> --}}
                <textarea name="about" rows="8" class="d-block w-100 form-control">{{old('deskripsi')}}</textarea>
            </div>
            <div class="form-group">
                <label for="kelola_kategori_id">Kategori</label>
                <select name="kelola_kategori_id" required class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kelola_kategori as $kelola_kategoris)
                        <option value="{{$kelola_kategoris->id}}">
                        {{$kelola_kategoris->kategori}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>


  </div>
  <!-- /.container-fluid -->
@endsection