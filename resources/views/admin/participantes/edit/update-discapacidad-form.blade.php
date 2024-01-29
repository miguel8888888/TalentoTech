<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Autorreconocimiento Grupo Étnico del Beneficiario') }}
        </h2>
    </header>

    <div class="pant pant3 space-y-12 grid grid-cols-1">
        <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
            <div class="col-span-2">
                <label for="grupo_etnico" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Autoidentificación Étnica</label>
                <div class="mt-2">
                    <select id="grupo_etnico" name="grupo_etnico" autocomplete="grupo_etnico" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Afrocolombiano') selected @endif value="Afrocolombiano">Afrocolombiano</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Palenquero') selected @endif value="Palenquero">Palenquero</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Comunidad Negra') selected @endif value="Comunidad Negra">Comunidad Negra</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Raizal del archipiélago de San Andrés y Providencia') selected @endif value="Raizal del archipiélago de San Andrés y Providencia">Raizal del archipiélago de San Andrés y Providencia</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Indígena') selected @endif value="Indígena">Indígena</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'Rrom/Gitano') selected @endif value="Rrom/Gitano">Rrom/Gitano</option>
                        <option @if(old('grupo_etnico', $participantes->grupo_etnico) === 'No se Autorreconoce en ninguno de los anteriores') selected @endif value="No se Autorreconoce en ninguno de los anteriores">No se Autorreconoce en ninguno de los anteriores</option>
                    </select>
                </div>
            </div>

            <div class="col-span-3">
                <label for="discapacidad" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">¿Presenta alguna discapacidad?</label>
                <div class="mt-2">
                    <select id="discapacidad" name="discapacidad" autocomplete="discapacidad" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if(old('discapacidad', $participantes->discapacidad) === 'Si') selected @endif value="Si">Si</option>
                        <option @if(old('discapacidad', $participantes->discapacidad) === 'No') selected @endif value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="col-span-3">
                <div class="prent_discapaciti">
                    <label for="discapacidad_certificada" class=" block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">¿La discapacidad está certificada?</label>
                    <div class="mt-2">
                        <select id="discapacidad_certificada" name="discapacidad_certificada" autocomplete="discapacidad_certificada" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                            <option selected disabled>Seleccione...</option>
                            <option @if(old('discapacidad_certificada', $participantes->discapacidad_certificada) === 'Si') selected @endif value="Si">Si</option>
                            <option @if(old('discapacidad_certificada', $participantes->discapacidad_certificada) === 'No') selected @endif value="No">No</option>
                        </select>
                    </div>
                </div>
            </div>




            <div class="col-span-2 lg:col-span-12">
                <fieldset class="mt-5 prent_discapaciti">
                    <legend class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">Tipo de discapacidad </legend>
                    <input  id="dicapacidad_psicosocialsss" name="tipo_discapacidad[]" value="" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" style="opacity: 0">
                    @php
                        $valoresGuardTipoDis = $participantes->tipo_discapacidad;
                        $valoresSepTipoDis = explode(' | ', $valoresGuardTipoDis);
                    @endphp
                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad psicosocial (mental)', $valoresSepTipoDis)) checked @endif id="dicapacidad_psicosocial" name="tipo_discapacidad[]" value="Discapacidad psicosocial (mental)" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_psicosocial" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad psicosocial (mental)</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad auditiva', $valoresSepTipoDis)) checked @endif id="dicapacidad_auditiva" name="tipo_discapacidad[]" value="Discapacidad auditiva" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_auditiva" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad auditiva</label>

                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Sensorial, Gusto, Olfato, Tacto', $valoresSepTipoDis)) checked @endif id="sensorial" name="tipo_discapacidad[]" value="Sensorial, Gusto, Olfato, Tacto" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sensorial" class="font-medium text-gray-800 dark:text-gray-300">Sensorial, Gusto, Olfato, Tacto</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad sordoceguera', $valoresSepTipoDis)) checked @endif id="dicapacidad_sordoceguera" name="tipo_discapacidad[]" value="Discapacidad sordoceguera" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_sordoceguera" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad sordoceguera</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Piel, pelo y uñas', $valoresSepTipoDis)) checked @endif id="dicapacidad_piel" name="tipo_discapacidad[]" value="Piel, pelo y uñas" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_piel" class="font-medium text-gray-800 dark:text-gray-300">Piel, pelo y uñas</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad intelectual', $valoresSepTipoDis)) checked @endif id="dicapacidad_intelectual" name="tipo_discapacidad[]" value="Discapacidad intelectual" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_intelectual" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad intelectual</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad física', $valoresSepTipoDis)) checked @endif id="dicapacidad_fisica" name="tipo_discapacidad[]" value="Discapacidad física" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_fisica" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad física</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Sistémica', $valoresSepTipoDis)) checked @endif id="dicapacidad_sistemica" name="tipo_discapacidad[]" value="Sistémica" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_sistemica" class="font-medium text-gray-800 dark:text-gray-300">Sistémica</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad visual', $valoresSepTipoDis)) checked @endif id="dicapacidad_visual" name="tipo_discapacidad[]" value="Discapacidad visual" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_visual" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad visual</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad múltiple', $valoresSepTipoDis)) checked @endif id="dicapacidad_multiple" name="tipo_discapacidad[]" value="Discapacidad múltiple" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_multiple" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad múltiple</label>
                            </div>
                        </div>
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Voz y Habla', $valoresSepTipoDis)) checked @endif id="dicapacidad_voz_habla" name="tipo_discapacidad[]" value="Voz y Habla" type="checkbox" class="tipo_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="dicapacidad_voz_habla" class="font-medium text-gray-800 dark:text-gray-300">Voz y Habla</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-span-2 lg:col-span-12 ">
                <fieldset class="mt-5 prent_discapaciti">
                    <legend class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">Según la discapacidad</legend>
                    <input id="dicapacidad_psicosocialss" name="segun_discapacidad[]" value="" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" style="opacity: 0">
                    @php
                        $valoresGuardSegunDis = $participantes->segun_discapacidad;
                        $valoresSepSegunDis = explode(' | ', $valoresGuardSegunDis);
                    @endphp
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('El beneficiario cuenta con la ayuda técnica/Producto de apoyo', $valoresSepSegunDis)) checked @endif id="segun_discapacidad_1" name="segun_discapacidad[]" value="El beneficiario cuenta con la ayuda técnica/Producto de apoyo" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="segun_discapacidad_1" class="font-medium text-gray-800 dark:text-gray-300">El beneficiario cuenta con la ayuda técnica/Producto de apoyo</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('El beneficiario requiere la ayuda de otra persona', $valoresSepSegunDis)) checked @endif id="segun_discapacidad_2" name="segun_discapacidad[]" value="El beneficiario requiere la ayuda de otra persona" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="segun_discapacidad_2" class="font-medium text-gray-800 dark:text-gray-300">El beneficiario requiere la ayuda de otra persona</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('El beneficiario requiere terapia y/o rehabilitación', $valoresSepSegunDis)) checked @endif id="segun_discapacidad_3" name="segun_discapacidad[]" value="El beneficiario requiere terapia y/o rehabilitación" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="segun_discapacidad_3" class="font-medium text-gray-800 dark:text-gray-300">El beneficiario requiere terapia y/o rehabilitación</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('El beneficiario requiere ayuda técnica/Producto de apoyo', $valoresSepSegunDis)) checked @endif id="segun_discapacidad_4" name="segun_discapacidad[]" value="El beneficiario requiere ayuda técnica/Producto de apoyo" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="segun_discapacidad_4" class="font-medium text-gray-800 dark:text-gray-300">El beneficiario requiere ayuda técnica/Producto de apoyo</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('El beneficiario recibe atención en terapia y/o rehabilitación', $valoresSepSegunDis)) checked @endif id="segun_discapacidad_5" name="segun_discapacidad[]" value="El beneficiario recibe atención en terapia y/o rehabilitación" type="checkbox" class="segun_discapacidad-group w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="segun_discapacidad_5" class="font-medium text-gray-800 dark:text-gray-300">El beneficiario recibe atención en terapia y/o rehabilitación</label>
                            </div>
                        </div>



                    </div>
                </fieldset>
            </div>

            <div class="col-span-2 lg:col-span-12">
                <fieldset class="mt-5">
                    <legend class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">¿Hace parte de alguno de estos grupos de atención diferencial?</legend>
                    @php
                        $valoresGuardAtencion = $participantes->grupo_atencion_diferencial;
                        $valoresSepAtencion = explode(' | ', $valoresGuardAtencion);
                    @endphp
                    <div class="mt-6 grid grid-cols-1 lg:grid-cols-3">
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Adulto mayor', $valoresSepAtencion)) checked @endif id="adulto_mayor" name="grupo_atencion_diferencial[]" value="Adulto mayor" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="adulto_mayor" class="font-medium text-gray-800 dark:text-gray-300">Adulto mayor</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Mujer gestante', $valoresSepAtencion)) checked @endif id="mujer_gestante" name="grupo_atencion_diferencial[]" value="Mujer gestante" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="mujer_gestante" class="font-medium text-gray-800 dark:text-gray-300">Mujer gestante</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Víctima de conflicto armado', $valoresSepAtencion)) checked @endif id="victima_confilcto" name="grupo_atencion_diferencial[]" value="Víctima de conflicto armado" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="victima_confilcto" class="font-medium text-gray-800 dark:text-gray-300">Víctima de conflicto armado</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Jóvenes', $valoresSepAtencion)) checked @endif id="jovenes" name="grupo_atencion_diferencial[]" value="Jóvenes" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="jovenes" class="font-medium text-gray-800 dark:text-gray-300">Jóvenes</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Madre lactante', $valoresSepAtencion)) checked @endif id="madre_lactante" name="grupo_atencion_diferencial[]" value="Madre lactante" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="madre_lactante" class="font-medium text-gray-800 dark:text-gray-300">Madre lactante </label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Firmantes de Paz', $valoresSepAtencion)) checked @endif id="firmantes_paz" name="grupo_atencion_diferencial[]" value="Firmantes de Paz" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="firmantes_paz" class="font-medium text-gray-800 dark:text-gray-300">Firmantes de Paz </label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Discapacidad', $valoresSepAtencion)) checked @endif id="discapacidad" name="grupo_atencion_diferencial[]" value="Discapacidad" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="discapacidad" class="font-medium text-gray-800 dark:text-gray-300">Discapacidad </label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input @if(in_array('Comunidad LGTBIAQ+', $valoresSepAtencion)) checked @endif id="comunidad_lgtb" name="grupo_atencion_diferencial[]" value="Comunidad LGTBIAQ+" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="comunidad_lgtb" class="font-medium text-gray-800 dark:text-gray-300">Comunidad LGTBIAQ+</label>
                            </div>
                        </div>



                    </div>
                </fieldset>
            </div>

            <div class="col-span-2 mt-5">
                <label for="grado_escolaridad" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Grado de escolaridad</label>
                <div class="mt-2">
                    <select id="grado_escolaridad" name="grado_escolaridad" autocomplete="grado_escolaridad" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Básica Primaria') selected @endif value="Básica Primaria">Básica Primaria</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Básica Secundaria') selected @endif value="Básica Secundaria">Básica Secundaria</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Media') selected @endif value="Media">Media</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Bachillerato') selected @endif value="Bachillerato">Bachillerato</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Técnico Profesional') selected @endif value="Técnico Profesional">Técnico Profesional </option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Tecnológico') selected @endif value="Tecnológico">Tecnológico</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Profesional Universitario') selected @endif value="Profesional Universitario">Profesional Universitario</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'Posgrado') selected @endif value="Posgrado">Posgrado</option>
                        <option @if(old('grado_escolaridad', $participantes->grado_escolaridad) === 'No Registra') selected @endif value="No Registra">No Registra</option>
                    </select>
                </div>
            </div>
            <div class="col-span-2 mt-5">
                <label for="ocupacion" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Ocupación </label>
                <div class="mt-2">
                    <select id="ocupacion" name="ocupacion" autocomplete="ocupacion" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full">
                        <option selected disabled>Seleccione...</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Estudiante') selected @endif value="Estudiante">Estudiante</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Emprendedor') selected @endif value="Emprendedor">Emprendedor </option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Independiente') selected @endif value="Independiente">Independiente</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Obrero o empleado del Gobierno') selected @endif value="Obrero o empleado del Gobierno">Obrero o empleado del Gobierno</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Obrero o empleado de empresa particular') selected @endif value="Obrero o empleado de empresa particular">Obrero o empleado de empresa particular</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Labores del Hogar') selected @endif value="Labores del Hogar">Labores del Hogar</option>
                        <option @if(old('ocupacion', $participantes->ocupacion) === 'Desempleado') selected @endif value="Desempleado">Desempleado</option>
                    </select>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-12 mt-5">
                <label for="profesion" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Si eres profesional, escribe que profesión tienes</label>
                <div class="mt-2">
                    <input type="text" name="profesion" id="profesion" autocomplete="given-name" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('profesion', $participantes->profesion)}}"/>
                </div>
            </div>
        </div>
    </div>

</section>
