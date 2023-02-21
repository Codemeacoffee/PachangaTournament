<!DOCTYPE html>
<html itemscope lang="es" dir="ltr" itemtype="https://schema.org/WebSite">
<head>
    <title>Pachanga Tournament</title>
    <meta name="author" content="Jose Emmanuel Castro Martel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO -->
    <meta name="keywords" content="Pachanga, Tournament, MTG, Magic, Gathering, Playa, Gran Canaria, Hotel New Folias">
    <meta name="description" content="¡En una ubicación de ensueño, Pachanga Tournament nos trae tres días repletos de Magic: The Gathering en un hotel a pie de playa!">
    <meta property="og:site_name" content="PachangaTournament">
    <meta property="og:title" content="Pachanga Tournament">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:description" content="¡En una ubicación de ensueño, Pachanga Tournament nos trae tres días repletos de Magic: The Gathering en un hotel a pie de playa!">
    <meta property="og:image" itemprop="image" content="{{asset('images/logo.jpg')}}">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:updated_time" content="{{strtotime(date('Y-m-d'))}}"/>
    <!-- SEO -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/glyphicon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
    <link rel="shortcut icon" type="image/png" href= "{{asset('images/logo.ico')}}"/>
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/daterangepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
    <!--<script src="https://www.paypal.com/sdk/js?client-id=AZyBv44y_X0qBkx5fL94A6ZDFqCPu0e_DBYjtr9FCk3bbp6zg39Jwdpi_uX8OENZA6qT25iYmgtrsVP7&currency=EUR"></script>-->
    <script src="https://www.paypal.com/sdk/js?client-id=AVBTLZYrXSA9AfcP0XPmXkFj7RsU4iIrUPEfPwT_6d4BlZT2MHGkX94ihbNhrcBPs-SpzS8jn2vcF9ri&currency=EUR"></script>
