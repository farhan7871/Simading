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
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                                    class="fas fa-plus-square mr-2"></i>Tambah Kategori</a>
                                    {{-- <i class="fas fa-plus-square"></i> --}}
                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
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
                                        <tr>
                                            <td>1</td>
                                            <td>Pengumuman</td>
                                            <td>
                                                <a href="#" class="btn btn-primary mr-1">
                                                    Edit
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Lomba</td>
                                            <td>
                                                <a href="#" class="btn btn-primary mr-1">
                                                    Edit
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection