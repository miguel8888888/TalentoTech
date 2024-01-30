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
                    @include('admin.participantes.edit.update-hogar-form') 
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
                <div class="w-full mt-3">
                    <button id="sendForm" type="submit" class=" rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 w-full">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let form = $("#enviar_matricula");

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

