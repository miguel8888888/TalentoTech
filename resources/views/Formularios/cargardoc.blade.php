<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Cargar documento usuario</title>
    <script src="https://use.typekit.net/jrj6out.js"></script>
    <script>
        try {
            Typekit.load({
                async: false
            });
        } catch (e) {}
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/smartwizart/css/smart_wizard_all.min.css') }}">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- This pen isn't a fan of small view heights, check it out in  fullpage view for optimal viewing	 -->
    <div class="intro-container">
        <header>
            <nav class="flex items-center justify-between p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <img src="{{ asset('assets/img/logo_potenciadelavida.svg') }}" class="w-1/9">
                </div>
                <div class="w-full block flex-grow flex items-center w-auto">
                    <div class="text-sm flex-grow"></div>
                    <div>
                        <img src="{{ asset('assets/img/logo_mintic.svg') }}" class="w-1/9">
                    </div>
                </div>
            </nav>
        </header>
        <div class="w-full justify-center flex">
            <img src="{{ asset('assets/img/TalentoTech.png') }}" style="width: 45%">
        </div>
        <div class=" flex justify-center">
            <div class="bg-white rounded-xl py-4 px-2 mx-3 grid grid-cols-1" style="width: 90%">
                <p class="font-bold text-black col-span-3" style="margin-bottom: 1rem">
                    Estimado usuario por favor cargue la fotocopia de su cédula en el siguiente campo
                    <br>
                    <b>Nota:</b> El archivo debe ser PDF, y no mayor a 2MB
                </p>
                <form class="needs-validation" id="enviar_doc" action="/guardardoc/{{ $CC }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <label class="block px-4">
                        <span class="sr-only">Anexar Documento Identidad:</span>
                        <input type="file" class="block text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                        " name="url_archivo_cc" id="url_archivo_cc" style="margin: auto;" />
                    </label>
                    <div class="w-full mt-3">
                        <button id="sendDoc" type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cargar documento</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- <a href="{{ $url }}" class="button shift-camera-button z-100" id="inscribirme">
            <div class="border">
                <div class="left-plane"></div>
                <div class="right-plane"></div>
            </div>
            <div class="text text-xl">{{ $mensaje2 }}</div>
        </a> --}}
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        
    </div>
    <!-- partial -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r78/three.min.js'></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/smartwizart/js/jquery.smartWizard.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery_validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery_validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery_validate/localization/messages_es.min.js') }}"></script>

    <script>
        let form = $("#enviar_doc");
        function initValidate() {
            form.validate({
                onfocusout: false,
                rules: {
                    url_archivo_cc: {
                        required: true,
                        extension: "pdf",
                        maxsize: 2097152
                    }
                },
                messages: {
                    url_archivo_cc: {
                        required: "Selecciona al menos un archivo.",
                        maxsize: "El archivo debe ser PDF, y no mayor a 2MB"
                    },
                }
            });
        }
        window.addEventListener("load", function() {
            initValidate();
            $("#enviar_doc").each(function() {
                // Verificar si el valor del input no está vacío
                if ($(this).val() !== "") {
                    // Deshabilitar el input si tiene un valor
                    $(this).prop("disabled", true);
                }
            });
        });
        $("#enviar_doc").on("submit", function(event) {
            event.preventDefault();
            // 1085925417
            if (form.valid()) {
                $("#sendDoc").prop('disabled', true);
                $("#sendDoc").html('Enviando...');
                this.submit();
            }
        });
    </script>
</body>

</html>