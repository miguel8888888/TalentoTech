<main class="flex flex-col items-center flex-1 px-4 pt-6 sm:justify-center">
    <div class="flex w-2/3">
        <a href="/">
            <img src="/assets/img/TalentoTech.png" class="w-1/2 m-auto" alt="">
        </a>
    </div>

    <div class="w-full px-6 py-4 my-6 overflow-hidden bg-white rounded-md shadow-md sm:max-w-md dark:bg-dark-eval-1">
        {{ $slot }}
    </div>
</main>