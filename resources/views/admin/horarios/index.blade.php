<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Listado de Horarios') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <form id="search-form" class="mb-6 w-full" action="{{ route('horarios.search') }}" method="GET">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="relative w-full md:w-1/3">
                    <select id="estado_registro" onchange="submitForm()" value="{{ old('materia') }}" name="materia"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione eje de formación...</option>
                        <option value="" {{ old('materia') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Análisis de Datos" @if (old('materia') == 'Análisis de Datos') selected @endif>Análisis de
                            Datos
                        </option>
                        <option value="BlockChain" @if (old('materia') == 'BlockChain') selected @endif>BlockChain
                        </option>
                        <option value="Inteligencia artificial" @if (old('materia') == 'Inteligencia artificial') selected @endif>
                            Inteligencia artificial
                        </option>
                        <option value="Arquitectura en la nube" @if (old('materia') == 'Arquitectura en la nube') selected @endif>
                            Arquitectura en la nube
                        </option>
                        <option value="Programación" @if (old('materia') == 'Programación') selected @endif>Programación
                        </option>
                    </select>
                </div>
                <div class="relative w-full md:w-1/3">
                    <select id="default-search" onchange="submitFormBoot()" value="{{ old('buscar') }}" name="buscar"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione modalidad...</option>
                        <option value="" {{ old('materia') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Presencial / híbrido" @if (old('buscar') == 'Presencial / híbrido') selected @endif>
                            Presencial / híbrido
                        </option>
                        <option value="Virtual" @if (old('buscar') == 'Virtual') selected @endif>Virtual
                        </option>
                    </select>
                </div>
                <div class="relative w-full md:w-1/3">
                    <select id="nivel_formacion-search" onchange="submitFormacion()"
                        value="{{ old('nivel_formacion') }}" name="nivel_formacion"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione nivel de formación...</option>
                        <option value="" {{ old('materia') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Explorador (Básico)" @if (old('nivel_formacion') == 'Explorador (Básico)') selected @endif>
                            Explorador (Básico)
                        </option>
                        <option value="Integrador (Intermedio)" @if (old('nivel_formacion') == 'Integrador (Intermedio)') selected @endif>
                            Integrador (Intermedio)
                        </option>
                        </option>
                        <option value="Innovador (Avanzado)" @if (old('nivel_formacion') == 'Innovador (Avanzado)') selected @endif>Innovador
                            (Avanzado)
                        </option>
                    </select>
                </div>
                <div class="flex flex-col items-end justify-center relative w-full md:w-1/3">
                    <a href="{{ route('horarios.create') }}"
                        class="relative inline-flex items-center justify-center p-0.5 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Crear nuevo horario
                        </span>
                    </a>
                </div>

            </div>

        </form>

        <table class="w-full mb-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Horarios
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Eje final formación
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Horario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Modalidad bootcamps
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nivel formación
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($horario as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->materia }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->horario }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->modalidad_bootcamps }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->nivel_formacion }}
                        </td>
                        <td class="flex items-center px-6 py-4">
                            <a href="{{ route('profilehorario.edit', $data->id) }}"
                                :isActive="request() - > routeIs('profilehorario.edit', $data - > id)"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>


        </table>

        {!! $horario->withQueryString()->links() !!}
    </div>





    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 id="numero_documento_modal" class="text-xl font-semibold text-gray-900 dark:text-white">

                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <embed id="pdf-embed" class="w-full" src="" type="application/pdf" width="100%"
                        height="600px" />
                </div>
                <!-- Modal footer -->
                <div
                    class="flex justify-between items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cerrar</button>
                    <form id="aprobardocumento" method="POST" action="/aprobardocumento" class="m-0">
                        @csrf
                        <input type="hidden" id="cedulaValidar" name="cedulaValidar">
                        <button type="submit"
                            class="text-white bg-yellow-700 hover:yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Cambiar
                            estado del documento</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>


<script>
    window.addEventListener("load", function() {

    });

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('default-modal');
        const numeroDocumentoModal = modal.querySelector('#numero_documento_modal');

        // Escucha el evento 'click' en todos los botones 'ver'
        document.querySelectorAll('[data-modal-toggle="default-modal"]').forEach(item => {
            item.addEventListener('click', event => {
                const numeroDocumento = event.target.getAttribute('data-numero-documento');
                // Actualiza el contenido del modal con el número de documento correspondiente
                numeroDocumentoModal.textContent = numeroDocumento;

                // Actualiza también la fuente del PDF
                document.getElementById("cedulaValidar").value = numeroDocumento;
                const pdfEmbed = modal.querySelector('#pdf-embed');
                const pdfUrl = 'storage/uploads/documentos/' + numeroDocumento + '.pdf';
                // {{ asset('storage/uploads/documentos/${numeroDocumento}.pdf') }}
                pdfEmbed.setAttribute('src', pdfUrl);
            });
        });
    });


    function submitForm() {
        let estadoSelect = document.getElementById("estado_registro");
        if (estadoSelect.value === '') {
            estadoSelect.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        document.getElementById('search-form').submit();
    }

    function submitFormacion() {
        let estadoSelect = document.getElementById("nivel_formacion-search");
        if (estadoSelect.value === '') {
            estadoSelect.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        document.getElementById('search-form').submit();
    }

    function submitFormBoot() {
        let estadoSelect = document.getElementById("default-search");
        if (estadoSelect.value === '') {
            estadoSelect.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        document.getElementById('search-form').submit();
    }

    // Obtener todos los checkbox
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Iterar sobre cada checkbox
    checkboxes.forEach(checkbox => {
        // Agregar un evento de cambio a cada checkbox
        checkbox.addEventListener('click', event => {
            const numeroDocumento = event.target.getAttribute('data-numero-documento');
            document.getElementById("cedulaValidar").value = numeroDocumento;
            // console.log(numeroDocumento);

            // $.ajax({
            //     url: '/aprobardocumento', // URL a la que se enviará la solicitud
            //     method: 'POST', // Método de la solicitud (POST, GET, etc.)
            //     data: {numeroDocumento: numeroDocumento}, // Datos que deseas enviar
            //     success: function(response) {
            //         // Manejar la respuesta del servidor
            //     },
            //     error: function(xhr, status, error) {
            //         // Manejar errores
            //     }
            // });
            document.getElementById('aprobardocumento').submit();
        });

        // checkbox.addEventListener('change', function() {
        //     console.log(numeroDocumento);
        //     $.ajax({
        //         url: '/aprobardocumento',
        //         method: 'POST',
        //         success: function(response) {
        //             // Manejar la respuesta del servidor
        //             console.log('funciona');
        //         },
        //         error: function(xhr, status, error) {
        //             // Manejar errores
        //             console.log(error);
        //         }
        //     });


        // });
    });
</script>
