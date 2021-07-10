@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h2>Daftar</h2>
                    <form action="{{ route('register_request') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama lengkap anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan alamat email anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan kata sandi anda" required minlength="6">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Ulangi Kata Sandi</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukan kata sandi anda" required minlength="6">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-custom" type="submit">Masuk</button>
                        </div>
                    </form>
                    <p>Sudah punya akun? <a href="{{ route('login_view') }}">masuk sekarang</a></p>
                    {{-- <div class="d-grid gap-2">
                        <a type="button" class="btn btn-custom" href="{{ route('register_sender_view') }}">Daftar</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection