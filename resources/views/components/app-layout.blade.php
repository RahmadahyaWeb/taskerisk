<!doctype html>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            box-sizing: border-box;
            width: 100%;
        }

        .navbar-nav a {
            color: black;
        }

        .container .hero {
            min-height: 75vh;
        }

        .dropdown .dropdown-item:active {
            background-color: #dc3545;
        }

        .swal2-popup .swal2-styled:focus {
            box-shadow: none !important;
        }

        .swal2-confirm {
            background-color: #dc3545 !important;
        }

        textarea:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            outline: none;
            border: 1px solid #dc3545;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }

        input {
            caret-color: #dc3545;
        }

        .checkbox-lg .form-check-input {
            top: .8rem;
            scale: 1.4;
            margin-top: auto;
        }

        .checkbox-lg .form-check-label {
            padding-top: 13px;
        }
    </style>
    @livewireStyles
</head>

<body>
    @include('sweetalert::alert')
    <x-navbar></x-navbar>
    <div class="container class my-3 hero">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>
