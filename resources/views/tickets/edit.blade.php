<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Ticket') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('tickets.updateStatus', $ticket->id) }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="asunto" class="mb-3 block text-base font-medium text-white">Asunto</label>
                    <p
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        {{ $ticket->asunto}}
                    </p>

                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-3 block text-base font-medium text-white">Descripción</label>
                    <p
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        {{ $ticket->descripcion}}
                    </p>
                </div>

                <div class="mb-5">
                    <label for="status_id" class="mb-3 block text-base font-medium text-white">Status</label>
                    <select name="status_id" id="status_id" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-gray-900 py-3 px-6 text-base font-medium text-[#6A64F1] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->nombre }}</option>
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
