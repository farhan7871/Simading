@extends('layouts.welcome')

@section('content')
<div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
</div>

<div class="container">
    <div class="row" >
        <div class="col" >
            <div class="card shadow"  style="background-color:white; margin-bottom: 100px; margin-top: 100px">
                <div class="card-body">
                    <form action="{{ route('upload_mading') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" required class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{ __($item->kategori) }}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required>
                        </div>
            
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" placeholder="gambar" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-custom-block">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection