<div class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    {{-- Toast Notification --}}
    @if (@session('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="mb-6 flex items-center gap-3 rounded-xl bg-white/10 backdrop-blur-md border border-white/10 px-4 py-3 text-sm text-green-300">

            <!-- Icon -->
            <span class="material-symbols-outlined text-green-400">
                check_circle
            </span>

            <!-- Message -->
            <span class="flex-1">
                {{ session('message') }}
            </span>

            <!-- Close -->
            <button @click="show = false" class="text-white/40 hover:text-white transition">
                ✕
            </button>
        </div>
    @endif

    <!-- Header -->
    <div class="relative flex items-center py-7">
        <!-- Back button -->
        <div class="absolute left-0">
            <x-arrow-back href="{{ route('profile') }}" wire:navigate></x-arrow-back>
        </div>

        <!-- Title -->
        <h1 class="mx-auto text-lg font-bold">
            Manage Users
        </h1>
    </div>

    <!-- Search -->
    <div class="relative mb-5">
        <!-- search icon -->
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-white/40">
            search
        </span>

        <!-- input -->
        <input wire:model.live.debounce.500ms="search" type="text" placeholder="Search user..."
            class="w-full bg-white/5 border border-white/10 rounded-xl py-3 pl-12 pr-12
               text-white placeholder-white/40
               outline-none focus:ring-1 focus:ring-primary/60">

        <!-- clear button -->
        <span wire:click="$set('search','')"
            class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer
               transition bg-white/10 rounded-full mr-3 hover:bg-white/20 
               {{ $search ? 'opacity-100 scale-100' : 'opacity-0 scale-90 pointer-events-none' }}">
            close_small
        </span>
    </div>


    <!-- User List -->
    <div class="space-y-3 mb-20">

        <!-- USER ITEM -->
        @foreach ($users as $user)
            <a href="{{ route('users.detail', $user) }}" wire:navigate
                class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 flex items-center justify-between transition hover:bg-white/10 active:scale-[0.98] capitalize">

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                        <img src="{{ $user->avatar_url }}"
                            class="h-full w-full object-cover">
                    </div>

                    <div>
                        <p class="font-semibold">{{ $user->name }}</p>
                        <p class="text-xs text-white/50">Joined · {{ $user->created_at->format('d M Y') }}</p>
                    </div>
                </div>

                <span class="material-symbols-outlined text-white/40">
                    chevron_right
                </span>
            </a>
        @endforeach
    </div>
</div>
