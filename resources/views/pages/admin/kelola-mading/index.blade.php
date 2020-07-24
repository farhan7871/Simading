@extends('layouts.admin')


@section('title')
        Kelola Mading
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
                                    {{-- <i class="fas fa-plus-square"></i> --}}
                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">ID</th>
                                            <th style="width:75%">Gambar Mading</th>
                                            {{-- <th>Kategori</th> --}}
                                            <th style="width:15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Gambar Mading</th>
                                            {{-- <th>Kategori</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{$item -> id}}</td>
                                                <td>
                                                    <img src="{{Storage::url($item->gambar)}}" alt="" style="width: 150px" class="img-thumbnail">
                                                </td>
                                                {{-- <td>{{$item -> judul}}</td>
                                                <td>{{$item -> deskripsi}}</td> --}}
                                                {{-- <td>{{$item -> kelola_kategori_id}}</td> --}}
                                                <td>
                                                    <a href="{{route('kelola-mading.edit', $item-> id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{route('kelola-mading.destroy', $item->id)}}" method="POST" class="d-inline">
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