<x-layout>
    @include ('games._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($games->count())
            <x-games-grid :games="$games"/>

            {{ $games->links() }}
        @else
            <p class="text-center"> No game yet. Please check back later.</p>
        @endif
    </main>
</x-layout>

