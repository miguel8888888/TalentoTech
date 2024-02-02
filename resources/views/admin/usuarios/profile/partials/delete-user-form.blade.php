<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Eliminar Usuario') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Una vez que se elimine su usuario, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar el usuario, descargue cualquier dato o información que desee conservar.') }}
        </p>
    </header>

    <x-button
        variant="danger"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        {{ __('Eliminar usuario') }}
    </x-button>

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable
    >
        <form
            method="post"
            action="{{ route('profileuser.destroy', $user->id) }}"
            class="p-6"
        >
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium">
                {{ __('¿Estás seguro de que quieres eliminar el usuario?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Una vez que se elimina el usuario, todos sus recursos y datos se eliminarán permanentemente. Ingrese la contraseña para confirmar que desea eliminar permanentemente al usuario.') }}
            </p>

            <div class="mt-6 space-y-6">
                <x-form.label
                    for="delete-user-password"
                    value="Password"
                    class="sr-only"
                />

                <x-form.input
                    id="delete-user-password"
                    name="password"
                    type="password"
                    class="block w-3/4"
                    placeholder="Contraseña"
                />

                <x-form.error :messages="$errors->userDeletion->get('password')" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-button
                    type="button"
                    variant="secondary"
                    x-on:click="$dispatch('close')"
                >
                    {{ __('Cancelar') }}
                </x-button>

                <x-button
                    variant="danger"
                    class="ml-3"
                >
                    {{ __('Eliminar Cuenta') }}
                </x-button>
            </div>
        </form>
    </x-modal>
</section>
