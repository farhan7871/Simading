@extends('layouts.admin')


@section('title')
        Admin | Kelola Kategori
    @endsection

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                      <!-- Page Heading -->
    

                    {{-- <!-- Page Heading --}}
                    <h1 class="h3 mb-2 text-gray-800 mt-4">Kelola Data Kategori</h1>
                    <p class="mb-4">Kelola Kategori</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{route('kelola-kategori.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                                    class="fas fa-plus-square mr-2"></i>Tambah Kategori</a>
                                    {{-- <i class="fas fa-plus-square"></i> --}}

                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right"
                                    method="GET" action="{{route('kelola-kategori.index')}}">
                                    <div class="input-group">
                                        <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>     
                                            </div>
                                    </div>
                                </form>

                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:20%"><center>ID Kategori</th>
                                            <th style="width:65%"><center>Nama Kategori</th>
                                            <th style="width:15%"><center>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><center>ID Kategori</th>
                                            <th><center>Nama Kategori</th>
                                            <th><center>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td><center> {{$item -> id}}</td>

                                                <td>{{$item -> kategori}}</td>

                                                <td><center>
                                                    <a href="{{route('kelola-kategori.edit', $item-> id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{route('kelola-kategori.destroy', $item->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    </form>
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