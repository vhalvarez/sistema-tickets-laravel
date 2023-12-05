<div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-md text-gray-100">
        <!-- card header -->
        <div class="px-6 py-4 bg-gray-800 border-b border-gray-600 font-bold uppercase">
            {{ $ticket->asunto }}
        </div>

        <!-- card body -->
        <div class="p-6 bg-gray-800 border-b border-gray-600">
            <!-- content goes here -->
            {{$ticket->descripcion}}
        </div>

        <!-- card footer -->
        <div class="p-6 bg-gray-800 border-gray-200 text-right">
            <!-- button link -->

            @if ($ticket->status_id === 1)
            <button
                class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase">Abierto</button>
            @elseif($ticket->status_id === 2)
            <button
                class="bg-yellow-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase">En
                espera</button>

            @else
            <button
                class="bg-red-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase">Cerrado</button>
            @endif

        </div>
    </div>
</div>