</head>
<body>
<div class="container-fluid navigation sticky-top">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12 offset-0">
            <nav class="navbar navbar-expand-lg py-0">
                <a class="navbar-brand p-0" href="{{url('/')}}">
                    <img class="logo" alt="Logo de Pachanga Tournament" src="{{asset('images/logo.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Habilitar navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item py-lg-5 py-2 px-1">
                            <a href="#tournament" class="nav-link"><h4 class="font-weight-bold text-center bigNoodleTitling mb-0">El torneo</h4></a>
                        </li>
                        <li class="nav-item py-lg-5 py-2 px-1">
                            <a href="#location" class="nav-link"><h4 class="font-weight-bold text-center bigNoodleTitling mb-0">Ubicación</h4></a>
                        </li>
                        <li class="nav-item py-lg-5 py-2 px-1">
                            <a href="#tickets" class="nav-link"><h4 class="font-weight-bold text-center bigNoodleTitling mb-0">Entradas</h4></a>
                        </li>
                        <li class="nav-item py-lg-5 py-2 px-1">
                            <a href="#gallery" class="nav-link"><h4 class="font-weight-bold text-center bigNoodleTitling mb-0">Galería</h4></a>
                        </li>
                        <li class="nav-item py-lg-5 py-2 px-1">
                            <a href="#contact" class="nav-link"><h4 class="font-weight-bold text-center bigNoodleTitling mb-0">Contacto</h4></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<section class="banner">
    <img class="w-100 h-100" src="{{asset('images/banner.jpg')}}">
    <div class="layer position-absolute w-100 h-100"></div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
            <h1 id="tournament" class="text-white text-center bigNoodleTitling mb-5">El torneo</h1>
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-xl-7 col-lg-6 col-12 mb-lg-0 mb-5">
                        <h5 class="text-white">
                            ¡En una ubicación de ensueño, <strong>Pachanga Tournament</strong> nos trae tres días repletos de <strong>Magic: The Gathering</strong> en un hotel a pie de playa!
                        </h5>
                        <h5 class="text-white mb-4">
                           Disfruta de multitud de eventos, incluyendo los tres torneos principales:
                        </h5>
                        <div class="gradient-arrow-right bg-purple px-5 py-3 mb-3">
                            <h3 class="text-white bigNoodleTitling">Viernes 21 de Octubre</h3>
                            <h5 class="text-white">FNM de Modern</h5>
                        </div>
                        <div class="gradient-arrow-left bg-white px-5 py-3 mb-3">
                            <h3 class="text-purple bigNoodleTitling text-right">Sábado 22 de Octubre</h3>
                            <h5 class="text-purple text-right">Torneo de Modern</h5>
                        </div>
                        <div class="gradient-arrow-right bg-purple px-5 py-3 mb-3">
                            <h3 class="text-white bigNoodleTitling">Domingo 23 de Octubre</h3>
                            <h5 class="text-white">Torneo de Sellado</h5>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12">
                        <img class="w-100" src="{{asset('images/presentation.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
            <h1 id="location" class="text-white text-center bigNoodleTitling mb-5">Ubicación</h1>
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-md-6 col-12 mb-md-0 mb-5">
                        <img id="locationImg" class="w-100 mb-2" src="{{asset('images/hotel_folias_1.jpg')}}">
                        <h2 class="text-white bigNoodleTitling">Hotel New Folias</h2>
                    </div>
                    <div class="col-md-6 col-12">
                        <iframe id="map" class="mb-2" src="https://maps.google.com/maps?hl=es&amp;q=Hotel%20New%20Folias%20Calle%20Las%20Retamas%20N%C2%BA17,%20San%20Agust%C3%ADn+(Hotel%20New%20Folias)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/wearable-gps/">adventure gps</a></iframe>
                        <h2 class="text-white bigNoodleTitling">Maspalomas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row py-5">
        <div class="col-xl-6 col-lg-8 col-12 offset-xl-3 offset-lg-2 offset-0">
            <h1 id="tickets" class="text-white text-center bigNoodleTitling mb-5">Entradas</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ticket silver">
                            <div class="ticket-spacer">
                                <div class="text-center">
                                    <img class="w-75" src="{{asset('images/logo.png')}}">
                                </div>
                                <h2 class="text-center bigNoodleTitling text-purple py-4">&nbsp;<br>Solo eventos<br>&nbsp;</h2>
                                <div class="text-center pt-4">
                                    <?php

                                    if($ticketsAvailable) echo '<button class="btn btn-animated bigNoodleTitling py-1 px-3" data-toggle="modal" data-target="#ticketModal">Comprar</button>';
                                    else echo '<h3 class="text-center bigNoodleTitling text-danger">Fuera de stock</h3>';

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="ticket gold w-100">
                            <div class="ticket-spacer">
                                <div class="text-center">
                                    <img class="w-75" src="{{asset('images/logo.png')}}">
                                </div>
                                <h2 class="text-center bigNoodleTitling text-purple py-4">Eventos<br>+<br>Estancia</h2>
                                <div class="text-center pt-4">
                                    <?php

                                    if($roomsAvailable) echo ' <button class="btn btn-animated bigNoodleTitling py-1 px-3" data-toggle="modal" data-target="#ticketAndStayModal">Comprar</button>';
                                    else echo '<h3 class="text-center bigNoodleTitling text-danger">Fuera de stock</h3>';

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="background-image position-absolute w-100 h-100" src="{{asset('images/tickets-bg.jpg')}}">
    <div class="layer position-absolute w-100 h-100"></div>

    <?php

    if($ticketsAvailable) echo '<div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content payment-gateway-modal">
                <div class="modal-header text-center">
                    <h3 class="text-white w-100 bigNoodleTitling ml-5" id="ticketModalTitle">Obtén tu entrada</h3>
                    <button type="button" class="btn close-modal glyphicon glyphicon-remove text-white" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="purchaseTicket" class="modal-body">
                    <div class="stepper-wrapper mb-5">
                        <div data-step="1" class="stepper-item active">
                            <div class="step-counter">1</div>
                            <div class="step-name text-white"><small>Completa tus datos</small></div>
                        </div>
                        <div data-step="2" class="stepper-item">
                            <div class="step-counter">2</div>
                            <div class="step-name text-white"><small>Completa tu pago</small></div>
                        </div>
                        <div data-step="3" class="stepper-item">
                            <div class="step-counter">3</div>
                            <div class="step-name text-white"><small>Imprime tu factura</small></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-10 col-12 offset-xl-1 offset-0">
                                <div data-section="1" class="container-fluid">
                                    <div class="row mb-4">
                                        <div class="col-12 ticketContainer"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="button" data-dismiss="modal" class="btn btn-animated-reversed bigNoodleTitling py-1 px-3">Cancelar</button>
                                            <button type="button" class="btn btn-animated bigNoodleTitling forwards validate py-1 px-3">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                                <div data-section="2" class="container-fluid d-none">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="px-xl-5 px-lg-4 px-0">
                                                <h4 class="text-white text-center bigNoodleTitling mb-3">Revisa tu pedido</h4>
                                                <table class="table table-dark table-bordered mb-2">
                                                    <thead>
                                                    <tr>
                                                        <th>Producto</th>
                                                        <th>Cantidad</th>
                                                        <th>Precio por unidad</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="purchaseBreakout">
                                                    </tbody>
                                                </table>
                                                <h4 class="text-white totalPrice text-right bigNoodleTitling mb-4"></h4>
                                                <h4 class="text-white text-center bigNoodleTitling mb-3">Completa tu pago</h4>
                                            </div>
                                            <div class="paypal text-center"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-animated-reversed bigNoodleTitling backwards py-1 px-3">Atrás</button>
                                        </div>
                                    </div>
                                </div>
                                <div data-section="3" class="container-fluid d-none">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-white text-center bigNoodleTitling mb-4">¡Pedido completado!</h3>
                                            <h5 class="text-white text-center pb-5 mb-5">
                                                Puede descargar su factura haciendo clic <a class="invoiceLink" target="_blank" download><b>aquí</b></a>.
                                            </h5>
                                        </div>
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-animated bigNoodleTitling py-1 px-3" data-dismiss="modal">Finalizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';

    if($roomsAvailable) echo '<div class="modal fade" id="ticketAndStayModal" tabindex="-1" role="dialog" aria-labelledby="ticketAndStayModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content payment-gateway-modal">
                <div class="modal-header text-center">
                    <h3 class="text-white w-100 bigNoodleTitling ml-5" id="ticketAndStayModalTitle">Obtén tu entrada</h3>
                    <button type="button" class="btn close-modal glyphicon glyphicon-remove text-white" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="purchaseTicketAndStay" class="modal-body">
                    <div class="stepper-wrapper mb-5">
                        <div data-step="1" class="stepper-item active">
                            <div class="step-counter">1</div>
                            <div class="step-name text-white"><small>Elige tu habitación</small></div>
                        </div>
                        <div data-step="2" class="stepper-item">
                            <div class="step-counter">2</div>
                            <div class="step-name text-white"><small>Elige tus entradas</small></div>
                        </div>
                        <div data-step="3" class="stepper-item">
                            <div class="step-counter">3</div>
                            <div class="step-name text-white"><small>Completa tu pago</small></div>
                        </div>
                        <div data-step="4" class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name text-white"><small>Imprime tu factura</small></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-10 col-12 offset-xl-1 offset-0">
                                <div data-section="1" class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="selectRoom" class="container-fluid">
                                                <div class="row mb-lg-3 mb-5">
                                                    <div class="col-lg-5 col-12">
                                                        <div id="seaViewRoomSwiper" class="swiper overflow-hidden">
                                                            <div class="swiper-wrapper mb-5">
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/seaViewRoom-1.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/seaViewRoom-2.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/seaViewRoom-3.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/seaViewRoom-4.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/seaViewRoom-5.jpg').'">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-12">
                                                        <h3 class="bigNoodleTitling text-white mb-3">Habitación vista al mar</h3>
                                                        <p class="text-white pb-lg-5 mb-lg-5 pb-0 mb-4">
                                                            Habitación para 1 o 2 personas con unas impresionantes vistas al Océano Atlántico desde un hermoso balcón privado a
                                                            190º Sur desde el bloque principal y 120º Sureste desde el bloque sur.
                                                        </p>
                                                        <div class="col-12 text-lg-right text-center">
                                                            <button id="selectSeaViewRoom" type="button" class="btn btn-animated bigNoodleTitling py-1 px-3">Seleccionar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-5 col-12">
                                                        <div id="groundFloorRoomSwiper" class="swiper overflow-hidden">
                                                            <div class="swiper-wrapper mb-5">
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/groundFloorRoom-1.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/groundFloorRoom-2.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/groundFloorRoom-3.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/groundFloorRoom-4.jpg').'">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img class="w-100" src="'.asset('images/groundFloorRoom-5.jpg').'">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-12">
                                                        <h3 class="bigNoodleTitling text-white mb-3">Habitación planta baja</h3>
                                                        <p class="text-white pb-lg-5 mb-lg-5 pb-0 mb-4">
                                                            Amplio apartamento para 3 o 4 personas con una superficie de 42,00 m². Diseñado para aquellos que viajan en grupo o con amigos
                                                            con la posibilidad de reservar varios juntos.
                                                        </p>
                                                        <div class="col-12 text-lg-right text-center">
                                                            <button id="selectGroundFloorRoom" type="button" class="btn btn-animated bigNoodleTitling py-1 px-3">Seleccionar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="seaViewRoom" class="container-fluid d-none">
                                                <h3 class="bigNoodleTitling text-white mb-3">Habitación vista al mar</h3>
                                                <p class="text-white mb-5">
                                                    Habitación para 1 o 2 personas con unas impresionantes vistas al Océano Atlántico desde un hermoso balcón
                                                    privado a 190º Sur desde el bloque principal y 120º Sureste desde el bloque sur.
                                                </p>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-4 col-12 mb-5">
                                                            <h4 class="bigNoodleTitling text-white mb-3">Alojamiento</h4>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="seaViewRoomAccommodation" id="seaViewRoomStay" value="stay" checked>
                                                                <label class="form-check-label text-white" for="seaViewRoomStay">Solo estancia</label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="seaViewRoomAccommodation" id="seaViewStayAndBreakFast" value="stayAndBreakfast">
                                                                <label class="form-check-label text-white" for="seaViewStayAndBreakFast">Estancia y desayuno</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="seaViewRoomAccommodation" id="seaViewRoomHalfBoard" value="halfBoard">
                                                                <label class="form-check-label text-white" for="seaViewRoomHalfBoard">Media pensión</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-12 mb-5">
                                                            <h4 class="bigNoodleTitling text-white mb-3">Huéspedes</h4>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="seaViewRoomGuests" id="seaViewRoomOneGuest" value="1" checked>
                                                                <label class="form-check-label text-white" for="seaViewRoomOneGuest">Una persona</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="seaViewRoomGuests" id="seaViewRoomTwoGuests" value="2">
                                                                <label class="form-check-label text-white" for="seaViewRoomTwoGuests">Dos Personas</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-4 col-12 mb-5">
                                                            <h4 class="text-white mb-3"><label class="bigNoodleTitling" for="seaViewRoomStayTime">Estancia</label></h4>
                                                            <input id="seaViewRoomStayTime" class="form-control mb-3" type="text" name="seaViewRoomStayTime" value="21/10/2022 - 23/10/2022" readonly/>
                                                            <small class="text-white">*Si desea quedarse más días, contacta con nosotros a través del siguiente correo: <a class="text-decoration-none" href="mailto: pachangatournament@gmail.com"><b>pachangatournament@gmail.com</b></a></small>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-12">
                                                            <h3 class="bigNoodleTitling text-white text-right price mb-3"></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-right">
                                                    <button id="closeSeaViewRoom" type="button" class="btn btn-animated-reversed bigNoodleTitling py-1 px-3">Atrás</button>
                                                    <button id="showSeaViewRoomTickets" type="button" class="btn btn-animated bigNoodleTitling forwards py-1 px-3">Continuar</button>
                                                </div>
                                            </div>
                                            <div id="groundFloorRoom" class="container-fluid d-none">
                                                <h3 class="bigNoodleTitling text-white mb-3">Habitación planta baja</h3>
                                                <p class="text-white mb-5">
                                                    Amplio apartamento para 3 o 4 personas con una superficie de 42,00 m². Diseñado para aquellos que viajan en grupo o con amigos
                                                    con la posibilidad de reservar varios juntos.
                                                </p>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-4 col-12 mb-5">
                                                            <h4 class="bigNoodleTitling text-white mb-3">Alojamiento</h4>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="groundFloorRoomAccommodation" id="groundFloorRoomStay" value="stay" checked>
                                                                <label class="form-check-label text-white" for="groundFloorRoomStay">Solo estancia</label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="groundFloorRoomAccommodation" id="groundFloorRoomStayAndBreakFast" value="stayAndBreakfast">
                                                                <label class="form-check-label text-white" for="groundFloorRoomStayAndBreakFast">Estancia y desayuno</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="groundFloorRoomAccommodation" id="groundFloorRoomHalfBoard" value="halfBoard">
                                                                <label class="form-check-label text-white" for="groundFloorRoomHalfBoard">Media pensión</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-12 mb-5">
                                                            <h4 class="bigNoodleTitling text-white mb-3">Huéspedes</h4>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" name="groundFloorRoomGuests" id="groundFloorRoomThreeGuests" value="3" checked>
                                                                <label class="form-check-label text-white" for="groundFloorRoomThreeGuests">Tres personas</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="groundFloorRoomGuests" id="groundFloorRoomFourGuests" value="4">
                                                                <label class="form-check-label text-white" for="groundFloorRoomFourGuests">Cuatro Personas</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-4 col-12 mb-5">
                                                            <h4 class="text-white mb-3"><label class="bigNoodleTitling" for="groundFloorRoomStayTime">Estancia</label></h4>
                                                            <input id="groundFloorRoomStayTime" class="form-control mb-3" type="text" name="stayTime" value="21/10/2022 - 23/10/2022" readonly/>
                                                            <small class="text-white">*Si desea quedarse más días, contacta con nosotros a través del siguiente correo: <a class="text-decoration-none" href="mailto: pachangatournament@gmail.com"><b>pachangatournament@gmail.com</b></a></small>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-12">
                                                            <h3 class="bigNoodleTitling text-white text-right price mb-3"></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-right">
                                                    <button id="closeGroundFloorRoom" type="button" class="btn btn-animated-reversed bigNoodleTitling py-1 px-3">Atrás</button>
                                                    <button id="showGroundFloorRoomTickets" type="button" class="btn btn-animated bigNoodleTitling forwards py-1 px-3">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-section="2" class="container-fluid d-none">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="seaViewRoomTickets" class="container-fluid d-none">
                                                <div class="row mb-4">
                                                    <div class=" col-12 ticketWrapper">
                                                        <div class="ticketContainer mb-4"></div>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-animated bigNoodleTitling addTicket py-1 px-3">Añadir entrada</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <button type="button" class="btn btn-animated-reversed bigNoodleTitling backwards py-1 px-3">Atrás</button>
                                                        <button type="button" class="btn btn-animated bigNoodleTitling validate forwards py-1 px-3">Continuar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="groundFloorRoomTickets" class="container-fluid d-none">
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <div class="ticketContainer"></div>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-animated bigNoodleTitling addTicket py-1 px-3">Añadir entrada</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <button type="button" class="btn btn-animated-reversed bigNoodleTitling backwards py-1 px-3">Atrás</button>
                                                        <button type="button" class="btn btn-animated bigNoodleTitling validate forwards py-1 px-3">Continuar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-section="3" class="container-fluid d-none">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="px-xl-5 px-lg-4 px-0">
                                                <h4 class="text-white text-center bigNoodleTitling mb-3">Revisa tu pedido</h4>
                                                <table class="table table-dark table-bordered mb-2">
                                                    <thead>
                                                    <tr>
                                                        <th>Producto</th>
                                                        <th>Cantidad</th>
                                                        <th>Precio por unidad</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="purchaseBreakout">
                                                    </tbody>
                                                </table>
                                                <h4 class="text-white totalPrice text-right bigNoodleTitling mb-4"></h4>
                                                <h4 class="text-white text-center bigNoodleTitling mb-3">Completa tu pago</h4>
                                            </div>
                                            <div class="paypal text-center"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-animated-reversed bigNoodleTitling backwards py-1 px-3">Atrás</button>
                                        </div>
                                    </div>
                                </div>
                                <div data-section="4" class="container-fluid d-none">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-white text-center bigNoodleTitling mb-4">¡Pedido completado!</h3>
                                            <h5 class="text-white text-center pb-5 mb-5">
                                                Puede descargar su factura haciendo clic <a class="invoiceLink" target="_blank" download><b>aquí</b></a>.
                                            </h5>
                                        </div>
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-animated bigNoodleTitling py-1 px-3" data-dismiss="modal">Finalizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';

    ?>

