<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Me</title>

    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- include css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
                        <a href="{{route('home')}}" class="menu_child_1"><i class="fas fa-home me-1"></i>Home</a>
                    </div>
                </div>
                <div class="menu_2">
                    <a href="{{route('about')}}"><i class="fas fa-info-circle me-1"></i>About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- main start -->
    <main>
        <div class="container">
            <section class="about">
                <div class="one">
                    <div class="d-flex flex-row mb-3">
                        <div class="card p-3">
                            <img src="{{asset('assets/img/card1.jpg')}}" alt="">
                        </div>
                        <p>Perkenalkan, aku Tectonia. Aku sangat menyukai hal yang berbau hijau. Karena, ketika melihat hal berwarna hijau seperti
                            daun, pohon dsb aku merasa tenang dan damai.
                        </p>
                    </div>
                </div>
                <div class="two">
                    <div class="d-flex flex-row-reverse">
                        <div class="card p-3">
                           <img src="{{asset('assets/img/card2.jpg')}}" alt="">
                        </div>
                        <p>Selain itu aku menghabiskan waktuku dengan menonton drama korea. Tidak ada genre khusus favorite, aku menonton berdasarkan
                            genre ketika mood saja. Ketika ingin menonton romance ya cari drakor romance. 
                        </p>
                    </div>
                </div>
            </section>

            <section class="qoute">
                <h3 class="text-center">Favorite Qoute</h3>
                <blockquote class="quote-card">
                    <p class="text-center">
                        Urip Kui Urup
                    </p>

                    <cite class="text-center">
                        Thank You 
                    </cite>
                </blockquote>
            </section>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer class="text-center">
        <h3><i class="fa-brands fa-instagram me-1"></i>Tectonia</h3>
    </footer>
    <!-- footer end -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>