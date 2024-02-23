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

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por cohorte y departamento</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="selectCohorte" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un cohorte</label>
                                <select id="selectCohorte" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra4" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Lugar de origen</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="selectDepartamento" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                                <select id="selectDepartamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Cauca">Cauca</option>
                                    <option value="Nariño">Nariño</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra5" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por departamento - modalidad - cohorte</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="departamentoSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                                <select id="departamentoSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Cauca">Cauca</option>
                                    <option value="Nariño">Nariño</option>
                                </select>
                                <label for="cohorteSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra6" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Grupos Etarios</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="cohorteSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra7" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Gráfico de estrato</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="cohorteSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra8" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Gráfico identidad de genero</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="cohorteSelect4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra9" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Gráfico de identificación étnica</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="cohorteSelect10" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect10" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra10" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4 dark:text-black">Gráfico población vulnerable</h5>      
                            <form class="max-w-sm mx-auto">
                                <label for="cohorteSelect11" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                                <select id="cohorteSelect11" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohorte1">Cohorte 1</option>
                                    <option value="cohorte2">Cohorte 2</option>
                                </select>
                                <label for="modalidadSelect11" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                                <select id="modalidadSelect11" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Virtual">Virtual</option>
                                    <option value="Presencial / híbrido">Presencial / híbrido</option>
                                </select>
                            </form>
                            <canvas id="miGraficoBarra11" class="w-full relative h-64"></canvas>
                        </div>
                    </div>

                    <!-- <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="text-lg font-semibold mb-4">Estudiantes por cohorte y departamento</h5>
                            
                            <form class="max-w-sm mx-auto">
                                <label for="cohortSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un cohorte</label>
                                <select id="cohortSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="cohort1">Cohorte 1</option>
                                    <option value="cohort2">Cohorte 2</option>
                                </select>
                            </form>

                            <canvas id="myChart" class="w-full relative h-64"></canvas>
                        </div>
                    </div>                   -->
                </div>
            </div>
        </div>


</x-app-layout>

<!-- Incluye Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

function grafica1() {
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
}
grafica1();

function grafica2() {
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
}
grafica2();

function grafica3() {
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
}
grafica3();

