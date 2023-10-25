<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika." />
    <meta name="author" content="Ansonika" />
    <title>LISEGA | Encuesta</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="encuesta_assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon"
        href="encuesta_assets/img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="encuesta_assets/img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="encuesta_assets/img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="encuesta_assets/img/apple-touch-icon-144x144-precomposed.png" />

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap"
        rel="stylesheet" />

    <!-- BASE CSS -->
    <link href="/encuesta_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/encuesta_assets/css/style.css" rel="stylesheet" />
    <link href="/encuesta_assets/css/vendors.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="/encuesta_assets/css/custom.css" rel="stylesheet" />
</head>

<body class="style_3">
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    <!-- /loader_form -->

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <a href="index.html"><img src="/encuesta_assets/img/logo.svg" alt="" width="50"
                            height="55" /></a>
                </div>
                <div class="col-7">
                    <div id="social">
                        <ul>
                            <li>
                                <a href="#0"><i class="social_facebook"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="social_twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="social_instagram"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="social_linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <div class="wrapper_centering">
        <div class="container_centering">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- /col -->
                    <div class="col-xl-12 col-lg-12">
                        <div id="wizard_container">
                            <div id="top-wizard">
                                <div id="progressbar"></div>
                            </div>
                            <!-- /top-wizard -->
                            <form id="wrapped" action="{{ route('encuesta.store') }}" method="POST"
                                autocomplete="off">
                                @csrf
                                <input id="website" name="website" type="text" value="" />
                                <!-- Leave for security protection, read docs for details -->
                                <div id="middle-wizard">
                                    <div class="step">
                                        <div class="col-xl-12 col-lg-12 d-flex align-items-center">
                                            <div class="main_title_1">
                                                <h3>
                                                    <img src="encuesta_assets/img/main_icon_1.svg" width="80"
                                                        height="80" alt="" />
                                                    Lisega HR Consulting
                                                </h3>
                                                <p style="text-align: center">
                                                    Estructuracion & Desarrollo Organizacional
                                                </p>
                                                <p
                                                    style="
                              text-align: justify;
                              color: white;
                              font-weight: bold;
                            ">
                                                    En Lisega HR Consulting (HRC) nos enfocamos en la
                                                    búsqueda de eficiencias sostenibles a través de la
                                                    gestión de estrategias del Capital Humano.
                                                </p>

                                                <div class="row">
                                                    <div class="col-md-3 mb-2">
                                                        <div class="card h-100"
                                                            style="background-color: gold; border-radius: 50px; display: block; color: black; font-weight: bold">
                                                            <div class="card-body d-flex flex-column">
                                                                <img src="encuesta_assets/img/svg-1.svg" width="80"
                                                        height="80" alt="" />
                                                                <br>
                                                                <p class="card-text flex-grow-1">Alineamiento
                                                                    Estrategico</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <div class="card h-100"
                                                            style="background-color: gold; border-radius: 50px; display: block; color: black; font-weight: bold">
                                                            <div class="card-body d-flex flex-column">
                                                                <img src="encuesta_assets/img/svg-2.svg" width="80"
                                                        height="80" alt="" />
                                                                <br>
                                                                <p class="card-text flex-grow-1">Plan de Gestion de
                                                                    Desempeño</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <div class="card h-100"
                                                            style="background-color: gold; border-radius: 50px; display: block; color: black; font-weight: bold">
                                                            <div class="card-body d-flex flex-column">
                                                                <img src="encuesta_assets/img/svg-3.svg" width="80"
                                                        height="80" alt="" />
                                                                <br>
                                                                <p class="card-text flex-grow-1">Formalizacion</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <div class="card h-100"
                                                            style="background-color: gold; border-radius: 50px; display: block; color: black; font-weight: bold">
                                                            <div class="card-body d-flex flex-column">
                                                                <img src="encuesta_assets/img/svg-4.svg" width="80"
                                                        height="80" alt="" />
                                                                <br>
                                                                <p class="card-text flex-grow-1">Politicas de Gestion
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step">
                                        <div class="col-xl-12 col-lg-12 d-flex align-items-center">
                                            <div class="main_title_1">
                                                <h4>
                                                    <img src="encuesta_assets/img/main_icon_1.svg" width="80"
                                                        height="80" alt="" />
                                                    Datos coporativos
                                                </h4>
                                            </div>
                                        </div>
                                        <h3 class="main_question">
                                            <strong>1 of 1</strong>Por favor, completar primero los
                                            sguientes datos:
                                        </h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-6">
                                                <div class="form-group">
                                                    <label for="telephone">Fecha de Nacimiento</label>
                                                    <input type="date" name="telephone" id="telephone"
                                                        class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="age">Fecha de Ingreso</label>
                                                    <input type="date" name="age" id="age"
                                                        class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-6">
                                                <div class="form-group">
                                                    <label for="age">Area</label>
                                                    <select name="" id="" class="form-control"
                                                        required>

                                                        @foreach ($areas as $area)
                                                            <option value="{{ $area->id }}">
                                                                {{ $area->descripcion }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="age">Genero</label>
                                                    <select name="" id="" class="form-control"
                                                        required>

                                                        @foreach ($generos as $genero)
                                                            <option value="{{ $genero->id }}">
                                                                {{ $genero->descripcion }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /step Bienvenida-->

                                    @php
                                        $ultima_pregunta = $preguntas->last();
                                        $id = $ultima_pregunta->id;
                                        $total = $preguntas->count();
                                    @endphp

                                    @foreach ($preguntas as $pregunta)
                                        <div class="{{ $pregunta->id == $id ? 'submit' : '' }} step">
                                            <div class="col-xl-12 col-lg-12 d-flex align-items-center">
                                                <div class="main_title_1">
                                                    <h4>
                                                        <img src="encuesta_assets/img/main_icon_1.svg" width="80"
                                                            height="80" alt="" />
                                                        {{ $pregunta->sub_dimension->descripcion }}
                                                    </h4>
                                                </div>
                                            </div>
                                            <h3 class="main_question">
                                                <strong>{{$pregunta->id}} de {{$total}}</strong>{{ $pregunta->descripcion }}
                                            </h3>
                                            <div class="review_block">
                                                <ul>
                                                    <li>
                                                        <div class="checkbox_radio_container">
                                                            <input type="radio"
                                                                id="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_05 }}"
                                                                name="question_1" class="required"
                                                                value="{{ $pregunta->val_r_05 }}"
                                                                onchange="getVals(this, 'question_1');" />
                                                            <label class="radio"
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_05 }}"></label>
                                                            <label
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_05 }}"
                                                                class="wrapper">{{ $pregunta->tipo_r_05->descripcion }}</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox_radio_container">
                                                            <input type="radio"
                                                                id="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_04 }}"
                                                                name="question_1" class="required"
                                                                value="{{ $pregunta->val_r_04 }}"
                                                                onchange="getVals(this, 'question_1');" />
                                                            <label class="radio"
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_04 }}"></label>
                                                            <label
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_04 }}"
                                                                class="wrapper">{{ $pregunta->tipo_r_04->descripcion }}</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox_radio_container">
                                                            <input type="radio"
                                                                id="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_03 }}"
                                                                name="question_1" class="required"
                                                                value="{{ $pregunta->val_r_03 }}"
                                                                onchange="getVals(this, 'question_1');" />
                                                            <label class="radio"
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_03 }}"></label>
                                                            <label
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_03 }}"
                                                                class="wrapper">{{ $pregunta->tipo_r_03->descripcion }}</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox_radio_container">
                                                            <input type="radio"
                                                                id="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_02 }}"
                                                                name="question_1" class="required"
                                                                value="{{ $pregunta->val_r_04 }}"
                                                                onchange="getVals(this, 'question_1');" />
                                                            <label class="radio"
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_02 }}"></label>
                                                            <label
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_02 }}"
                                                                class="wrapper">{{ $pregunta->tipo_r_02->descripcion }}</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="checkbox_radio_container">
                                                            <input type="radio"
                                                                id="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_01 }}"
                                                                name="question_1" class="required"
                                                                value="{{ $pregunta->val_r_01 }}"
                                                                onchange="getVals(this, 'question_1');" />
                                                            <label class="radio"
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_01 }}"></label>
                                                            <label
                                                                for="r_{{ $pregunta->id }}_{{ $pregunta->tipo_r_01 }}"
                                                                class="wrapper">{{ $pregunta->tipo_r_01->descripcion }}</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach




                                    <!-- /step Dimension-->

                                    {{-- <div class="submit step">
                                        <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                            <div class="main_title_1">
                                                <h4>
                                                    <img src="encuesta_assets/img/main_icon_1.svg" width="80"
                                                        height="80" alt="" />
                                                    preguntas corporativas
                                                </h4>
                                            </div>
                                        </div>
                                        <h3 class="main_question mb-4">
                                            <strong>2 of 5</strong>¿Descripcion de la pregunta?
                                        </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no" name="question_2"
                                                            class="required" value="No"
                                                            onchange="getVals(this, 'question_2');" />
                                                        <label class="radio" for="no"></label>
                                                        <label for="no" class="wrapper">Bueno</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe" name="question_2"
                                                            class="required" value="Maybe"
                                                            onchange="getVals(this, 'question_2');" />
                                                        <label class="radio" for="maybe"></label>
                                                        <label for="maybe" class="wrapper">Regular</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably" name="question_2"
                                                            class="required" value="Probably"
                                                            onchange="getVals(this, 'question_2');" />
                                                        <label class="radio" for="probably"></label>
                                                        <label for="probably" class="wrapper">Malo</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure" name="question_2"
                                                            class="required" value="Sure"
                                                            onchange="getVals(this, 'question_2');" />
                                                        <label class="radio" for="sure"></label>
                                                        <label for="sure" class="wrapper">Muy Malo</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!-- /step Dimension 6-->

                                    <!-- /step 4-->

                                    <!-- /step 5-->
                                </div>
                                <!-- /middle-wizard -->

                                <div id="bottom-wizard">
                                    <button type="button" name="backward" class="backward">
                                        Regresar
                                    </button>
                                    <button type="button" name="forward" class="forward">
                                        Siguiente
                                    </button>
                                    <button type="submit" name="process" class="submit">
                                        Enviar
                                    </button>
                                </div>
                                <!-- /bottom-wizard -->
                            </form>
                        </div>
                        <!-- /Wizard container -->
                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container_centering -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">©2020 Satisfyc</div>
                    <div class="col-md-9">
                        <ul class="clearfix">
                            <li>
                                <a href="#0" class="animated_link">Purchase this template</a>
                            </li>
                            <li><a href="index.html" class="animated_link">Demo 1</a></li>
                            <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
                            <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container-fluid -->
        </footer>
        <!-- /footer -->
    </div>
    <!-- /wrapper_centering -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in
                        <strong>nec quod novum accumsan</strong>, mei ludus tamquam
                        dolores id. No sit debitis meliore postulant, per ex prompta
                        alterum sanctus, pro ne quod dicunt sensibus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod
                        novum accumsan, mei ludus tamquam dolores id. No sit debitis
                        meliore postulant, per ex prompta alterum sanctus, pro ne quod
                        dicunt sensibus. Lorem ipsum dolor sit amet,
                        <strong>in porro albucius qui</strong>, in nec quod novum
                        accumsan, mei ludus tamquam dolores id. No sit debitis meliore
                        postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                        sensibus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod
                        novum accumsan, mei ludus tamquam dolores id. No sit debitis
                        meliore postulant, per ex prompta alterum sanctus, pro ne quod
                        dicunt sensibus.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="/encuesta_assets/js/jquery-3.2.1.min.js"></script>
    <script src="/encuesta_assets/js/common_scripts.min.js"></script>
    <script src="/encuesta_assets/js/functions.js"></script>

    <!-- Wizard script -->
    <script src="/encuesta_assets/js/survey_func.js"></script>
</body>

</html>
