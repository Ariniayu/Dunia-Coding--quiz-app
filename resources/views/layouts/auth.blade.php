<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon">
    <title>Login</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body class="bg-soft-blue">

    <div class="container">
        <div class="row align-items-center justify-content-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="{{ route('home') }}" class="logo mb-5">
                            <img src="{{ url('assets/images/logo.png') }}" alt="Logo">
                            <h4 class="text-dark fw-bold">Quizz</h4>
                        </a>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
