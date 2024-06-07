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
        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 1 -->
            <div class="d-flex flex-row align-items-center" id="sobreNosDiv">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Uma Equipe de Especialistas!
                    </h1>
                    <p class="mt-5">Na vibrante e dinâmica empresa de açaí <b id="sobreNosText">Açai do JM</b>, uma equipe de especialistas se destaca pela sua dedicação e conhecimento profundo sobre o fruto amazônico. Composta por profissionais de diversas áreas, a equipe é o coração pulsante da empresa, garantindo que cada etapa do processo, desde a colheita até o produto final, seja realizada com excelência.</p>
                </div>

            </div>

            <img src="{{ asset('assets/img/equipeJM.png') }}" alt="" id="sobreNosPageImg">

        </section>

        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 2 -->

            <img src="{{ asset('assets/img/bioJM.png') }}" alt="" id="sobreNosPageImg2">

            <div class="d-flex flex-row align-items-center" id="sobreNosDiv2">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Engenheiros Agrônomos e Biólogos
                    </h1>
                    <p class="mt-5">
                        Na base da cadeia produtiva, engenheiros agrônomos e biólogos desempenham um papel crucial. Esses especialistas são responsáveis por monitorar as plantações de açaí, garantindo práticas agrícolas sustentáveis que respeitem o ecossistema amazônico. Eles conduzem pesquisas para aprimorar técnicas de cultivo, combater pragas de forma natural e melhorar a produtividade sem comprometer a biodiversidade local.
                    </p>
                </div>
            </div>
        </section>

        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 1 -->
            <div class="d-flex flex-row align-items-center" id="sobreNosDiv">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Nutricionistas e Tecnólogos de Alimentos
                    </h1>
                    <p class="mt-5">Uma vez colhido, o açaí passa pelas mãos habilidosas dos nutricionistas e tecnólogos de alimentos. Esses profissionais são responsáveis por desenvolver produtos que não apenas mantêm o valor nutricional do açaí, mas também inovam em sabores e formatos. Desde o tradicional açaí na tigela até barras de açaí energéticas, cada produto é pensado para oferecer o melhor em termos de saúde e sabor.</p>
                </div>

            </div>

            <img src="{{ asset('assets/img/nutriJM.png') }}" alt="" id="sobreNosPageImg">

        </section>

        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 2 -->

            <img src="{{ asset('assets/img/qualidadeJM.png') }}" alt="" id="sobreNosPageImg2">

            <div class="d-flex flex-row align-items-center" id="sobreNosDiv2">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Especialistas em Qualidade e Controle
                    </h1>
                    <p class="mt-5">
                        Para garantir que cada lote de açaí chegue ao consumidor final com a máxima qualidade, a equipe de controle de qualidade é indispensável. Com rigorosos padrões de inspeção, esses especialistas monitoram desde a higiene na produção até a consistência do sabor e textura do produto. Eles também realizam testes para assegurar que todos os produtos estão livres de contaminantes e são seguros para o consumo.
                    </p>
                </div>
            </div>
        </section>

        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 1 -->
            <div class="d-flex flex-row align-items-center" id="sobreNosDiv">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Equipe de Marketing e Vendas
                    </h1>
                    <p class="mt-5">Para conectar o produto ao consumidor final, a equipe de marketing e vendas desempenha um papel vital. Especialistas em comunicação, branding e estratégias de mercado trabalham juntos para posicionar o açaí da <b id="sobreNosText">Açai do JM</b> como um produto de excelência no mercado nacional e internacional. Eles criam campanhas que destacam os benefícios do açaí e a responsabilidade social da empresa, engajando os consumidores e construindo uma marca forte e confiável.</p>
                </div>

            </div>

            <img src="{{ asset('assets/img/marketingJM.png') }}" alt="" id="sobreNosPageImg">

        </section>

        <section class="d-flex w-100 justify-content-center align-items-center p-5 my-5"> <!-- CARD 2 -->

            <img src="{{ asset('assets/img/negociosJM.png') }}" alt="" id="sobreNosPageImg2">

            <div class="d-flex flex-row align-items-center" id="sobreNosDiv2">

                <div class="d-flex flex-column p-5">
                    <h1 id="sobreNosText">
                        Desenvolvedores de Negócios
                    </h1>
                    <p class="mt-5">
                        Por fim, os desenvolvedores de negócios são os responsáveis por explorar novas oportunidades de mercado e estabelecer parcerias estratégicas. Com uma visão inovadora, eles buscam expandir a presença da <b id="sobreNosText">Açai do JM</b> em novos mercados e canais de distribuição, assegurando um crescimento sustentável e contínuo para a empresa.

                        Em conjunto, essa equipe de especialistas transforma o açaí da <b id="sobreNosText">Açai do JM</b> em sinônimo de qualidade, inovação e responsabilidade ambiental. Cada membro, com sua expertise, contribui para que a empresa não só entregue um produto excepcional, mas também promova um impacto positivo na sociedade e no meio ambiente.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column align-items-center mb-5">
                    <h2 id="sobrenosTitle">Siga-nos nas redes sociais!</h2>

                    <div class="d-flex gap-3">
                        <a class="link-dark" href="https://www.facebook.com" id="redesSociais"><i class="bi bi-facebook fs-3"></i></a>
                        <a class="link-dark" href="https://www.whatsapp.com" id="redesSociais"><i class="bi bi-whatsapp fs-3"></i></a>
                        <a class="link-dark" href="https://www.instagram.com" id="redesSociais"><i class="bi bi-instagram fs-3"></i></a>
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
