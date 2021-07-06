@extends('layouts.admin')


@section('title')
        Admin | Kelola Mading
    @endsection

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                      <!-- Page Heading -->
    

                    {{-- <!-- Page Heading --}}
                    <h1 class="h3 mb-2 text-gray-800 mt-4">Kelola Data Mading</h1>
                    <p class="mb-4">Kelola Mading</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{route('kelola-mading.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                                    class="fas fa-plus-square mr-2"></i>Tambah Mading</a>
                                
                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right"
                                    method="GET" action="{{route('kelola-mading.index')}}">
                                    <div class="input-group">
                                        <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>     
                                            </div>
                                    </div>
                                </form>

                                    {{-- <i class="fas fa-plus-square"></i> --}}
                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:10%"><center>ID</th>
                                            <th style="width:12%"><center>Kategori</th>
                                            <th style="width:20%"><center>Deskripsi</th>
                                            <th style="width:20%"><center>Gambar Mading</th>
                                            <th style="width:13%"><center>Diterbitkan</th>
                                            <th style="width:10%"><center>Admin</th>
                                            <th style="width:15%"><center>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><center>ID</th>                                            
                                            <th><center>Kategori</th>
                                            <th><center>Deskripsi</th>
                                            <th><center>Gambar Mading</th>
                                            <th><center>Diterbitkan</th>
                                            <th><center>Admin</th>
                                            <th><center>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td><center> {{$item -> id}} </center></td>

                                                <td>{{$item -> kelola_kategori_kategori}}</td>


                                                <td>{{$item -> deskripsi}}</td>

                                                <td><center>
                                                    <img src="{{Storage::url($item->gambar)}}" alt="" style="width: 150px" class="img-thumbnail">
                                                </td>

                                                <td>{{$item -> created_at}}</td>

                                                <td>{{$item -> users -> name}} </td>

                                                <td> <center>
                                                    <!-- todo 1 bikin tombol lihat detail, muncul modal -->
                                                    <!-- todo 2 : tampilkan detail data post -->
                                                    <!-- todo 3 : buat tombol terima, ajukan revisi, delete -->

                                                    <!-- <a href="{{route('kelola-mading.edit', $item-> id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{route('kelola-mading.destroy', $item->id)}}" method="POST" class="d-inline">
                                                    @csrf   
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    </form> </center> -->
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">data kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>

                </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection