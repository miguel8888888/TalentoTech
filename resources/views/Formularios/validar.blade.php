<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Matrículas 2024</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.typekit.net/jrj6out.js"></script>
    <script>
        try {
            Typekit.load({
                async: false
            });
        } catch (e) {}
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    @vite('resources/css/app.css')
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/smartwizart/css/smart_wizard_all.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- This pen isn't a fan of small view heights, check it out in  fullpage view for optimal viewing	 -->

    <header style="position: relative; z-index: 10000">
        <nav class="bg-[#00000042] md:bg-[#00000042] fixed w-full z-20 top-0 start-0 border-b border-gray-600 backdrop-blur-sm ">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              {{-- <img src="{{ asset('assets/img/logo_potenciadelavida.svg') }}" class="h-8" alt="Logo potencia de la vida" /> --}}
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logo_mintic.png') }}" class="h-10 lg:h-20" alt="Logo mintic" />
              </a>
              <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
                </svg>
              </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  border-gray-700">
                <li class="">
                  <a href="https://talentotechregion3.com.co"
                    class="block  text-white  rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b] p-2 "
                    aria-current="page">Inicio</a>
                </li>
                <li class="">
                  <a href="https://matricula.talentotechregion3.com.co/inscripcion"
                    class="block p-4  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Inscríbete</a>
                </li>
                <li class="">
                  <a href="https://pruebas.talentotechregion3.com.co/login.php"
                    class="block  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Prueba</a>
                </li>
                <li class="">
                  <a href="https://matricula.talentotechregion3.com.co/"
                    class="block bg-[#082e4b] text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Matrícula</a>
                </li>
                <li class="">
                  <a href="https://imaster.academy/login/index.php"
                    class="block  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Plataforma
                    de formación</a>
                </li>
                <li class="">
                  <a href="https://registro.talentotechregion3.com.co/preguntas_frecuentes.html"
                    class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Preguntas
                    frecuentes</a>
                </li>

                <li class="">
                  <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full block text-white  rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Kit
                    programador <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                    </svg></a>
                  <!-- Dropdown menu -->
                  <div id="dropdownNavbar"
                    class="z-10 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                    <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="https://registro.talentotechregion3.com.co/compilador.html" class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Simuladores</a>
                      </li>
                      <li>
                        <a href="https://registro.talentotechregion3.com.co/entrenador.html" class="block px-4 py-2   hover:bg-gray-600 hover:text-white">Entrenador</a>
                      </li>

                    </ul>
                  </div>
            </div>
        </nav>

      </header>
    <div class="intro-container">
        <div class="w-full justify-center flex logo-talentotech">
            <img src="{{ asset('assets/img/TalentoTech.png') }}" class="w-1/2" style="margin-top: 130px">
        </div>
        <h1 class="text-5xl font-bold titulo-principal">
            ¡Bienvenido/a a Talento Tech, tu puerta de entrada al futuro digital!
        </h1>
        @if($errors->any())
            <div class="bg-white rounded-xl p-6 text-black w-9/12 mt-10 mx-auto grid grid-cols-2 sm:grid-cols-1">
                {!! implode('', $errors->all('<div class="text-black error_mens">:message</div>')) !!}
            </div>
        @endif
        <div class="button shift-camera-button z-100" id="inscribirme">
            <div class="border">
                <div class="left-plane"></div>
                <div class="right-plane"></div>
            </div>
            <div class="text text-xl">¡INICIAR PROCESO DE MATRÍCULA!</div>
        </div>
    </div>
    <div class="sky-container w-full" style="display: none;">
        <div class="text-left sky-container__right buscador w-100">
            <div class="py-12 w-full" style="margin: auto">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg px-12">
                        <form action="/validarregistro" method="POST" id="validarInscripcion">
                            @csrf
                            <p class="text-white text-center mb-4">Por favor valide su identidad:</p>
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input name="numero_documento" type="number" inputmode="numeric" pattern="[0-9]*" id="numero_documento" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Por favor ingrese su cédula" required>
                                <button type="submit" id="buscarUser" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="w-full mt-6 justify-center flex logo-talentotech">
                        <img src="{{ asset('assets/img/TalentoTech.png') }}" style="width: 25%">
                    </div>
                    <div class="x-mark text-center">
                        <div class="mt-10">
                            <p class="text-xl"><b><u>Regresar</u></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- partial -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r78/three.min.js'></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/smartwizart/js/jquery.smartWizard.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery_validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery_validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery_validate/localization/messages_es.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script type="text/javascript">
        window.addEventListener("load", function() {
            $('html, body').animate({scrollTop: 0}, 500);
        });

        $("#validarInscripcion").on("submit", function(event) {
            event.preventDefault();
            if ($("#numero_documento").val() === "") {
                return false;
            }else{
                $("#buscarUser").prop('disabled', true);
                $("#buscarUser").html('Validando...');
                this.submit();
            }
        });
    </script>
</body>

</html>
