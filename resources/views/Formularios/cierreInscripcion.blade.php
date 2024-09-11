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
        <nav
            class="bg-[#00000042] md:bg-[#00000042] fixed w-full z-20 top-0 start-0 border-b border-gray-600 backdrop-blur-sm ">
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
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  border-gray-700">
                        <li class="">
                            <a href="https://talentotechregion3.com.co/"
                                class="block  text-white  rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b] p-2 "
                                aria-current="page">Inicio</a>
                        </li>
                        <li class="">
                            <a href="https://matricula.talentotechregion3.com.co/inscripcion"
                                class="block p-4 bg-[#082e4b] text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Inscríbete</a>
                        </li>
                        <li class="">
                            <a href="https://pruebas.talentotechregion3.com.co/login.php"
                                class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Prueba</a>
                        </li>
                        <li class="">
                            <a href="https://matricula.talentotechregion3.com.co/"
                                class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Matrícula</a>
                        </li>
                        <li class="">
                            <a href="https://imaster.academy/login/index.php"
                                class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Plataforma
                                de formación</a>
                        </li>
                        <li class="">
                            <a href="https://empleabilidad.talentotechregion3.com.co/login"
                                class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Plataforma
                                de empleabilidad</a>
                        </li>
                        <li class="">
                            <a href="https://registro.talentotechregion3.com.co/preguntas_frecuentes.html"
                                class="block text-white rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Preguntas
                                frecuentes</a>
                        </li>

                        <li class="">
                            <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full block text-white  rounded-[15px]  md:text-white md:p-0 md:dark:text-white hover:bg-[#082e4b]">Kit
                                programador <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></a>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                                <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="https://registro.talentotechregion3.com.co/compilador.html"
                                            class="block px-4 py-2  hover:bg-gray-600 hover:text-white">Simuladores</a>
                                    </li>
                                    <li>
                                        <a href="https://registro.talentotechregion3.com.co/entrenador.html"
                                            class="block px-4 py-2   hover:bg-gray-600 hover:text-white">Entrenador</a>
                                    </li>

                                </ul>
                            </div>
                </div>
        </nav>

    </header>
    <div class="intro-container s">

        <div class="text-left sky-container__right w-100">


            <div class="py-4" style="position: relative; z-index: 1;">
                <section>
                    <div class="w-full justify-center flex logo-talentotech" style="margin-top: 90px">
                        <img src="{{ asset('assets/img/TalentoTech.png') }}" class="mx-auto w-1/3">
                    </div>
                </section>

                <div class="  text-white mb-40">
                    <div class="max-w-4xl mx-auto">
                        <div class=" p-4 m-3   border-2 sm:w-100 md:w-full" style="border: 1px solid #00ffff; ">
                            <div class=" bg-[#285892a8] text-xl  p-4">
                                <div class="text-center">
                                    <p class="text-2xl font-weight-bold">¡Gracias por querer ser parte de Talento Tech!</p>
                                </div>
                                <p class="mt-5 font-light ">Queremos agradecer a todos los interesados en unirse a los bootcamps de
                                    <strong class="text-[#ffcc02]">Talento Tech en Cauca y Nariño</strong>, a nuestros campistas que día a día
                                    demuestran una gran pasión por <strong class="text-[#ffcc02]">desarrollar sus habilidades digitales</strong>, y a
                                    nuestros egresados, quienes ahora son líderes en tecnología, listos para revolucionar sus
                                    regiones.</p>
                                <p class="mt-5 font-light">Las inscripciones y matrículas para este año han cerrado oficialmente, pero
                                    queremos que sepas que valoramos profundamente tu interés. Nos emociona ver el
                                    <strong class="text-[#ffcc02]">impacto y la cálida acogida de miles de caucanos y nariñenses que han
                                    decidido cambiar su futuro y estar a la vanguardia de la industria tecnológica.</strong></p>
                                <p class="mt-5">¡La próxima generación de <strong class="text-[#ffcc02]"> líderes tech </strong> se está empoderando!</p>
                            </div>
                          </div>

                    </div>
                </div>

                <hr class="mx-12 my-10">

                <footer class="mt-14 md:max-w-7xl m-auto" style="color: black; text-align: left;">
                    <div class="container mx-auto px-4">
                      <div class="card bg-white shadow-lg rounded-lg mb-5 p-10">
                        <div class="flex flex-wrap -mx-4">
                          <div class="w-full lg:w-2/3  lg:px-3">
                            <div class="mb-4 text-lg md:text-2xl" style="color: #2a4d6f; font-weight: bold;">Ministerio de Tecnologías
                              de la Información y las Comunicaciones</div>
                            <p class="mb-1">Edificio Murillo Toro Cra. 8a entre calles 12A y 12B Bogotá, Colombia - Código Postal
                              111711</p>
                            <p class="mb-1">Teléfono Conmutador: <a href="tel:6013443460" class="text-blue-600">+57 601 344 34 60</a>
                              - Línea Gratuita: <a href="tel:018000914014" class="text-blue-600">01-800-0914014</a></p>
                            <p class="mb-1">Línea Anticorrupción: <a href="tel:018000912667" class="text-blue-600">01-800-0912667</a>
                            </p>
                            <p class="mb-1">Correo Institucional: <a href="https://www.mintic.gov.co/portal/715/w3-propertyvalue-111091.html" target="blank" title="Ir a MinTIC responde" class="text-blue-600">minticresponde@mintic.gov.co</a></p>
                            <p class="mb-1">Denuncias por actos de corrupción: <a href="mailto:soytransparente@mintic.gov.co" class="text-blue-600">soytransparente@mintic.gov.co</a></p>
                            <p class="mb-1">Notificaciones judiciales:</p>
                            <p class="my-0"><a href="mailto:notificacionesjudicialesmintic@mintic.gov.co" class="text-blue-600">notificacionesjudicialesmintic@mintic.gov.co</a></p>
                            <p class="mb-1"><a href="mailto:notificacionesjudicialesfontic@mintic.gov.co" class="text-blue-600">notificacionesjudicialesfontic@mintic.gov.co</a></p>
                            <p class="mb-1">Horario de Atención Presencial:</p>
                            <p class="mb-1">Lunes a viernes de 8:30 a.m. – 4:30 p.m. Jornada Continua</p>
                            <p class="mb-1">© Copyright 2021 - Todos los derechos reservados Gobierno de Colombia</p>
                          </div>
                          <div class="w-full lg:w-1/3 text-center pt-5 lg:pt-0 px-4">
                            <ul class="list-none">
                              <li class="mb-4">
                                <a href="https://www.mintic.gov.co/portal/715/w3-channel.html" title="Ir al Inicio del portal MInTIC">
                                  <img src="https://css.mintic.gov.co/mt/mintic/new/img/logo_mintic_24_dark.svg" width="90px" class="mx-auto" alt="Imagen logo de MinTIC">
                                  <span class="sr-only">Logo del ministerio TIC</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="w-full pt-4">
                            <ul class="grid ms-3 grid-cols-1 md:grid-cols-4 ">
                              <li class="py-2">
                                <a href="https://www.instagram.com/ministerio_tic" target="_blank" title="Ir a Instagram de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[2px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                    </svg>
                                    <span class="govco-instagram-square">ministerio_tic</span>
                                  </div>

                                  <!-- <span class="sr-only">Logo Instagram</span> -->
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://www.threads.net/@ministerio_tic" target="_blank" title="Ir a Threads de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[2px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512">
                                      <path fill="currentColor" d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z"></path>
                                    </svg>
                                    <span class="govco-threads-square">@ministerio_tic</span>
                                    <span class="sr-only">Logo Threads</span>
                                  </div>
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://www.tiktok.com/@ministerio_tic" target="_blank" title="Ir a Tiktok de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[3px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"></path>
                                    </svg>
                                    <span class="govco-tiktok-square">@ministerio_tic</span>
                                    <span class="sr-only">Logo Tiktok</span>
                                  </div>
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://twitter.com/Ministerio_TIC" target="_blank" title="Ir a X de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[3px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                                    </svg>
                                    <span class="govco-x-square">@Ministerio_TIC</span>
                                    <span class="sr-only">Logo Twitter</span>
                                  </div>
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://www.facebook.com/MinisterioTIC.Colombia/" target="_blank" title="Ir a Facebook de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[3px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                      <path fill="currentColor" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"></path>
                                    </svg>
                                    <span class="govco-facebook-square">MinisterioTIC.Colombia</span>
                                    <span class="sr-only">Logo Facebook</span>
                                  </div>
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://www.youtube.com/user/minticolombia" target="_blank" title="Ir a Youtube de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[3px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                      <path fill="currentColor" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path>
                                    </svg>
                                    <span class="govco-youtube-square">@ministeriotic</span>
                                    <span class="sr-only">Logo Youtube</span>
                                  </div>
                                </a>
                              </li>
                              <li class="py-2">
                                <a href="https://wa.me/573227234164" target="_blank" title="Ir a Whatsapp de MINTIC" class="text-blue-600">
                                  <div class="flex flex-column gap-1">
                                    <svg class="bg-[#2a4d6f] p-[3px] w-6 h-6 text-white rounded " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                    </svg>
                                    <span class="govco-whatsapp-square">+573227234164</span>
                                    <span class="sr-only">Logo WhatsApp</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                            <div class="text-left text-sm mt-5 pt-3">
                              <a href="https://www.mintic.gov.co/portal/715/w3-article-2627.html" title="Ir a Política de privacidad y condiciones de uso" target="_blank" class="text-blue-600 mr-3">Política de privacidad y condiciones de uso</a>
                              <a href="https://www.mintic.gov.co/portal/715/w3-propertyvalue-111091.html" title="Ir a Contacto" target="_blank" class="text-blue-600 mr-3">Contacto</a>
                              <a href="https://www.mintic.gov.co/portal/715/w3-propertyvalue-111113.html" title="Ir a Mapa del sitio" target="_blank" class="text-blue-600 mr-3">Mapa del sitio</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>



            </div>
        </div>
    </div>
    <div class="sky-container" style="display: none;">


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
        let form = $("#enviar_inscripcion");

        const municipiosPorDepartamento = {
            "Nariño": ["Albán",
                "Aldana",
                "Ancuya",
                "Arboleda",
                "Barbacoas",
                "Belén",
                "Buesaco",
                "Chachagüí",
                "Colón",
                "Consacá",
                "Contadero",
                "Córdoba",
                "Cuaspud",
                "Cumbal",
                "Cumbitara",
                "El Charco",
                "El Peñol",
                "El Rosario",
                "El Tablón De Gómez",
                "El Tambo",
                "Francisco Pizarro",
                "Funes",
                "Guachucal",
                "Guaitarilla",
                "Gualmatán",
                "Iles",
                "Imués",
                "Ipiales",
                "La Cruz",
                "La Florida",
                "La Llanada",
                "La Tola",
                "La Unión",
                "Leiva",
                "Linares",
                "Los Andes",
                "Magüí Payán",
                "Mallama",
                "Mosquera",
                "Nariño",
                "Olaya Herrera",
                "Ospina",
                "Pasto",
                "Policarpa",
                "Potosí",
                "Providencia",
                "Puerres",
                "Pupiales",
                "Ricaurte",
                "Roberto Payán",
                "Samaniego",
                "San Andrés De Tumaco",
                "San Bernardo",
                "San Lorenzo",
                "San Pablo",
                "San Pedro De Cartago",
                "Sandoná",
                "Santa Bárbara",
                "Santacruz",
                "Sapuyes",
                "Taminango",
                "Tangua",
                "Túquerres",
                "Yacuanquer"
            ],
            "Cauca": ["Almaguer",
                "Argelia",
                "Balboa",
                "Bolívar",
                "Buenos Aires",
                "Cajibío",
                "Caldono",
                "Caloto",
                "Corinto",
                "El Tambo",
                "Florencia",
                "Guachené",
                "Guapí",
                "Inzá",
                "Jambaló",
                "La Sierra",
                "La Vega",
                "López De Micay",
                "Mercaderes",
                "Miranda",
                "Morales",
                "Padilla",
                "Páez",
                "Patía",
                "Piamonte",
                "Piendamó",
                "Popayán",
                "Puerto Tejada",
                "Puracé",
                "Rosas",
                "San Sebastián",
                "Santa Rosa",
                "Santander De Quilichao",
                "Silvia",
                "Sotará",
                "Suárez",
                "Sucre",
                "Timbío",
                "Timbiquí",
                "Toribío",
                "Totoró",
                "Villa Rica"
            ]
            // Puedes agregar más departamentos y sus municipios aquí
        };
        window.addEventListener("load", function() {
            initValidate();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            $('#smartwizard').smartWizard({
                theme: 'dots',
                lang: { // Language variables for button
                    next: 'Siguiente',
                    previous: 'Anterior'
                },
                autoAdjustHeight: false,
            });
            $("#enviar_inscripcion").each(function() {
                // Verificar si el valor del input no está vacío
                if ($(this).val() !== "") {
                    // Deshabilitar el input si tiene un valor
                    $(this).prop("disabled", true);
                }
            });
        });

        // Función para cargar los municipios
        function cargarMunicipios(departamentoSeleccionado) {
            const municipios = municipiosPorDepartamento[departamentoSeleccionado] || [];


            // Limpia y agrega los nuevos municipios al elemento HTML deseado (por ejemplo, un div con el id "municipios_container")
            $("#municipios_container").empty();

            $(".municipios_container").html("");
            municipios.forEach(municipio => {

                $(".municipios_container").append(
                    `<option  value="${municipio}">${municipio}</option>`);
            });
        }

        // Llama a la función para cargar los municipios al cargar la página
        $(document).ready(function() {
            const departamentoSeleccionado = $("#departamento_residencia").val();
            if (departamentoSeleccionado) {
                cargarMunicipios(departamentoSeleccionado);
            }

            const links = document.querySelectorAll("nav ul li a");
            links.forEach(function(link) {
                link.addEventListener("click", function() {
                    // Remover la clase "selected" de todos los enlaces
                    links.forEach(function(item) {
                        item.classList.remove("selected");
                    });
                    // Agregar la clase "selected" al enlace seleccionado
                    this.classList.add("selected");
                    console.log('holaaa');
                });
            });


            // $('#enviar_matricula input[type="checkbox"]').each(function() {
            //     // Verifica si el checkbox actual está marcado
            //     // var isChecked = $(this).prop('checked');
            //     console.log($(this).prop('checked'));
            //     if ($(this).prop('checked')) {

            //         // Encuentra todos los checkboxes con el mismo nombre (misma familia)
            //         var checkboxesMismaFamilia = $('input[name="' + $(this).attr('name') + '"]');

            //         // Deshabilita todos los checkboxes de la misma familia excepto el actual
            //         checkboxesMismaFamilia.not(this).prop('disabled', isChecked);
            //     }
            // });

        });



        // Agrega el evento change para actualizar los municipios cuando se seleccione un nuevo departamento
        $("#departamento_residencia").change(function() {
            const departamentoSeleccionado = $(this).val();
            cargarMunicipios(departamentoSeleccionado);
        });


        function initValidate() {
            form.validate({
                onfocusout: false,
                rules: {
                    primer_nombre: {
                        required: true,
                        minlength: 3
                    },
                    primer_apellido: {
                        required: true,
                        minlength: 3
                    },
                    tipo_documento: {
                        required: true,
                        minlength: 1
                    },
                    numero_documento: {
                        required: true,
                        minlength: 6,
                        maxlength: 10,
                        number: true
                    },
                    fecha_nacimiento: {
                        required: true,
                        minlength: 1
                    },
                    fecha_exp_cc: {
                        required: true,
                        minlength: 1
                    },

                    identidad_genero: {
                        required: true,
                        minlength: 1
                    },
                    celular_llamadas: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    correo_electronico: {
                        required: true,
                        minlength: 5,
                        email: true
                    },


                    nacionalidad: {
                        required: true,
                        minlength: 1
                    },
                    departamento_residencia: {
                        required: true,
                        minlength: 1
                    },
                    municipio_residencia: {
                        required: true,
                        minlength: 1
                    },
                    zona_ubicacion: {
                        required: true,
                        minlength: 1
                    },
                    campesino: {
                        required: true,
                        minlength: 1
                    },
                    estrato_socioeconomico: {
                        required: true,
                        minlength: 1
                    },
                    grupo_etnico: {
                        required: true,
                        minlength: 1
                    },
                    victima: {
                        required: true,
                        minlength: 1
                    },
                    grado_escolaridad: {
                        required: true,
                        minlength: 1
                    },
                    discapacidad: {
                        required: true,
                        minlength: 1
                    },

                    "tipo_discapacidad[]": {
                        require_from_group: [1, ".tipo_discapacidad-group"]
                    },
                    "segun_discapacidad[]": {
                        require_from_group: [1, ".segun_discapacidad-group"]
                    },

                    disponibilidad_formacion: {
                        required: true,
                        minlength: 1
                    },
                    eje_final_formacion: {
                        required: true,
                        minlength: 1
                    },
                    modalidad_bootcamps: {
                        required: true,
                        minlength: 1
                    },

                    requisitos_aceptados: {
                        required: true,
                        minlength: 1
                    },

                    computo: {
                        required: true,
                        minlength: 1
                    },
                    parrafo: {
                        required: true,
                        minlength: 1
                    },
                    tratamiento_datos: {
                        required: true,
                        minlength: 1
                    },








                },
                messages: {
                    url_archivo: {
                        required: "Selecciona al menos un archivo.",
                        maxsize: "El archivo debe ser PDF, y no mayor a 2MB"
                    },
                    "tipo_discapacidad[]": "Selecciona al menos un tipo de discapacidad",
                    "segun_discapacidad[]": "Selecciona al menos una opción según la discapacidad",
                }
            });
        }


        $("#discapacidad").change(function() {
            /* alert( $('option:selected', this).text() ); */
            if ($('option:selected', this).text() == 'Si') {
                $('#tipo_discapacidad_container').removeClass('d-none');
            } else if ($('option:selected', this).text() == 'No') {
                $('#tipo_discapacidad_container').addClass('d-none');
            }
        });

        // function bloquear() {
        //     $("#enviar_inscripcion input[type='text'], #enviar_inscripcion input[type='date'], #enviar_inscripcion input[type='number'], #enviar_inscripcion input[type='email']")
        //         .each(function() {
        //             // Verificar si el valor del input no está vacío
        //             if ($(this).val() !== "") {
        //                 // Deshabilitar el input si tiene un valor
        //                 $(this).prop("disabled", true);
        //                 $(this).addClass("gris_back ");
        //             }
        //         });
        //     $('#enviar_inscripcion select').each(function() {
        //         // Verifica si la opción seleccionada tiene valor y está seleccionada
        //         if ($(this).find('option:selected').val() !== "Seleccione...") {
        //             // Si la opción seleccionada tiene valor y está seleccionada, deshabilita el select
        //             $(this).prop('disabled', true);
        //             $(this).addClass('gris_back');
        //         }
        //     });
        // }

        $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
            if (form.valid()) {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                return true;
            } else {
                return false;
            }
        });

        $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection) {
            $(".sw-btn-prev").removeClass("d-none");
            $(".sw-btn-next").removeClass("d-none");
            switch (stepIndex) {
                // bloquear();
                case 0:
                    $(".sw-btn-prev").addClass("d-none");
                    // $(".sw-btn-next").attr("onclick", "bloquear()");
                    break;
                case 2:
                    $(".sw-btn-next").addClass("d-none");
                    // $(".sw-btn-prev").attr("onclick", "bloquear()");
                    break;
                default:
                    // code block
            }
            // bloquear();
        });


        $("#enviar_inscripcion").on("submit", function(event) {
            event.preventDefault();
            // 1085925417
            if (form.valid()) {
                $("#sendForm").prop('disabled', true);
                $("#sendForm").html('Enviando...');
                this.submit();
            }
        });










        // Seleccionar todos los inputs dentro del formulario
    </script>


</body>

</html>
