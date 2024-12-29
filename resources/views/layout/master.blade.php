<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @yield('css')
</head>

<body class="bg-dark">
    <section class="bg-light ">
        <div class="container text-center ">
            <h1 class="p-4"><strong>Manga Library</strong></h1>
        </div>
    </section>
    <div class="container mt-4">
        @include('layout.navbar')
        @yield('content')
    </div>
    <div class="text-center bg-light py-4 mt-5">
        © 2022 Made with ❤️ by
        <span class="text-reset fw-bold">Harvan Nurluthfi</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
