<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Información adicional de contacto de un familiar') }}
        </h2>
    </header>

    <div class="pant pant2 space-y-12 grid grid-cols-1">
        <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">
            <div class="col-span-2">
                <label for="familiar_primer_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Primer Nombre</label>
                <div class="mt-2">
                    <input type="text" name="familiar_primer_nombre" id="familiar_primer_nombre" autocomplete="familiar_primer_nombre" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_primer_nombre', $participantes->familiar_primer_nombre)}}"/>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_segundo_nombre" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Segundo Nombre</label>
                <div class="mt-2">
                    <input type="text" name="familiar_segundo_nombre" id="familiar_segundo_nombre" autocomplete="familiar_segundo_nombre" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_segundo_nombre', $participantes->familiar_segundo_nombre)}}" />
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_primer_apellido" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Primer Apellido</label>
                <div class="mt-2">
                    <input type="text" name="familiar_primer_apellido" id="familiar_primer_apellido" autocomplete="familiar_primer_apellido" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_primer_apellido', $participantes->familiar_primer_apellido)}}"/>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_segundo_apellido" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Segundo Apellido</label>
                <div class="mt-2">
                    <input type="text" name="familiar_segundo_apellido" id="familiar_segundo_apellido" autocomplete="familiar_segundo_apellido" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_segundo_apellido', $participantes->familiar_segundo_apellido)}}"/>
                </div>
            </div>



            <div class="col-span-2">
                <label for="familiar_tipo_documento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Tipo Documento </label>
                <div class="mt-2">
                    <select id="familiar_tipo_documento" name="familiar_tipo_documento" autocomplete="familiar_tipo_documento" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_tipo_documento', $participantes->familiar_tipo_documento)}}">
                        <option selected disabled>Seleccione...</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'CC') selected @endif value="CC">CC</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'CE') selected @endif value="CE">CE</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'TI') selected @endif value="TI">TI</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'PA') selected @endif value="PA">PA</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'TMF') selected @endif value="TMF">TMF</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'PEP') selected @endif value="PEP">PEP</option>
                        <option @if(old('familiar_tipo_documento', $participantes->familiar_tipo_documento) === 'Visa') selected @endif value="Visa">Visa</option>
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_numero_documento" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número documento</label>
                <div class="mt-2">
                    <input  type="number" inputmode="numeric" pattern="[0-9]*" name="familiar_numero_documento" id="familiar_numero_documento" autocomplete="familiar_numero_documento" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_numero_documento', $participantes->familiar_numero_documento)}}"/>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_correo_electronico" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Correo electrónico</label>
                <div class="mt-2">
                    <input id="familiar_correo_electronico" name="familiar_correo_electronico" type="email" autocomplete="email" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_correo_electronico', $participantes->familiar_correo_electronico)}}"/>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_celular_llamadas" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número de Celular llamadas</label>
                <div class="mt-2">
                    <input id="familiar_celular_llamadas" name="familiar_celular_llamadas"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="familiar_celular_llamadas" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_celular_llamadas', $participantes->familiar_celular_llamadas)}}"/>
                </div>
            </div>

            <div class="col-span-2">
                <label for="familiar_whatsapp" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Número WhatsApp</label>
                <div class="mt-2">
                    <input id="familiar_whatsapp" name="familiar_whatsapp"  type="number" inputmode="numeric" pattern="[0-9]*" autocomplete="familiar_whatsapp" class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full" value="{{old('familiar_whatsapp', $participantes->familiar_whatsapp)}}"/>
                </div>
            </div>
        </div>
    </div>

</section>
