<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">
    <x-sidebar.link title="Inicio" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.home class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>







        @can('reportes-listar')
            <x-sidebar.link title="Descargar Excel" href="{{ route('exceldowload') }}" :isActive="request()->routeIs('exceldowload')">
                <x-slot name="icon">
                    <x-icons.download class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
        @endcan
        @role('Gestor')
            <x-sidebar.link title="Descargar Excel" href="{{ route('exceldowload') }}" :isActive="request()->routeIs('exceldowload')">
                <x-slot name="icon">
                    <x-icons.download class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
        @endrole


    <x-sidebar.link title="Perfil" href="{{ route('profile.edit') }}" :isActive="request()->routeIs('profile.edit')">
        <x-slot name="icon">
            <x-icons.perfil class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    @can('reportes-listar')
        <x-sidebar.link title="Listado de Participantes" href="{{ route('participantes.index') }}" :isActive="request()->routeIs('participantes.*')">
            <x-slot name="icon">
                <x-icons.list class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan
    @role('Verificador')
        <x-sidebar.link title="Listado de Participantes" href="{{ route('participantes.index') }}" :isActive="request()->routeIs('participantes.*')">
            <x-slot name="icon">
                <x-icons.list class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endrole
    @role('Administrador')
        <x-sidebar.link title="Listado de Usuarios" href="{{ route('usuarios.index') }}" :isActive="request()->routeIs('usuarios.index')">
            <x-slot name="icon">
                <x-icons.users class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endrole
    @can('reportes-listar')
        <x-sidebar.link title="Listado de Horarios" href="{{ route('horarios.index') }}" :isActive="request()->routeIs('horarios.*')">
            <x-slot name="icon">
                <x-icons.horarios class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endcan


    {{-- @php
        $roles = auth()->user()->roles;
        // Aquí, puedes agregar un mensaje de log para verificar qué roles y permisos tiene el usuario
        // dd('Roles del usuario:', $user->roles->pluck('name')->toArray());
        foreach ($roles as $role) {
            $permissions = $role->permissions;
            // Aquí puedes hacer lo que necesites con los permisos asociados a cada rol
        }
        dd($permissions);
    @endphp --}}
    @can('estadisticas-listar')
        @props([
            'active' => false,
            'title' => 'Estadísticas',
        ])
        <div class="relative" x-data="{ open: @json($active) }">
            <x-sidebar.link collapsible title="{{ $title }}" x-on:click="open = !open"
                isActive="{{ $active }}">
                <x-slot name="icon">
                    <x-icons.estadisticas class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
            <div x-show="open && (isSidebarOpen || isSidebarHovered)" x-collapse>
                <ul
                    class="relative px-0 pt-2 pb-0 ml-5 before:w-0 before:block before:absolute before:inset-y-0 before:left-0 before:border-l-2 before:border-l-gray-200 dark:before:border-l-gray-600">
                    <x-sidebar.link title="Gráficas" href="{{ route('estadisticas') }}" :isActive="request()->routeIs('estadisticas')">
                        <x-slot name="icon">
                            <x-icons.graficas class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                        </x-slot>
                    </x-sidebar.link>
                </ul>
            </div>
        </div>
    @endcan

    @role('Administrador')
    <x-sidebar.link title="Listado Académico" href="{{ route('infoacademica.index') }}" :isActive="request()->routeIs('infoacademica.index')">
            <x-slot name="icon">
                <x-icons.list class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>

        <x-sidebar.link title="Gráficas Académicas" href="{{ route('infoacademica.graficas') }}" :isActive="request()->routeIs('infoacademica.graficas')">
            <x-slot name="icon">
                <x-icons.graficas class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endrole


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
