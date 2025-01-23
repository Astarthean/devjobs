<div>
    <livewire:filtrar-vacantes />

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-800 dark:text-gray-100 mb-12 sm:text-center">
                Nuestras vacantes disponibles
            </h3>

            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 divide-y divide-gray-200 dark:divide-gray-700">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center p-6 border border-gray-300 dark:border-gray-700 rounded-md">
                        <div class="md:flex-1 my-5 md:my-0">
                            <p class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                                {{ $vacante->titulo }}
                            </p>
                            <p class="text-base text-gray-600 dark:text-gray-400 my-2">
                                {{ $vacante->empresa }}
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 my-2">
                                {{ $vacante->categoria->categoria }}
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 my-2">
                                {{ $vacante->salario->salario }}
                            </p>

                            <p class="font-bold text-sm text-gray-600 dark:text-gray-400">
                                Último día para postularse:
                                <span class="font-normal">
                                    {{ $vacante->ultimo_dia->format('d-m-Y') }}
                                </span>
                            </p>
                        </div>

                        <div class="">
                            <a class="bg-indigo-600 hover:bg-indigo-700 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center"
                                href="{{ route('vacantes.show', $vacante->id) }}">
                                Ver vacante
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600 dark:text-gray-400">
                        No hay vacantes disponibles
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>
