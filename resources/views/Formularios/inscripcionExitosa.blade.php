<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Registro exitoso</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/smartwizart/css/smart_wizard_all.min.css') }}">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- This pen isn't a fan of small view heights, check it out in  fullpage view for optimal viewing	 -->
    <div class="intro-container">
        <header>
            <nav class="bg-trasparent md:bg-trasparent fixed w-full z-20 top-0 start-0 border-b border-gray-600 backdrop-blur-sm ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      {{--
                    <img src="{{ asset('assets/img/logo_potenciadelavida.svg') }}" class="h-8" alt="Logo potencia de la vida" /> --}}
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
                        <a href="https://talentotechregion3.com.co/"
                          class="block  text-white  rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b] p-2 "
                          aria-current="page">Inicio</a>
                      </li>
                      <li class="">
                        <a href="https://matricula.talentotechregion3.com.co/inscripcion"
                          class="block p-4 bg-[#082e4b]  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Inscríbete</a>
                      </li>
                      <li class="">
                        <a href="https://pruebas.talentotechregion3.com.co/login.php"
                          class="block  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Prueba</a>
                      </li>
                      <li class="">
                        <a href="https://matricula.talentotechregion3.com.co/"
                          class="block  text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Matrícula</a>
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
        <div class="w-full justify-center flex">
            <img src="{{ asset('assets/img/TalentoTech.png') }}" style="width: 45%; margin-top: 100px;">
        </div>
        <div class=" flex justify-center">

            <div class="bg-white rounded-xl py-4 px-2 mx-3 grid grid-cols-3" style="width: 69%; padding: 30px">
                <div class="correct col-span-3 text-5xl m-4">
                    <a href="https://twitter.com/Christopher4Lis" target="_blank"></a>
                    <i class="fa fa-lg fa-circle-check"></i>
                </div>
                <p class="font-bold text-black col-span-3" style="margin-bottom: 1rem">
                    Acabas de dar el primer paso para transformar tu futuro!!! Realizaremos la verificación de tu información para validar los requisitos de inscripción en <span style="color: #1F2271">Talento Tech.</span>
                    Te estaremos enviando a tu correo electrónico la información necesaria para iniciar el proceso de matrícula.
                </p>

                <div class="instagram text-right m-2 text-4xl">
                    <a href="https://www.instagram.com/descubreutp?igsh=Zm4wcmUzdWxteXEx" target="_blank">
                        <i class="fa fa-instagram fa-lg"></i>
                    </a>
                </div>

                <div class="facebook text-center m-2 text-4xl">
                    <a href="https://www.facebook.com/profile.php?id=100063576547225&mibextid=kFxxJD" target="_blank">
                        <i class="fa fa-facebook fa-lg"></i>
                    </a>
                </div>

                <div class="youtube text-left m-2 text-4xl">
                    <a href="https://youtube.com/@DescubreUTP?si=yaDg3EM6kSqiTjpN" target="_blank">
                        <i class="fa fa-youtube fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif

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

</body>

</html>
