<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">
    <x-sidebar.link title="Inicio" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    @props([
    'active' => false,
    'title' => 'Estadisticas'
    ])

    <div class="relative" x-data="{ open: @json($active) }">
        <x-sidebar.link
            collapsible
            title="{{ $title }}"
            x-on:click="open = !open"
            isActive="{{ $active }}"
        >
            @if ($icon ?? false)
                <x-slot name="icon">
                    {{ $icon }}
                </x-slot>
            @endif
        </x-sidebar.link>
        <div
            x-show="open && (isSidebarOpen || isSidebarHovered)"
            x-collapse
        >
            <ul
                class="relative px-0 pt-2 pb-0 ml-5 before:w-0 before:block before:absolute before:inset-y-0 before:left-0 before:border-l-2 before:border-l-gray-200 dark:before:border-l-gray-600"
            >
            <x-sidebar.link title="Graficas" href="{{ route('estadisticas') }}" :isActive="request()->routeIs('estadisticas')">
                <x-slot name="icon">
                    <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
            </ul>
        </div>
    </div>

    

   

    @can('reportes-listar')
        <x-sidebar.link title="Descargar Excel" href="{{ route('exceldowload') }}" :isActive="request()->routeIs('exceldowload')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan

    <x-sidebar.link title="Perfil" href="{{ route('profile.edit') }}" :isActive="request()->routeIs('profile.edit')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @can('reportes-listar')
        <x-sidebar.link title="Listado de Participantes" href="{{ route('participantes.index') }}" :isActive="request()->routeIs('participantes.*')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan
    @can('participante-listar')
        <x-sidebar.link title="Listado de Usuarios" href="{{ route('usuarios.index') }}" :isActive="request()->routeIs('usuarios.index')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan
    @can('reportes-listar')
        <x-sidebar.link title="Listado de Horarios" href="{{ route('horarios.index') }}" :isActive="request()->routeIs('horarios.*')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan

    {{-- <x-sidebar.dropdown
        title="Buttons"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Text button"
            href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')"
        />
        <x-sidebar.sublink
            title="Icon button"
            href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')"
        />
        <x-sidebar.sublink
            title="Text with icon"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
    </x-sidebar.dropdown> --}}

    {{-- <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Futuros btn
    </div> --}}

    {{-- @php
        $links = [
        'usuarios.index',
    ];
    @endphp

    @foreach ($links as $index => $link)
        <x-sidebar.link title="Acción {{ $index + 1 }}" href="{{ route($link) }}" />
    @endforeach --}}

</x-perfect-scrollbar>
