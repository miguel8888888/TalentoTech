<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Matriculas 2024</title>
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
        <nav class="flex items-center justify-between p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="{{ asset('assets/img/logo_potenciadelavida.svg') }}" class="w-1/9">
            </div>
            <div class="w-full block flex-grow flex items-center w-auto">
                <div class="text-sm flex-grow"></div>
                <div>
                    <img src="{{ asset('assets/img/logo_mintic.svg') }}" class="w-1/9">
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
                            <p class="portfolio text-center m-4 tituloX" style="font-size: 30px;">Matrícula talento tech cauca y nariño</p>
                        </div>
                        <form class="needs-validation" id="enviar_matricula" action="/matricula" method="POST" enctype="multipart/form-data" novalidate>
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
                                    <li class="nav-item">
                                        <a class="nav-link " href="#step-4">
                                            <span class="num">4</span>
                                            Paso 4
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#step-5">
                                            <span class="num">5</span>
                                            Paso 5
                                        </a>
                                    </li>
                                </ul>
                
                                <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <div class="pant pant1 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-sm leading-6 text-gray-600">Caracterización del participante talento tech</p>
                
                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-2">
                                                    <label for="primer_nombre" class="block text-sm font-medium leading-6 text-gray-900">Primer Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_nombre" id="primer_nombre" autocomplete="given-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('primer_nombre', $informacion_usuario->primer_nombre)}}" required="" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-900">Segundo Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_nombre" id="segundo_nombre" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('segundo_nombre', $informacion_usuario->segundo_nombre)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer_apellido" id="primer_apellido" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('segundo_nombre', $informacion_usuario->segundo_nombre)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo_apellido" id="segundo_apellido" autocomplete="given-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('segundo_nombre', $informacion_usuario->segundo_nombre)}}"/>
                                                    </div>
                                                </div>
                
                
                
                                                <div class="col-span-2">
                                                    <label for="tipo_documento" class="block text-sm font-medium leading-6 text-gray-900">Tipo Documento </label>
                                                    <div class="mt-2">
                                                        <select id="tipo_documento" name="tipo_documento" autocomplete="tipo-documento-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="CC">CC</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número documento</label>
                                                    <div class="mt-2">
                                                        <input readonly type="number" inputmode="numeric" pattern="[0-9]*" name="numero_documento" id="numero_documento" autocomplete="numero-documento" class="gris_back block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('numero_documento', $informacion_usuario->numero_documento)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="nacionalidad" class="block text-sm font-medium leading-6 text-gray-900">Nacionalidad</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="nacionalidad" id="nacionalidad" autocomplete="nacionalidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="nacionalidad" name="nacionalidad" autocomplete="nacionalidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Colombiano">Colombiano(a)</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="ciudad_nacimiento" class="block text-sm font-medium leading-6 text-gray-900">Ciudad de nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="ciudad_nacimiento" id="ciudad_nacimiento" autocomplete="nacionalidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('ciudad_nacimiento', $informacion_usuario->ciudad_nacimiento)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="fecha_nacimiento" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('fecha_nacimiento', $informacion_usuario->fecha_nacimiento)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="edad" class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                                                    <div class="mt-2">
                                                        <input readonly  type="number" inputmode="numeric" pattern="[0-9]*" name="edad" id="edad" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 gris_back"  value="{{old('edad', $informacion_usuario->edad)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="sexo" class="block text-sm font-medium leading-6 text-gray-900">Sexo </label>
                                                    <div class="mt-2">
                                                        <select id="sexo" name="sexo" autocomplete="sexo-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Hombre">Hombre</option>
                                                            <option value="Mujer">Mujer</option>
                                                            <option value="Intersex">Intersex</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="identidad_genero_preg" class="block text-sm font-medium leading-6 text-gray-900">¿Desea responder preguntas sobre su identidad de género? </label>
                                                    <div class="mt-2">
                                                        <select id="identidad_genero_preg" name="identidad_genero_preg" autocomplete="identidad-genero-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <div class="identi_genero d-none">
                                                        <label for="identidad_genero" class="block text-sm font-medium leading-6 text-gray-900">Identidad de género </label>
                                                        <div class="mt-2">
                                                            <select id="identidad_genero" name="identidad_genero" autocomplete="genero-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                <option selected disabled>Seleccione...</option>
                                                                <option>Masculino</option>
                                                                <option>Femenino</option>
                                                                <option>Trans</option>
                                                                <option>Otro</option>
                                                                <option>No deseo responder</option>
                                                            </select>
                                                        </div>
                                                    </div>
                
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="orientacion_sexual" class="block text-sm font-medium leading-6 text-gray-900">¿Cuál es su orientación sexual? </label>
                                                    <div class="mt-2">
                                                        <select id="orientacion_sexual" name="orientacion_sexual" autocomplete="orientacion-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                                                    <label for="correo_electronico" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                                                    <div class="mt-2">
                                                        <input id="correo_electronico" name="correo_electronico" type="email" autocomplete="email" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('correo_electronico', $informacion_usuario->correo_electronico)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="celular_llamadas" class="block text-sm font-medium leading-6 text-gray-900">Número de Celular llamadas</label>
                                                    <div class="mt-2">
                                                        <input id="celular_llamadas" name="celular_llamadas"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="celular_llamadas" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('celular_llamadas', $informacion_usuario->celular_llamadas)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Numero WhatsApp</label>
                                                    <div class="mt-2">
                                                        <input id="whatsapp" name="whatsapp"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="whatsapp" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{old('whatsapp', $informacion_usuario->whatsapp)}}"/>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div>
                                    </div>
                                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <div class="pant pant2 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-sm leading-6 text-gray-600 uppercase">Información adicional de contacto de un familiar </p>
                
                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-2">
                                                    <label for="familiar_primer_nombre" class="block text-sm font-medium leading-6 text-gray-900">Primer Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="familiar_primer_nombre" id="familiar_primer_nombre" autocomplete="familiar_primer_nombre" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_primer_nombre', $informacion_usuario->familiar_primer_nombre)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_segundo_nombre" class="block text-sm font-medium leading-6 text-gray-900">Segundo Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="familiar_segundo_nombre" id="familiar_segundo_nombre" autocomplete="familiar_segundo_nombre" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_segundo_nombre', $informacion_usuario->familiar_segundo_nombre)}}" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_primer_apellido" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="familiar_primer_apellido" id="familiar_primer_apellido" autocomplete="familiar_primer_apellido" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_primer_apellido', $informacion_usuario->familiar_primer_apellido)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_segundo_apellido" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="familiar_segundo_apellido" id="familiar_segundo_apellido" autocomplete="familiar_segundo_apellido" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_segundo_apellido', $informacion_usuario->familiar_segundo_apellido)}}"/>
                                                    </div>
                                                </div>
                
                
                
                                                <div class="col-span-2">
                                                    <label for="familiar_tipo_documento" class="block text-sm font-medium leading-6 text-gray-900">Tipo Documento </label>
                                                    <div class="mt-2">
                                                        <select id="familiar_tipo_documento" name="familiar_tipo_documento" autocomplete="familiar_tipo_documento" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_tipo_documento', $informacion_usuario->familiar_tipo_documento)}}">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="CC">CC</option>
                                                            <option value="CE">CE</option>
                                                            <option value="TI">TI</option>
                                                            <option value="PA">PA</option>
                                                            <option value="TMF">TMF</option>
                                                            <option value="PEP">PEP</option>
                                                            <option value="Visa">Visa</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número documento</label>
                                                    <div class="mt-2">
                                                        <input  type="number" inputmode="numeric" pattern="[0-9]*" name="familiar_numero_documento" id="familiar_numero_documento" autocomplete="familiar_numero_documento" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_numero_documento', $informacion_usuario->familiar_numero_documento)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_correo_electronico" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                                                    <div class="mt-2">
                                                        <input id="familiar_correo_electronico" name="familiar_correo_electronico" type="email" autocomplete="email" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_correo_electronico', $informacion_usuario->familiar_correo_electronico)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_celular_llamadas" class="block text-sm font-medium leading-6 text-gray-900">Número de Celular llamadas</label>
                                                    <div class="mt-2">
                                                        <input id="familiar_celular_llamadas" name="familiar_celular_llamadas"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="familiar_celular_llamadas" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_celular_llamadas', $informacion_usuario->familiar_celular_llamadas)}}"/>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="familiar_whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Numero WhatsApp</label>
                                                    <div class="mt-2">
                                                        <input id="familiar_whatsapp" name="familiar_whatsapp"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="familiar_whatsapp" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('familiar_whatsapp', $informacion_usuario->familiar_whatsapp)}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                        <div class="pant pant3 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-sm leading-6 text-gray-600 uppercase">Autorreconocimiento Grupo Étnico del Beneficiario </p>
                
                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-2">
                                                    <label for="grupo_etnico" class="block text-sm font-medium leading-6 text-gray-900">Grupo Étnico</label>
                                                    <div class="mt-2">
                                                        <select id="grupo_etnico" name="grupo_etnico" autocomplete="grupo_etnico" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Afrocolombiano">Afrocolombiano</option>
                                                            <option value="Palenquero">Palenquero</option>
                                                            <option value="Comunidad Negra">Comunidad Negra</option>
                                                            <option value="Raizal del archipiélago de San Andrés y Providencia">Raizal del archipiélago de San Andrés y Providencia</option>
                                                            <option value="Indígena">Indígena</option>
                                                            <option value="Rrom/Gitano">Rrom/Gitano</option>
                                                            <option value="No se Autorreconoce en ninguno de los anteriores">No se Autorreconoce en ninguno de los anteriores</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-3">
                                                    <label for="discapacidad" class="block text-sm font-medium leading-6 text-gray-900">¿Presenta alguna discapacidad?</label>
                                                    <div class="mt-2">
                                                        <select id="discapacidad" name="discapacidad" autocomplete="discapacidad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-3">
                                                    <div class="prent_discapaciti d-none">
                                                        <label for="discapacidad_certificada" class=" block text-sm font-medium leading-6 text-gray-900">¿La discapacidad está certificada?</label>
                                                        <div class="mt-2">
                                                            <select id="discapacidad_certificada" name="discapacidad_certificada" autocomplete="discapacidad_certificada" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                <option selected disabled>Seleccione...</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                
                
                
                
                                                <div class="col-span-2 lg:col-span-12">
                                                    <fieldset class="mt-5 prent_discapaciti d-none">
                                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Tipo de discapacidad </legend>
                                                        <input id="dicapacidad_psicosocialsss" name="tipo_discapacidad[]" value="Discapacidad psicosocial (mental)" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="opacity: 0">
                                                        <div class="grid grid-cols-1 lg:grid-cols-3">
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_psicosocial" name="tipo_discapacidad[]" value="Discapacidad psicosocial (mental)" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_psicosocial" class="font-medium text-gray-900">Discapacidad psicosocial (mental)</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_auditiva" name="tipo_discapacidad[]" value="Discapacidad auditiva" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_auditiva" class="font-medium text-gray-900">Discapacidad auditiva</label>
                
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="sensorial" name="tipo_discapacidad[]" value="Sensorial, Gusto, Olfato, Tacto" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="sensorial" class="font-medium text-gray-900">Sensorial, Gusto, Olfato, Tacto</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_sordoceguera" name="tipo_discapacidad[]" value="Discapacidad sordoceguera" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_sordoceguera" class="font-medium text-gray-900">Discapacidad sordoceguera</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_piel" name="tipo_discapacidad[]" value="Piel, pelo y uñas" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_piel" class="font-medium text-gray-900">Piel, pelo y uñas</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_intelectual" name="tipo_discapacidad[]" value="Discapacidad intelectual" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_intelectual" class="font-medium text-gray-900">Discapacidad intelectual</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_sistemica" name="tipo_discapacidad[]" value="Sistémica" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_sistemica" class="font-medium text-gray-900">Sistémica</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_visual" name="tipo_discapacidad[]" value="Discapacidad visual" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_visual" class="font-medium text-gray-900">Discapacidad visual</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_multiple" name="tipo_discapacidad[]" value="Discapacidad múltiple" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_multiple" class="font-medium text-gray-900">Discapacidad múltiple</label>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="dicapacidad_voz_habla" name="tipo_discapacidad[]" value="Voz y Habla" type="checkbox" class="tipo_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="dicapacidad_voz_habla" class="font-medium text-gray-900">Voz y Habla</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                
                                                <div class="col-span-2 lg:col-span-12 ">
                                                    <fieldset class="mt-5 prent_discapaciti d-none">
                                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Según la discapacidad</legend>
                                                        <input id="dicapacidad_psicosocialsss" name="segun_discapacidad[]" value="Discapacidad psicosocial (mental)" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="opacity: 0">
                                                        <div class="grid grid-cols-1 lg:grid-cols-2">
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="segun_discapacidad_1" name="segun_discapacidad[]" value="El beneficiario cuenta con la ayuda técnica/Producto de apoyo" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="segun_discapacidad_1" class="font-medium text-gray-900">El beneficiario cuenta con la ayuda técnica/Producto de apoyo</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="segun_discapacidad_2" name="segun_discapacidad[]" value="El beneficiario requiere la ayuda de otra persona" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="segun_discapacidad_2" class="font-medium text-gray-900">El beneficiario requiere la ayuda de otra persona</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="segun_discapacidad_3" name="segun_discapacidad[]" value="El beneficiario requiere terapia y/o rehabilitación" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="segun_discapacidad_3" class="font-medium text-gray-900">El beneficiario requiere terapia y/o rehabilitación</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="segun_discapacidad_4" name="segun_discapacidad[]" value="El beneficiario requiere ayuda técnica/Producto de apoyo" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="segun_discapacidad_4" class="font-medium text-gray-900">El beneficiario requiere ayuda técnica/Producto de apoyo</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="segun_discapacidad_5" name="segun_discapacidad[]" value="El beneficiario recibe atención en terapia y/o rehabilitación" type="checkbox" class="segun_discapacidad-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="segun_discapacidad_5" class="font-medium text-gray-900">El beneficiario recibe atención en terapia y/o rehabilitación</label>
                                                                </div>
                                                            </div>
                
                
                
                                                        </div>
                                                    </fieldset>
                                                </div>
                
                                                <div class="col-span-2 lg:col-span-12">
                                                    <fieldset class="mt-5">
                                                        <legend class="text-sm font-semibold leading-6 text-gray-900">¿Hace parte de alguno de estos grupos de atención diferencial?</legend>
                                                        <div class="mt-6 grid grid-cols-1 lg:grid-cols-3">
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="adulto_mayor" name="grupo_atencion_diferencial[]" value="Adulto mayor" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="adulto_mayor" class="font-medium text-gray-900">Adulto mayor</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="mujer_gestante" name="grupo_atencion_diferencial[]" value="Mujer gestante" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="mujer_gestante" class="font-medium text-gray-900">Mujer gestante</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="victima_confilcto" name="grupo_atencion_diferencial[]" value="Víctima de conflicto armado" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="victima_confilcto" class="font-medium text-gray-900">Víctima de conflicto armado</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="jovenes" name="grupo_atencion_diferencial[]" value="Jóvenes" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="jovenes" class="font-medium text-gray-900">Jóvenes</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="grupo_etnico2" name="grupo_atencion_diferencial[]" value="Grupo Étnico" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="grupo_etnico2" class="font-medium text-gray-900">Grupo Étnico</label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="madre_lactante" name="grupo_atencion_diferencial[]" value="Madre lactante" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="madre_lactante" class="font-medium text-gray-900">Madre lactante </label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="firmantes_paz" name="grupo_atencion_diferencial[]" value="Firmantes de Paz" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="firmantes_paz" class="font-medium text-gray-900">Firmantes de Paz </label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="discapacidad" name="grupo_atencion_diferencial[]" value="Discapacidad" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="discapacidad" class="font-medium text-gray-900">Discapacidad </label>
                                                                </div>
                                                            </div>
                
                                                            <div class="relative flex gap-x-3">
                                                                <div class="flex h-6 items-center">
                                                                    <input id="comunidad_lgtb" name="grupo_atencion_diferencial[]" value="Comunidad LGTBIAQ+" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                </div>
                                                                <div class="text-sm leading-6">
                                                                    <label for="comunidad_lgtb" class="font-medium text-gray-900">Comunidad LGTBIAQ+</label>
                                                                </div>
                                                            </div>
                
                
                
                                                        </div>
                                                    </fieldset>
                                                </div>
                
                                                <div class="col-span-2 mt-5">
                                                    <label for="grado_escolaridad" class="block text-sm font-medium leading-6 text-gray-900">Grado de escolaridad</label>
                                                    <div class="mt-2">
                                                        <select id="grado_escolaridad" name="grado_escolaridad" autocomplete="grado_escolaridad" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Bachillerato">Bachillerato</option>
                                                            <option value="Técnica">Técnica </option>
                                                            <option value="Tecnológico">Tecnológico</option>
                                                            <option value="Profesional">Profesional</option>
                                                            <option value="Posgrado">Posgrado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-2 mt-5">
                                                    <label for="ocupacion" class="block text-sm font-medium leading-6 text-gray-900">Ocupación </label>
                                                    <div class="mt-2">
                                                        <select id="ocupacion" name="ocupacion" autocomplete="ocupacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Estudiante">Estudiante</option>
                                                            <option value="Emprendedor">Emprendedor </option>
                                                            <option value="Independiente">Independiente</option>
                                                            <option value="Obrero o empleado del Gobierno">Obrero o empleado del Gobierno</option>
                                                            <option value="Obrero o empleado de empresa particular">Obrero o empleado de empresa particular</option>
                                                            <option value="Labores del Hogar">Labores del Hogar</option>
                                                            <option value="Desempleado">Desempleado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-2 lg:col-span-12 mt-5">
                                                    <label for="profesion" class="block text-sm font-medium leading-6 text-gray-900">Si eres profesional, técnico o tecnólogo, escribe que profesión tienes</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="profesion" id="profesion" autocomplete="given-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                        <div class="pant pant4 space-y-12 grid grid-cols-1">
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                
                                                <div class="col-span-2">
                                                    <label for="pais_residencia" class="block text-sm font-medium leading-6 text-gray-900">País de Residencia</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="pais_residencia" id="pais_residencia" autocomplete="pais_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="pais_residencia" name="pais_residencia" autocomplete="pais_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Rural">Colombia</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="departamento_residencia" class="block text-sm font-medium leading-6 text-gray-900">Departamento de Residencia</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="departamento_residencia" id="departamento_residencia" autocomplete="departamento_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="departamento_residencia" name="departamento_residencia" autocomplete="departamento_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option value="" selected="" disabled>Elige tu departamento</option>
                                                            <option value="Nariño">Nariño</option>
                                                            <option value="Cauca">Cauca</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="municipio_residencia" class="block text-sm font-medium leading-6 text-gray-900">Municipio Residencia</label>
                                                    <div class="mt-2">
                                                        <!-- <input type="text" name="municipio_residencia" id="municipio_residencia" autocomplete="municipio_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                                                        <select id="municipio_residencia" name="municipio_residencia" autocomplete="municipio_residencia" class="municipios_container block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option value="" selected="" disabled>Elige tu municipio</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                
                
                                                <div class="col-span-2">
                                                    <label for="zona_ubicacion" class="block text-sm font-medium leading-6 text-gray-900">Zona de ubicación</label>
                                                    <div class="mt-2">
                                                        <select id="zona_ubicacion" name="zona_ubicacion" autocomplete="zona_ubicacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Rural">Rural</option>
                                                            <option value="Urbana">Urbana</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="corregimiento_nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre corregimiento</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="corregimiento_nombre" id="corregimiento_nombre" autocomplete="corregimiento" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="vereda_nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre Vereda</label>
                                                    <div class="mt-2">
                                                        <input id="vereda_nombre" name="vereda_nombre" type="text" autocomplete="Vereda" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="zona_resto" class="block text-sm font-medium leading-6 text-gray-900">Nombre de la Zona Resto (caserío)</label>
                                                    <div class="mt-2">
                                                        <input id="zona_resto" name="zona_resto" type="text" autocomplete="caserio" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="barrio_nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre del Barrio</label>
                                                    <div class="mt-2">
                                                        <input id="barrio_nombre" name="barrio_nombre" type="text" autocomplete="barrio" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                                                    <div class="mt-2">
                                                        <input id="direccion" name="direccion" type="text" autocomplete="direccion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="estrato_socioeconomico" class="block text-sm font-medium leading-6 text-gray-900">Estrato socioeconómico</label>
                                                    <div class="mt-2">
                                                        <select id="estrato_socioeconomico" name="estrato_socioeconomico" autocomplete="estrato_socioeconomico" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </div>
                
                                                <div class="col-span-2">
                                                    <label for="tipo_vivienda" class="block text-sm font-medium leading-6 text-gray-900">Tipo de Vivienda</label>
                                                    <div class="mt-2">
                                                        <select id="tipo_vivienda" name="tipo_vivienda" autocomplete="tipo_vivienda" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Casa">Casa</option>
                                                            <option value="Habitación o Cuarto">Habitación o Cuarto</option>
                                                            <option value="Albergue (Vivienda temporal)">Albergue (Vivienda temporal)</option>
                                                            <option value="Inquilinato">Inquilinato</option>
                                                            <option value="Casa lote">Casa lote</option>
                                                            <option value="Apartamento">Apartamento</option>
                                                            <option value="Vivienda indígena">Vivienda indígena</option>
                                                            <option value="Palafito">Palafito</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="tenencia_vivienda" class="block text-sm font-medium leading-6 text-gray-900">Tenencia de la Vivienda</label>
                                                    <div class="mt-2">
                                                        <select id="tenencia_vivienda" name="tenencia_vivienda" autocomplete="tenencia_vivienda" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Propia">Propia</option>
                                                            <option value="Arriendo">Arriendo</option>
                                                            <option value="Familiar">Familiar</option>
                                                            <option value="Albergue">Albergue</option>
                                                            <option value="Lugar de trabajo">Lugar de trabajo</option>
                                                            <option value="Posada (vivienda otra persona sin pagar)">Posada (vivienda otra persona sin pagar)</option>
                                                            <option value="Asentamiento- Invasión">Asentamiento- Invasión</option>
                                                            <option value="Paga Diario">Paga Diario</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-5 col-span-2">
                                                </div>
                                                <div class="lg:col-span-4 mt-6 col-span-2">
                                                    <label for="Agua" class="block text-sm font-medium leading-6 text-gray-900">¿Tiene acceso a servicios básicos?</label>
                                                    <div class="pt-6 grid grid-cols-2" id="filter-section-mobile-0">
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="Agua" name="servicios_basicos[]" value="Agua" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="Agua" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Agua</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the first column) ... -->
                                                        </div>
                
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="alcantarillado" name="servicios_basicos[]" value="Alcantarillado" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="alcantarillado" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Alcantarillado</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="electricidad" name="servicios_basicos[]" value="Energía eléctrica" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="electricidad" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Energía eléctrica</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="internet" name="servicios_basicos[]" value="Internet" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="internet" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Internet</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="telefonia" name="servicios_basicos[]" value="Telefonía fija o móvil" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="telefonia" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Telefonía fija o móvil</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="plan_movil" name="servicios_basicos[]" value="Plan de datos o recargas" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="plan_movil" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Plan de datos o recargas</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="ninguna_ant" name="servicios_basicos[]" value="Ninguna de las Anteriores" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="ninguna_ant" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Ninguna de las Anteriores</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 mt-6 col-span-2">
                                                    <label for="Computador" class="block text-sm font-medium leading-6 text-gray-900">¿Cuenta con equipos tecnológicos?</label>
                                                    <div class="pt-6 grid grid-cols-2 " id="filter-section-mobile-0">
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="Computador" name="equipos_tecnologicos[]" value="Computador" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="Computador" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Computador</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the first column) ... -->
                                                        </div>
                
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="eq_movil" name="equipos_tecnologicos[]" value="Teléfono móvil (Android o iPhone)" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="eq_movil" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Teléfono móvil (Android o iPhone)</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <input id="tableta" name="equipos_tecnologicos[]" value="Tableta" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="tableta" class="ml-3 min-w-0 flex-1 text-gray-900 text-sm">Tableta</label>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                        <div class="space-y-6">
                                                            <div class="flex items-center">
                                                                <label for="otros_equipos" class="block text-sm font-medium leading-6 text-gray-900">Otro ¿Cuál?</label>
                                                                <div>
                                                                    <input id="otros_equipos" name="otros_equipos" type="text" autocomplete="otro_equipos" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                                </div>
                                                            </div>
                                                            <!-- ... (rest of the items in the second column) ... -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 mt-6 col-span-2">
                                                    <label for="disponibilidad_formacion" class="block text-sm font-medium leading-6 text-gray-900">¿Cuenta con la disponibilidad para el desarrollo de la formación de 10 horas semanales?</label>
                                                    <div class="mt-2">
                                                        <select id="disponibilidad_formacion" name="disponibilidad_formacion" autocomplete="disponibilidad_formacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" style="width: 25%;">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 mt-6 col-span-2">
                                                    <label for="horario_formacion" class="block text-sm font-medium leading-6 text-gray-900">Elige la opción del horario de formación semanal que más se adapta a tu disponibilidad</label>
                                                    <div class="mt-2">
                                                        <select id="horario_formacion" name="horario_formacion" autocomplete="horario_formacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Opción 1 (Lunes a Viernes de 10am a 12m)">Opción 1 (Lunes a Viernes de 10am a 12m)</option>
                                                            <option value="Opción 2 (Lunes a viernes de 2pm a 4pm)">Opción 2 (Lunes a viernes de 2pm a 4pm)</option>
                                                            <option value="Opción 3 (Martes a jueves de 6am a 8am y sábados de 8am a 12m)">Opción 3 (Martes a jueves de 6am a 8am y sábados de 8am a 12m)</option>
                                                            <option value="Opción 4 (Martes a jueves de 6pm a 8pm y sábados de 2pm a 6pm)">Opción 4 (Martes a jueves de 6pm a 8pm y sábados de 2pm a 6pm)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 col-span-2">
                                                    <label for="eje_final_formacion" class="block text-sm font-medium leading-6 text-gray-900">Eje Final de formación - Bootcamps</label>
                                                    <div class="mt-2">
                                                        <select id="eje_final_formacion" name="eje_final_formacion" autocomplete="eje_final_formacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Análisis de Datos">Análisis de Datos</option>
                                                            <option value="Inteligencia artificial">Inteligencia artificial</option>
                                                            <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                                                            <option value="BlockChain">BlockChain</option>
                                                            <option value="Programación">Programación</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 col-span-2">
                                                    <label for="nivel_formacion" class="block text-sm font-medium leading-6 text-gray-900">Nivel según el resultado posterior a la prueba de conocimiento</label>
                                                    <div class="mt-2">
                                                        <select id="nivel_formacion" name="nivel_formacion" autocomplete="nivel_formacion" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Explorador (Básico)">Explorador (Básico)</option>
                                                            <option value="Integrador (Intermedio)">Integrador (Intermedio)</option>
                                                            <option value="Innovador (Avanzado)">Innovador (Avanzado)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 col-span-2">
                                                    <label for="modalidad_bootcamps" class="block text-sm font-medium leading-6 text-gray-900">Modalidad en la que realizará su bootcamps</label>
                                                    <div class="mt-2">
                                                        <select id="modalidad_bootcamps" name="modalidad_bootcamps" autocomplete="modalidad_bootcamps" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Presencial / híbrido">Presencial / híbrido</option>
                                                            <option value="Virtual">Virtual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-6 col-span-2">
                                                    <p class="block text-sm font-medium text-gray-900">
                                                        <em>La modalidad híbrida consiste en que pueda tomar parte de sus horas en la sede de manera presencial y otras horas de modalidad virtual</em>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
                                        <div class="pant pant5 grid grid-cols-1">
                                            <p for="" class="block text-sm font-medium leading-6 text-black"><b>Usted cuenta con los siguientes requisitos:</b></p>
                                            <ul class="block text-sm font-medium leading-6 text-gray-900 grid grid-cols-2">
                                                <li class="col-span-2">
                                                    - Nacionalidad colombiana.
                                                </li>
                                                <li class="col-span-2">
                                                    - Mayores de 18 años.
                                                </li>
                                                <li class="col-span-2">
                                                    - Haber presentado la prueba de habilidades digitales y haber sido asignado en su nivel para realizar la formación.
                                                </li>
                                                <li class="col-span-2">
                                                    - Tener disponibilidad para el desarrollo de la formación de hasta 10 horas semanales.
                                                </li>
                                                <li class="col-span-2">
                                                    - Contar con equipo de cómputo o disponibilidad de este, dispositivo móvil o electrónico con acceso a internet para el desarrollo de la formación.
                                                </li>
                                                <li class="col-span-2">
                                                    - Tener una cuenta propia y personal de correo electrónico.
                                                </li>
                                                <li class="col-span-2">
                                                    - Haber leído y aceptado los requisitos de la convocatoria.
                                                </li>
                                                <li class="col-span-2">
                                                    - Aceptar la política de tratamiento de datos establecida por el MinTIC y por el Ejecutor.
                                                </li>
                                                <li class="col-span-2">
                                                    - El archivo debe ser PDF, y no mayor a 2MB
                                                </li>
                                                <li class="mt-6">
                                                    <label for="url_archivo" class="block text-sm font-medium leading-6 text-gray-900">Anexar Documento Identidad</label>
                                                    <label class="block">
                                                        <span class="sr-only">Anexar Documento Identidad:</span>
                                                        <input type="file" class="block w-full text-sm text-slate-500
                                                        file:mr-4 file:py-2 file:px-4
                                                        file:rounded-full file:border-0
                                                        file:text-sm file:font-semibold
                                                        file:bg-violet-50 file:text-violet-700
                                                        hover:file:bg-violet-100
                                                        " name="url_archivo" id="url_archivo" />
                                                    </label>
                                                </li>
                                                <li class="mt-6">
                                                    <label for="requisitos_aceptados" class=" block text-sm font-medium leading-6 text-gray-900">Acepto que cumplo con los requisitos</label>
                                                    <div class="mt-2">
                                                        <select id="requisitos_aceptados" name="requisitos_aceptados" autocomplete="requisitos_aceptados" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option selected disabled>Seleccione...</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                
                                                </li>
                                            </ul>
                                            <div class="grid justify-items-end w-full">
                                                <div class="w-1/2 mt-3">
                                                    <button id="sendForm" type="submit" class="pointer-events-none rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 w-full">Matricular</button>
                                                </div>
                                            </div>
                
                                        </div>
                
                                    </div>
                                </div>
                
                                <!-- Include optional progressbar HTML -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

    <script type="text/javascript">
        let form = $("#enviar_matricula");
        window.addEventListener("load", function() {
            initValidate();
            $('html, body').animate({scrollTop: 0}, 500);
            $('#smartwizard').smartWizard({
                theme: 'dots',
                lang: { // Language variables for button
                    next: 'Siguiente',
                    previous: 'Anterior'
                },
                autoAdjustHeight: false,
            });
        });
        $("#discapacidad").change(function() {
            /* alert( $('option:selected', this).text() ); */
            if ($('option:selected', this).text() == 'Si') {
                $('.prent_discapaciti').removeClass('d-none');
            } else if ($('option:selected', this).text() == 'No') {
                $('.prent_discapaciti').addClass('d-none');
            }
        });
        $("#identidad_genero_preg").change(function() {
            if ($('option:selected', this).text() == 'Si') {
                $('.identi_genero').removeClass('d-none');
            } else if ($('option:selected', this).text() == 'No') {
                $('.identi_genero').addClass('d-none');
            }
        });
        $("#requisitos_aceptados").change(function() {
            if ($('option:selected', this).text() == 'Si') {
                $('#sendForm').removeClass('pointer-events-none');
            } else if ($('option:selected', this).text() == 'No') {
                $('#sendForm').addClass('pointer-events-none');
            }
        });

        const municipiosPorDepartamento = {
            "Nariño": ["Aldana",
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
                "El Tablón de Gómez",
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
                "San Bernardo",
                "San Lorenzo",
                "San Pablo",
                "San Pedro de Cartago",
                "Sandoná",
                "Santa Bárbara",
                "Santacruz",
                "Sapuyes",
                "Taminango",
                "Tangua",
                "Tumaco",
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
                "López de Micay",
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
                "Santander de Quilichao",
                "Silvia",
                "Sotara",
                "Suárez",
                "Timbío",
                "Timbiquí",
                "Toribío",
                "Totoró",
                "Villa Rica"
            ]
            // Puedes agregar más departamentos y sus municipios aquí
        };

        // Función para actualizar los municipios al cambiar el departamento seleccionado
        $("#departamento_residencia").change(function() {
            const departamentoSeleccionado = $(this).val();
            const municipios = municipiosPorDepartamento[departamentoSeleccionado] || [];

            // Limpia y agrega los nuevos municipios al elemento HTML deseado (por ejemplo, un div con el id "municipios_container")
            $("#municipios_container").empty();
            municipios.forEach(municipio => {
                $(".municipios_container").append(`<option value="${municipio}">${municipio}</option>`);
            });
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
                        number: true
                    },
                    fecha_nacimiento: {
                        required: true,
                        minlength: 1
                    },
                    edad: {
                        required: true,
                        min: 18
                    },
                    sexo: {
                        required: true,
                        minlength: 1
                    },
                    identidad_genero_preg: {
                        required: true,
                        minlength: 1
                    },
                    identidad_genero: {
                        required: true,
                        minlength: 1
                    },
                    correo_electronico: {
                        required: true,
                        minlength: 5,
                        email: true
                    },
                    celular_llamadas: {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    whatsapp: {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    orientacion_sexual: {
                        required: true,
                        minlength: 1
                    },
                    nacionalidad: {
                        required: true,
                        minlength: 1
                    },
                    ciudad_nacimiento: {
                        required: true,
                        minlength: 1
                    },
                    familiar_primer_nombre: {
                        required: true,
                        minlength: 3
                    },
                    familiar_primer_apellido: {
                        required: true,
                        minlength: 3
                    },
                    familiar_tipo_documento: {
                        required: true,
                        minlength: 1
                    },
                    familiar_numero_documento: {
                        required: true,
                        minlength: 6,
                        number: true
                    },
                    familiar_correo_electronico: {
                        required: true,
                        minlength: 5,
                        email: true
                    },
                    familiar_celular_llamadas: {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    familiar_whatsapp: {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    grupo_etnico: {
                        required: true,
                        minlength: 1
                    },
                    discapacidad: {
                        required: true,
                        minlength: 1
                    },
                    discapacidad_certificada: {
                        required: true,
                        minlength: 1
                    },
                    "tipo_discapacidad[]": {
                        require_from_group: [1, ".tipo_discapacidad-group"]
                    },
                    "segun_discapacidad[]": {
                        require_from_group: [1, ".segun_discapacidad-group"]
                    },
                    grado_escolaridad: {
                        required: true,
                        minlength: 1
                    },
                    ocupacion: {
                        required: true,
                        minlength: 1
                    },
                    pais_residencia: {
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
                    direccion: {
                        required: true,
                        minlength: 5
                    },
                    estrato_socioeconomico: {
                        required: true,
                        minlength: 1
                    },
                    tipo_vivienda: {
                        required: true,
                        minlength: 1
                    },
                    tenencia_vivienda: {
                        required: true,
                        minlength: 1
                    },
                    disponibilidad_formacion: {
                        required: true,
                        minlength: 1
                    },
                    horario_formacion: {
                        required: true,
                        minlength: 1
                    },
                    eje_final_formacion: {
                        required: true,
                        minlength: 1
                    },
                    nivel_formacion: {
                        required: true,
                        minlength: 1
                    },
                    modalidad_bootcamps: {
                        required: true,
                        minlength: 1
                    },
                    url_archivo: {
                        required: true,
                        extension: "pdf",
                        maxsize: 2097152
                    },
                    requisitos_aceptados: {
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
        $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
            if (form.valid()) {
                $('html, body').animate({scrollTop: 0}, 500);
                return true;
            } else {
                return false;
            }
        });
        $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection) {
            $(".sw-btn-prev").removeClass("d-none");
            $(".sw-btn-next").removeClass("d-none");
            switch(stepIndex) {
                case 0: 
                    $(".sw-btn-prev").addClass("d-none");
                break;
                case 4: 
                    $(".sw-btn-next").addClass("d-none");
                break;
                default:
                // code block
            }
        });
        $('input[name=fecha_nacimiento]').change(function() {
            $('input[name=edad]').val(calcularEdad($(this).val()));
        });

        function calcularEdad(fecha) {
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            return edad;
        }

        $("#enviar_matricula").on("submit", function(event) {
            event.preventDefault();
            // var file_size = $('#url_archivo')[0].files[0].size;
            // if(file_size>2097152) {
            //     // alert("El archivo debe ser PDF, y no mayor a 2MB");
            //     // initValidate();
            //     form.validate().showErrors({
            //         "url_archivo": "Este es tu mensaje de error personalizado",
            //         // Agrega más campos y mensajes según sea necesario
            //     });
        	// 	return false;
        	// } else {
            // }
            if (form.valid()) {
                $("#sendForm").prop('disabled', true);
                $("#sendForm").html('Enviando...');
                this.submit();
            }
        });
    </script>
</body>

</html>