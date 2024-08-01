<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Gráficas Empleabilidad') }}
            </h2>
        </div>
    </x-slot>

    <section class="grid grid-cols-1  xl:grid-cols-2 gap-4">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
                <div class="p-6">
                    <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes registrados y no registrados en la plataforma de empleabilidad - cohorte - bootcamp - departamento</h5>
                    <div class="">
                    <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-3 gap-4 ">
                        <div>
                        <label for="departamentoSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                        <select id="departamentoSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            <option value="Cauca">Cauca</option>
                            <option value="Nariño">Nariño</option>
                        </select>
                        </div>
                        <div>
                        <label for="cohorteSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                        <select id="cohorteSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            @foreach ($cohortes as $cohorte)
                                <option value="{{ $cohorte->nombre }}">
                                    {{ $cohorte->nombre }}
                                </option>
                            @endforeach
                        </select>
                        </div>
                        <div>
                        <label for="ejeFormacion" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                        <select id="ejeFormacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            <option value="Inteligencia artificial">Inteligencia artificial</option>
                            <option value="Programación">Programación</option>
                            <option value="Análisis de Datos">Análisis de Datos</option>
                            <option value="BlockChain">BlockChain</option>
                            <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                        </select>
                        </div>

                    </form>
                    <canvas id="miGraficoBarra1" class="w-full  relative h-60"></canvas>
                    </div>
                </div>
            </div>





        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
                <div class="p-6">
                <h5 class="text-lg font-semibold mb-4 dark:text-black">Proyectos cargados - cohorte - bootcamp - departamento</h5>
                <div class="">
                    <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-2 gap-4 ">
                    {{-- <div>
                        <label for="departamentoSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                        <select id="departamentoSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Todos</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Nariño">Nariño</option>
                        </select>
                    </div> --}}
                    <div>
                        <label for="cohorteSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                        <select id="cohorteSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            @foreach ($cohortes as $cohorte)
                                <option value="{{ $cohorte->nombre }}">
                                    {{ $cohorte->nombre }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="ejeFormacion2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                        <select id="ejeFormacion2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            <option value="Inteligencia artificial">Inteligencia artificial</option>
                            <option value="Programación">Programación</option>
                            <option value="Análisis de Datos">Análisis de Datos</option>
                            <option value="BlockChain">BlockChain</option>
                            <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                        </select>
                    </div>

                    </form>
                    <canvas id="miGraficoBarra2" class="w-full  relative h-60"></canvas>
                </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
                <div class="p-6">
                <h5 class="text-lg font-semibold mb-4 dark:text-black">Hojas de vida cargadas - cohorte - bootcamp - departamento</h5>
                <div class="">
                    <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-2 gap-4 ">
                    {{-- <div>
                        <label for="departamentoSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                        <select id="departamentoSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Todos</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Nariño">Nariño</option>
                        </select>
                    </div> --}}
                    <div>
                        <label for="cohorteSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                        <select id="cohorteSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            @foreach ($cohortes as $cohorte)
                                <option value="{{ $cohorte->nombre }}">
                                    {{ $cohorte->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="ejeFormacion3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                        <select id="ejeFormacion3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Todos</option>
                            <option value="Inteligencia artificial">Inteligencia artificial</option>
                            <option value="Programación">Programación</option>
                            <option value="Análisis de Datos">Análisis de Datos</option>
                            <option value="BlockChain">BlockChain</option>
                            <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                        </select>
                    </div>

                    </form>
                    <canvas id="miGraficoBarra3" class="w-full  relative h-60"></canvas>
                </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
                <div class="p-6">
                <h5 class="text-lg font-semibold mb-4 dark:text-black">Número de empresas registradas por departamento</h5>
                <div class="">
                    <canvas id="miGraficoBarra4" class="w-full  relative h-60"></canvas>
                </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
                <div class="p-6">
                <h5 class="text-lg font-semibold mb-4 dark:text-black">Número de ofertas por empresa</h5>
                <div class="">
                    <canvas id="miGraficoBarra5" class="w-full  relative h-60"></canvas>
                </div>
                </div>
            </div>
        </div>






    </section>








</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<!-- Incluye Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>


    // ----------grafica  1------------------

    // Función para manejar los cambios en los selectores
function manejarCambioSelectorGrafica1() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect').value;
  let bootcampSeleccionado = document.getElementById('ejeFormacion').value;

  obtenerDatosGrafica1(cohorteSeleccionado, departamentoSeleccionado, bootcampSeleccionado);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica1();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect').addEventListener('change', function() {
  manejarCambioSelectorGrafica1();
});

document.getElementById('departamentoSelect').addEventListener('change', function() {
  manejarCambioSelectorGrafica1();
});

document.getElementById('ejeFormacion').addEventListener('change', function() {
  manejarCambioSelectorGrafica1();
});



function obtenerDatosGrafica1(cohorte, departamento, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-empleabilidad?cohorte=' + cohorte + '&departamento=' + departamento + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica1(response.labels, response.data );
      } else {
          // Manejar errores si es necesario
          console.error('Error al obtener datos de la gráfica:', xhr.status);
        }
    }
  };
  // Enviar la solicitud
  xhr.send();
}

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra1 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica1(labels, data) {
  let ctx = document.getElementById('miGraficoBarra1').getContext('2d');
  if (miGraficoBarra1) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra1.data.labels = labels;
    miGraficoBarra1.data.datasets[0].data = data;
    // miGraficoBarra1.data.datasets[1].data = participantesNum;
    miGraficoBarra1.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra1 = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: labels,
        datasets: [{
          label: '',
          data: data,
          backgroundColor:  [
              'rgb(54, 162, 235)',
            'rgb(255, 99, 132)',
            ],
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        // {
        //   label: 'No registrados en plataforma de empleabilidad',
        //   data: participantesNum,
        //   backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
        //   borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
        //   borderWidth: 1
        // },
        ]
      },
      options: {
        responsive: true,
      },
    });
  }
}

