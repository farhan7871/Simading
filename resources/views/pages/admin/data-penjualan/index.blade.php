@extends('layouts.admin')

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <a href="#" class="btn btn-primary btn-icon-split mt-4 mb-4">
                        <span class="icon text">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>

                    <!-- Page Heading
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                            DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Harga</th>
                                            <th>Utang</th>
                                            <th>Toko</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Harga</th>
                                            <th>Utang</th>
                                            <th>Toko</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Epson Laser JT-320</td>
                                            <td>Printer</td>
                                            <td>Rp.20.000</td>
                                            <td>Rp.100.000</td>
                                            <td>Mulia Komputer</td>
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
                                            <td>Catridge Hp-680</td>
                                            <td>Catridge</td>
                                            <td>Rp.120.000</td>
                                            <td>Rp.100.000</td>
                                            <td>Mulia Komputer</td>
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