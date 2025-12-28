<div
    class="relative min-h-screen w-full overflow-x-hidden font-display bg-background-dark text-white selection:bg-primary selection:text-black">

    <!-- Background -->
    <div class="fixed inset-0 -z-10 bg-[radial-gradient(circle_at_top_right,#1a401a,#051a05,black)]"></div>

    <!-- HEADER -->
    <header class="sticky top-0 z-20 backdrop-blur bg-background-dark/40">
        <div class="flex items-center px-4 pt-10 pb-3">

            <!-- LEFT -->
            <x-arrow-back href="{{ route('home') }}"></x-arrow-back>

            <!-- CENTER -->
            <h1 class="flex-1 text-center text-lg font-bold tracking-wide">
                Profile
            </h1>

            <!-- RIGHT (SPACER) -->
            <div class="size-10"></div>

        </div>
    </header>


    <!-- PROFILE -->
    <section class="flex flex-col items-center gap-6 px-6 py-8">
        <div class="relative">
            <div class="absolute -inset-1 rounded-full"></div>

            <div class="relative size-32 rounded-full p-1
            border border-white/10 overflow-hidden">
                <div class="size-full rounded-full bg-cover bg-center"
                    style="background-image:url('{{ asset('img/avatar.jpg') }}')">
                </div>
            </div>

            <!-- Blade / Livewire component -->
            <div class="relative">
                <!-- Tombol edit -->
                <button
                    class="absolute bottom-1 right-1 size-9 rounded-full bg-primary text-black flex items-center justify-center shadow"
                    onclick="document.getElementById('fileInput').click()">
                    <span class="material-symbols-outlined text-[18px]">edit</span>
                </button>

                <!-- Input file tersembunyi Livewire -->
                <input type="file" id="fileInput" class="hidden" wire:model="photo" accept="image/*">
            </div>

            <!-- Preview otomatis jika mau -->
            {{-- @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" class="w-24 h-24 object-cover mt-2" />
            @endif --}}

        </div>

        <div class="text-center">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                Edo Sudrajat
                <span class="material-symbols-outlined text-blue-500">
                    verified
                </span>
            </h2>

            <p class="text-primary/90 font-sm">admin@fintech.com</p>
        </div>
    </section>

    <!-- IDENTITY -->
    <section class="px-4 mb-10">
        <p class="text-xs font-bold uppercase tracking-widest text-white/50 px-4 mb-3">
            Identity
        </p>

        <div class="rounded-md bg-white/5 backdrop-blur border border-white/10 overflow-hidden">
            <div class="flex items-center gap-4 p-4 border-b border-white/10">
                <div class="size-10 rounded-full bg-white/5 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined">call</span>
                </div>

                <div class="flex-1">
                    <p class="text-xs uppercase text-white/50">Mobile Number</p>
                    <p class="font-semibold">+1 (555) 019-2834</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-4">
                <div class="size-10 rounded-full bg-white/5 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined">verified_user</span>
                </div>
                <div class="flex-1">
                    <p class="text-xs uppercase text-white/50">ID Status</p>
                    <p class="font-semibold text-primary">Verified</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4">
        <p class="text-xs font-bold uppercase tracking-widest text-white/50 px-4 mb-3">
            Permission
        </p>

        <a href="{{ route('daftar-user') }}" wire:navigate
            class="block rounded-md bg-white/5 backdrop-blur border border-white/10 overflow-hidden">

            <div class="flex items-center gap-4 p-4">
                <div class="size-10 rounded-full bg-white/5 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined">
                        manage_accounts
                    </span>
                </div>
                <p class="font-semibold">Manage Users</p>
            </div>
        </a>
    </section>

    <!-- LOGOUT -->
    <section class="px-4 mt-8 pb-25">

        <x-danger-button>Log Out --></x-danger-button>

        <p class="text-center text-xs text-white/30 mt-4">
            Version 1.0.0
        </p>
    </section>
    <x-bottom-navbar />

</div>
