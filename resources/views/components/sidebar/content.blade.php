<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Inicio"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Descargar Excel"
        href="{{ route('exceldowload') }}"
        :isActive="request()->routeIs('exceldowload')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Perfil"
        href="{{ route('profile.edit') }}"
        :isActive="request()->routeIs('profile.edit')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Listado de Participantes"
        href="{{ route('participantes.index') }}"
        :isActive="request()->routeIs('participantes.index')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Listado de Usuarios"
        href="{{ route('usuarios.index') }}"
        :isActive="request()->routeIs('usuarios.index')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Listado Matriculados"
        href="{{ route('matriculados.index') }}"
        :isActive="request()->routeIs('matriculados.index')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

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
