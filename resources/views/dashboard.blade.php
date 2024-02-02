<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
       
        <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">{{ $countMatricula }}</p>
              <p>Matriculados</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">{{ $countInscripcion }}</p>
              <p>Inscritos</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">$11,257</p>
              <p>Sales</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">$75,257</p>
              <p>Balances</p>
            </div>
          </div>
        </div> -->
        <!-- ./Statistics Cards -->

        <div class="container items-center px-4 py-8 m-auto mt-5">
            <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">

            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col px-6 py-10 overflow-hidden bg-white dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500 rounded-xl shadow-lg duration-300 dark:shadow-2xl group">
                        <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-50" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        
                        </div>
                        <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 dark:text-gray-50">{{ $cantidadParticipantes }}
                        </h1>
                        <div class="flex flex-row justify-between dark:text-gray-200">
                        <p>Total Inscritos</p>
                        
                        </div>
                    </div>
                </div>
            
                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col px-6 py-10 overflow-hidden bg-white dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500 rounded-xl shadow-lg duration-300 dark:shadow-2xl group">
                        <div class="flex flex-row justify-between items-center">
                            <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-50" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 dark:text-gray-50">{{$countMatricula}}</h1>
                        <div class="flex flex-row justify-between dark:text-gray-200">
                        <p>Total Matriculados</p>
                        
                        </div>
                    </div>
                </div>
               
                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col px-6 py-10 overflow-hidden bg-white dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500 rounded-xl shadow-lg duration-300 dark:shadow-2xl group">
                        <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-50" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        
                        </div>
                        <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 dark:text-gray-50">{{ $countPreMatricula + $countPosMatricula }}
                        </h1>
                        <div class="flex flex-row justify-between dark:text-gray-200">
                        <p>En estado de Pre-matricula</p>
                        
                        </div>
                    </div>
                </div>

                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col px-6 py-10 overflow-hidden bg-white dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500 rounded-xl shadow-lg duration-300 dark:shadow-2xl group">
                        <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-50" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        
                        </div>
                        <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 dark:text-gray-50">{{ $countInscripcion }}
                        </h1>
                        <div class="flex flex-row justify-between dark:text-gray-200">
                        <p>Pendientes por prueba</p>
                        
                        </div>
                    </div>
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


