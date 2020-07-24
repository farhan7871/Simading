@extends('layouts.admin')


@section('title')
        Kelola Kategori
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
                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:20%">ID Kategori</th>
                                            <th style="width:65%">Nama Kategori</th>
                                            <th style="width:15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{$item -> id}}</td>
                                                <td>{{$item -> kategori}}</td>
                                                <td>
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