function grafica4() {
            // Obtener el contexto del lienzo de la gráfica
            var ctxBarra = document.getElementById('miGraficoBarra4').getContext('2d');

            // Datos ficticios para la demostración
            var labels = {!! json_encode($labels) !!};
            var dataCaucaCohorte1V = {!! json_encode($dataCaucaCohorte1V) !!};
            var dataCaucaCohorte1P = {!! json_encode($dataCaucaCohorte1P) !!};
            var dataNarinoCohorte1V = {!! json_encode($dataNarinoCohorte1V) !!};
            var dataNarinoCohorte1P = {!! json_encode($dataNarinoCohorte1P) !!};
            // var dataCaucaCohorte2 = [30, 25, 40, 20, 35];
            // var dataNarinoCohorte2 = [35, 20, 30, 25, 40];

            // Definir los datos de la gráfica
            var data = {
                labels: labels,
                datasets: [
                    {
                        label: 'Cauca virtual',
                        data: dataCaucaCohorte1V,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)'
                    },
                    {
                        label: 'Cauca presencial',
                        data: dataCaucaCohorte1P,
                        backgroundColor: 'rgba(255, 99, 132, 0.7))'
                    },
                    {
                        label: 'Nariño virtual',
                        data: dataNarinoCohorte1V,
                        backgroundColor: 'rgba(26, 83, 185, 0.7)'
                    },
                    {
                        label: 'Nariño presencial',
                        data: dataNarinoCohorte1P,
                        backgroundColor: 'rgba(113, 203, 92, 0.7)'
                    },
                    // {
                    //     label: 'Cauca cohorte 2',
                    //     data: dataCaucaCohorte2,
                    //     backgroundColor: 'rgba(26, 83, 185, 0.7)'
                    // },
                    // {
                    //     label: 'Nariño cohorte 2',
                    //     data: dataNarinoCohorte2,
                    //     backgroundColor: 'rgba(113, 203, 92, 0.7)'
                    // }
                ]
            };

            // Definir las opciones de la gráfica
            var options = {
                indexAxis: 'x',
                elements: {
                    bar: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    }
                }
            };

            // Crear la gráfica inicial
            var myChartBarra = new Chart(ctxBarra, {
                type: 'bar',
                data: data,
                options: options
            });

            // Obtener los elementos select
            var selectCohorte = document.getElementById('selectCohorte');
      

            // Agregar eventos change a los selects
            selectCohorte.addEventListener('change', updateChart);


            // Función para actualizar la gráfica
            function updateChart() {
                if (selectCohorte.value === 'cohorte1') {
                    myChartBarra.data.datasets[0].data = {!! json_encode($dataCaucaCohorte1V) !!};
                    myChartBarra.data.datasets[1].data = {!! json_encode($dataCaucaCohorte1P) !!};
                    myChartBarra.data.datasets[2].data = {!! json_encode($dataNarinoCohorte1V) !!};
                    myChartBarra.data.datasets[3].data = {!! json_encode($dataNarinoCohorte1P) !!};
                    // myChartBarra.data.datasets[1].data = {!! json_encode($dataNarinoCohorte1) !!};
                    // myChartBarra.data.datasets[2].data = {!! json_encode($dataCaucaCohorte2) !!};
                    // myChartBarra.data.datasets[3].data = {!! json_encode($dataNarinoCohorte2) !!};
                } else if (selectCohorte.value === 'cohorte2') {
                    // Actualizar los datos para el segundo cohorte (si es necesario)
                    // Aquí debes proporcionar los datos para el segundo cohorte
                    myChartBarra.data.datasets[0].data = [12,20,30,40,15];
                    myChartBarra.data.datasets[1].data = [12,20,30,40,20];
                    myChartBarra.data.datasets[2].data = [12,20,30,40,30];
                    myChartBarra.data.datasets[3].data = [12,20,30,40,14];
                }

                myChartBarra.update();
            }
        }

        // Llamar a la función para que se ejecute al cargar la página
grafica4();


function grafica5() {

    const municipiosPorDepartamento = {
            "Nariño": ["Albán",
                "Aldana",
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
                "El Tablón De Gómez",
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
                "San Andrés De Tumaco",
                "San Bernardo",
                "San Lorenzo",
                "San Pablo",
                "San Pedro De Cartago",
                "Sandoná",
                "Santa Bárbara",
                "Santacruz",
                "Sapuyes",
                "Taminango",
                "Tangua",
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
                "López De Micay",
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
                "Santa Rosa",
                "Santander De Quilichao",
                "Silvia",
                "Sotará",
                "Suárez",
                "Sucre",
                "Timbío",
                "Timbiquí",
                "Toribío",
                "Totoró",
                "Villa Rica"
            ]
            // Puedes agregar más departamentos y sus municipios aquí
    };
    var conteoPorMunicipio = {!! json_encode($conteoPorMunicipio) !!};

    // Obtener los nombres de los municipios y los conteos
    var municipios = Object.keys(conteoPorMunicipio);
    var conteos = Object.values(conteoPorMunicipio);
            // Obtener el contexto del lienzo de la gráfica
            var ctxBarra = document.getElementById('miGraficoBarra5').getContext('2d');

            // Datos ficticios para la demostración
            var labels = municipiosPorDepartamento["Cauca"];
            var dataCaucaCohorte1V = {!! json_encode($dataCaucaCohorte1V) !!};
          
            // Definir los datos de la gráfica
            var data = {
                labels: labels,
                datasets: [
                    {
                        label: 'Estudiantes cohorte 1',
                        data: conteos,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)'
                    },
                    // {
                    //     label: 'Cauca presencial',
                    //     data: dataCaucaCohorte1P,
                    //     backgroundColor: 'rgba(255, 99, 132, 0.7))'
                    // },
                 
                ]
            };

            // Definir las opciones de la gráfica
            var options = {
                indexAxis: 'x',
                elements: {
                    bar: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    }
                }
            };

            // Crear la gráfica inicial
            var myChartBarra = new Chart(ctxBarra, {
                type: 'bar',
                data: data,
                options: options
            });

            // Obtener los elementos select
            var selectDept = document.getElementById('selectDept');
      

            // Agregar eventos change a los selects
            selectDepartamento.addEventListener('change', updateChart);


            // Función para actualizar la gráfica
            function updateChart() {

                var departamentoSeleccionado = selectDepartamento.value;
                var municipios = municipiosPorDepartamento[departamentoSeleccionado];
                myChartBarra.data.labels = municipios;
               

                myChartBarra.update();
            }
        }

        // Llamar a la función para que se ejecute al cargar la página
