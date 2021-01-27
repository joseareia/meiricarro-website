<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <?php
        $title = "Página Inicial";
        $style = "/resources/css/index.css";
        require "partials/header.php";
    ?>
    <body>
        <!-- Begin of navigation -->
        <div class="navbar">
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <img src="/resources/media/logotipo.png" alt="Logótipo - Meiricarro">
                    </div>
                    <div class="col d-flex flex-row-reverse align-items-center">
                        <div class="nav-itens">
                            <ul>
                                <li>
                                    <a href="/" class="active">Início</a>
                                </li>
                                <li>
                                    <a href="/services.php">Serviços</a>
                                </li>
                                <li>
                                    <a href="/vehicles.php">Viaturas</a>
                                </li>
                                <li>
                                    <a href="/contacts.php">Contactos</a>
                                </li>
                                <li>
                                    <a href="/blog.php">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of navigation -->

        <!-- Begin of hero image -->
        <div class="hero-image">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-6 ml-5">
                        <h1 class="text-white font-weight-bold" id="hero-title">Conheça a Meiricarro,<br>o seu reparador citroën de Leiria.</h1>
                        <p class="text-white pt-3 pb-3" id="hero-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur.</p>
                        <div class="button-div">
                            <a href="#info-empresa" class="text-decoration-none">
                                <button type="button" name="button" id="button-saber">Saber mais</button>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <button type="button" name="button" id="button-contactar" class="ml-4">Contactar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of hero image -->

        <div id="container">
            <div id="main">
                <!-- Info Empresa -->
                <div class="h-100 container" id="info-empresa">
                    <h4 class="text-center font-weight-bold">Fique a saber um pouco mais sobre nós.</h4>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-center" id="info-empresa-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Magna aliqua, consectetur adipisicing elit eiusmod.</p>
                    </div>
                    <div class="row justify-content-around" id="info-empresa-cards">
                        <div class="col-md-3">
                            <div class="circle d-flex justify-content-around align-items-center">
                                <i class="fas fa-cogs text-white"></i>
                            </div>
                            <p class="text-center mt-4">Maxime nemo delectus</p>
                            <p class="text-center mt-3">Autem at nisi fuga harum. Perspiciatis quaerat amet perferendis ullam eveniet est.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="circle d-flex justify-content-around align-items-center">
                                <i class="fas fa-car text-white"></i>
                            </div>
                            <p class="text-center mt-4">Quis dolorem voluptatibus</p>
                            <p class="text-center mt-3">Autem at nisi fuga harum. Perspiciatis quaerat amet perferendis ullam eveniet est.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="circle d-flex justify-content-around align-items-center">
                                <i class="far fa-calendar-alt text-white"></i>
                            </div>
                            <p class="text-center mt-4">Autem at nisi</p>
                            <p class="text-center mt-3">Autem at nisi fuga harum. Perspiciatis quaerat amet perferendis ullam eveniet est.</p>
                        </div>
                    </div>
                </div>

                <!-- Contactos Empresa -->
                <div id="info-contactos">
                    <div class="h-100 container">
                        <div class="row">
                            <div class="col-md-6">
                                MAPA
                            </div>
                            <div class="col-md-6">
                                <h4 class="font-weight-bold ml-3">Quer saber como pode chegar até a Meiricarro?</h4>
                                <div class="mt-4 ml-3" id="info-contactos-paragraph">
                                    <p>Iusto aut cupiditate harum iusto incidunt aut qui blanditiis. Quis dignissimos similique dicta quae laboriosam.</p>
                                    <p>Qui iure qui veritatis vitae incidunt. Tenetur ut reiciendis et error dolore voluptate perferendis.</p>
                                </div>
                                <a href="#" class="text-decoration-none">
                                    <button type="button" name="button" id="button-info-contactar" class="ml-3 mt-3">Escreva um e-mail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Empresa -->
                <div class="h-100 container" id="info-noticias">
                    <h4 class="text-center font-weight-bold">Descubra todas as novidades que a Citroën têm para si!</h4>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-center" id="info-noticias-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Magna aliqua, consectetur adipisicing elit eiusmod.</p>
                    </div>
                    <div class="container-news">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-news" id="card-news1">
                                    <p class="text-white">Id autem et sunt aut nostrum non expedita. Molestiae voluptatum sed nostrum voluptas eos. Accusantium ratione nemo consequatur et sed ex dolores ut.</p>
                                    <p class="text-white">29 Maio 2020</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-news" id="card-news2">
                                    <p class="text-white">Molestiae voluptatum sed nostrum voluptas eos accusantium ratione.</p>
                                    <p class="text-white">29 Maio 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="card-news" id="card-news3">
                                    <p class="text-white">Molestiae voluptatum sed nostrum voluptas eos accusantium ratione. Voluptates aut beatae.</p>
                                    <p class="text-white">29 Maio 2020</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-news" id="card-news4">
                                    <p class="text-white">Inventore officia vel repudiandae quaerat in libero. Similique et qui et. Maiores dicta qui deleniti iusto iste perferendis ab. Molestiae laudantium quo temporibus ut fuga vel corporis.</p>
                                    <p class="text-white">29 Maio 2020</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-decoration-none">
                            <button type="button" name="button" id="button-info-news" class="mt-4">Veja todas as novidades</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        require "partials/footer.php";
    ?>
    <script src="/resources/js/master.js"></script>
    </body>
</html>
