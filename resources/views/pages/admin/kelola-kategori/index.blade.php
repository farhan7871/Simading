@extends('layouts.admin')


@section('title')
        Admin | Kelola Kategori
    @endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800 mt-4">Kelola Data Kategori</h1>
    <p class="mb-4">Tambah, edit, hapus kategori</p>

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
                        <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Cari kategori ..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <!-- <th style="width:65%"><center>Digunakan</th> -->
                            <th style="width:15%"><center>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td><center> {{$item -> id}}</td>

                                <td>{{$item -> kategori}}</td>

                                <!-- <td>{{$item -> kategori}}</td> -->

                                <td><center>
                                    <a href="{{route('kelola-kategori.edit', $item-> id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                    </a>

                                    <button class="btn btn-danger" onclick="deleteConfirmation({{$item->id}})">
                                        <i class="fa fa-trash"></i>
                                    </button>
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

<!-- DELETE CONFIRMATION DIALOG -->
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Hapus kategori?",
            text: "Mohon periksa kembali kategori!",
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
                    url: "/admin/kelola-kategori/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        console.log(results);
                        if (results.success === true) {
                            swal("Berhasil menghapus!", results.message, "success");
                            location.reload();
                        } else {
                            swal("Gagal menghapus!", "Ada mading yang menggunakan kategori ini", "error");
                            // location.reload();
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
<!-- /.container-fluid -->

<!-- End of Main Content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
@endsection