<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Crear nuevo Horario') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 mb-6">
            {{ __('Aquí creara un nuevo horario segun la modalidad, eje y nivel de formación') }}
        </p>
    </header>
    <form method="POST" action="{{ route('horarios.store') }}">
        @csrf

        <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-8">

            <div class="col-span-2">
                <label for="eje" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Eje
                    final formación
                </label>
                <div class="mt-2">
                    <select id="eje" name="eje" autocomplete="eje-name"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        required>
                        <option selected disabled>Seleccione...</option>
                        <option value="Análisis de Datos" @if (old('materia') == 'Análisis de Datos') selected @endif>Análisis de
                            Datos
                        </option>
                        <option value="BlockChain" @if (old('materia') == 'BlockChain') selected @endif>BlockChain
                        </option>
                        <option value="Inteligencia artificial" @if (old('materia') == 'Inteligencia artificial') selected @endif>
                            Inteligencia artificial
                        </option>
                        <option value="Arquitectura en la nube" @if (old('materia') == 'Arquitectura en la nube') selected @endif>
                            Arquitectura en la nube
                        </option>
                        <option value="Programación" @if (old('materia') == 'Programación') selected @endif>Programación
                        </option>
                    </select>
                </div>
                <x-form.error :messages="$errors->crearHorario->get('eje')" />
            </div>
            <div class="col-span-2">
                <label for="horario" class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nivel
                    Horario
                </label>
                {{-- <x-form.label for="horario" :value="__('Horario')" /> --}}

                <x-form.input id="horario" name="horario" type="text" class="block w-full mt-2" :value="old('horario')"
                    required autocomplete="horario" />

                <x-form.error :messages="$errors->get('horario')" />
            </div>
            <div class="col-span-2">
                <label for="bootcamps"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Modalidad bootcamps
                </label>
                <div class="mt-2">
                    <select id="bootcamps" name="bootcamps" autocomplete="bootcamps-name"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        required>
                        <option selected disabled>Seleccione...</option>
                        <option value="Presencial / híbrido" @if (old('buscar') == 'Presencial / híbrido') selected @endif>
                            Presencial / híbrido
                        </option>
                        <option value="Virtual" @if (old('buscar') == 'Virtual') selected @endif>Virtual
                        </option>
                    </select>
                </div>
                <x-form.error :messages="$errors->crearHorario->get('bootcamps')" />
            </div>
            <div class="col-span-2">
                <label for="nivel_formacion"
                    class="block text-sm font-medium leading-6 text-gray-800 dark:text-gray-300">Nivel
                    formación
                </label>
                <div class="mt-2">
                    <select id="nivel_formacion" name="nivel_formacion" autocomplete="nivel_formacion-name"
                        class="px-4 py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 block w-full"
                        required>
                        <option selected disabled>Seleccione...</option>
                        <option value="Explorador (Básico)" @if (old('nivel_formacion') == 'Explorador (Básico)') selected @endif>Explorador
                            (Básico)</option>
                        <option value="Integrador (Intermedio)" @if (old('nivel_formacion') == 'Integrador (Intermedio)') selected @endif>
                            Integrador (Intermedio)</option>
                        <option value="Innovador (Avanzado)" @if (old('nivel_formacion') == 'Innovador (Avanzado)') selected @endif>Innovador
                            (Avanzado)</option>
                    </select>
                </div>
                <x-form.error :messages="$errors->crearHorario->get('nivel_formacion')" />
            </div>
            <div class="flex items-center gap-4">
                <x-button>
                    {{ __('Guardar') }}
                </x-button>

                @if (session('status') == 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Guardado.') }}
                    </p>
                @endif
            </div>
        </div>
    </form>

</section>
