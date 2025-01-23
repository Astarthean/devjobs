<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <h1 class="text-3xl font-bold text-center my-5  ">Mis notificaciones</h1>

                    @forelse ($notificaciones as $notificacion)
                        <div class="mb-2 p-5 border rounded-lg lg:flex lg:justify-between lg:items-center">
                            <div>
                                <p class="">
                                    Tienes un nuevo candidato en la vacante:
                                    <span class="font-bold text-indigo-600">
                                        {{ $notificacion->data['nombre_vacante'] }}
                                    </span>
                                </p>
                                <p class="">
                                    <span class="font-bold text-gray-400">
                                        {{ $notificacion->created_at->diffForHumans() }}
                                    </span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                {{-- <a href="{{ route('candidatos.index', $notificacion->data['id_vacante']) }}"
                                    class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-xl">
                                    Ver candidatos
                                </a> --}}
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600">
                            No tienes notificaciones nuevas
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
