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

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- This pen isn't a fan of small view heights, check it out in  fullpage view for optimal viewing	 -->
    <header>
        <nav class="grid grid-cols-3 p-6">
            <div class="w-full flex items-center">

                <div>
                    <img src="{{ asset('assets/img/logo_potenciadelavida.svg') }}">
                </div>
            </div>
            <div class="w-full flex items-center">

                <div>
                    <img src="{{ asset('assets/img/TalentoTech.png') }}" class="mx-auto w-2/3">
                </div>
            </div>
            <div class="w-full flex items-center">
                <div class="mx-auto" style="margin-right: 0px">
                    <img src="{{ asset('assets/img/logo_mintic.svg') }}">
                </div>
            </div>
        </nav>
    </header>
    <div class="intro-container">
        <div class="text-left sky-container__right w-100">
            <div class="py-4">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-12 py-4">
                        <div class="sky-container__left w-full text-black text-right">
                            <p class="portfolio text-center m-4 tituloX" style="font-size: 30px;">Inscripción Talento Tech
                                Cauca y Nariño</p>
                        </div>
                        <form class="needs-validation" id="enviar_matricula"
                            action="" method="POST"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <!-- SmartWizard html -->
                            <div id="smartwizard">


                                <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <div class="pant pant1 space-y-12 grid grid-cols-1">

                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-2">
                                                    <label for="primer_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Primer
                                                        Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_nombre" id="primer_nombre"
                                                            autocomplete="given-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value=""
                                                            required="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="segundo_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Segundo
                                                        Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_nombre" id="segundo_nombre"
                                                            autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="segundo_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Primer
                                                        Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_apellido"
                                                            id="primer_apellido" autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="segundo_nombre"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Segundo
                                                        Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_apellido"
                                                            id="segundo_apellido" autocomplete="given-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>



                                                <div class="col-span-2">
                                                    <label for="tipo_documento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Tipo
                                                        Documento </label>
                                                    <div class="mt-2">
                                                        <select id="tipo_documento" name="tipo_documento"
                                                            autocomplete="tipo-documento-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="CC">CC
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="numero_documento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Número
                                                        documento</label>
                                                    <div class="mt-2">
                                                        <input type="number" inputmode="numeric"
                                                            pattern="[0-9]*" name="numero_documento"
                                                            id="numero_documento" autocomplete="numero-documento"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="nacionalidad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Nacionalidad</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="nacionalidad" id="nacionalidad" autocomplete="nacionalidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="nacionalidad" name="nacionalidad"
                                                            autocomplete="nacionalidad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Colombiano">
                                                                Colombiano(a)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="ciudad_nacimiento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad
                                                        de nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="ciudad_nacimiento"
                                                            id="ciudad_nacimiento" autocomplete="nacionalidad"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="fecha_nacimiento"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                                        de Nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="fecha_nacimiento"
                                                            id="fecha_nacimiento" autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="edad"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                                                    <div class="mt-2">
                                                        <input readonly type="number" inputmode="numeric"
                                                            pattern="[0-9]*" name="edad" id="edad"
                                                            autocomplete="family-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 gris_back"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="sexo"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Sexo
                                                    </label>
                                                    <div class="mt-2">
                                                        <select id="sexo" name="sexo"
                                                            autocomplete="sexo-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Hombre">Hombre
                                                            </option>
                                                            <option value="Mujer">Mujer
                                                            </option>
                                                            <option value="Intersex">
                                                                Intersex</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="identidad_genero_preg"
                                                        class="block text-sm font-medium leading-6 text-gray-900">¿Desea
                                                        responder preguntas sobre su identidad de género? </label>
                                                    <div class="mt-2">
                                                        <select id="identidad_genero_preg"
                                                            name="identidad_genero_preg"
                                                            autocomplete="identidad-genero-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <div class="identi_genero d-none">
                                                        <label for="identidad_genero"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Identidad
                                                            de género </label>
                                                        <div class="mt-2">
                                                            <select id="identidad_genero" name="identidad_genero"
                                                                autocomplete="genero-name"
                                                                class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                <option selected disabled>Seleccione...</option>
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

                                                <div class="col-span-2">
                                                    <label for="orientacion_sexual"
                                                        class="block text-sm font-medium leading-6 text-gray-900">¿Cuál
                                                        es su orientación sexual? </label>
                                                    <div class="mt-2">
                                                        <select id="orientacion_sexual" name="orientacion_sexual"
                                                            autocomplete="orientacion-name"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Heterosexualidad">Heterosexualidad</option>
                                                            <option value="Homosexualidad">Homosexualidad</option>
                                                            <option value="Bisexualidad">Bisexualidad</option>
                                                            <option value="Otro">Otro</option>
                                                            <option value="No deseo responder">No deseo responder</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="correo_electronico"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Correo
                                                        electrónico</label>
                                                    <div class="mt-2">
                                                        <input id="correo_electronico" name="correo_electronico"
                                                            type="email" autocomplete="email"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="celular_llamadas"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Número
                                                        de Celular llamadas</label>
                                                    <div class="mt-2">
                                                        <input id="celular_llamadas" name="celular_llamadas"
                                                            type="number" inputmode="numeric" pattern="[0-9]*"
                                                            autocomplete="celular_llamadas"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="whatsapp"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Número
                                                        WhatsApp</label>
                                                    <div class="mt-2">
                                                        <input id="whatsapp" name="whatsapp" type="number"
                                                            inputmode="numeric" pattern="[0-9]*"
                                                            autocomplete="whatsapp"
                                                            class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div style="position: relative;">
                                    <button onclick="editar()" type="button"
                                        class="dark:focus:ring-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium hover:bg-blue-800 mb-2 me-2 p-4 px-5 py-2.5 rounded-md text-sm text-white"
                                        style="background: #009ef7;font-size: 16px;position: absolute;top: -51px;">Actualizar
                                        datos</button>
                                    <p class="mb-4 text-black">Haz click aquí si deseas actualizar los datos de tu
                                        inscripción en este paso.</p>
                                </div>

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
                <div class="correct col-span-3 text-5xl m-4">
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


</body>

</html>
