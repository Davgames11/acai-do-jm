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
    <div id="backgroundNavContato">
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
    </div>
    <main>

        <h1 class="text-center mt-5" id="h1Contato">Fale Conosco!</h1>

        <section class="d-flex w-100 justify-content-center gap-5 my-5" id="formContatoDiv">
            <div class="d-flex gap-5 p-5" id="formContatoDiv2">
                <form action="" id="formContato">
                    <label for="nomeContato" id="labelContato">Nome</label>
                    <input type="text" id="nomeContato" placeholder="Seu nome">


                    <div class="d-flex flex-row gap-5 mt-3">
                        <div class="d-flex flex-column">
                            <label for="telefoneContato" id="labelContato">Telefone</label>
                            <input type="text" id="telefoneContato" placeholder="Seu telefone">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="emailContato" id="labelContato">Email</label>
                            <input type="text" id="emailContato" placeholder="Seu email">
                        </div>
                    </div>



                    <label class="mt-3" for="assuntoContato" id="labelContato">Assunto</label>
                    <input type="text" id="assuntoContato" placeholder="Assunto">


                    <label class="mt-3" for="respostaContato" id="labelContato">Por onde prefere ser respondido</label>
                    <select name="respostaContato" id="respostaContato">
                        <option value="whatsapp">Whatsapp</option>
                        <option value="email">Email</option>
                    </select>

                    <label class="mt-3" for="msgContato" id="labelContato">Mensagem</label>
                    <textarea name="msgContato" id="msgContato" cols="30" rows="10" placeholder="Mensagem"></textarea>

                    <button type="submit" class="btn btn-primary mt-3" id="btnContato">Enviar</button>
                </form>

                <div class="d-flex flex-column ">
                    <h2 class="text-center" id="h1Form">Onde nos encontrar:</h2>
                    <iframe class="align-self-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.666311522721!2d-43.04592332535627!3d-22.81482523458961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x999a5ed1245aed%3A0xcf5d7c8691bc9593!2sR.%20Jos%C3%A9%20Carvalheira%2C%20228%20-%20Mutua%2C%20S%C3%A3o%20Gon%C3%A7alo%20-%20RJ%2C%2024460-530!5e0!3m2!1spt-BR!2sbr!4v1716417847387!5m2!1spt-BR!2sbr" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe class="align-self-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6487927534167!2d-43.0412379253563!3d-22.815474034612727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x999a60a1f01df7%3A0x13c2f40cc11a306c!2sAv.%20Martins%20Ferreira%2C%201287%20-%20S%C3%A3o%20Miguel%2C%20S%C3%A3o%20Gon%C3%A7alo%20-%20RJ%2C%2024445-710!5e0!3m2!1spt-BR!2sbr!4v1716418715653!5m2!1spt-BR!2sbr" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <div class="d-flex flex-row gap-2 mt-3">
                        <i class="bi bi-geo-alt-fill" id="iconContato"></i>
                        <p id="labelContato">Av. Martins Ferreira, 1287 - São Miguel, São Gonçalo - RJ</p>
                    </div>
                    <div class="d-flex flex-row gap-2">
                        <i class="bi bi-geo-alt-fill" id="iconContato"></i>
                        <p id="labelContato">Rua José Carvalheira, 228 - Mutua - São Gonçalo - RJ</p>
                    </div>

                    <h2 class="text-center" id="h1Form">Horário de Atendimento</h2>
                    <div class="d-flex flex-row gap-3">
                        <i class="bi bi-clock" id="iconContato"></i>
                        <p id="labelContato">Segunda a Sexta das 9:00 as 18:00</p>
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
