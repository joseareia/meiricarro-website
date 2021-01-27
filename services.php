<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <?php
        $title = "Serviços";
        $style = "/resources/css/services.css";
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
                                    <a href="/">Início</a>
                                </li>
                                <li>
                                    <a href="/services.php" class="active">Serviços</a>
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
                        <h1 class="text-white font-weight-bold" id="hero-title">Veja os serviços que a Meiricarro têm para oferecer.</h1>
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
                <!-- Serviço 1 -->
                <div id="info-service1">
                    <div class="h-100 container">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="service-image-bg" id="image1-bg"></div>
                                <div class="service-image" id="image1"></div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="font-weight-bold ml-3">Têm problemas com a sua viatura?<br>A Meiricarro resolve.</h4>
                                <div class="mt-4 ml-3" id="info-service1-paragraph">
                                    <p>Iusto aut cupiditate harum iusto incidunt aut qui blanditiis. Quis dignissimos similique dicta quae laboriosam.</p>
                                    <p>Qui iure qui veritatis vitae incidunt. Tenetur ut reiciendis et error dolore voluptate perferendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Serviço 1 -->
                <div id="info-service2">
                    <div class="h-100 container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="font-weight-bold ml-3">Quer saber como pode chegar até a Meiricarro?</h4>
                                <div class="mt-4 ml-3" id="info-service2-paragraph">
                                    <p>Iusto aut cupiditate harum iusto incidunt aut qui blanditiis. Quis dignissimos similique dicta quae laboriosam.</p>
                                    <p>Qui iure qui veritatis vitae incidunt. Tenetur ut reiciendis et error dolore voluptate perferendis.</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="service-image-bg" id="image2-bg"></div>
                                <div class="service-image" id="image2"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Serviço 1 -->
                <div id="info-service3">
                    <div class="h-100 container">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="service-image-bg" id="image3-bg"></div>
                                <div class="service-image" id="image3"></div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="font-weight-bold ml-3">Quer saber como pode chegar até a Meiricarro?</h4>
                                <div class="mt-4 ml-3" id="info-service3-paragraph">
                                    <p>Iusto aut cupiditate harum iusto incidunt aut qui blanditiis. Quis dignissimos similique dicta quae laboriosam.</p>
                                    <p>Qui iure qui veritatis vitae incidunt. Tenetur ut reiciendis et error dolore voluptate perferendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
        require "partials/footer.php";
    ?>
</html>
