@extends('layouts.admin')


@section('title')
        Admin | Kelola Mading
    @endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

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
                                            <th style="width:10%"><center>Kategori</th>
                                            <th style="width:20%"><center>Deskripsi</th>
                                            <th style="width:13%"><center>Diterbitkan</th>
                                            <th style="width:10%"><center>Pengirim</th>
                                            <th style="width:10%"><center>Status</th>
                                            <th style="width:5%"><center>Aksi</th>
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
                                            
                                                        <a id="detail" href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-verif"
                                                            data-id="{{$item->id}}"
                                                            data-status="{{$item->status}}"
                                                            data-kategori="{{$item->kelola_kategori->kategori}}"
                                                            data-deskripsi="{{$item->deskripsi}}"
                                                            data-diterbitkan="{{$item->created_at}}"
                                                            data-pengirim="{{$item->users->name}}"
                                                            data-gambar="{{asset('/storage/'.$item->gambar)}}">
                                                            <i class="fa fa-clipboard-check"></i>
                                                        </a>
                                                        <a href="{{route('kelola-mading.edit', $item-> id)}}" class="btn btn-info">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>

                                                

                                                        <!-- ACTION - DELETE MADING -->
                                                        <button class="btn btn-danger" onclick="deleteConfirmation({{$item->id}})">
                                                                <i class="fa fa-trash"></i>
                                                        </button>
                                            
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
                <div class="modal fade" id="modal-verif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img id="mading_gambar" class="img-responsive" 
                                    src="" alt="" 
                                    style="width: 100%" class="img-thumbnail">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">ID</label>
                                    <input disabled type="text" class="form-control" id="mading_id">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Kategori</label>
                                    <input disabled type="text" class="form-control" id="mading_kategori">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Deskripsi</label>
                                    <textarea disabled class="form-control" id="mading_deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Diterbitkan</label>
                                    <input disabled type="text" class="form-control" id="mading_diterbitkan">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Pengirim</label>
                                    <input disabled type="text" class="form-control" id="mading_pengirim">
                                </div>
                        
                            </form>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Tolak</button> -->
                            <button id="btn-verif-modal" type="button" class="btn btn-warning">Verifikasi</button>
                        </div>
                        </div>
                    </div>
                </div>

                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <script>

                // global variable for id mading
                var id_mading_global;

                // Pass data from HTML Table to Modal
                $(document).ready(function(){
                    $(document).on('click','#detail', function(){

                        // store data temp kedalam var temp
                        var id_mading_temp = $(this).data('id')
                        id_mading_global = id_mading_temp
                        var status_mading_temp = $(this).data('status')
                        var kategori_mading_temp = $(this).data('kategori')
                        var deskripsi_mading_temp = $(this).data('deskripsi')
                        var diterbitkan_mading_temp = $(this).data('diterbitkan')
                        var pengirim_mading_temp = $(this).data('pengirim')
                        var gambar_mading_temp = $(this).data('gambar')

                        // fill data to modal
                        $('#mading_id').val(id_mading_temp)
                        $('#mading_kategori').val(kategori_mading_temp)
                        $('#mading_deskripsi').val(deskripsi_mading_temp)
                        $('#mading_diterbitkan').val(diterbitkan_mading_temp)
                        $('#mading_pengirim').val(pengirim_mading_temp)
                        $('#mading_gambar').attr('src', gambar_mading_temp)

                        // cek apakah mading sudah verif
                        if(status_mading_temp==2){
                            const btn_verif = document.getElementById("btn-verif-modal");
                            btn_verif.disabled = true;
                            btn_verif.innerText = "Sudah verifikasi";
                        
                        }
                    })
                    
                    // VERIFY MADING
                    $(document).on('click','#btn-verif-modal',function(){
                        console.log("masuk verif Func " + id_mading_global);
                        swal({
                            title: "Verifikasi data?",
                            text: "Mohon periksa kembali data",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonText: "Ya, Verifikasi!",
                            cancelButtonText: "Tidak, Batal!",
                            reverseButtons: !0
                        }).then(function (e) {
                            // console.log("alert")

                            if (e.value === true) {
                                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                                // console.log("call url")
                                $.ajax({
                                    type: 'PUT',
                                    url: "/admin/verifyMading/" + id_mading_global,
                                    data: {_token: CSRF_TOKEN},
                                    dataType: 'JSON',
                                    success: function (results) {
                                        console.log(results);
                                        if (results.success === true) {
                                            swal("Berhasil verif!", results.message, "success");
                                            location.reload();
                                        } else {
                                            swal("Error!", results.message, "error");
                                            location.reload();
                                        }
                                    }
                                });

                            } else {
                                e.dismiss;
                            }

                        }, function (dismiss) {
                            return false;
                        })
                    })
                })
                </script>

                <!-- DELETE CONFIRMATION DIALOG -->
                <script type="text/javascript">
                    function deleteConfirmation(id) {
                        swal({
                            title: "Hapus data?",
                            text: "Mohon periksa kembali data!",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonText: "Ya, Hapus!",
                            cancelButtonText: "Tidak, Batal!",
                            reverseButtons: !0
                        }).then(function (e) {
                            // console.log("alert")

                            if (e.value === true) {
                                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                                $.ajax({
                                    type: 'DELETE',
                                    url: "/admin/kelola-mading/" + id,
                                    data: {_token: CSRF_TOKEN},
                                    dataType: 'JSON',
                                    success: function (results) {
                                        console.log(results);
                                        if (results.success === true) {
                                            swal("Berhasil menghapus!", results.message, "success");
                                            location.reload();
                                        } else {
                                            swal("Error!", results.message, "error");
                                            location.reload();
                                        }
                                    }
                                });

                            } else {
                                e.dismiss;
                            }

                        }, function (dismiss) {
                            return false;
                        })
                    }
                </script>
                <!-- END DELETE CONFIRMATION DIALOG -->

                <!-- VERIFY CONFIRMATION DIALOG -->
                <!-- <script type="text/javascript">
                    function verifConfirmation(id) {
                        console.log("masuk verif Func " + id);
                        swal({
                            title: "Verifikasi data?",
                            text: "Mohon periksa kembali data",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonText: "Ya, Verifikasi!",
                            cancelButtonText: "Tidak, Batal!",
                            reverseButtons: !0
                        }).then(function (e) {
                            // console.log("alert")

                            if (e.value === true) {
                                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                                $.ajax({
                                    type: 'PUT',
                                    url: "/admin/verifyMading" + id,
                                    data: {_token: CSRF_TOKEN},
                                    dataType: 'JSON',
                                    success: function (results) {
                                        console.log(results);
                                        if (results.success === true) {
                                            swal("Berhasil verif!", results.message, "success");
                                            location.reload();
                                        } else {
                                            swal("Error!", results.message, "error");
                                            location.reload();
                                        }
                                    }
                                });

                            } else {
                                e.dismiss;
                            }

                        }, function (dismiss) {
                            return false;
                        })
                    }
                </script> -->
                <!-- END VERIFY CONFIRMATION DIALOG -->


                <!-- /.container-fluid -->

            <!-- End of Main Content -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

            
@endsection