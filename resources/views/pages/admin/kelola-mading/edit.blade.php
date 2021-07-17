@extends('layouts.admin')
@section('title')
    Admin | Edit Mading
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
                    <label for="kelola_kategori_id">Kategori</label>
                    <select name="kelola_kategori_id" class="form-control">
                        <!-- <option value="{{$item->kelola_kategori_id}}"> {{$item -> kelola_kategori -> kategori}} </option> -->
                        @foreach ($kelola_kategori as $kelola_kategoris)
                            @if($kelola_kategoris->id == $item->kelola_kategori_id)
                                <option value="{{$kelola_kategoris->id}}" selected>{{$kelola_kategoris->kategori}}</option>
                            @else
                                <option value="{{$kelola_kategoris->id}}">{{$kelola_kategoris->kategori}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" value="" cols="30" rows="3">{{$item -> deskripsi}}</textarea>
                    <!-- <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$item -> deskripsi}}"> -->
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file"  class="form-control" name="gambar" placeholder="gambar" value="{{asset('/storage/'.$item->gambar)}}">
                </div>

                <div class="form-group">
                    <img src="{{asset('/storage/'.$item->gambar)}}" style="width: 150px">
                </div>

                <div class="form-group" >
                    <label for="users_id">Pengirim</label>
                    <input type="text"  class="form-control" value="{{$item->users->name}}" readonly>
                    <input type="hidden" name="users_id" value="{{$item->users_id}}">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </form>
        </div>
    </div>
</div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection