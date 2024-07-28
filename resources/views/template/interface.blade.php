<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') - Coffee Netbox</title>
    <link rel="shortcut icon" href="/img/logo.jpg" type="icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: white;
        }

        .spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.5s ease-out;
            transform: translateY(0);
        }

        .spinner.hide {
            transform: translateY(-100%);
        }


        .spinner>div {
            width: 18px;
            height: 18px;
            background-color: brown;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        .content {
            display: none;
        }
    </style>
</head>

<body>

    <div class="spinner" id="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>

    <div class="content" id="content">
        @yield('content')
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- @if (session('gagal')) --}}
    <script>
        iziToast.success({
            title: 'Berhasil',
            message: "{{ session('berhasil') }}",
            position: 'topRight'
        });
    </script>
    {{-- @endif --}}

    @if (session('gagal'))
    <script>
        iziToast.error({
            title: 'Gagal',
            message: "{{ session('gagal') }}",
            position: 'topRight'
        });
    </script>
    @endif

    <script>
        function hideLoader() {
            var spinner = document.getElementById('spinner');
            var content = document.querySelector('.content');
            setTimeout(function() {
                spinner.classList.add('hide');
                content.style.display = 'block';
            }, 2500);   
        }
        document.addEventListener('DOMContentLoaded', function() {
            hideLoader();
        });
    </script>

</body>

</html>