<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Gráficas Académicas') }}
            </h2>
        </div>
    </x-slot>

    <section class="grid grid-cols-1  xl:grid-cols-2 gap-4">

      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

          <div class="bg-white shadow-md rounded-lg overflow-hidden mb-5">
              <div class="p-6">
                <h5 class="text-lg font-semibold mb-4 dark:text-black">Estudiantes por departamento - cohorte - bootcamp - modalidad</h5>
                 <div class="">
                   <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-4 gap-4 ">
                    <div>
                      <label for="departamentoSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                      <select id="departamentoSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                          <option value="Cauca">Cauca</option>
                          <option value="Nariño">Nariño</option>
                      </select>
                    </div>
                    <div>
                      <label for="cohorteSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                      <select id="cohorteSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                          <option value="cohorte1">Cohorte 1</option>
                          <option value="cohorte2">Cohorte 2</option>
                          <option value="cohorte3">Cohorte 3</option>
                          <option value="cohorte4">Cohorte 4</option>
                      </select>
                    </div>
                    <div>
                      <label for="ejeFormacion" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                      <select id="ejeFormacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                          <option value="Inteligencia artificial">Inteligencia artificial</option>
                          <option value="Programación">Programación</option>
                          <option value="Análisis de Datos">Análisis de Datos</option>
                          <option value="BlockChain">BlockChain</option>
                          <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                      </select>
                    </div>
                    <div>
                      <label for="modalidadSelect" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                      <select id="modalidadSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                          <option value="Virtual">Virtual</option>
                          <option value="Presencial / híbrido">Presencial / híbrido</option>
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
              <h5 class="text-lg font-semibold mb-4 dark:text-black">Promedio del progreso del curso por departamento - cohorte - bootcamp - modalidad</h5>
               <div class="">
                 <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-4 gap-4 ">
                  <div>
                    <label for="departamentoSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                    <select id="departamentoSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Cauca">Cauca</option>
                        <option value="Nariño">Nariño</option>
                    </select>
                  </div>
                  <div>
                    <label for="cohorteSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                    <select id="cohorteSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="cohorte1">Cohorte 1</option>
                        <option value="cohorte2">Cohorte 2</option>
                        <option value="cohorte3">Cohorte 3</option>
                        <option value="cohorte4">Cohorte 4</option>
                    </select>
                  </div>
                  <div>
                    <label for="ejeFormacion2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                    <select id="ejeFormacion2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Inteligencia artificial">Inteligencia artificial</option>
                        <option value="Programación">Programación</option>
                        <option value="Análisis de Datos">Análisis de Datos</option>
                        <option value="BlockChain">BlockChain</option>
                        <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                    </select>
                  </div>
                  <div>
                    <label for="modalidadSelect2" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                    <select id="modalidadSelect2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Virtual">Virtual</option>
                        <option value="Presencial / híbrido">Presencial / híbrido</option>
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
              <h5 class="text-lg font-semibold mb-4 dark:text-black">Promedio de inicios de sesión de los cursos por departamento - cohorte - bootcamp - modalidad</h5>
               <div class="">
                 <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-4 gap-4 ">
                  <div>
                    <label for="departamentoSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                    <select id="departamentoSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Cauca">Cauca</option>
                        <option value="Nariño">Nariño</option>
                    </select>
                  </div>
                  <div>
                    <label for="cohorteSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                    <select id="cohorteSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="cohorte1">Cohorte 1</option>
                        <option value="cohorte2">Cohorte 2</option>
                        <option value="cohorte3">Cohorte 3</option>
                        <option value="cohorte4">Cohorte 4</option>
                    </select>
                  </div>
                  <div>
                    <label for="ejeFormacion3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                    <select id="ejeFormacion3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Inteligencia artificial">Inteligencia artificial</option>
                        <option value="Programación">Programación</option>
                        <option value="Análisis de Datos">Análisis de Datos</option>
                        <option value="BlockChain">BlockChain</option>
                        <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                    </select>
                  </div>
                  <div>
                    <label for="modalidadSelect3" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                    <select id="modalidadSelect3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Virtual">Virtual</option>
                        <option value="Presencial / híbrido">Presencial / híbrido</option>
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
              <h5 class="text-lg font-semibold mb-4 dark:text-black">Promedio de notas de los cursos por departamento - cohorte - bootcamp - modalidad</h5>
               <div class="">
                 <form class="max-w-sm  mx-auto grid grid-cols-1 md:max-w-4xl md:grid-cols-4 gap-4 ">
                  <div>
                    <label for="departamentoSelect4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Departamento</label>
                    <select id="departamentoSelect4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Cauca">Cauca</option>
                        <option value="Nariño">Nariño</option>
                    </select>
                  </div>
                  <div>
                    <label for="cohorteSelect4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Cohorte</label>
                    <select id="cohorteSelect4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="cohorte1">Cohorte 1</option>
                        <option value="cohorte2">Cohorte 2</option>
                        <option value="cohorte3">Cohorte 3</option>
                        <option value="cohorte4">Cohorte 4</option>
                    </select>
                  </div>
                  <div>
                    <label for="ejeFormacion4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona un Bootcamp</label>
                    <select id="ejeFormacion4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Inteligencia artificial">Inteligencia artificial</option>
                        <option value="Programación">Programación</option>
                        <option value="Análisis de Datos">Análisis de Datos</option>
                        <option value="BlockChain">BlockChain</option>
                        <option value="Arquitectura en la nube">Arquitectura en la nube</option>
                    </select>
                  </div>
                  <div>
                    <label for="modalidadSelect4" class="block mb-2 text-sm font-medium text-gray-900">Selecciona una Modalidad</label>
                    <select id="modalidadSelect4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Virtual">Virtual</option>
                        <option value="Presencial / híbrido">Presencial / híbrido</option>
                    </select>
                  </div>
                 </form>
                 <canvas id="miGraficoBarra4" class="w-full  relative h-60"></canvas>
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
  let modalidadSeleccionada = document.getElementById('modalidadSelect').value;
  let bootcampSeleccionado = document.getElementById('ejeFormacion').value;

  obtenerDatosGrafica1(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada, bootcampSeleccionado);
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

document.getElementById('modalidadSelect').addEventListener('change', function() {
  manejarCambioSelectorGrafica1();
});


function obtenerDatosGrafica1(cohorte, departamento, modalidad, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-academica?cohorte=' + cohorte + '&departamento=' + departamento + '&modalidad=' + modalidad + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          // console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica1(response.labels, response.participantesPorCurso);
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
function actualizarGrafica1(labels, participantesPorCurso) {
  let ctx = document.getElementById('miGraficoBarra1').getContext('2d');
  if (miGraficoBarra1) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra1.data.labels = labels;
    miGraficoBarra1.data.datasets[0].data = participantesPorCurso;
    // miGraficoBarra1.data.datasets[1].data = promedioGeneralArray;
    miGraficoBarra1.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra1 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Estudiantes por curso',
          data: participantesPorCurso,
          backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }
}


// ----------fin grafica 1------------------

 // ----------grafica  2------------------

    // Función para manejar los cambios en los selectores
    function manejarCambioSelectorGrafica2() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect2').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect2').value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect2').value;
  let bootcampSeleccionado = document.getElementById('ejeFormacion2').value;

  obtenerDatosGrafica2(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada, bootcampSeleccionado);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica2();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});

document.getElementById('departamentoSelect2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});

document.getElementById('ejeFormacion2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});

document.getElementById('modalidadSelect2').addEventListener('change', function() {
  manejarCambioSelectorGrafica2();
});


function obtenerDatosGrafica2(cohorte, departamento, modalidad, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-academica?cohorte=' + cohorte + '&departamento=' + departamento + '&modalidad=' + modalidad + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          // console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica2(response.labels, response.promedioProgresos);
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
function actualizarGrafica2(labels, promedioProgresos) {
  let ctx = document.getElementById('miGraficoBarra2').getContext('2d');
  if (miGraficoBarra2) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra2.data.labels = labels;
    miGraficoBarra2.data.datasets[0].data = promedioProgresos;
    // miGraficoBarra2.data.datasets[2].data = promedioGeneralArray;
    miGraficoBarra2.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra2 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Promedio del progreso por curso',
          data: promedioProgresos,
          backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }
}


// ----------fin grafica 2------------------

// ----------grafica  3------------------

    // Función para manejar los cambios en los selectores
    function manejarCambioSelectorGrafica3() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect3').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect3').value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect3').value;
  let bootcampSeleccionado = document.getElementById('ejeFormacion3').value;

  obtenerDatosGrafica3(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada, bootcampSeleccionado);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica3();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});

document.getElementById('departamentoSelect3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});

document.getElementById('ejeFormacion3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});

document.getElementById('modalidadSelect3').addEventListener('change', function() {
  manejarCambioSelectorGrafica3();
});


function obtenerDatosGrafica3(cohorte, departamento, modalidad, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-academica?cohorte=' + cohorte + '&departamento=' + departamento + '&modalidad=' + modalidad + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          // console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica3(response.labels, response.promedioIniciosSesion);
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
function actualizarGrafica3(labels, promedioIniciosSesion) {
  let ctx = document.getElementById('miGraficoBarra3').getContext('2d');
  if (miGraficoBarra3) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra3.data.labels = labels;
    miGraficoBarra3.data.datasets[0].data = promedioIniciosSesion;
    // miGraficoBarra3.data.datasets[3].data = promedioGeneralArray;
    miGraficoBarra3.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra3 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Promedio de inicios de sesión por curso',
          data: promedioIniciosSesion,
          backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }
}


// ----------fin grafica 3------------------

// ----------grafica  4------------------

    // Función para manejar los cambios en los selectores
    function manejarCambioSelectorGrafica4() {
  let cohorteSeleccionado = document.getElementById('cohorteSelect4').value;
  let departamentoSeleccionado = document.getElementById('departamentoSelect4').value;
  let modalidadSeleccionada = document.getElementById('modalidadSelect4').value;
  let bootcampSeleccionado = document.getElementById('ejeFormacion4').value;

  obtenerDatosGrafica4(cohorteSeleccionado, departamentoSeleccionado, modalidadSeleccionada, bootcampSeleccionado);
}


document.addEventListener('DOMContentLoaded', function() {
  manejarCambioSelectorGrafica4();
});

/// Manejar cambios en los selectores
document.getElementById('cohorteSelect4').addEventListener('change', function() {
  manejarCambioSelectorGrafica4();
});

document.getElementById('departamentoSelect4').addEventListener('change', function() {
  manejarCambioSelectorGrafica4();
});

document.getElementById('ejeFormacion4').addEventListener('change', function() {
  manejarCambioSelectorGrafica4();
});

document.getElementById('modalidadSelect4').addEventListener('change', function() {
  manejarCambioSelectorGrafica4();
});


function obtenerDatosGrafica4(cohorte, departamento, modalidad, bootcamp) {
  // Crear un nuevo objeto XMLHttpRequest
  let xhr = new XMLHttpRequest();
  let url = '/obtener-datos-grafica-academica?cohorte=' + cohorte + '&departamento=' + departamento + '&modalidad=' + modalidad + '&bootcamp=' + bootcamp;
  // Definir la URL de la solicitud y el método HTTP
  xhr.open('GET', url, true);

  // Manejar la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
          // Convertir la respuesta JSON en un objeto JavaScript
          let response = JSON.parse(xhr.responseText);
          // console.log(response);
          // Actualizar la gráfica con los nuevos datos recibidos del servidor
          actualizarGrafica4(response.labels, response.promedioNotas);
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
let miGraficoBarra4 = null;

// Función para actualizar la gráfica con los nuevos datos
function actualizarGrafica4(labels, promedioNotas) {
  let ctx = document.getElementById('miGraficoBarra4').getContext('2d');
  if (miGraficoBarra4) {
    // Si ya existe un gráfico, actualiza los datos
    miGraficoBarra4.data.labels = labels;
    miGraficoBarra4.data.datasets[0].data = promedioNotas;
    // miGraficoBarra3.data.datasets[3].data = promedioGeneralArray;
    miGraficoBarra4.update();
  } else {
    // Si no existe un gráfico, crea uno nuevo
    miGraficoBarra4 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Promedio de inicios de sesión por curso',
          data: promedioNotas,
          backgroundColor: 'rgba(54, 162, 235, 0.7)', // Color de fondo de la barra
          borderColor: 'rgba(255, 99, 132, 1)', // Color del borde de la barra
          borderWidth: 1
        },
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });
  }
}


// ----------fin grafica 4------------------



</script>
