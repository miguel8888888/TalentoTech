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
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
    rel="stylesheet" />
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

        <div class="text-left sky-container__right w-100">


            <div class="py-4" style="position: relative; z-index: 1;">
                <section>
                    <div
                      class="w-full justify-center flex logo-talentotech"
                      style="margin-top: 60px">
                      <img src="{{ asset('assets/img/TalentoTech.png') }}" class="mx-auto w-1/2">
                    </div>
                  </section>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-12 py-4">
                        <div class="sky-container__left w-full text-black text-right">
                            <p class="portfolio text-center m-4 tituloX" style="font-size: 30px;">Inscripción Talento Tech
                                Cauca y Nariño</p>
                        </div>
                        <form class="needs-validation" id="enviar_inscripcion"
                            action="inscripcion/store" method="POST"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-1">
                                            <div class="num">1</div>
                                            Paso 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-2">
                                            <span class="num">2</span>
                                            Paso 2
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-3">
                                            <span class="num">3</span>
                                            Paso 3
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <div class="pant pant1 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-black leading-6">Datos personales</p>

                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-4">
                                                    <label for="primer_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Primer nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_nombre" id="primer_nombre"
                                                            autocomplete="given-name"
                                                            placeholder="Escribe tu primer nombre"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value=""
                                                            required="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="segundo_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Segundo
                                                        nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_nombre" id="segundo_nombre"
                                                            autocomplete="family-name"
                                                            placeholder="Escribe tu segundo nombre"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="primer_apellido"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Primer
                                                        apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_apellido"
                                                            id="primer_apellido" autocomplete="family-name"
                                                            placeholder="Escribe tu primer apellido"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="segundo_apellido"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Segundo
                                                        apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_apellido"
                                                            id="segundo_apellido" autocomplete="given-name"
                                                            placeholder="Escribe tu segundo apellido"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>



                                                <div class="col-span-4">
                                                    <label for="tipo_documento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Tipo
                                                        documento </label>
                                                    <div class="mt-2">
                                                        <select id="tipo_documento" name="tipo_documento"
                                                            autocomplete="tipo-documento-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Tipo de documento</option>
                                                            <option value="CC">CC
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="numero_documento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Número de
                                                        documento</label>
                                                    <div class="mt-2">
                                                        <input type="number" inputmode="numeric"
                                                            pattern="[0-9]*" name="numero_documento"
                                                            placeholder="Escribe tu número de documento"
                                                            id="numero_documento" autocomplete="numero-documento"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="fecha_nacimiento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                                        de nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="fecha_nacimiento"
                                                            id="fecha_nacimiento" autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="fecha_exp_cc"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                                        de expedición de documento</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="fecha_exp_cc"
                                                            id="fecha_exp_cc" autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <div class="identi_genero ">
                                                        <label for="identidad_genero"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Identidad
                                                            de género </label>
                                                        <div class="mt-2">
                                                            <select id="identidad_genero" name="identidad_genero"
                                                                autocomplete="genero-name"
                                                                class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                <option selected disabled>Identidad de género</option>
                                                                <option value="Masculino">Masculino</option>
                                                                <option value="Femenino">Femenino</option>
                                                                <option value="Trans">Trans</option>
                                                                <option value="Otro">Otro</option>
                                                                <option value="No deseo responder">No deseo responder
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-span-4">
                                                    <label for="celular_llamadas"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Número
                                                        de teléfono</label>
                                                    <div class="mt-2">
                                                        <input id="celular_llamadas" name="celular_llamadas"
                                                            type="number" inputmode="numeric" pattern="[0-9]*"
                                                            autocomplete="celular_llamadas"
                                                            placeholder="Escribe tu número de teléfono"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="correo_electronico"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Correo
                                                        electrónico</label>
                                                    <div class="mt-2">
                                                        <input id="correo_electronico" name="correo_electronico"
                                                            type="email" autocomplete="email"
                                                            placeholder="Escribe tu correo electrónico"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="nacionalidad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Nacionalidad</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="nacionalidad" id="nacionalidad" autocomplete="nacionalidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="nacionalidad" name="nacionalidad"
                                                            autocomplete="nacionalidad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Elige tu nacionalidad</option>
                                                            <option value="Colombiano">
                                                                Colombiano(a)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="departamento_residencia"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Departamento
                                                        de residencia</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="departamento_residencia" id="departamento_residencia" autocomplete="departamento_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="departamento_residencia"
                                                            name="departamento_residencia"
                                                            autocomplete="departamento_residencia"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Elige tu departamento</option>
                                                            <option
                                                                value="Nariño">Nariño</option>
                                                            <option
                                                                value="Cauca">Cauca</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="municipio_residencia"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Municipio
                                                        residencia</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="municipio_residencia" id="municipio_residencia" autocomplete="municipio_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="municipio_residencia" name="municipio_residencia"
                                                            autocomplete="municipio_residencia"
                                                            class="municipios_container block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Elige tu municipio</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="zona_ubicacion"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Zona
                                                        de ubicación</label>
                                                    <div class="mt-2">
                                                        <select id="zona_ubicacion" name="zona_ubicacion"
                                                            autocomplete="zona_ubicacion"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Rural">Rural</option>
                                                            <option
                                                                value="Urbana">Urbana</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="campesino"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Campesino</label>
                                                    <div class="mt-2">
                                                        <select id="campesino" name="campesino"
                                                            autocomplete="campesino"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Si">Si</option>
                                                            <option
                                                                value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="estrato_socioeconomico"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Estrato
                                                        socioeconómico</label>
                                                    <div class="mt-2">
                                                        <select id="estrato_socioeconomico"
                                                            name="estrato_socioeconomico"
                                                            autocomplete="estrato_socioeconomico"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="1">1</option>
                                                            <option
                                                                value="2">2</option>
                                                            <option
                                                                value="3">3</option>
                                                            <option
                                                                value="4">4</option>
                                                            <option
                                                                value="5">5</option>
                                                            <option
                                                                value="6">6</option>
                                                            <option
                                                                value="Zona rural">Zona rural</option>
                                                            <option
                                                                value="No estratificado">No estratificado</option>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>



                                        </div>
                                    </div>

                                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <div class="pant pant2 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-black leading-6">Grupo étnico </p>

                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">


                                                <div class="col-span-4">
                                                    <label for="estrato_socioeconomico"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Autoidentificación
                                                        étnica</label>
                                                    <div class="mt-2">
                                                        <select id="grupo_etnico" name="grupo_etnico"
                                                            autocomplete="grupo_etnico"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Afrocolombiano">Afrocolombiano</option>
                                                            <option
                                                                value="Palenquero">Palenquero</option>
                                                            <option
                                                                value="Comunidad Negra">Comunidad Negra</option>
                                                            <option
                                                                value="Raizal del archipiélago de San Andrés y Providencia">
                                                                Raizal del archipiélago de San Andrés y Providencia
                                                            </option>
                                                            <option
                                                                value="Indígena">Indígena</option>
                                                            <option
                                                                value="Rrom/Gitano">Rrom/Gitano</option>
                                                            <option
                                                                value="No se Autorreconoce en ninguno de los anteriores">
                                                                No se Autorreconoce en ninguno de los anteriores
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="victima"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Víctima del conflicto armado </label>
                                                    <div class="mt-2">
                                                        <select id="victima" name="victima"
                                                            autocomplete="victima"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Si">Si</option>
                                                            <option
                                                                value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="grado_escolaridad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Nivel educativo</label>
                                                    <div class="mt-2">
                                                        <select id="grado_escolaridad" name="grado_escolaridad"
                                                            autocomplete="grado_escolaridad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Básica Primaria">Básica Primaria</option>
                                                            <option
                                                                value="Básica Secundaria">Básica Secundaria</option>
                                                            <option
                                                                value="Media">Media</option>
                                                            <option
                                                                value="Bachillerato">Bachillerato</option>
                                                            <option
                                                                value="Técnico Profesional">Técnico Profesional
                                                            </option>
                                                            <option
                                                                value="Tecnológico">Tecnológico</option>
                                                            <option
                                                                value="Profesional Universitario">Profesional
                                                                Universitario</option>
                                                            <option
                                                                value="Posgrado">Posgrado</option>
                                                            <option
                                                                value="No Registra">No Registra</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4">
                                                    <label for="discapacidad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">¿Presenta
                                                        alguna discapacidad?</label>
                                                    <div class="mt-2">
                                                        <select id="discapacidad" name="discapacidad"
                                                            autocomplete="discapacidad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option
                                                                value="Si">Si</option>
                                                            <option
                                                                value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-4" id="tipo_discapacidad_container">
                                                    <label for="tipo_discapacidad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Tipo de discapacidad</label>
                                                    <div class="mt-2">
                                                        <select id="tipo_discapacidad" name="tipo_discapacidad"
                                                            autocomplete="tipo_discapacidad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Visual">Visual</option>
                                                            <option value="Auditiva">Auditiva</option>
                                                            <option value="Fisica">Física</option>
                                                            <option value="Intelectual">Intelectual</option>
                                                            <option value="Psicosocial">Psicosocial</option>
                                                            <option value="Multiple">Múltiple</option>
                                                            <option value="SinDiscapacidad">Sin discapacidad</option>
                                                            <option value="NoRegistra">No registra</option>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>

                                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                        <div class="pant pant3 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                {{-- <p class="mt-1 text-black leading-6">Autorreconocimiento Grupo Étnico
                                                    del Beneficiario </p> --}}

                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class=" col-span-4">
                                                    <label for="disponibilidad_formacion"
                                                        class="block text-sm font-medium leading-6 text-gray-900">¿Te comprometes a dedicar mínimo 10 horas semanales a Talento Tech?</label>
                                                    <div class="mt-2">
                                                        <select id="disponibilidad_formacion"
                                                            name="disponibilidad_formacion"
                                                            autocomplete="disponibilidad_formacion"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="eje_final_formacion"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Eje temático</label>
                                                    <div class="mt-2">
                                                        <select id="eje_final_formacion" name="eje_final_formacion"
                                                            autocomplete="eje_final_formacion"
                                                            class=" block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Análisis de Datos">Análisis de Datos</option>
                                                            <option value="Inteligencia artificial">Inteligencia artificial</option>
                                                            <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                                                            <option value="BlockChain">BlockChain</option>
                                                            <option value="Programación">Programación</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="modalidad_bootcamps"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Tipo de formación</label>
                                                    <div class="mt-2">
                                                        <select id="modalidad_bootcamps" name="modalidad_bootcamps"
                                                            autocomplete="modalidad_bootcamps"
                                                            class=" block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Presencial / híbrido">Presencial / híbrido
                                                            </option>
                                                            <option value="Virtual">Virtual</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="requisitos_aceptados"
                                                        class="block text-sm font-medium leading-6 text-gray-900">He leído y acepto los
                                                       <span><a href="{{ asset('assets/pdf/requisitos.pdf')}}" id="requisitosConvocatoriaLink" target="_blank" class="underline">requisitos de la convocatoria</a></span> </label>
                                                    <div class="mt-2">
                                                        <select id="requisitos_aceptados"
                                                            name="requisitos_aceptados"
                                                            autocomplete="requisitos_aceptados"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="computo" class="block text-sm font-medium leading-6 text-gray-900">
                                                        Cuento con un equipo de cómputo y/o dispositivo móvil o la posibilidad de usar uno, con acceso a internet para llevar a cabo la formación
                                                    </label>
                                                    <div class="mt-2">
                                                        <select id="computo"
                                                            name="computo"
                                                            autocomplete="computo"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="motivaciones" class="block text-sm font-medium leading-6 text-gray-900">
                                                        ¿Qué te motivó a participar?
                                                    </label>
                                                    <div class="mt-2">
                                                        <select id="motivaciones"
                                                            name="motivaciones"
                                                            autocomplete="motivaciones"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Adquirir nuevos conocimientos">Adquirir nuevos conocimientos</option>
                                                            <option value="Emprender">Emprender</option>
                                                            <option value="Encontrar un nuevo empleo">Encontrar un nuevo empleo</option>
                                                            <option value="Fortalecer mis conocimientos">Fortalecer mis conocimientos</option>
                                                            <option value="Ninguna de las anteriores">Ninguna de las anteriores</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=" col-span-4">
                                                    <label for="tratamiento_datos"
                                                        class="block text-sm font-medium leading-6 text-gray-900">He leído y acepto la política de
                                                       <span><a href="https://www.mintic.gov.co/portal/715/articles-2627_resolucion_0448_2022.pdf" id="tratamientoDatosLink" target="_blank" class="underline">Tratamiento de Datos</a></span> </label>
                                                    <div class="mt-2">
                                                        <select id="tratamiento_datos"
                                                            name="tratamiento_datos"
                                                            autocomplete="tratamiento_datos"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid justify-items-center  w-full">

                                                <div class="w-3/6 ">
                                                    <button id="sendForm" type="submit"
                                                        class=" rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 w-full">INSCRIBIRSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                {{-- <div style="position: relative;">
                                    <button onclick="editar()" type="button"
                                        class="dark:focus:ring-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium hover:bg-blue-800 mb-2 me-2 p-4 px-5 py-2.5 rounded-md text-sm text-white"
                                        style="background: #009ef7;font-size: 16px;position: absolute;top: -51px;">Actualizar
                                        datos</button>
                                    <p class="mb-4 text-black">Haz click aquí si deseas actualizar los datos de tu
                                        inscripción en este paso.</p>
                                </div> --}}

                                <!-- Include optional progressbar HTML -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sky-container" style="display: none;">
        <div class="w-full justify-center flex">
            <img src="{{ asset('assets/img/TalentoTech.png') }}" class="w-1/2">
        </div>
        <div class=" flex justify-center">

            <div class="bg-white rounded-xl py-4 px-2 mx-3 w-2/3 grid grid-cols-3">
                <div class="correct col-span-2 text-5xl m-4">
                    <a href="https://twitter.com/Christopher4Lis" target="_blank"></a>
                    <i class="fa fa-lg fa-circle-check"></i>
                </div>
                <p class="font-bold text-black col-span-3">
                    Su registro ha sido realizado con exito, gracias por utilizar nuestros canales vituales, Lo
                    invitamos a revisar nuestros demas redes sociales
                </p>

                <div class="instagram text-right m-2 text-4xl">
                    <a href="https://www.instagram.com/descubreutp?igsh=Zm4wcmUzdWxteXEx" target="_blank">
                        <i class="fa fa-instagram fa-lg"></i>
                    </a>
                </div>

                <div class="facebook text-center m-2 text-4xl">
                    <a href="https://www.facebook.com/profile.php?id=100063576547225&mibextid=kFxxJD"
                        target="_blank">
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
        @if ($errors->any())
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
                    victima:{
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

                    disponibilidad_formacion:{
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

                    computo:{
                        required: true,
                        minlength: 1
                    },
                    parrafo:{
                        required: true,
                        minlength: 1
                    },
                    tratamiento_datos:{
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
