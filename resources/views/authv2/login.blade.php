<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        h2 {
            text-align: center;
        }

        form {
            margin: 20px;
        }

        a[type="button"] {
            background-color: #e26237;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        a[type="button"]:hover {
            background-color: #883b21;
            color: white;
            font-weight: bold;
        }

        body {
            background-color: beige;
        }

        p {
            text-align: center;
        }

        .form-label {
            /* color: #a8aaad; */
        }

        .form-control {
            /* background: transparent; */
            /* border: none; */
            border-radius: 2rem;
            /* border: 1.5px solid #a8aaad; */
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .container {
            width: 40%;
        }
        .card {
            margin-top: 15%;
            /* box-shadow: 8px 8px 5px rgb(161, 161, 161); */
        }

        .btn-custom {
            background-color: rgb(0, 182, 182);
            color: white;
            border-radius: 2rem;
        }

        .btn-custom:hover {
            background-color: rgb(0, 112, 112);
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Masuk Sebagai Pengirim</h2>
                        <form action="{{ route('login_sender') }}" method="POST">
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
                        <p>Atau</p>
                        <div class="d-grid gap-2">
                            <a type="button" class="btn btn-custom" href="{{ route('register_sender_view') }}">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>