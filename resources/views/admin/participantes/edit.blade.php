<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Perfil Participante') }}
        </h2>
    </x-slot>

    <form class="needs-validation" id="enviar_matricula" action="/update/participante/{{$participantes->id}}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                <div class="w-full">
                    @include('admin.participantes.edit.update-personal-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                <div class="w-full">
                    @include('admin.participantes.edit.update-familiar-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                <div class="w-full">
                    @include('admin.participantes.edit.update-discapacidad-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                <div class="w-full">
                    {{-- @include('admin.participantes.edit.update-hogar-form') --}}
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
