<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/faviconDOMICHELIN.ico') }}" type="image/x-icon">

    <title>Açai do JM</title>
</head>

<body>
    <header class="headerback">
        <nav class="navbar navbar-expand-lg justify-content-center gap-5">
            <img src="{{ asset('assets/img/logodoJM.png') }}" alt="" id="logo">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link fs-5" aria-current="page" id="navText">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('halloffame') }} " id="navText">Hall da Fama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('sobrenos') }}" id="navText">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{route('contato')}}" id="navText">Contato</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <section class="d-flex w-100"> <!-- Produtos -->
            <div class="d-flex justify-content-center align-items-center flex-column" id="produtos">
                <h2 class="pt-5 mb-0" id="produtosTitle">Produtos</h2>

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="{{ asset('assets/img/carrosel1.png') }}" alt="" id="carouselImg1">
                            <p class="carousel-text" id="carouselText1">Pote de Sorvete</p>
                            <p class="carousel-text" id="carouselText2">Copo de Açai</p>
                            <p class="carousel-text" id="carouselText3">Picolé</p>
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="{{ asset('assets/img/carrosel2.png') }}" alt="">
                            <p class="carousel-text" id="carouselText1">Sorvete</p>
                            <p class="carousel-text" id="carouselText2">Casquinha</p>
                            <p class="carousel-text" id="carouselText3">Pote de Açai</p>
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="{{ asset('assets/img/carrosel3.png') }}" alt="">
                            <p class="carousel-text" id="carouselText1">MilkShake</p>
                            <p class="carousel-text" id="carouselText2">Banana Split</p>
                            <p class="carousel-text" id="carouselText3">Frappe</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="d-flex w-100"> <!-- Sócio -->
            <div class="franquiaInfo d-flex flex-column justify-content-center align-items-center">
                <p class="fs-1" id="franquiaText">Venha Ser Sócio!</p>
                <button class="btn btn-outline-dark fs-5" id="botaoSocio" onclick="window.location.href=`{{ route('contato') }}`">Saiba mais</button>
            </div>
            <img src="{{ asset('assets/img/franquia.png') }}" alt="" id="franquiaLogo">

        </section>

        <section class="d-flex w-100 flex-row justify-content-center  align-items-center" style="min-height: 80vh;"> <!-- Sobre Nós -->
            <div class="p-5 w-50">
                <h2 id="sobrenosTitle">Sobre Nós</h2>
                <p class="my-5" id="sobrenosText">Na <b id="sobrenosTextBold">Açai do JM</b>, celebramos a essência da Amazônia com cada tigela servida. Somos apaixonados por trazer a você o açaí na sua forma mais pura e deliciosa. Desde 2010, nos dedicamos a selecionar os melhores frutos, garantindo um sabor autêntico e nutritivo. Nossa missão é oferecer uma experiência única que combina saúde, frescor e qualidade. Venha nos visitar e descubra as diversas combinações que criamos especialmente para você. Seja bem-vindo e aproveite o melhor do açaí!</p>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-dark fs-5 mt-5" id="botaoSobre" onclick="window.location.href=`{{ route('sobrenos') }}`">Saiba mais</button>
                </div>
            </div>
            <img src="{{ asset('assets/img/meninodoacai.png') }}" alt="" id="sobrenosImg">
        </section>
    </main>

    <footer>
        <div class="d-flex justify-content-around align-items-center">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/logodoJM.png') }}" alt="" id="logoFooter">
                <div class="d-flex gap-3">
                    <a class="link-light" href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                    <a class="link-light" href="https://www.whatsapp.com"><i class="bi bi-whatsapp"></i></a>
                    <a class="link-light" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="d-flex flex-column gap-2 mt-3">
                <h5 class="text-center">ENTRE EM CONTATO</h5>
                <div class="d-flex flex-row gap-3">
                    <i class="bi bi-envelope"></i>
                    <p>aaaaaaaaa@aaaaaa.com.br</p>
                </div>

                <div class="d-flex flex-row gap-3">
                    <i class="bi bi-telephone"></i>
                    <p>(11) 99999-9999</p>
                </div class="d-flex flex-row gap-3">

                <div class="d-flex flex-row gap-3">
                    <i class="bi bi-geo-alt"></i>
                    <p>Endereços</p>
                </div>
            </div>
        </div>


        <p class="text-center" id="footerText">Todos os direitos reservados - J&M</p>
    </footer>

</body>

</html>
