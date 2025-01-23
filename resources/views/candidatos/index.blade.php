<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-3xl font-bold text-center my-10">
                        Candidatos de la vacante: {{ $vacante->titulo }}
                    </h1>

                    @forelse ($vacante->candidatos as $candidato)
                        <div
                            class="md:flex md:justify-between md:items-center p-6 border border-gray-200 dark:border-gray-700">
                            <ul class="w-full">
                                <li class="p-3 flex flex-col md:flex-row md:items-center">
                                    <div class="flex-1 leading-8">
                                        <p class="text-xl font-bold text-gray-800 dark:text-gray-100">
                                            {{ $candidato->user->name }}
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            {{ $candidato->user->email }}
                                        </p>
                                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                            Día que se postuló:
                                            <span class="font-normal">
                                                {{ $candidato->created_at->diffForHumans() }}
                                            </span>
                                        </p>
                                    </div>

                                    <div class="mt-4 md:mt-0 md:ml-6">
                                        <a href="{{ asset('storage/public/cv' . $candidato->cv) }}" target="_blank"
                                            rel="noreferrer noopener"
                                            class="inline-flex items-center shadow-sm px-4 py-2 border border-gray-300 dark:border-gray-700 text-sm leading-5 font-medium rounded-lg text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-900 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            Ver CV
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @empty
                        <p class="p-3 text-center text-sm text-gray-600 dark:text-gray-400">
                            No hay candidatos postulados en esta vacante
                        </p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
