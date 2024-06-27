<div class="w-full p-2 lg:w-1/3 md:w-1/2">
    <div
        class="flex flex-col px-6 py-10 overflow-hidden bg-white dark:bg-gradient-to-br dark:from-purple-400 dark:via-blue-400 dark:to-blue-500 rounded-xl shadow-lg duration-300 dark:shadow-2xl group">
        <div class="flex flex-row justify-between items-center">
            <div class="px-4 py-4 bg-gray-300 rounded-xl bg-opacity-30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-gray-50" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 dark:text-gray-50">{{ $count }}</h1>
        <div class="flex flex-row justify-between dark:text-gray-200">
            <p>{{ $description }}</p>
        </div>
    </div>
</div>
