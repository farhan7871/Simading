@extends('layouts.admin')

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                      <!-- Page Heading -->
    

                    {{-- <!-- Page Heading --}}
                    <h1 class="h3 mb-2 text-gray-800 mt-4">Kelola Data Berita</h1>
                    <p class="mb-4">Kelola Berita</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                                    class="fas fa-plus-square mr-2"></i>Tambah Berita</a>
                                    {{-- <i class="fas fa-plus-square"></i> --}}
                                <table class="table table-bordered mb-4"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Deskripsi Berita</th>
                                            <th>Tambah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Deskripsi Berita</th>
                                            <th>Tambah</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>sss</td>
                                            <td>Menjelaskan keadaan terkinir</td>
                                            <td>dilihat</td>
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
                                            <td>sss</td>
                                            <td>Menjelaskan keadaan terkinir</td>
                                            <td>dilihat</td>
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

            </div>
            <!-- End of Main Content -->
            
@endsection