grafica5();




// function graficax(params) {
//           // Datos para el gráfico
//           var data = {
//             labels: ['Cauca', 'Nariño'],
//             datasets: [{
//                 label: 'Cantidad de cursos',
//                 data: [3, 2], // Cantidad de cursos en cada departamento para Cohorte 1
//                 backgroundColor: [
//                     'rgba(255, 99, 132, 0.2)', // Color para Cauca
//                     'rgba(54, 162, 235, 0.2)'  // Color para Nariño
//                 ],
//                 borderColor: [
//                     'rgba(255, 99, 132, 1)',
//                     'rgba(54, 162, 235, 1)'
//                 ],
//                 borderWidth: 1
//             }]
//         };

//         // Configuración del gráfico
//         var options = {
//             // scales: {
//             //     yAxes: [{
//             //         ticks: {
//             //             beginAtZero: true
//             //         }
//             //     }]
//             // }
//         };

//         // Crear el gráfico de barras inicial
//         var ctx = document.getElementById('myChart').getContext('2d');
//         var myChart = new Chart(ctx, {
//             type: 'bar',
//             data: data,
//             options: options
//         });

//         // Obtener el elemento select
//         var cohortSelect = document.getElementById('cohortSelect');

//         // Agregar un evento change al select
//         cohortSelect.addEventListener('change', function() {
//             // Actualizar los datos del gráfico según la selección
//             if (cohortSelect.value === 'cohort1') {
//                 myChart.data.datasets[0].data = [3, 2]; // Actualizar los datos para Cohorte 1
//             } else if (cohortSelect.value === 'cohort2') {
//                 myChart.data.datasets[0].data = [2, 3]; // Actualizar los datos para Cohorte 2 (ejemplo)
//             }

//             // Actualizar el gráfico
//             myChart.update();
//         });
// }
// graficax();


// ----------grafica 6------------------
function obtenerDatosGrafica(cohorte, departamento, modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url = '/obtener-datos-grafica?cohorte=' + cohorte + '&departamento=' + departamento + '&modalidad=' + modalidad;
  xhr.open('GET', url, true);
  
  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr.responseText);
        // console.log(response);
        actualizarGrafica(response.labels, response.data);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect').value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect').addEventListener('change', function() {
  let cohorteSeleccionado = this.value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect').value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect').value;
  
  obtenerDatosGrafica(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada);
});

document.getElementById('departamentoSelect').addEventListener('change', function() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect').value;
  let departamentoSeleccionado = this.value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect').value;
  
  obtenerDatosGrafica(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada);
});

document.getElementById('modalidadSelect').addEventListener('change', function() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect').value;
  let modalidadSeleccionada = this.value;
  
  obtenerDatosGrafica(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada);
});

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra6 = null;

function actualizarGrafica(labels, data) {
  let ctx = document.getElementById('miGraficoBarra6').getContext('2d');
  
  if (miGraficoBarra6) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra6.data.labels = labels;
    miGraficoBarra6.data.datasets[0].data = data;
    miGraficoBarra6.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra6 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cantidad de estudiantes',
          data: data,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        }]
      },
      options: {
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}

