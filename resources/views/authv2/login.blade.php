@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h2>Masuk</h2>
                    <form action="{{ route('login_request') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan alamat email anda">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan kata sandi anda">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-custom" type="submit">Masuk</button>
                        </div>
                    </form>
                    <p>Belum punya akun? <a href="{{ route('register_view') }}">daftar sekarang</a></p>
                    {{-- <div class="d-grid gap-2">
                        <a type="button" class="btn btn-custom" href="{{ route('register_sender_view') }}">Daftar</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection