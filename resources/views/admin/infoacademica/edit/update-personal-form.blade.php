<section>
    <header>
        <!-- <h2 class="text-lg font-medium">
            {{ __('Información académica  del participante talento tech') }}
        </h2> -->
    </header>

        <div class="pant pant1  grid grid-cols-1">
    <div>
    </div>
        

        <section>
            <h2 class="text-2xl font-semibold">
            {{$participantes->primer_nombre}}  {{$participantes->primer_apellido}}
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 ">

                <div class="grid gap-4 ">
                    
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Progreso del curso:</span>
                        <span>{{$info_academica_participante['progreso']}}%</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Correo:</span>
                        <span>{{$info_academica_participante['correo']}}</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Curso:</span>
                        <span>{{$info_academica_participante['curso']}}</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Nota final:</span>
                        <span>{{number_format($info_academica_participante['nota_final'], 1)}}</span>
                    </div>
                </div>

                <div class="grid gap-4 ">

                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Inicios de sesión en plataforma:</span>
                        <span>{{$info_academica_participante['inicios_de_sesión']}}</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Ultimo acceso a la plataforma:</span>
                        <span>{{$info_academica_participante['ultimo_acceso_plataforma']}}</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Fecha de matricula:</span>
                        <span>{{$info_academica_participante['fecha_matricula']}}</span>
                    </div>
        
                    <div class=" text-black text-sm dark:text-white">
                        <span class="text-gray-700 font-semibold dark:text-gray-400">Ultimo acceso al curso:</span>
                        <span>{{$info_academica_participante['ultimo_acceso_curso']}}</span>
                    </div>
                </div>

                <div class="grid justify-items-center">
                    <div class="w-40 h-40 bg-gradient-to-br from-gray-200 to-gray-400 dark:from-gray-800 dark:to-gray-600 rounded-lg flex items-center justify-center">
                        <span class="text-5xl text-gray-800 dark:text-gray-200 font-bold">{{number_format($info_academica_participante['nota_final'], 1) }}</span>
                    </div>
                </div>
    
            </div>
           
        </section>

        <section>
            <div class="mt-10">
                <div class="flex justify-between mb-1">
                    <span class="text-base font-medium text-blue-700 dark:text-white">Progreso del curso {{$info_academica_participante['curso']}}</span>
                    <span class="text-sm font-medium text-blue-700 dark:text-white">{{$info_academica_participante['progreso']}}%</span>
                </div>
                <div class="w-full  bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-sm h-6   font-bold  text-blue-100 text-center p-1.5 leading-none rounded-full" style="width: {{$info_academica_participante['progreso']}}%">  {{$info_academica_participante['progreso']}}%</div>
                </div>
            </div>
        </section>
        
        <!-- <section class="w-64 mx-auto bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
            <div class="flex items-center justify-between">
                <span class="text-gray-400 text-sm">2d ago</span>
                <span class="text-emerald-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
                </span>
            </div>
            <div class="mt-6 w-fit mx-auto">
               
                <svg class="rounded-full w-28 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

            </div>

            <div class="mt-8 ">
                <h2 class="text-white font-bold text-2xl tracking-wide">{{$participantes->primer_nombre}} <br/> {{$participantes->primer_apellido}}</h2>
            </div>
          

            <div class="h-1 w-full bg-black mt-8 rounded-full">
                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$info_academica_participante['progreso']}}%"></div>
                </div>
            </div>
            <div class="mt-3 text-white text-sm">
                <span class="text-gray-400 font-semibold">Progreso del curso:</span>
                <span>{{$info_academica_participante['progreso']}}%</span>
            </div>

        </section> -->
            <!-- <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
                
                <div class="col-span-2">
                    <label for="primer_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Primer Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="primer_nombre" id="primer_nombre" autocomplete="given-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('primer_nombre', $participantes->primer_nombre)}}" required="" />
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Segundo Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="segundo_nombre" id="segundo_nombre" autocomplete="family-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('segundo_nombre', $participantes->segundo_nombre)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Primer Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="primer_apellido" id="primer_apellido" autocomplete="family-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('primer_apellido', $participantes->primer_apellido)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="segundo_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Segundo Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="segundo_apellido" id="segundo_apellido" autocomplete="given-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('segundo_apellido', $participantes->segundo_apellido)}}"/>
                    </div>
                </div>



                <div class="col-span-2">
                    <label for="tipo_documento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Tipo Documento </label>
                    <div class="mt-2">
                        <select id="tipo_documento" name="tipo_documento" autocomplete="tipo-documento-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option value="CC" @if(old('tipo_documento', $participantes->tipo_documento) === 'CC') selected @endif>CC</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número documento</label>
                    <div class="mt-2">
                        <input readonly type="number" inputmode="numeric" pattern="[0-9]*" name="numero_documento" id="numero_documento" autocomplete="numero-documento" class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('numero_documento', $participantes->numero_documento)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="nacionalidad" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nacionalidad</label>
                    <div class="mt-2">
                        <select id="nacionalidad" name="nacionalidad" autocomplete="nacionalidad" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option value="Colombiano" @if(old('nacionalidad', $participantes->nacionalidad) === 'Colombiano') selected @endif>Colombiano(a)</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="ciudad_nacimiento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Ciudad de nacimiento</label>
                    <div class="mt-2">
                        <input type="text" name="ciudad_nacimiento" id="ciudad_nacimiento" autocomplete="nacionalidad" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('ciudad_nacimiento', $participantes->ciudad_nacimiento)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="fecha_nacimiento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Fecha de Nacimiento</label>
                    <div class="mt-2">
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" autocomplete="family-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('fecha_nacimiento', $participantes->fecha_nacimiento)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="edad" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Edad</label>
                    <div class="mt-2">
                        <input readonly type="number" inputmode="numeric" pattern="[0-9]*" name="edad" id="edad" autocomplete="family-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full gris_back"  value="{{old('edad', $participantes->edad)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="sexo" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Sexo </label>
                    <div class="mt-2">
                        <select id="sexo" name="sexo" autocomplete="sexo-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option value="Hombre" @if(old('sexo', $participantes->sexo) === 'Hombre') selected @endif>Hombre</option>
                            <option value="Mujer" @if(old('sexo', $participantes->sexo) === 'Mujer') selected @endif>Mujer</option>
                            <option value="Intersex" @if(old('sexo', $participantes->sexo) === 'Intersex') selected @endif>Intersex</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="identidad_genero_preg" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">¿Desea responder preguntas sobre su identidad de género? </label>
                    <div class="mt-2">
                        <select id="identidad_genero_preg" name="identidad_genero_preg" autocomplete="identidad-genero-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option @if(old('identidad_genero_preg', $participantes->identidad_genero_preg) === 'Si') selected @endif value="Si">Si</option>
                            <option @if(old('identidad_genero_preg', $participantes->identidad_genero_preg) === 'No') selected @endif value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="identi_genero">
                        <label for="identidad_genero" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Identidad de género </label>
                        <div class="mt-2">
                            <select id="identidad_genero" name="identidad_genero" autocomplete="genero-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                                <option selected disabled>Seleccione...</option>
                                <option @if(old('identidad_genero', $participantes->identidad_genero) === 'Masculino') selected @endif value="Masculino">Masculino</option>
                                <option @if(old('identidad_genero', $participantes->identidad_genero) === 'Femenino') selected @endif value="Femenino">Femenino</option>
                                <option @if(old('identidad_genero', $participantes->identidad_genero) === 'Trans') selected @endif value="Trans">Trans</option>
                                <option @if(old('identidad_genero', $participantes->identidad_genero) === 'Otro') selected @endif value="Otro">Otro</option>
                                <option @if(old('identidad_genero', $participantes->identidad_genero) === 'No deseo responder') selected @endif value="No deseo responder">No deseo responder</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-span-2">
                    <label for="orientacion_sexual" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">¿Cuál es su orientación sexual? </label>
                    <div class="mt-2">
                        <select id="orientacion_sexual" name="orientacion_sexual" autocomplete="orientacion-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option @if(old('orientacion_sexual', $participantes->orientacion_sexual) === 'Heterosexualidad') selected @endif value="Heterosexualidad">Heterosexualidad</option>
                            <option @if(old('orientacion_sexual', $participantes->orientacion_sexual) === 'Homosexualidad') selected @endif value="Homosexualidad">Homosexualidad</option>
                            <option @if(old('orientacion_sexual', $participantes->orientacion_sexual) === 'Bisexualidad') selected @endif value="Bisexualidad">Bisexualidad</option>
                            <option @if(old('orientacion_sexual', $participantes->orientacion_sexual) === 'Otro') selected @endif value="Otro">Otro</option>
                            <option @if(old('orientacion_sexual', $participantes->orientacion_sexual) === 'No deseo responder') selected @endif value="No deseo responder">No deseo responder</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="correo_electronico" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Correo electrónico</label>
                    <div class="mt-2">
                        <input id="correo_electronico" name="correo_electronico" type="email" autocomplete="email" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('correo_electronico', $participantes->correo_electronico)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="celular_llamadas" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número de Celular llamadas</label>
                    <div class="mt-2">
                        <input id="celular_llamadas" name="celular_llamadas"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="celular_llamadas" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('celular_llamadas', $participantes->celular_llamadas)}}"/>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número WhatsApp</label>
                    <div class="mt-2">
                        <input id="whatsapp" name="whatsapp"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="whatsapp" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"  value="{{old('whatsapp', $participantes->whatsapp)}}"/>
                    </div>
                </div>
            </div> -->

        </div>

</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        if ($("input[name=fecha_nacimiento]").val()) {
            $('input[name=edad]').val(calcularEdad($("input[name=fecha_nacimiento]").val()));
        }
    });
    
    $('input[name=fecha_nacimiento]').change(function() {
        $('input[name=edad]').val(calcularEdad($(this).val()));
    });

    function calcularEdad(fecha) {
        var hoy = new Date();
        var cumpleanos = new Date(fecha);
        var edad = hoy.getFullYear() - cumpleanos.getFullYear();
        var m = hoy.getMonth() - cumpleanos.getMonth();

        if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
            edad--;
        }
        return edad;
    }
</script>
