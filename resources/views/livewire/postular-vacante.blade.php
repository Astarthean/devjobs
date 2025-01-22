<div class="bg-gray-700 rounded-lg p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-white text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <p class=" text-green-600 font-bold p-2 my-5">
            {{ session('mensaje') }}
        </p>
    @else
        <form wire:submit.prevent="postularme" class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum Vitae (PDF)')" />
                <x-text-input id="cv" type="file" wire:model='cv' accept=".pdf"
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full mt-1 p-2 file:bg-gray-600 file:text-white file:border-none file:rounded-md file:shadow-sm file:me-2 file:focus:bg-gray-600 file:hover:bg-gray-700 file:cursor-pointer" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror

            <x-primary-button class="my-5">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif
</div>
