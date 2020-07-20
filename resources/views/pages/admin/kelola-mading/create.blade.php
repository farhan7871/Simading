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
        <form action="{{route('kelola-mading.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image" >
            </div>

            <div class="form-group">
                <label for="caption">Caption</label>
                <input type="text" class="form-control" name="caption" placeholder="Caption" value="{{old('caption')}}">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{old('kategori')}}">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>


  </div>
  <!-- /.container-fluid -->
@endsection