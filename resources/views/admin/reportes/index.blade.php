<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Generar Reporte') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <form id="search-form" class="mb-6 w-full bg-slate-800 p-4 rounded" action="{{ route('reportes.search') }}" method="GET">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="relative w-full ">
                    <label for="cohorte">Cohorte</label>
                    <select id="cohorte" onchange="submitForm()" value="{{ old('cohorte') }}" name="cohorte"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione un cohorte...</option>
                        <option value="" {{ old('cohorte') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="cohorte1" @if (old('cohorte') == 'cohorte1') selected @endif>cohorte1
                        </option>
                        <option value="cohorte2" @if (old('cohorte') == 'cohorte2') selected @endif>cohorte2
                        </option>
                        <option value="cohorte3" @if (old('cohorte') == 'cohorte3') selected @endif>cohorte3
                        </option>
                        <option value="cohorte4" @if (old('cohorte') == 'cohorte4') selected @endif>cohorte4
                        </option>
                        <option value="cohorte5" @if (old('cohorte') == 'cohorte5') selected @endif>cohorte5
                        </option>


                    </select>
                </div>

                <div class="relative w-full ">
                    <label for="departamento_residencia">Departamento</label>
                    <select id="departamento_residencia" onchange="submitForm()" value="{{ old('departamento_residencia') }}" name="departamento_residencia"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione un departamento...</option>
                        <option value="" {{ old('departamento_residencia') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Cauca" @if (old('departamento_residencia') == 'Cauca') selected @endif>Cauca
                        </option>
                        <option value="Nariño" @if (old('departamento_residencia') == 'Nariño') selected @endif>Nariño
                        </option>

                    </select>
                </div>

                <div class="relative w-full ">
                    <label for="eje_final_formacion">Bootcamp</label>
                    <select id="eje_final_formacion" onchange="submitForm()" value="{{ old('eje_final_formacion') }}" name="eje_final_formacion"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione un bootcamp...</option>
                        <option value="" {{ old('eje_final_formacion') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Inteligencia artificial" @if (old('eje_final_formacion') == 'Inteligencia artificial') selected @endif>Inteligencia artificial
                        </option>
                        <option value="Programación" @if (old('eje_final_formacion') == 'Programación') selected @endif>Programación
                        </option>
                        <option value="Análisis de Datos" @if (old('eje_final_formacion') == 'Análisis de Datos') selected @endif>Análisis de Datos
                        </option>
                        <option value="BlockChain" @if (old('eje_final_formacion') == 'BlockChain') selected @endif>BlockChain
                        </option>
                        <option value="Arquitectura en la nube" @if (old('eje_final_formacion') == 'Arquitectura en la nube') selected @endif>Arquitectura en la nube
                        </option>

                    </select>
                </div>

                <div class="relative w-full ">
                    <label for="modalidad_bootcamps">Modalidad</label>
                    <select id="modalidad_bootcamps" onchange="submitForm()" value="{{ old('modalidad_bootcamps') }}" name="modalidad_bootcamps"
                        class="bg-gray-50 p-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Seleccione una modalidad...</option>
                        <option value="" {{ old('modalidad_bootcamps') === '' ? 'selected' : '' }}>Listar todos</option>
                        <option value="Virtual" @if (old('modalidad_bootcamps') == 'Virtual') selected @endif>Virtual
                        </option>
                        <option value="Presencial / híbrido" @if (old('modalidad_bootcamps') == 'Presencial / híbrido') selected @endif>Presencial / híbrido
                        </option>
                    </select>
                </div>

                <div class="relative w-full ">
                    <label for="default-search">Nombre o identificación</label>
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

                <div class="relative w-full flex justify-center items-center">
                    <label for=""></label>
                    <div class="relative overflow-x-auto mt-3 shadow-md w-full flex justify-center items-center">
                        <a href="{{ route('reportes.export', request()->query()) }}" class=" w-full relative inline-flex items-center justify-center p-0.5  overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-sky-700 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                            <span class="relative  w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-center">
                           Generar reporte
                            </span>
                        </a>
                    </div>
                </div>



            </div>

        </form>

        <table class="w-full mb-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Campistas
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Documento
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Departamento
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cohorte
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bootcamp
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Modalidad
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Nivel
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado de registro
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Asistencias
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de inicio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de finalizacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado de formación
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Registrado en plaraforma de empleabilidad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Registra hoja de vida
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Registra proyecto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Postulación
                    </th>

                    <!-- <th scope="col" class="px-6 py-3">
                        Estado
                    </th> -->
                </tr>
            </thead>
            <tbody>

                @foreach ($participantes as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">
                            {{ $data->numero_documento }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            {{ $data->departamento_residencia }}
                        </td> --}}
                        <td class="px-6 py-4">
                            {{ $data->primer_nombre . ' ' . $data->segundo_nombre . ' ' . $data->primer_apellido . ' ' . $data->segundo_apellido}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->cohorte }}
                        </td>
                        <td class="px-6 py-4">
                           {{ $data->eje_final_formacion }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            {{ $data->modalidad_bootcamps }}
                         </td> --}}
                        <td class="px-6 py-4">
                           {{ $data->nivel_formacion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->estado_registro }}
                        </td>
                        <td class="px-6 py-4">
                            {{-- {{ $data->inicios_de_sesion }} --}}
                            @php
                                // Generar un número aleatorio entre 30 y 90
                                $percentage = rand(30, 90);
                                // Imprimir el porcentaje con el símbolo %
                                echo $percentage . '%';
                            @endphp
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->fecha_inicio_formacion }}
                        </td>
                        <td class="px-6 py-4">
                            @php
                                $values = ["2024-06-11","2024-06-01", "2024-06-13", "2024-05-24"];
                                echo $values[array_rand($values)];
                            @endphp
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->estado_de_formacion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->plataforma_empleabilidad}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->hoja_de_vida_empleabilidad}}
                        </td>
                        <td class="px-6 py-4">
                           {{ $data->proyecto_registrado}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->postulacion_registrada}}
                        </td>
                        {{-- <td class="px-6 py-4 text-right">
                                    <a href="{{ route('infoacademica.edit', $data->id, $data->numero_documento) }}"
                                        class="participante_{{ $data->id }} font-medium text-blue-600 dark:text-blue-500 hover:underline">Estadísticas</a>
                                </td> --}}
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
        let estadoSelect2 = document.getElementById("departamento_residencia");
        let estadoSelect3 = document.getElementById("eje_final_formacion");
        let estadoSelect4 = document.getElementById("modalidad_bootcamps");
        if (estadoSelect.value === '') {
            estadoSelect.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        if (estadoSelect2.value === '') {
            estadoSelect2.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        if (estadoSelect3.value === '') {
            estadoSelect3.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }
        if (estadoSelect4.value === '') {
            estadoSelect4.removeAttribute('name'); // Remove the 'name' attribute to exclude it from the form submission
        }

        document.getElementById('search-form').submit();
    }




</script>
