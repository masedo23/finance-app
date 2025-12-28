    <!-- Bottom Nav -->
    {{-- @auth --}}
    <nav class="fixed bottom-0 left-0 w-full z-50 px-5 pt-2">
        <div
            class="h-16 rounded-t-2xl flex justify-around items-center backdrop-blur-xl
               border border-white/20
               shadow-[0_-8px_30px_rgba(0,0,0,0.4)]
               ring-1 ring-white/10">

            <a href="{{ route('home') }}" wire:navigate
                class="{{ request()->routeIs('home') ? 'text-primary' : 'text-gray-400' }} flex flex-col items-center">
                <span class="material-symbols-outlined text-2xl">home</span>
            </a>

            <a href="{{ route('history') }}" wire:navigate
                class="{{ request()->routeIs('history') ? 'text-primary' : 'text-gray-400' }} flex flex-col items-center">
                <span class="material-symbols-outlined text-2xl">history</span>
            </a>

            <a href="{{ route('create') }}" wire:navigate
                class="-mt-6 h-14 w-14 rounded-full bg-primary text-black flex items-center justify-center shadow-[0_0_20px_rgba(13,242,13,0.4)] border-4 border-background-dark">
                <span class="material-symbols-outlined text-3xl">add_2</span> </a>

            <a href="{{ route('notes') }}" wire:navigate
                class="{{ request()->routeIs('notes') ? 'text-primary' : 'text-gray-400' }} flex flex-col items-center">
                <span class="material-symbols-outlined text-2xl">add_notes</span>
            </a>

            <a href="{{ route('profile') }}" wire:navigate
                class="{{ request()->routeIs('profile') ? 'text-primary' : 'text-gray-400' }} flex flex-col items-center">
                <span class="material-symbols-outlined text-2xl">account_circle</span>
            </a>
        </div>
    </nav>
    {{-- @endauth --}}
    <!-- End Bottom Nav -->
