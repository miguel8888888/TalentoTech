<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Estadisticas') }}
            </h2>
        </div>
    </x-slot>

    <div class="container mx-auto mt-8">
            <div class=" mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
                  
                
                    
                    <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por curso - cohorte</h5>
                            <canvas id="miGraficoBarra" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por departamento y curso</h5>
                            <canvas id="miGraficoBarra2" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por cohorte y departamento</h5>
                            <canvas id="miGraficoBarra3" class="w-full relative h-64"></canvas>
                        </div>
                    </div>
        
                  
                </div>
            </div>
        </div>


</x-app-layout>

<!-- Incluye Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
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
    // var ctxTorta = document.getElementById('miGraficoTorta').getContext('2d');
    // var myChartTorta = new Chart(ctxTorta, {
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

    // Configuración del Gráfico de Barra
    var ctxBarra = document.getElementById('miGraficoBarra').getContext('2d');
    var myChartBarra = new Chart(ctxBarra, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Cohorte 1',
                data: {!! json_encode($data) !!},
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    
                ],
            },
            {
                label: 'Cohorte 2',
                data: {!! json_encode($data) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    
                ],
            }
        ],
        },
    });

  // Configuración del Gráfico de Barra
  var ctxBarra = document.getElementById('miGraficoBarra2').getContext('2d');
    var myChartBarra = new Chart(ctxBarra, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Cauca',
                data: {!! json_encode($dataCaucaCohorte1) !!},
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    
                ],
            },
            {
                label: 'Nariño',
                data: {!! json_encode($dataNarinoCohorte1) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    
                ],
            }
        ],
        },
    });

      // Configuración del Gráfico de Barra
  var ctxBarra = document.getElementById('miGraficoBarra3').getContext('2d');
    var myChartBarra = new Chart(ctxBarra, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [
                {
                    label: 'Cauca cohorte 1',
                    data: {!! json_encode($dataCaucaCohorte1) !!},
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.7)',
                        
                    ],
                },
                {
                    label: 'Nariño cohorte 1',
                    data: {!! json_encode($dataNarinoCohorte1) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        
                    ],
                },
                {
                    label: 'Cauca cohorte 2',
                    data: {!! json_encode($dataCaucaCohorte1) !!},
                    backgroundColor: [
                        'rgba(26, 83, 185, 0.7)',
                        
                        
                    ],
                },
                {
                    label: 'Nariño cohorte 2',
                    data: {!! json_encode($dataNarinoCohorte1) !!},
                    backgroundColor: [
                        'rgba(113, 203, 92, 0.7)',        
                    ],
                }

            ],
            
        },

        options: {
            indexAxis: 'y',
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide
            elements: {
            bar: {
                borderWidth: 2,
            }
            },
            responsive: true,
            plugins: {
            legend: {
                position: 'right',
            },
            // title: {
            //     display: true,
            //     text: 'Estudiantes por cohorte y departamento'
            // }
            }
        },

    });
</script>