</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-12 offset-lg-1 offset-0">
            <h1 id="gallery" class="text-white text-center bigNoodleTitling mb-5">Galería</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-12 offset-lg-1 offset-0">
                        <div id="gallerySwiper" class="gallery swiper overflow-hidden">
                            <div class="swiper-wrapper mb-5">
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-1.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-2.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-3.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-4.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-5.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-6.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-7.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-8.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-9.jpg')}}">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="{{asset('images/gallery-10.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 id="contact" class="text-white text-center bigNoodleTitling mb-5">Contacta con nosotros</h1>
            <nav class="navbar navbar-expand-lg navbar-light justify-content-around p-0">
                <a class="mr-4 mb-4" target="_blank" href="https://www.facebook.com/Pachanga-Tournament-102910045821890">
                    <img class="socialMediaIcon p-2" src="{{asset('images/facebook_icon.png')}}">
                </a>
                <a class="mr-4 mb-4" target="_blank" href="https://www.instagram.com/pachangatournament/">
                    <img class="socialMediaIcon p-2" src="{{asset('images/instagram_icon.png')}}">
                </a>
                <a class="mb-4" target="_blank" href="https://twitter.com/Pachangatorneo">
                    <img class="socialMediaIcon p-2" src="{{asset('images/twitter_icon.png')}}">
                </a>
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item px-2">
                        <a class="text-decoration-none" href="mailto: pachangatournament@gmail.com">
                            <h5 class="font-weight-bold contact-email py-lg-3 px-lg-4 p-2">pachangatournament@gmail.com</h5>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<div class="container-fluid footer">
    <div class="row py-4">
        <div class="col-xl-10 offset-xl-1 col-12 offset-0">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <b class="text-white">©<?php echo Date('Y');  ?> Pachanga Tournament</b>
                <ul class="navbar-nav ml-lg-auto ml-0 mt-lg-0 mt-4">
                    <li class="nav-item px-1">
                        <a class="nav-link text-white" href="{{url('privacyPolicy')}}">Política de Protección de Datos</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/utils.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ticket.js')}}"></script>
<script type="text/javascript" src="{{asset('js/room.js')}}"></script>
<script type="text/javascript" src="{{asset('js/purchaseManager.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modalNavigation.js')}}"></script>
<script type="text/javascript" src="{{asset('js/paypal.js')}}"></script>
</body>
</html>
