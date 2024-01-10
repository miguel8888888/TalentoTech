<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Inscripciones 2024</title>
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
    <div class="x-mark">
        <div class="container mt-10">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </div>
    <div class="intro-container">
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
        <div class="w-full justify-center flex">
            <img src="{{ asset('assets/img/TalentoTech.png') }}" class="w-1/2">
        </div>
        <h1 class="text-5xl font-bold">
            ¡Bienvenido/a a Talento Tech, tu puerta de entrada al futuro digital!
        </h1>
        <div class="button shift-camera-button z-100" id="inscribirme">
            <div class="border">
                <div class="left-plane"></div>
                <div class="right-plane"></div>
            </div>
            <div class="text text-xl">¡Quiero Inscribirme!</div>
        </div>
    </div>
    <div class="sky-container">
        <div class="text-right sky-container__left">
            <p class="portfolio text-center text-5xl mt-10">
                MATRÍCULA TALENTO TECH CAUCA Y NARIÑO
            </p>
        </div>
        <div class="text-left sky-container__right">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-12 py-12">
                        <form class="needs-validation" id="enviar_matricula" action="/matricula" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-1">
                                            <div class="num">1</div>
                                            Step Title
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-2">
                                            <span class="num">2</span>
                                            Step Title
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-3">
                                            <span class="num">3</span>
                                            Step Title
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#step-4">
                                            <span class="num">4</span>
                                            Step Title
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <div class="pant pant1 space-y-12 grid grid-cols-1">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-sm leading-6 text-gray-600">CARACTERIZACIÓN DEL PARTICIPANTE TALENTO
                                                    TECH</p>

                                            </div>
                                            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                                                <div class="col-span-2">
                                                    <label for="primer-nombre" class="block text-sm font-medium leading-6 text-gray-900">Primer Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer-nombre" id="primer-nombre" autocomplete="given-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="segundo-nombre" class="block text-sm font-medium leading-6 text-gray-900">Segundo Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo-nombre" id="segundo-nombre" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="primer-apellido" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer-apellido" id="primer-apellido" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="segundo-apellido" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="segundo-apellido" id="segundo-apellido" autocomplete="given-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>



                                                <div class="col-span-2">
                                                    <label for="tipo-documento" class="block text-sm font-medium leading-6 text-gray-900">Tipo Documento </label>
                                                    <div class="mt-2">
                                                        <select id="tipo-documento" name="tipo-documento" autocomplete="tipo-documento-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option>CC</option>
                                                            <option>CE</option>
                                                            <option>TI</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="numero-documento" class="block text-sm font-medium leading-6 text-gray-900">Número documento</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="numero-documento" id="numero-documento" autocomplete="numero-documento" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="nacimiento" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="nacimiento" id="nacimiento" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="edad" class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="edad" id="edad" autocomplete="family-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="sexo" class="block text-sm font-medium leading-6 text-gray-900">Sexo </label>
                                                    <div class="mt-2">
                                                        <select id="sexo" name="sexo" autocomplete="sexo-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option>Hombre</option>
                                                            <option>Mujer</option>
                                                            <option>Intersex</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="identidad-genero" class="block text-sm font-medium leading-6 text-gray-900">¿Desea responder preguntas sobre su identidad de género? </label>
                                                    <div class="mt-2">
                                                        <select id="identidad-genero" name="identidad-genero" autocomplete="identidad-genero-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="genero" class="block text-sm font-medium leading-6 text-gray-900">Identidad de género </label>
                                                    <div class="mt-2">
                                                        <select id="genero" name="genero" autocomplete="genero-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option>Masculino</option>
                                                            <option>Femenino</option>
                                                            <option>Trans</option>
                                                            <option>Otro</option>
                                                            <option>No deseo responder</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="orientacion" class="block text-sm font-medium leading-6 text-gray-900">¿Cuál es su orientación sexual? </label>
                                                    <div class="mt-2">
                                                        <select id="orientacion" name="orientacion" autocomplete="orientacion-name" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            <option>Heterosexualidad</option>
                                                            <option>Homosexualidad</option>
                                                            <option>Bisexualidad</option>
                                                            <option>Otro</option>
                                                            <option>No deseo responder</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                                                    <div class="mt-2">
                                                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="llamadaTel" class="block text-sm font-medium leading-6 text-gray-900">Número de Celular llamadas</label>
                                                    <div class="mt-2">
                                                        <input id="llamadaTel" name="llamadaTel" type="number" autocomplete="llamadaTel" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="col-span-2">
                                                    <label for="whatsApp" class="block text-sm font-medium leading-6 text-gray-900">Numero WhatsApp</label>
                                                    <div class="mt-2">
                                                        <input id="whatsApp" name="whatsApp" type="number" autocomplete="whatsApp" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <div class="pant pant2 space-y-12 grid grid-cols-1 d-none">
                                            <div class="border-b border-gray-900/10">
                                                <p class="mt-1 text-sm leading-6 text-gray-600">CARACTERIZACIÓN DEL PARTICIPANTE TALENTO
                                                    TECH</p>

                                            </div>
                                            <div class="mt-10 grid grid-cols-4 gap-4 lg:grid-cols-8 overscroll-contain h-1/2">
                                                <div class="col-span-2">
                                                    <label for="primer-nombre" class="block text-sm font-medium leading-6 text-gray-900">Primer Nombre</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="primer-nombre" id="primer-nombre" autocomplete="given-name" class="block w-full rounded-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                        Step content
                                    </div>
                                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                        Step content
                                    </div>
                                    <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
                                        Step content
                                    </div>
                                </div>

                                <!-- Include optional progressbar HTML -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>




                            {{-- <div class="mt-8 flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                    
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                    <p class="text-sm text-gray-700">
                                        Página
                                        <span class="font-medium" id="currentPage">1</span>
                                        de
                                        <span class="font-medium">5</span>
                                    </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" id="prevPage" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                            <span class="sr-only">Anterior</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                            </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                            <a href="#" aria-current="page" class="active relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 page-number" data-page="1">1</a>
                                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 page-number" data-page="2">2</a>
                                            <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex page-number" data-page="3">3</a>
                                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 page-number" data-page="4">4</a>
                                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 page-number" data-page="5">5</a>
                                            <a href="#" id="nextPage" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                            <span class="sr-only">Siguiente</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                            </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div> --}}

                        </form>
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


    <script type="text/javascript">
        window.addEventListener("load", function() {
            $('#smartwizard').smartWizard({
                theme: 'dots',
                lang: { // Language variables for button
                    next: 'Siguiente',
                    previous: 'Anterior'
                },
            });
        });
    </script>
</body>

</html>

<!-- <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
</div>  -->