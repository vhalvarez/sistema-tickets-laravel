<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex justify-between max-w-7xl mx-auto sm:px-6 lg:px-8">


            {{-- {{ $tickets }} --}}
            @if(@Auth::user()->hasRole('Admin'))
            @livewire('admin.home')


            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 place-content-between">
                @foreach ($tickets as $ticket)
                @livewire('card-admin', ['ticket' => $ticket])
                @endforeach
            </div>


            @else

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 place-content-between">
                @foreach ($tickets as $ticket)
                @livewire('card', ['ticket' => $ticket])
                @endforeach
            </div>

            @endif


        </div>
    </div>
</x-app-layout>