// ----------fin grafica 1------------------




// ----------grafica  2------------------

    // Función para manejar los cambios en los selectores
function manejarCambioSelectorGrafica2() {
  let cohorteSeleccionado2 = document.getElementById('cohorteSelect2').value;
//   let departamentoSeleccionado2 = document.getElementById('departamentoSelect2').value;
  let bootcampSeleccionado2 = document.getElementById('ejeFormacion2').value;

  obtenerDatosGrafica2(cohorteSeleccionado2, bootcampSeleccionado2);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica2();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});

// document.getElementById('departamentoSelect2').addEventListener('change', function() {
//   manejarCambioSelectorGrafica2();
// });

document.getElementById('ejeFormacion2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});



function obtenerDatosGrafica2(cohorte, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-empleabilidad2?cohorte=' + cohorte + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica2(response.labels, response.data2 );
      } else {
          // Manejar errores si es necesario
          console.error('Error al obtener datos de la gráfica:', xhr.status);
        }
    }
  };
  // Enviar la solicitud
  xhr.send();
}

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra2 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica2(labels, data2) {
  let ctx = document.getElementById('miGraficoBarra2').getContext('2d');
  if (miGraficoBarra2) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra2.data.labels = labels;
    miGraficoBarra2.data.datasets[0].data = data2;
    console.log(data2);
    // miGraficoBarra1.data.datasets[1].data = participantesNum;
    miGraficoBarra2.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra2 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: labels,
        datasets: [{
          label: 'Número de proyectos',
          data: data2,
          backgroundColor:  [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)'
            ],
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        // {
        //   label: 'No registrados en plataforma de empleabilidad',
        //   data: participantesNum,
        //   backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
        //   borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
        //   borderWidth: 1
        // },
        ]
      },
      options: {
        responsive: true,
      },
    });
  }
}

// ----------fin grafica 2------------------


// ----------grafica  3------------------

    // Función para manejar los cambios en los selectores
    function manejarCambioSelectorGrafica3() {
  let cohorteSeleccionado3 = document.getElementById('cohorteSelect3').value;
//   let departamentoSeleccionado3 = document.getElementById('departamentoSelect3').value;
  let bootcampSeleccionado3 = document.getElementById('ejeFormacion3').value;

  obtenerDatosGrafica3(cohorteSeleccionado3, bootcampSeleccionado3);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica3();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});

// document.getElementById('departamentoSelect3').addEventListener('change', function() {
//   manejarCambioSelectorGrafica3();
// });

document.getElementById('ejeFormacion3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});



function obtenerDatosGrafica3(cohorte,  bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-empleabilidad3?cohorte=' + cohorte + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica3(response.labels, response.data3 );
      } else {
          // Manejar errores si es necesario
          console.error('Error al obtener datos de la gráfica:', xhr.status);
        }
    }
  };
  // Enviar la solicitud
  xhr.send();
}

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra3 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica3(labels, data3) {
  let ctx = document.getElementById('miGraficoBarra3').getContext('2d');
  if (miGraficoBarra3) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra3.data.labels = labels;
    miGraficoBarra3.data.datasets[0].data = data3;
    // miGraficoBarra1.data.datasets[1].data = participantesNum;
    miGraficoBarra3.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra3 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: labels,
        datasets: [{
          label: 'Hojas de vida cargadas',
          data: data3,
          backgroundColor:  [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)'
            ],
          borderColor: 'rgba(54, 162, 235)', // Color del borde de la barra
          borderWidth: 1
        },
        // {
        //   label: 'No registrados en plataforma de empleabilidad',
        //   data: participantesNum,
        //   backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
        //   borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
        //   borderWidth: 1
        // },
        ]
      },
      options: {
        responsive: true,
      },
    });
  }
}

// ----------fin grafica 3------------------


// ----------grafica  4------------------

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra4 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica4() {
  let ctx = document.getElementById('miGraficoBarra4').getContext('2d');
  // Si no existe un gráfico, crea uno nuevo
  miGraficoBarra4 = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: {!! json_encode($labels) !!},
        datasets: [{
          label: 'Número de empresas registradas',
          data: {!! json_encode($data4) !!},
          backgroundColor:  [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            ],
          borderColor: 'rgba(54, 162, 235)', // Color del borde de la barra
          borderWidth: 1
        },
        // {
        //   label: 'No registrados en plataforma de empleabilidad',
        //   data: participantesNum,
        //   backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
        //   borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
        //   borderWidth: 1
        // },
        ]
      },
      options: {
        responsive: true,
      },
    });
}
actualizarGrafica4();

// ----------fin grafica 4------------------


// ----------grafica  5------------------

// Función para actualizar la gráfica con los nuevos datos
let miGraficoBarra5 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica5() {
  let ctx = document.getElementById('miGraficoBarra5').getContext('2d');
  // Si no existe un gráfico, crea uno nuevo
  miGraficoBarra5 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: {!! json_encode($nombres_empresas) !!},
        datasets: [{
          label: 'Número de ofertas',
          data: {!! json_encode($conteo_ofertas) !!},
          backgroundColor:  {!! json_encode($colores) !!},
          borderColor: 'rgba(54, 162, 235)', // Color del borde de la barra
          borderWidth: 1
        },
        // {
        //   label: 'No registrados en plataforma de empleabilidad',
        //   data: participantesNum,
        //   backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
        //   borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
        //   borderWidth: 1
        // },
        ]
      },
      options: {
        responsive: true,
      },
    });
}
actualizarGrafica5();

// ----------fin grafica 5------------------





</script>