// ----------fin  grafica 6------------------




// ----------grafica 7------------------
function obtenerDatosGrafica7(cohorte,modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
    //   console.log(cohorte + modalidad);
  let xhr2 = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url2 = '/obtener-datos-grafica7?cohorte=' + cohorte + '&modalidad=' + modalidad;
  xhr2.open('GET', url2, true);
  
  // Manejar la respuesta del servidor
  xhr2.onreadystatechange = function() {
    if (xhr2.readyState === XMLHttpRequest.DONE) {
      if (xhr2.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr2.responseText);
        // console.log(response);
        actualizarGrafica7(response.labels, response.data, response.data2);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr2.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr2.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado2 = document.getElementById('cohorteSelect2').value;
  let modalidadSeleccionada2 = document.getElementById('modalidadSelect2').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica7(cohorteSeleccionado2, modalidadSeleccionada2);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect2').addEventListener('change', function() {
  let cohorteSeleccionado2 = this.value;
  let modalidadSeleccionada2 = document.getElementById('modalidadSelect2').value;
  
  obtenerDatosGrafica7(cohorteSeleccionado2, modalidadSeleccionada2);
});


document.getElementById('modalidadSelect2').addEventListener('change', function() {
  let cohorteSeleccionado2 = document.getElementById('cohorteSelect2').value;
  let modalidadSeleccionada2 = this.value;
  
  obtenerDatosGrafica7(cohorteSeleccionado2, modalidadSeleccionada2);
});
let miGraficoBarra7 = null;

function actualizarGrafica7(labels, data, data2) {
  let ctx = document.getElementById('miGraficoBarra7').getContext('2d');
  
  if (miGraficoBarra7) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra7.data.labels = labels;
    // console.log(labels);
    miGraficoBarra7.data.datasets[0].data = data;
    miGraficoBarra7.data.datasets[1].data = data2;

    miGraficoBarra7.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra7 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cauca',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        {
          label: 'Nariño',
          data: data2,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de la barra
          borderWidth: 1
        }
        ]
      },
      options: {
        indexAxis: 'y',
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}


// ----------grafica 8------------------
function obtenerDatosGrafica8(cohorte,modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
  //   console.log(cohorte + modalidad);
  let xhr3 = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url3 = '/obtener-datos-grafica8?cohorte=' + cohorte + '&modalidad=' + modalidad;
  xhr3.open('GET', url3, true);
  
  // Manejar la respuesta del servidor
  xhr3.onreadystatechange = function() {
    if (xhr3.readyState === XMLHttpRequest.DONE) {
      if (xhr3.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr3.responseText);
        console.log(response.labels);
        console.log(response.data);
        actualizarGrafica8(response.labels, response.data, response.data2);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr3.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr3.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado3 = document.getElementById('cohorteSelect3').value;
  let modalidadSeleccionada3 = document.getElementById('modalidadSelect3').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica8(cohorteSeleccionado3, modalidadSeleccionada3);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect3').addEventListener('change', function() {
  let cohorteSeleccionado3 = this.value;
  let modalidadSeleccionada3 = document.getElementById('modalidadSelect3').value;
  
  obtenerDatosGrafica8(cohorteSeleccionado3, modalidadSeleccionada3);
});


document.getElementById('modalidadSelect3').addEventListener('change', function() {
  let cohorteSeleccionado3 = document.getElementById('cohorteSelect3').value;
  let modalidadSeleccionada3 = this.value;
  
  obtenerDatosGrafica8(cohorteSeleccionado3, modalidadSeleccionada3);
});
let miGraficoBarra8 = null;

function actualizarGrafica8(labels, data, data2) {
  let ctx = document.getElementById('miGraficoBarra8').getContext('2d');
  
  if (miGraficoBarra8) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra8.data.labels = labels;
    // console.log(labels);
    miGraficoBarra8.data.datasets[0].data = data;
    miGraficoBarra8.data.datasets[1].data = data2;
    
    miGraficoBarra8.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra8 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cauca',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        {
          label: 'Nariño',
          data: data2,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de la barra
          borderWidth: 1
        }
        ]
      },
      options: {
        indexAxis: 'x',
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}
// ----------Fin grafica 8------------------

