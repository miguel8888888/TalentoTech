<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Listado Académico') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <form id="search-form" class="mb-6 w-full" action="{{ route('infoacademica.search') }}" method="GET">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="relative w-full md:w-1/3">
                    <select id="cohorte" onchange="submitForm()" value="{{ old('cohorte') }}" name="cohorte"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione un cohorte...</option>
                        <option value="" {{ old('cohorte') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="cohorte1" @if (old('cohorte') == 'cohorte1') selected @endif>cohorte1
                        </option>
                        <option value="cohorte2" @if (old('cohorte') == 'cohorte2') selected @endif>cohorte2
                        </option>
                    </select>
                </div>
                
                <div class="relative w-full md:w-1/3">
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
                    <th scope="col" class="px-6 py-3">
                        Cohorte
                    </th>
                    <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                    <!-- <th scope="col" class="px-6 py-3">
                        Estado
                    </th> -->
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
                        <td class="px-6 py-4">
                            {{ $data->cohorte }}
                        </td>
                        <td class="px-6 py-4 text-right">
                                    <a href="{{ route('infoacademica.edit', $data->id, $data->numero_documento) }}"
                                        class="participante_{{ $data->id }} font-medium text-blue-600 dark:text-blue-500 hover:underline">Estadísticas</a>
                                </td>
                        <!-- <td class="px-6 py-4">
                         {{ $data->estado_registro }}
                    </td> -->
                        
                    </tr>
                @endforeach

            </tbody>


        </table>

        {!! $participantes->withQueryString()->links() !!}
    </div>





   

</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>


<script>
   

    function submitForm() {
        let estadoSelect = document.getElementById("cohorte");
        if (estadoSelect.value === '') {
            estadoSelect.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        document.getElementById('search-form').submit();
    }

  


</script>
