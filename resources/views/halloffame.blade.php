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
    <header id="backgroundNavContato">
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
        <section>
            <h1 class="text-center mt-5" id="hallFamaTitle">Hall da Fama</h1>
            <div class="d-flex justify-content-around mt-5">
                <div class="card" style="width: 18rem;" id="cardHallFama">
                    <img src="{{ asset('assets/img/acaiPT.png') }}" alt="" id="halloffameIMG">
                    <div class="card-body">
                        <h5 class="card-title" id="cardTitlePT">Açai</h5>
                        <p class="card-text" id="descricaoPT">Experimente o sabor autêntico e nutritivo do nosso açaí, feito com frutas frescas e ingredientes naturais. Rico em antioxidantes, é a escolha perfeita para um lanche saudável e revigorante.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;" id="cardHallFama">
                    <img src="{{ asset('assets/img/potesorvetePT.png') }}" alt="" id="halloffameIMG">
                    <div class="card-body">
                        <h5 class="card-title" id="cardTitlePT">Pote de Sorvete</h5>
                        <p class="card-text" id="descricaoPT">Desfrute do nosso pote de sorvete cremoso e delicioso, disponível em uma variedade de sabores irresistíveis. Feito com ingredientes premium, é perfeito para momentos especiais ou para se refrescar a qualquer hora.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;" id="cardHallFama">
                    <img src="{{ asset('assets/img/picolePT.png') }}" alt="" id="halloffameIMG">
                    <div class="card-body">
                        <h5 class="card-title" id="cardTitlePT">Picolé</h5>
                        <p class="card-text" id="descricaoPT">Refresque-se com nossos picolés feitos com frutas frescas e ingredientes naturais. Disponíveis em diversos sabores, são a opção ideal para um lanche saudável e refrescante para todas as idades.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-center mt-5 " id="hallFamaTitle">Conheça o restante da nossa Família!</h2>

            <div class="row mb-5">
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/sorvetePT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Sorvete</h5>
                            <p class="card-text" id="descricaoPT">Desfrute do nosso sorvete cremoso e delicioso, disponível em uma variedade de sabores clássicos e exóticos. Feito com ingredientes de alta qualidade, é a sobremesa perfeita para qualquer ocasião.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/frappePT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Frappe</h5>
                            <p class="card-text" id="descricaoPT">Experimente o nosso frappe gelado, uma combinação refrescante de café, leite e gelo. Perfeito para os dias quentes, nosso frappe é a escolha ideal para um momento de prazer e energia.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/milkshakePT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Milkshake</h5>
                            <p class="card-text" id="descricaoPT">Delicie-se com o nosso milkshake, uma mistura irresistível de sorvete e leite, disponível em diversos sabores. Cremoso e saboroso, é a bebida perfeita para se refrescar e satisfazer sua vontade de doce.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/bananaSplitPT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Banana Split</h5>
                            <p class="card-text" id="descricaoPT">Saboreie a nossa clássica banana split, uma combinação deliciosa de sorvete, bananas frescas, chantilly e calda de chocolate. Uma sobremesa completa e irresistível para compartilhar ou se mimar.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/casquinhaPT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Casquinha</h5>
                            <p class="card-text" id="descricaoPT">Aprecie a simplicidade deliciosa da nossa casquinha de sorvete, feita com sorvete cremoso e uma casquinha crocante. Perfeita para um lanche rápido e refrescante em qualquer momento do dia.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around mt-5 col-4 col-md-3">
                    <div class="card align-items-center" style="width: 13rem;" id="cardHallFama">
                        <img src="{{ asset('assets/img/poteAcaiPT.png') }}" alt="" id="halloffameIMG">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitlePT">Pote Açaí</h5>
                            <p class="card-text" id="descricaoPT">Desfrute do nosso pote de açaí, repleto de sabor e nutrientes. Feito com açaí puro e ingredientes naturais, é uma opção saudável e deliciosa para quem busca energia e frescor em uma única tigela.</p>
                        </div>
                    </div>
                </div>
            </div>
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