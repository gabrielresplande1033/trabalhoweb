<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travelers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">



    @stack('styles')
</head>

<body>

<div class="super_container">


    <header class="header">


        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="user_box ml-auto">
                            <div class="user_box_login user_box_link"><a href="{{ route('user.login') }}">login</a></div>
                            <div class="user_box_login user_box_link"><a href="{{ route('admin.login') }}">login admin</a></div>
                            <div class="user_box_login user_box_link"><a href="{{ route('user.register.store') }}">register</a></div>
                            <div class="user_box_register user_box_link"><a href="{{ route('admin.register') }}">register admin</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="images/logo.png" alt="">Travelers</a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="{{ route('welcome.index') }}">Inicio</a></li>
                                <li class="main_nav_item"><a href="{{ route('lista') }}">Ofertas</a></li>
                                <li class="main_nav_item"><a href="#contato">Contato</a></li>
                            </ul>
                        </div>
                        <form id="search_form" class="search_form bez_1">
                            <input type="search" class="search_content_input bez_1">
                        </form>

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            <ul>
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="offers.html">offers</a></li>
                <li class="menu_item"><a href="contact.html">contact</a></li>
            </ul>
        </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">Travelers</a></div>
                            </div>
                            <p class="footer_about_text">O TRAVELERS É UM SITE DE HOSPEDAGEM CUJO O OBJETIVO É OFERECER AOS
                                SEUS CLIENTES UMA PLATAFORMA DE BUSCA E RESERVA DE HOTEIS QUE SEJA
                                FÁCIL DE UTILIZAR E QUE POSSUA OS MELHORES HOTEIS DO SEU DESTINO. SEJA DE FÉRIAS OU A NEGÓCIOS, AQUI VOCÊ ESCONTRARÁ
                                OS MELHORES HOTEIS PARA SE HOSPEDAR SEM COMPLICAÇÕES!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">Informações de Contato</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                                    <div class="contact_info_text">Avenida Afonso Pena, 2030</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                                    <div class="contact_info_text">67-3302-2040</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">travelers2019@gmail.com</a></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2  ">
                    <div class="copyright_content d-flex flex-row align-items-center">
                        <div>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                           </div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
@stack('scripts')
</body>

</html>
