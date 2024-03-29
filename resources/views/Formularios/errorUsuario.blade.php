<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TalentoTech - Usuario no existe</title>
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
            <div class="bg-white rounded-xl py-4 px-2 mx-3 grid grid-cols-3" style="width: 90%">
                <div class="correct col-span-3 text-5xl m-4">
                    <a href="https://twitter.com/Christopher4Lis" target="_blank"></a>
                    <i class="fa fa-lg fa-circle-xmark"></i>
                </div>
                <p class="font-bold text-black col-span-3" style="margin-bottom: 1rem">
                    {{ $mensaje }}
                </p>
            </div>
        </div>
        <a href="{{ $url }}" class="button shift-camera-button z-100" id="inscribirme">
            <div class="border">
                <div class="left-plane"></div>
                <div class="right-plane"></div>
            </div>
            <div class="text text-xl">{{ $mensaje2 }}</div>
        </a>
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

    
</body>

</html>