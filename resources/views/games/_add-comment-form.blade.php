@auth
    <x-panel>

        <form method="POST" action="/games/{{ $game->slug }}/comments">
            @crsf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id }}"
                     alt=""
                     width="40"
                     height="60"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate ?</h2>
            </header>
            <div class="mt-6">
                                <textarea name="body"
                                          class="w-full text-sm focus:outline-none focus:ring"
                                          rows="5"
                                          placeholder="Quick, think of something to say !"
                                          required></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Submit</x-form.button>
            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Reigster</a> or
        <a href="/login" class="hover:undeline">Log in </a> to leave a comment
    </p>
@endauth
