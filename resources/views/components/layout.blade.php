<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .login-card {
            max-width: 36rem;
        }

        .full {
            height: 100dvh;
        }
    </style>

    {{-- Asset bandling (Supaya browser langsung berubah tnp refresh) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light text-dark">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Cashed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                    <a class="nav-link" href="/order">Order</a>
                    <a class="nav-link" href="/categories">Categories</a>
                    <a class="nav-link" href="/products">Products</a>
                    <a class="nav-link" href="/users">Users</a>
                </div>
            </div>
        </div>
    </nav>

    @isset($title)
    <div class="border-bottom mb-3">
        <h4 class="container py-4 fw-bold ">{{ $title }}</h4>
    </div>
    @endisset

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
