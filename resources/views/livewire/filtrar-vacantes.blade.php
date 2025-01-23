<div class="bg-gray-50 dark:bg-gray-900 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-700 dark:text-gray-100 text-center font-extrabold my-5">Buscar y Filtrar
        Vacantes</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent='leerDatosForm'>
            <div class="md:grid md:grid-cols-3 gap-6">
                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-800 dark:text-gray-300 uppercase font-bold"
                        for="termino">Término de
                        Búsqueda
                    </label>
                    <input id="termino" type="text" placeholder="Buscar por Término: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 dark:border-gray-700 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100"
                        wire:model="termino" />
                </div>

                <div class="mb-5">
                    <label
                        class="block mb-1 text-sm text-gray-800 dark:text-gray-300 uppercase font-bold">Categoría</label>
                    <select
                        class="rounded-md shadow-sm border-gray-300 dark:border-gray-700 p-2 w-full bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50"
                        wire:model="categoria">
                        <option>--Seleccione--</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-800 dark:text-gray-300 uppercase font-bold">Salario
                        Mensual</label>
                    <select
                        class="rounded-md shadow-sm border-gray-300 dark:border-gray-700 p-2 w-full bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50"
                        wire:model="salario">
                        <option>-- Seleccione --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-bold px-10 py-2 rounded-md cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar" />
            </div>
        </form>
    </div>
</div>
