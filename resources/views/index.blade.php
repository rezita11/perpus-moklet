<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan SMK Telkom | @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .alert-info {
            background-color: #17a2b8;
            color: #ffffff;
            border: none;
            border-radius: 0;
            text-align: center;
            padding: 15px;
            margin-bottom: 0;
        }

        h4 {
            margin-bottom: 0;
        }

        /* Styling for the content section */
        .content {
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        /* Styling for the footer section */
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert alert-info">
            <h4><b>Selamat Datang</b> di Perpus MOKLET</h4>
        </div>
        <div class="content">
            @include('menu')
            @include('banner')
            @include('konten')
        </div>
    </div>
</body>
</html>
