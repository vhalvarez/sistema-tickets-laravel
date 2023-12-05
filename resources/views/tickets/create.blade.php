<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creación de Tickets') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="asunto" class="mb-3 block text-base font-medium text-white">Asunto</label>
                    <input type="text" name="asunto" id="asunto" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">

                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-3 block text-base font-medium text-white">Descripción</label>
                    <textarea name="descripcion" id="descripcion" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                </div>

                <div class="mb-5">
                    <label for="pais_id" class="mb-3 block text-base font-medium text-white">Pais</label>
                    <select name="pais_id" id="pais_id" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($paises as $pais)
                        <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="estado_id" class="mb-3 block text-base font-medium text-white">Estado</label>
                    <select name="estado_id" id="estado_id" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="municipio_id" class="mb-3 block text-base font-medium text-white">Municipio</label>
                    <select name="municipio_id" id="municipio_id" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="parroquia_id" class="mb-3 block text-base font-medium text-white">Parroquia</label>
                    <select name="parroquia_id" id="parroquia_id" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($parroquias as $parroquia)
                        <option value="{{ $parroquia->id }}">{{ $parroquia->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-center">
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Enviar
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
