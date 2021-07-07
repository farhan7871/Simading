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
                                            <th style="width:5%"><center>ID</th>
                                            <th style="width:20%"><center>Gambar Mading</th>
                                            <th style="width:12%"><center>Kategori</th>
                                            <th style="width:20%"><center>Deskripsi</th>
                                            <th style="width:13%"><center>Diterbitkan</th>
                                            <th style="width:10%"><center>Pengirim</th>
                                            <th style="width:10%"><center>Status</th>
                                            <th style="width:15%"><center>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td><center> {{$item -> id}} </center></td>

                                                <td><center>
                                                    <img src="{{asset('/storage/'.$item->gambar)}}" alt="" style="width: 150px" class="img-thumbnail">
                                                </td>
                                                <td>{{$item -> kelola_kategori -> kategori}}</td>

                                                <td>{{$item -> deskripsi}}</td>


                                                <!-- MADING'S CREATED AT -->
                                                <td>{{$item -> created_at}}</td>

                                                <!-- MADING'S SENDER -->
                                                <td>{{$item -> users -> name}} </td>

                                                <!-- MADING'S STATUS -->
                                                <td>
                                                <!-- mading's status check -->
                                                @if ($item -> status == 1)
                                                    <!-- mading blm terverifikasi -->
                                                    <span class="badge badge-pill badge-warning">Belum verifikasi</span>
                                                @elseif($item -> status == 2)
                                                    <!-- mading sudah terverifikasi -->
                                                    <span class="badge badge-pill badge-success">Terverifikasi</span> 
                                                @endif
                                                </td>
                                                <td> 
                                                    <center>
                                                        <!-- todo 2 : tampilkan detail data post -->
                                                        <!-- todo 3 : buat tombol terima, ajukan revisi, delete -->
                                                        @if ($item -> status == 1)
                                                        <a href="{{route('kelola-mading.edit', $item-> id)}}" class="btn btn-success" data-toggle="modal" data-target="#modalVerif">
                                                            <i class="fa fa-clipboard-check"></i>
                                                        </a>
                                                        <a href="{{route('kelola-mading.edit', $item-> id)}}" class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        @elseif($item -> status == 2)
                                                        <a style="pointer-events: none;" href="#" class="btn btn-success" data-toggle="modal" data-target="#modalVerif">
                                                            <i class="fa fa-clipboard-check"></i>
                                                        </a>
                                                        <a style="pointer-events: none;" href="#" class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        @endif
                                                        <!-- <form action="{{route('kelola-mading.destroy', $item->id)}}" method="POST" class="d-inline">
                                                            @csrf   
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>  -->
                                                    </center>
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
                
               <!-- VERIFY MODAL -->
                <div class="modal fade" id="modalVerif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- Mading Photo -->
                                <img id="myImage" class="img-responsive" src="" alt="">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">ID</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Kategori</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Pengirim</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                        
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            
@endsection