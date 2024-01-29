<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Caracterización del participante talento tech') }}
        </h2>
    </header>

        <div class="pant pant1 space-y-12 grid grid-cols-1">
            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
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
                        <input type="number" inputmode="numeric" pattern="[0-9]*" name="numero_documento" id="numero_documento" autocomplete="numero-documento" class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
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
            </div>

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
