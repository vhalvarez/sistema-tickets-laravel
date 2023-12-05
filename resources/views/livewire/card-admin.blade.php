<card class="bg-gray-700 p-8 w-[32rem]">

    <!-- Header -->
    <header class="flex font-light text-sm">

        @if($ticket->status_nombre === 'Abierto')
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#16a34a">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
        </svg>
        @elseif($ticket->status_nombre === 'En Espera')
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#fbbf24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
        </svg>

        @else
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#b91c1c">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
        </svg>
        @endif


        <p>{{$ticket->status_nombre}}</p>
    </header>

    <!-- Title -->
    <h2 class="font-bold text-3xl mt-2 text-white">
        {{$ticket->asunto}}
    </h2>

    <!-- Tags -->
    <p class="mt-5">
        Dirección:
    <p class="text-white">{{$ticket->parroquia_nombre}} {{$ticket->municipio_nombre}} {{$ticket->estado_nombre}}
        {{$ticket->pais_nombre}} </p>

    </p>



    <!-- Description -->
    <h3 class="font-bold text-xl mt-8"> Descripción </h3>
    <p class="font-light"> {{$ticket->descripcion}}</p>

    <!-- Button -->
    {{-- <button class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
        <p> Ver más </p>
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button> --}}

    <a href="{{ route('tickets.edit', $ticket->id)}}" class="bg-yellow-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group btn cursor-pointer" >
        <p> Editar </p>
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>

    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este ticket?')">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group btn cursor-pointer">
            <p> Eliminar </p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </form>

</card>
