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
            border: none;
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
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>