// ----------grafica 9------------------
function obtenerDatosGrafica9(cohorte,modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
  //   console.log(cohorte + modalidad);
  let xhr4 = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url4 = '/obtener-datos-grafica9?cohorte=' + cohorte + '&modalidad=' + modalidad;
  xhr4.open('GET', url4, true);
  
  // Manejar la respuesta del servidor
  xhr4.onreadystatechange = function() {
    if (xhr4.readyState === XMLHttpRequest.DONE) {
      if (xhr4.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr4.responseText);
        // console.log(response);
        actualizarGrafica9(response.labels, response.data, response.data2);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr4.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr4.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado4 = document.getElementById('cohorteSelect4').value;
  let modalidadSeleccionada4 = document.getElementById('modalidadSelect4').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica9(cohorteSeleccionado4, modalidadSeleccionada4);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect4').addEventListener('change', function() {
  let cohorteSeleccionado4 = this.value;
  let modalidadSeleccionada4 = document.getElementById('modalidadSelect4').value;
  
  obtenerDatosGrafica9(cohorteSeleccionado4, modalidadSeleccionada4);
});


document.getElementById('modalidadSelect4').addEventListener('change', function() {
  let cohorteSeleccionado4 = document.getElementById('cohorteSelect4').value;
  let modalidadSeleccionada4 = this.value;
  
  obtenerDatosGrafica9(cohorteSeleccionado4, modalidadSeleccionada4);
});
let miGraficoBarra9 = null;

function actualizarGrafica9(labels, data, data2) {
  let ctx = document.getElementById('miGraficoBarra9').getContext('2d');
  
  if (miGraficoBarra9) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra9.data.labels = labels;
    // console.log(labels);
    miGraficoBarra9.data.datasets[0].data = data;
    miGraficoBarra9.data.datasets[1].data = data2;
    miGraficoBarra9.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra9 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cauca',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        {
          label: 'Nariño',
          data: data2,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de la barra
          borderWidth: 1
        }
        ]
      },
      options: {
        indexAxis: 'x',
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}
// ----------Fin grafica 9------------------

// ----------grafica 10------------------
function obtenerDatosGrafica10(cohorte,modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
  //   console.log(cohorte + modalidad);
  let xhr4 = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url4 = '/obtener-datos-grafica10?cohorte=' + cohorte + '&modalidad=' + modalidad;
  xhr4.open('GET', url4, true);
  
  // Manejar la respuesta del servidor
  xhr4.onreadystatechange = function() {
    if (xhr4.readyState === XMLHttpRequest.DONE) {
      if (xhr4.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr4.responseText);
        // console.log(response);
        actualizarGrafica10(response.labels, response.data, response.data2);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr4.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr4.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado10 = document.getElementById('cohorteSelect10').value;
  let modalidadSeleccionada10 = document.getElementById('modalidadSelect10').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica10(cohorteSeleccionado10, modalidadSeleccionada10);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect10').addEventListener('change', function() {
  let cohorteSeleccionado10 = this.value;
  let modalidadSeleccionada10 = document.getElementById('modalidadSelect10').value;
  
  obtenerDatosGrafica10(cohorteSeleccionado10, modalidadSeleccionada10);
});


document.getElementById('modalidadSelect10').addEventListener('change', function() {
  let cohorteSeleccionado10 = document.getElementById('cohorteSelect10').value;
  let modalidadSeleccionada10 = this.value;
  
  obtenerDatosGrafica10(cohorteSeleccionado10, modalidadSeleccionada10);
});
let miGraficoBarra10 = null;

function actualizarGrafica10(labels, data, data2) {
  let ctx = document.getElementById('miGraficoBarra10').getContext('2d');
  
  if (miGraficoBarra10) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra10.data.labels = labels;
    // console.log(labels);
    miGraficoBarra10.data.datasets[0].data = data;
    miGraficoBarra10.data.datasets[1].data = data2;
    miGraficoBarra10.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra10 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cauca',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        {
          label: 'Nariño',
          data: data2,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de la barra
          borderWidth: 1
        }
        ]
      },
      options: {
        indexAxis: 'x',
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}
// ----------Fin grafica 10------------------


