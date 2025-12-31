<div class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

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
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-white/40">
            search
        </span>

        <input type="text" placeholder="Search user..."
            class="w-full bg-white/5 border border-white/10 rounded-xl py-3 pl-12 pr-4
                   text-white placeholder-white/40
                   outline-none focus:ring-1 focus:ring-primary/60">
    </div>

    <!-- User List -->
    <div class="space-y-3 mb-20">

        <!-- USER ITEM -->
        @foreach ($users as $user)
            <a href="{{ route('detail-user') }}" wire:navigate
                class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/avatar.jpg') }}">
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

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="{{ route('detail-user') }}" wire:navigate
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>

        <a href="/users/1"
            class="bg-white/5 border border-white/10 rounded-xl px-4 py-3
          flex items-center justify-between
          transition hover:bg-white/10 active:scale-[0.98]">

            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}">
                </div>

                <div>
                    <p class="font-semibold">Edo Sudrajat</p>
                    <p class="text-xs text-white/50">Joined · 12 Jan 2025</p>
                </div>
            </div>

            <span class="material-symbols-outlined text-white/40">
                chevron_right
            </span>
        </a>
    </div>
</div>
