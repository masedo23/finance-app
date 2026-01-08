<div
    class="relative min-h-screen w-full overflow-x-hidden font-display bg-background-dark text-white selection:bg-primary selection:text-black bg-linear-to-b from-[#102210] via-[#081608] to-[#020502]">

    <!-- Background -->
    <div class="fixed inset-0 -z-10 bg-[radial-gradient(circle_at_top_right,#1a401a,#051a05,black)]"></div>

    <!-- HEADER -->
    <header class="flex items-center px-4 pt-10 pb-3">

        <!-- LEFT -->
        <x-arrow-back href="{{ route('home') }}"></x-arrow-back>

        <!-- CENTER -->
        <h1 class="flex-1 text-center text-lg font-bold tracking-wide">
            Profile
        </h1>

        <!-- RIGHT (SPACER) -->
        <div class="size-10"></div>

    </header>


    <!-- PROFILE PHOTO -->
    <section class="flex flex-col items-center gap-4 px-6 py-8">

        <!-- AVATAR -->
        <div class="relative">
            <div class="relative size-32 rounded-full overflow-hidden border border-white/10">
                <div class="size-full bg-cover bg-center"
                    style="background-image:url('{{ $avatar ? $avatar->temporaryUrl() : $user->avatar_url }}')">
                </div>
                <!-- LOADING OVERLAY -->
                <div wire:loading.flex wire:target="avatar,saveAvatar"
                    class="absolute inset-0 z-10 flex items-center justify-center bg-black/50 backdrop-blur">
                    <div class="size-8 rounded-full border-2 border-primary border-t-transparent animate-spin"></div>
                </div>

            </div>

            <!-- EDIT BUTTON -->
            <button type="button"
                class="absolute bottom-1 right-1 size-9 z-10 rounded-full bg-primary text-black flex items-center justify-center shadow"
                onclick="document.getElementById('fileInput').click()">
                <span class="material-symbols-outlined text-[18px]">edit</span>
            </button>

            <!-- FILE INPUT -->
            <input type="file" id="fileInput" class="hidden" wire:model="avatar" accept="image/jpeg,image/png" />
        </div>

        <!-- ACTION BUTTONS -->
        @if ($avatar)
            <div class="flex gap-3">
                <button wire:click="saveAvatar"
                    class="px-4 py-2 rounded bg-primary text-black text-sm font-semibold cursor-pointer">
                    Simpan
                </button>

                <button wire:click="cancelAvatar"
                    class="px-4 py-2 rounded bg-white/10 text-sm font-semibold cursor-pointer">
                    Batal
                </button>
            </div>
        @endif

        <!-- ERROR -->
        @error('avatar')
            <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror

        <div class="text-center">
            <h2 class="text-2xl font-bold capitalize inline-flex items-center gap-2">
                <span>{{ $user->name }}</span>

                @can('viewAny', $user)
                    <span class="material-symbols-outlined text-blue-500 text-xl">
                        verified
                    </span>
                @endcan
            </h2>

            <p class="text-primary/90 text-sm">{{ $user->email }}</p>
        </div>


    </section>


    <!-- IDENTITY -->
    <section class="px-4 mb-5">
        <p class="text-xs font-bold uppercase tracking-widest text-white/50 px-4 mb-3">
            Status
        </p>

        <div class="rounded-md bg-white/5 backdrop-blur border border-white/10 overflow-hidden">

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

    @can('viewAny', $user)
        <section class="px-4 mb-5">
            <p class="text-xs font-bold uppercase tracking-widest text-white/50 px-4 mb-3">
                Permission
            </p>

            <a href="{{ route('users.index') }}" wire:navigate
                class="block rounded-md bg-white/5 backdrop-blur border border-white/10 overflow-hidden">

                <div class="flex items-center gap-4 p-4">
                    <div class="size-10 rounded-full bg-white/5 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">
                            manage_accounts
                        </span>
                    </div>
                    <p class="font-semibold text-white/80">Manage Users</p>
                </div>
            </a>
        </section>
    @endcan

    <!-- About -->
    <section class="px-4 mb-5">
        <p class="text-xs font-bold uppercase tracking-widest text-white/50 px-4 mb-3">
            About Application
        </p>

        <div class="rounded-md bg-white/5 backdrop-blur border border-white/10 overflow-hidden">

            <a href="{{ route('about') }}" wire:navigate class="flex items-center gap-4 p-4">
                <div class="size-10 rounded-full bg-white/5 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <div class="flex-1">
                    <p class="font-semibold text-white/80">About</p>
                </div>
            </a>
        </div>
    </section>

    <!-- LOGOUT -->
    <section class="px-4 mt-8 pb-25">

        <x-danger-button wire:click="logout" class="text-red-400">Log Out --></x-danger-button>

        <p class="text-center text-xs text-white/30 mt-4">
            Version 1.0.0
        </p>
    </section>
    <x-bottom-navbar />

</div>
