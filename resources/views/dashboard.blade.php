<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <!-- ./Statistics Cards -->

        <div class="container items-center px-4 m-auto mt-5">
            <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
            <x-card :count="$countCauca + $countNariño" description="Total Inscritos" />
        </div>


        <div class="container items-center px-4  m-auto ">

            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <h2 class="text-3xl font-semibold leading-tight">
                    {{ __('Cauca') }}
                </h2>
            </div>
            <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
                <x-card :count="$countCauca" description="Total Inscritos" />
                <x-card :count="$countCaucaPreMatriculados + $countCaucaPosMatriculados" description="Total Pre-matriculados" />
                <x-card :count="$countCaucaMatriculados" description="Total Matriculados" />
                @foreach ($cohortes as $cohorte)
                    <x-card :count="$countCaucaCohorte[$cohorte->id]" description="Total Cohorte {{ $cohorte->id }}" />
                @endforeach

            </div>

        </div>

        <div class="container items-center px-4  m-auto ">

            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <h2 class="text-3xl font-semibold leading-tight">
                    {{ __('Nariño') }}
                </h2>
            </div>
            <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
                <x-card :count="$countNariño" description="Total Inscritos" />
                <x-card :count="$countNariñoPreMatriculados + $countNariñoPosMatriculados" description="Total Pre-matriculados" />
                <x-card :count="$countNariñoMatriculados" description="Total Matriculados" />
                @foreach ($cohortes as $cohorte)
                    <x-card :count="$countNariñoCohorte[$cohorte->id]" description="Total Cohorte {{ $cohorte->id }}" />
                @endforeach


            </div>
        </div>


</div>
    </div>

    <!-- <div class="container mx-auto mt-8">
        <div class=" mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
                Gráfico de Torta
                <div class="bg-white shadow-md rounded-lg overflow-hidden dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold mb-4 dark:text-gray-50">Gráfico de Torta</h5>
                        <canvas id="miGraficoTorta" class="w-full relative h-64"></canvas>
                    </div>
                </div>

                Gráfico de Barra
                <div class="bg-white shadow-md rounded-lg overflow-hidden dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold mb-4 dark:text-gray-50">Gráfico de Barra</h5>
                        <canvas id="miGraficoBarra" class="w-full relative h-64"></canvas>
                    </div>
                </div>

                Gráfico de Radar
                <div class="bg-white shadow-md rounded-lg overflow-hidden dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold mb-4 dark:text-gray-50">Gráfico de Radar</h5>
                        <canvas id="miGraficoRadar" class="w-full relative h-64"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> -->





</x-app-layout>

<!-- Incluye Chart.js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<!-- <script>
    // var ctx = document.getElementById('miGrafico').getContext('2d');
    // var myChart = new Chart(ctx, {
    //     type: 'pie',
    //     data: {
    //         labels: {!! json_encode($labels) !!},
    //         datasets: [{
    //             data: {!! json_encode($data) !!},
    //             backgroundColor: [
    //                 'rgba(255, 99, 132, 0.7)',
    //                 'rgba(54, 162, 235, 0.7)',
    //                 'rgba(255, 206, 86, 0.7)',
    //             ],
    //         }],
    //     },
    // });

    // Configuración del Gráfico de Torta
    var ctxTorta = document.getElementById('miGraficoTorta').getContext('2d');
    var myChartTorta = new Chart(ctxTorta, {
        type: 'pie',
        data: {
            labels: ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                ],
            }],
        },
    });

    // Configuración del Gráfico de Barra
    var ctxBarra = document.getElementById('miGraficoBarra').getContext('2d');
    var myChartBarra = new Chart(ctxBarra, {
        type: 'bar',
        data: {
            labels: ['Etiqueta A', 'Etiqueta B', 'Etiqueta C'],
            datasets: [{
                label: 'Datos de Barra',
                data: [40, 20, 60],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                ],
            }],
        },
    });

    // Configuración del Gráfico de Radar
    var ctxRadar = document.getElementById('miGraficoRadar').getContext('2d');
    var myChartRadar = new Chart(ctxRadar, {
        type: 'radar',
        data: {
            labels: ['Eje 1', 'Eje 2', 'Eje 3', 'Eje 4', 'Eje 5'],
            datasets: [{
                label: 'Datos de Radar',
                data: [30, 40, 20, 50, 10],
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
            }],
        },
    });
</script> -->


