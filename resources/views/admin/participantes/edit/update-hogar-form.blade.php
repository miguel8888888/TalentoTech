<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Información de residencia y selección de horario') }}
        </h2>
    </header>

    <div class="pant pant4 space-y-12 grid grid-cols-1">
        <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">

            <div class="col-span-2">
                <label for="pais_residencia"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">País de
                    Residencia</label>
                <div class="mt-2">
                    <!-- <input type="text" name="pais_residencia" id="pais_residencia" autocomplete="pais_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                    <select id="pais_residencia" name="pais_residencia" autocomplete="pais_residencia"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('pais_residencia', $participantes->pais_residencia) === 'Colombia') selected @endif value="Colombia">Colombia</option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="departamento_residencia"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Departamento de
                    Residencia</label>
                <div class="mt-2">
                    <!-- <input type="text" name="departamento_residencia" id="departamento_residencia" autocomplete="departamento_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                    <select id="departamento_residencia" name="departamento_residencia"
                        autocomplete="departamento_residencia"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Elige tu departamento</option>
                        <option @if (old('departamento_residencia', $participantes->departamento_residencia) === 'Nariño') selected @endif value="Nariño">Nariño</option>
                        <option @if (old('departamento_residencia', $participantes->departamento_residencia) === 'Cauca') selected @endif value="Cauca">Cauca</option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="municipio_residencia"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Municipio
                    Residencia</label>
                <div class="mt-2">
                    <!-- <input type="text" name="municipio_residencia" id="municipio_residencia" autocomplete="municipio_residencia" class="block w-full rounded-full px-4 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" /> -->
                    <select id="municipio_residencia" name="municipio_residencia" autocomplete="municipio_residencia"
                        class="municipios_container px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Elige tu municipio</option>
                    </select>
                </div>
            </div>



            <div class="col-span-2">
                <label for="zona_ubicacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Zona de
                    ubicación</label>
                <div class="mt-2">
                    <select id="zona_ubicacion" name="zona_ubicacion" autocomplete="zona_ubicacion"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('zona_ubicacion', $participantes->zona_ubicacion) === 'Rural') selected @endif value="Rural">Rural</option>
                        <option @if (old('zona_ubicacion', $participantes->zona_ubicacion) === 'Urbana') selected @endif value="Urbana">Urbana</option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="corregimiento_nombre"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nombre
                    corregimiento</label>
                <div class="mt-2">
                    <input type="text" name="corregimiento_nombre" id="corregimiento_nombre"
                        autocomplete="corregimiento"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('corregimiento_nombre', $participantes->corregimiento_nombre) }}" />
                </div>
            </div>

            <div class="col-span-2">
                <label for="vereda_nombre"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nombre Vereda</label>
                <div class="mt-2">
                    <input id="vereda_nombre" name="vereda_nombre" type="text" autocomplete="Vereda"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('vereda_nombre', $participantes->vereda_nombre) }}" />
                </div>
            </div>

            <div class="col-span-2">
                <label for="zona_resto"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nombre de la Zona Resto
                    (caserío)</label>
                <div class="mt-2">
                    <input id="zona_resto" name="zona_resto" type="text" autocomplete="caserio"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('zona_resto', $participantes->zona_resto) }}" />
                </div>
            </div>

            <div class="col-span-2">
                <label for="barrio_nombre"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nombre del
                    Barrio</label>
                <div class="mt-2">
                    <input id="barrio_nombre" name="barrio_nombre" type="text" autocomplete="barrio"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('barrio_nombre', $participantes->barrio_nombre) }}" />
                </div>
            </div>

            <div class="col-span-2">
                <label for="direccion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Dirección</label>
                <div class="mt-2">
                    <input id="direccion" name="direccion" type="text" autocomplete="direccion"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('direccion', $participantes->direccion) }}" />
                </div>
            </div>
            <div class="col-span-2">
                <label for="estrato_socioeconomico"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Estrato
                    socioeconómico</label>
                <div class="mt-2">
                    <select id="estrato_socioeconomico" name="estrato_socioeconomico"
                        autocomplete="estrato_socioeconomico"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '1') selected @endif value="1">1</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '2') selected @endif value="2">2</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '3') selected @endif value="3">3</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '4') selected @endif value="4">4</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '5') selected @endif value="5">5</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === '6') selected @endif value="6">6</option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === 'Zona rural') selected @endif value="Zona rural">Zona rural
                        </option>
                        <option @if (old('estrato_socioeconomico', $participantes->estrato_socioeconomico) === 'No estratificado') selected @endif value="No estratificado">No
                            estratificado</option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="tipo_vivienda"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Tipo de
                    Vivienda</label>
                <div class="mt-2">
                    <select id="tipo_vivienda" name="tipo_vivienda" autocomplete="tipo_vivienda"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Casa') selected @endif value="Casa">Casa</option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Habitación o Cuarto') selected @endif value="Habitación o Cuarto">
                            Habitación o Cuarto</option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Albergue (Vivienda temporal)') selected @endif
                            value="Albergue (Vivienda temporal)">Albergue (Vivienda temporal)</option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Inquilinato') selected @endif value="Inquilinato">Inquilinato
                        </option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Casa lote') selected @endif value="Casa lote">Casa lote
                        </option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Apartamento') selected @endif value="Apartamento">Apartamento
                        </option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Vivienda indígena') selected @endif value="Vivienda indígena">Vivienda
                            indígena</option>
                        <option @if (old('tipo_vivienda', $participantes->tipo_vivienda) === 'Palafito') selected @endif value="Palafito">Palafito</option>
                    </select>
                </div>
            </div>
            <div class="col-span-2">
                <label for="tenencia_vivienda"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Tenencia de la
                    Vivienda</label>
                <div class="mt-2">
                    <select id="tenencia_vivienda" name="tenencia_vivienda" autocomplete="tenencia_vivienda"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Propia') selected @endif value="Propia">Propia</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Arriendo') selected @endif value="Arriendo">Arriendo</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Familiar') selected @endif value="Familiar">Familiar</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Albergue') selected @endif value="Albergue">Albergue</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Lugar de trabajo') selected @endif value="Lugar de trabajo">Lugar de
                            trabajo</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Posada (vivienda otra persona sin pagar)') selected @endif
                            value="Posada (vivienda otra persona sin pagar)">Posada (vivienda otra persona sin pagar)
                        </option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Asentamiento- Invasión') selected @endif value="Asentamiento- Invasión">
                            Asentamiento- Invasión</option>
                        <option @if (old('tenencia_vivienda', $participantes->tenencia_vivienda) === 'Paga Diario') selected @endif value="Paga Diario">Paga Diario
                        </option>
                    </select>
                </div>
            </div>
            <div class="lg:col-span-5 col-span-2">
            </div>
            <div class="lg:col-span-4 mt-6 col-span-2">
                <label for="Agua" class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">¿Tiene
                    acceso a servicios básicos?</label>
                @php
                    $valoresGuardServicios = $participantes->servicios_basicos;
                    $valoresSepServicios = explode(' | ', $valoresGuardServicios);
                @endphp
                <div class="pt-6 grid grid-cols-2" id="filter-section-mobile-0">
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Agua', $valoresSepServicios)) checked @endif id="Agua"
                                name="servicios_basicos[]" value="Agua" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="Agua" class="font-medium text-gray-800 dark:text-gray-300">Agua</label>
                        </div>
                        <!-- ... (rest of the items in the first column) ... -->
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Alcantarillado', $valoresSepServicios)) checked @endif id="alcantarillado"
                                name="servicios_basicos[]" value="Alcantarillado" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="alcantarillado"
                                class="font-medium text-gray-800 dark:text-gray-300">Alcantarillado</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Energía eléctrica', $valoresSepServicios)) checked @endif id="electricidad"
                                name="servicios_basicos[]" value="Energía eléctrica" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="electricidad" class="font-medium text-gray-800 dark:text-gray-300">Energía
                                eléctrica</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Internet', $valoresSepServicios)) checked @endif id="internet"
                                name="servicios_basicos[]" value="Internet" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="internet"
                                class="font-medium text-gray-800 dark:text-gray-300">Internet</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Telefonía fija o móvil', $valoresSepServicios)) checked @endif id="telefonia"
                                name="servicios_basicos[]" value="Telefonía fija o móvil" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="telefonia" class="font-medium text-gray-800 dark:text-gray-300">Telefonía fija
                                o móvil</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Plan de datos o recargas', $valoresSepServicios)) checked @endif id="plan_movil"
                                name="servicios_basicos[]" value="Plan de datos o recargas" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="plan_movil" class="font-medium text-gray-800 dark:text-gray-300">Plan de datos
                                o recargas</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Ninguna de las Anteriores', $valoresSepServicios)) checked @endif id="ninguna_ant"
                                name="servicios_basicos[]" value="Ninguna de las Anteriores" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="ninguna_ant" class="font-medium text-gray-800 dark:text-gray-300">Ninguna de
                                las Anteriores</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 mt-6 col-span-2">
                <label for="Computador"
                    class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">¿Cuenta con equipos
                    tecnológicos?</label>
                @php
                    $valoresGuardEquiposTec = $participantes->equipos_tecnologicos;
                    $valoresSepEquiposTec = explode(' | ', $valoresGuardEquiposTec);
                @endphp
                <div class="pt-6 grid grid-cols-2 " id="filter-section-mobile-0">
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Computador', $valoresSepEquiposTec)) checked @endif id="Computador"
                                name="equipos_tecnologicos[]" value="Computador" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="Computador"
                                class="font-medium text-gray-800 dark:text-gray-300">Computador</label>
                        </div>
                        <!-- ... (rest of the items in the first column) ... -->
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Teléfono móvil (Android o iPhone)', $valoresSepEquiposTec)) checked @endif id="eq_movil"
                                name="equipos_tecnologicos[]" value="Teléfono móvil (Android o iPhone)"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="eq_movil" class="font-medium text-gray-800 dark:text-gray-300">Teléfono móvil
                                (Android o iPhone)</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input @if (in_array('Tableta', $valoresSepEquiposTec)) checked @endif id="tableta"
                                name="equipos_tecnologicos[]" value="Tableta" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="tableta" class="font-medium text-gray-800 dark:text-gray-300">Tableta</label>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <label for="otros_equipos"
                                class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Otro
                                ¿Cuál?</label>
                            <div>
                                <input id="otros_equipos" name="otros_equipos" type="text"
                                    autocomplete="otro_equipos"
                                    class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                                    value="{{ old('otros_equipos', $participantes->otros_equipos) }}" />
                            </div>
                        </div>
                        <!-- ... (rest of the items in the second column) ... -->
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 mt-6 col-span-2">
                <label for="disponibilidad_formacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">¿Cuenta con la
                    disponibilidad para el desarrollo de la formación de 10 horas semanales?</label>
                <div class="mt-2">
                    <select id="disponibilidad_formacion" name="disponibilidad_formacion"
                        autocomplete="disponibilidad_formacion"
                        class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        style="width: 25%;">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('disponibilidad_formacion', $participantes->disponibilidad_formacion) === 'Si') selected @endif value="Si">Si</option>
                        <option @if (old('disponibilidad_formacion', $participantes->disponibilidad_formacion) === 'No') selected @endif value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="lg:col-span-4 mt-6 col-span-2">
                <label for="horario_formacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Elige la opción del
                    horario de formación semanal que más se adapta a tu disponibilidad</label>

                {{-- {{ $horario }} --}}
                <div class="mt-2">
                    <select id="horario_formacion" name="horario_formacion" autocomplete="horario_formacion"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        @foreach ($horario as $data)
                            @if ($participantes->eje_final_formacion == 'Análisis de Datos' && $data->materia == 'Análisis de Datos')
                                @if ($participantes->modalidad_bootcamps == 'Virtual' && $data->modalidad_bootcamps == 'Virtual')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                                @if (
                                    $participantes->modalidad_bootcamps == 'Presencial / híbrido' &&
                                        $data->modalidad_bootcamps == 'Presencial / híbrido')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                            @endif
                            @if ($participantes->eje_final_formacion == 'Inteligencia artificial' && $data->materia == 'Inteligencia artificial')
                                @if ($participantes->modalidad_bootcamps == 'Virtual' && $data->modalidad_bootcamps == 'Virtual')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                                @if (
                                    $participantes->modalidad_bootcamps == 'Presencial / híbrido' &&
                                        $data->modalidad_bootcamps == 'Presencial / híbrido')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                            @endif
                            @if ($participantes->eje_final_formacion == 'Arquitectura en la nube' && $data->materia == 'Arquitectura en la nube')
                                @if ($participantes->modalidad_bootcamps == 'Virtual' && $data->modalidad_bootcamps == 'Virtual')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                                @if (
                                    $participantes->modalidad_bootcamps == 'Presencial / híbrido' &&
                                        $data->modalidad_bootcamps == 'Presencial / híbrido')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                            @endif
                            @if ($participantes->eje_final_formacion == 'BlockChain' && $data->materia == 'BlockChain')
                                @if ($participantes->modalidad_bootcamps == 'Virtual' && $data->modalidad_bootcamps == 'Virtual')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                                @if (
                                    $participantes->modalidad_bootcamps == 'Presencial / híbrido' &&
                                        $data->modalidad_bootcamps == 'Presencial / híbrido')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                            @endif
                            @if ($participantes->eje_final_formacion == 'Programación' && $data->materia == 'Programación')
                                @if ($participantes->modalidad_bootcamps == 'Virtual' && $data->modalidad_bootcamps == 'Virtual')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                                @if (
                                    $participantes->modalidad_bootcamps == 'Presencial / híbrido' &&
                                        $data->modalidad_bootcamps == 'Presencial / híbrido')
                                    @if ($participantes->nivel_formacion == 'Explorador (Básico)' && $data->nivel_formacion == 'Explorador (Básico)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Integrador (Intermedio)' && $data->nivel_formacion == 'Integrador (Intermedio)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                    @if ($participantes->nivel_formacion == 'Innovador (Avanzado)' && $data->nivel_formacion == 'Innovador (Avanzado)')
                                        <option @if (old('horario_formacion', $data->horario) === $participantes->horario_formacion) selected @endif
                                            value="{{ $data->horario }}">{{ $data->horario }}</option>
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-2">
                <label for="eje_final_formacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Eje Final de formación
                    - Bootcamps</label>
                <div class="mt-2">
                    <select id="eje_final_formacion" name="eje_final_formacion" autocomplete="eje_final_formacion"
                        class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('eje_final_formacion', $participantes->eje_final_formacion) === 'Análisis de Datos') selected @endif value="Análisis de Datos">Análisis
                            de Datos</option>
                        <option @if (old('eje_final_formacion', $participantes->eje_final_formacion) === 'Inteligencia artificial') selected @endif value="Inteligencia artificial">
                            Inteligencia artificial</option>
                        <option @if (old('eje_final_formacion', $participantes->eje_final_formacion) === 'Arquitectura en la nube') selected @endif value="Arquitectura en la nube">
                            Arquitectura en la nube</option>
                        <option @if (old('eje_final_formacion', $participantes->eje_final_formacion) === 'BlockChain') selected @endif value="BlockChain">BlockChain
                        </option>
                        <option @if (old('eje_final_formacion', $participantes->eje_final_formacion) === 'Programación') selected @endif value="Programación">Programación
                        </option>
                    </select>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-2">
                <label for="puntaje"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Puntaje de
                    prueba</label>
                <div class="mt-2">
                    <input id="puntaje" name="puntaje" type="number" inputmode="numeric" pattern="[0-9]*"
                        autocomplete="puntaje"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        value="{{ old('puntaje', $participantes->puntaje) }}" />
                </div>
            </div>
            <div class="lg:col-span-4 col-span-2">
                <label for="nivel_formacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nivel según el
                    resultado posterior a la prueba de conocimiento</label>
                <div class="mt-2">
                    <select id="nivel_formacion" name="nivel_formacion" autocomplete="nivel_formacion"
                        class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('nivel_formacion', $participantes->nivel_formacion) === 'Explorador (Básico)') selected @endif value="Explorador (Básico)">
                            Explorador (Básico)</option>
                        <option @if (old('nivel_formacion', $participantes->nivel_formacion) === 'Integrador (Intermedio)') selected @endif value="Integrador (Intermedio)">
                            Integrador (Intermedio)</option>
                        <option @if (old('nivel_formacion', $participantes->nivel_formacion) === 'Innovador (Avanzado)') selected @endif value="Innovador (Avanzado)">
                            Innovador (Avanzado)</option>
                    </select>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-2">
                <label for="modalidad_bootcamps"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Modalidad en la que
                    realizará su bootcamps</label>
                <div class="mt-2">
                    <select id="modalidad_bootcamps" name="modalidad_bootcamps" autocomplete="modalidad_bootcamps"
                        class="gris_back px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if (old('modalidad_bootcamps', $participantes->modalidad_bootcamps) === 'Presencial / híbrido') selected @endif value="Presencial / híbrido">
                            Presencial / híbrido</option>
                        <option @if (old('modalidad_bootcamps', $participantes->modalidad_bootcamps) === 'Virtual') selected @endif value="Virtual">Virtual</option>
                    </select>
                </div>
            </div>
            <div class="lg:col-span-6 col-span-2">
                <p class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300 modalidadBootcamps">
                    <em>La modalidad híbrida consiste en que pueda tomar parte de sus horas en la sede de manera
                        presencial y otras horas de modalidad virtual</em>
                </p>
            </div>


        </div>
    </div>

</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
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
    $(document).ready(function() {
        const departamentoSeleccionado = $("#departamento_residencia").val();
        if (departamentoSeleccionado) {
            cargarMunicipios(departamentoSeleccionado);
        }

    });

    // Función para cargar los municipios
    function cargarMunicipios(departamentoSeleccionado) {
        const municipios = municipiosPorDepartamento[departamentoSeleccionado] || [];
        const municipioResidencia = '{{ $participantes->municipio_residencia }}';

        // Limpia y agrega los nuevos municipios al elemento HTML deseado (por ejemplo, un div con el id "municipios_container")
        $("#municipios_container").empty();

        $(".municipios_container").html("");
        municipios.forEach(municipio => {
            const isSelected = municipio === municipioResidencia ? 'selected' : '';
            $(".municipios_container").append(
                `<option ${isSelected} value="${municipio}">${municipio}</option>`);
        });
    }

    $("#enviar_matricula").on("submit", function(event) {

        event.preventDefault();
        // 1085925417
        if (form.valid()) {
            $("#sendForm").prop('disabled', true);
            $("#sendForm").html('Enviando...');
            this.submit();
        }
    });
</script>