// ----------grafica 11------------------
function obtenerDatosGrafica11(cohorte,modalidad) {
  // Crear un nuevo objeto XMLHttpRequest
  //   console.log(cohorte + modalidad);
  let xhr4 = new XMLHttpRequest();
  
  // Definir la URL de la solicitud y el método HTTP
  let url4 = '/obtener-datos-grafica11?cohorte=' + cohorte + '&modalidad=' + modalidad;
  xhr4.open('GET', url4, true);
  
  // Manejar la respuesta del servidor
  xhr4.onreadystatechange = function() {
    if (xhr4.readyState === XMLHttpRequest.DONE) {
      if (xhr4.status === 200) {
        // Convertir la respuesta JSON en un objeto JavaScript
        let response = JSON.parse(xhr4.responseText);
        // console.log(response);
        actualizarGrafica11(response.labels, response.data, response.data2);
        // Actualizar la gráfica con los nuevos datos recibidos del servidor
        // response contiene los datos devueltos por el servidor en formato JSON
        // Actualiza tu gráfica con estos datos utilizando Chart.js
      } else {
        // Manejar errores si es necesario
        console.error('Error al obtener datos de la gráfica:', xhr4.status);
      }
    }
  };
  
  // Enviar la solicitud
  xhr4.send();
}

document.addEventListener('DOMContentLoaded', function() {
  let cohorteSeleccionado11 = document.getElementById('cohorteSelect11').value;
  let modalidadSeleccionada11 = document.getElementById('modalidadSelect11').value;
  
  // Llamar a la función actualizarGrafica con los valores por defecto
  obtenerDatosGrafica11(cohorteSeleccionado11, modalidadSeleccionada11);
});

// Manejar cambios en los selectores
document.getElementById('cohorteSelect11').addEventListener('change', function() {
  let cohorteSeleccionado11 = this.value;
  let modalidadSeleccionada11 = document.getElementById('modalidadSelect11').value;
  
  obtenerDatosGrafica11(cohorteSeleccionado11, modalidadSeleccionada11);
});


document.getElementById('modalidadSelect11').addEventListener('change', function() {
  let cohorteSeleccionado11 = document.getElementById('cohorteSelect11').value;
  let modalidadSeleccionada11 = this.value;
  
  obtenerDatosGrafica11(cohorteSeleccionado11, modalidadSeleccionada11);
});
let miGraficoBarra11 = null;

function actualizarGrafica11(labels, data, data2) {
  let ctx = document.getElementById('miGraficoBarra11').getContext('2d');
  
  if (miGraficoBarra11) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra11.data.labels = labels;
    // console.log(labels);
    miGraficoBarra11.data.datasets[0].data = data;
    miGraficoBarra11.data.datasets[1].data = data2;
    miGraficoBarra11.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra11 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Cauca',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        {
          label: 'Nariño',
          data: data2,
          backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo de la barra
          borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de la barra
          borderWidth: 1
        }
        ]
      },
      options: {
        indexAxis: 'x',
        // scales: {
        //   yAxes: [{
        //     ticks: {
        //       beginAtZero: true
        //     }
        //   }]
        // }
      }
    });
  }
}
// ----------Fin grafica 11------------------
</script>


