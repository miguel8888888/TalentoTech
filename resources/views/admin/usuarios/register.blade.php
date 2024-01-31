<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Crear nuevo perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 mb-6">
            {{ __("Aquí creara un nuevo perfil con la dirección de correo electrónico y una contraseña.") }}
        </p>
    </header>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf

        <div class="grid gap-6">
            <!-- Name -->
            <div class="space-y-2">
                <x-form.label
                    for="name"
                    :value="__('Nombre')"
                />

                <x-form.input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                    </x-slot>

                    <x-form.input
                        withicon
                        id="name"
                        class="block w-full"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        placeholder="{{ __('Nombre') }}"
                    />
                </x-form.input-with-icon-wrapper>
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
                <x-form.label
                    for="email"
                    :value="__('Correo')"
                />

                <x-form.input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                    </x-slot>

                    <x-form.input
                        withicon
                        id="email"
                        class="block w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        placeholder="{{ __('Correo') }}"
                    />
                </x-form.input-with-icon-wrapper>
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <x-form.label
                    for="password"
                    :value="__('Contraseña')"
                />

                <x-form.input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                    </x-slot>

                    <x-form.input
                        withicon
                        id="password"
                        class="block w-full"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="{{ __('Contraseña') }}"
                    />
                </x-form.input-with-icon-wrapper>
            </div>

            <!-- Confirm Password -->
            <div class="space-y-2">
                <x-form.label
                    for="password_confirmation"
                    :value="__('Confirmar Contraseña')"
                />

                <x-form.input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                    </x-slot>

                    <x-form.input
                        withicon
                        id="password_confirmation"
                        class="block w-full"
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="{{ __('Confirmar Contraseña') }}"
                    />
                </x-form.input-with-icon-wrapper>
            </div>

            <div>
                <x-button class="justify-center gap-2">
                    <span>{{ __('Registrar') }}</span>
                </x-button>
            </div>
        </div>
    </form>

</section>