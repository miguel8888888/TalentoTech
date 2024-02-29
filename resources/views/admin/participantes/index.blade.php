<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Listado de Participantes') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <form id="search-form" class="mb-6 w-full" action="{{ route('participantes.search') }}" method="GET">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="relative w-full md:w-1/2">
                    <select id="estado_registro" onchange="submitForm()" value="{{ old('estado') }}" name="estado"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione...</option>
                        <option value="" {{ old('estado') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Matricula" @if (old('estado') == 'Matricula') selected @endif>Matriculados
                        </option>
                        <option value="Pre-matricula" @if (old('estado') == 'Pre-matricula') selected @endif>Pre-matriculados
                        </option>
                    </select>
                </div>
                <div class="relative w-full md:w-1/2">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" value="{{ old('buscar') }}" name="buscar"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ingresa nombre, numero de documento">
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                    </div>
                </div>


            </div>

        </form>

        <table class="w-full mb-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Participantes
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tipo Documento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Documento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellidos
                    </th>
                    <!-- <th scope="col" class="px-6 py-3">
                        Estado
                    </th> -->


                    @if ($participantes->contains('estado_registro', 'Matricula'))
                        @can('participante-listar')
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        @endcan
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Ver</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Documento aprobado</span>
                        </th>
                    @elseif ($participantes->contains('estado_registro', 'Pre-matricula'))
                        @can('participante-listar')
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        @endcan
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    @else
                        @can('participante-listar')
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        @endcan
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    @endif

                </tr>
            </thead>
            <tbody>

                @foreach ($participantes as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->tipo_documento }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->numero_documento }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->primer_nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->primer_apellido }}
                        </td>
                        <!-- <td class="px-6 py-4">
                         {{ $data->estado_registro }}
                    </td> -->
                        @if ($data->estado_registro === 'Matricula' || $data->estado_registro === 'Pos-matriculado'|| $data->estado_registro === 'nueva-prueba')
                            @can('participante-listar')
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('participantes.edit', $data->id) }}"
                                        class="participante_{{ $data->id }} font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            @endcan
                            <td class="px-6 py-4 text-right">
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    data-numero-documento="{{ $data->numero_documento }}"
                                    class="participante_{{ $data->numero_documento }} font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    type="button">
                                    Ver Documento
                                </button>
                            </td>
                            @if ($data->aprobacion_documento === 'Si')
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center">
                                        <input checked id="checkbox{{ $data->id }}" type="checkbox"
                                            data-numero-documento="{{ $data->numero_documento }}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                </td>
                            @else
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center mb-4">
                                        <input id="checkbox{{ $data->id }}" type="checkbox"
                                            data-numero-documento="{{ $data->numero_documento }}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                </td>
                            @endif
                        @elseif($data->estado_registro === 'Pre-matricula')
                            @can('participante-listar')
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('participantes.edit', $data->id) }}"
                                        class="participante_{{ $data->id }} font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            @endcan
                            <td class="px-6 py-4 text-right">

                            </td>
                            <td class="px-6 py-4 text-right">

                            </td>
                        @else
                            @can('participante-listar')
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('participantes.edit', $data->id) }}"
                                        class="participante_{{ $data->id }} font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            @endcan
                            <td class="px-6 py-4 text-right">

                            </td>
                            <td class="px-6 py-4 text-right">

                            </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>


        </table>

        {!! $participantes->withQueryString()->links() !!}
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                        <input type="hidden" id="checked" name="checked">
                        <button onclick="submitEstado('Si')"
                            class="text-white bg-green-700 hover:green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Si
                            aprueba
                        </button>
                        <button onclick="submitEstado('No')"
                            class="text-white bg-red-700 hover:red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">No
                            aprueba
                        </button>
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

    function submitEstado(val) {
        document.getElementById("checked").value = val;
        document.getElementById('aprobardocumento').submit();
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

            // Verificar si está marcado
            if (checkbox.checked) {
                document.getElementById("checked").value = "Si";
            } else {
                document.getElementById("checked").value = "No";
            }
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
