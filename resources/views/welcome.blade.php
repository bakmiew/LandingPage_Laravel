<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecWeb</title>

    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- include css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- icon fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar start -->
    <nav>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="menu_1">
                    <div class="d-flex">
                        <p class="name">TECTONIA</p>
                        <a href="{{ route('home') }}" class="menu_child_1"><i class="fas fa-home me-1"></i>Home</a>
                    </div>
                </div>
                <div class="menu_2">
                    <a href="{{ route('about') }}"><i class="fas fa-info-circle me-1"></i>About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- main start -->
    <main>
        <div class="container">
            <section class="profile">
                <div class="bg">
                    <img src="{{ asset('assets/img/hijauuu.png') }}" alt="">
                </div>
                <div class="avatar">
                    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                        alt="">
                </div>
                <h1> 안녕 하세요 !!</h1>
            </section>

            <section class="favorit">
                <h2>My Favorite Things</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-3">
                            <img src="{{asset('assets/img/spicy.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <img src="{{asset('assets/img/korean.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <img src="{{asset('assets/img/green.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <img src="{{asset('assets/img/sugaa.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer class="text-center">
        <h3><i class="fa-brands fa-instagram me-1"></i><a href="https://www.instagram.com/tectonia/">Tectonia</h3>
    </footer>
    <!-- footer end -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
