<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-white my-3">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-2 p-4 my-5">
            <p class="text-m text-gray-500 font-bold">Empresa: <span class="font-normal">{{ $vacante->empresa }}</span>
            </p>
            <p class="text-m text-gray-500 font-bold">último día para postularse: <span
                    class="font-normal">{{ $vacante->ultimo_dia->translatedFormat('d F Y') }}</span></p>
            <p class="text-m text-gray-500 font-bold">Categoría: <span
                    class="font-normal">{{ $vacante->categoria->categoria }}</span></p>
            <p class="text-m text-gray-500 font-bold">Salario: <span
                    class="font-normal">{{ $vacante->salario->salario }}</span></p>

        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-5 mt-5">
        <div class="md:col-span-3">
            <h2 class="text-2xl font-bold mb-5 text-white">Descripción del Puesto</h2>
            <p class="text-white">{{ $vacante->descripcion }}</p>
        </div>

        <div class="md:col-span-3">
            <img src="{{ asset('storage/public/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen Vacante' . $vacante->titulo }}">
        </div>
    </div>

    @guest
        <div class="mt-5 bg-slate-800 border rounded-lg border-white p-5 text-center text-white">
            <p>
                ¿Deseas postularte a esta vacante? <a href="{{ route('register') }}" class="font-bold text-indigo-500">Obten
                    una cuenta y aplica a esta y otras vacantes</a>
            </p>
        </div>
    @endguest
</div>
