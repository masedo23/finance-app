<div x-data="{ deleteModal: false }"
    class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    <!-- HEADER -->
    <div class="relative flex items-center mb-6">
        <div class="absolute left-0">
            <x-arrow-back href="{{ route('users.index') }}"></x-arrow-back>
        </div>

        <h1 class="mx-auto text-lg font-bold">User Detail</h1>
    </div>

    <!-- PROFILE CARD -->
    <div class="bg-white/5 border border-white/10 rounded-md p-6 flex flex-col items-center text-center">
        <div class="w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center mb-3 overflow-hidden">
            <img src="{{ $user->avatar_url }}" alt="User Avatar" class="w-full h-full object-cover">
        </div>

        <h2 class="text-lg font-semibold">{{ $user->name_formatted }}</h2>
        <p class="text-sm text-white/50">{{ $user->email }}</p>
        <p class="text-xs text-white/40 mt-1">Joined · {{ $user->created_at->format('d M Y') }}</p>
    </div>

    <!-- INFO -->
    <div class="mt-6 space-y-3">
        <div class="bg-white/5 border border-white/10 rounded p-4 flex justify-between">
            <span class="text-white/60">Role</span>
            <span class="font-medium text-primary capitalize">{{ $user->role }}</span>
        </div>

        <div class="bg-white/5 border border-white/10 rounded p-4 flex justify-between">
            <span class="text-white/60">Last Activity</span>
            <span
                class="text-white/60">{{ $user->last_activity_at ? $user->last_activity_at->diffForHumans() : 'Never' }}</span>
        </div>
    </div>

    <!-- ACTIONS -->
    @if ($user->id !== auth()->id())
        <button type="button" @click="deleteModal = true"
            class="mt-8 space-y-3 text-white60 w-full h-11 cursor-pointer rounded border border-red-500/30 p-3 font-semibold text-sm bg-red-500/10 hover:border-red-500 hover:bg-red-500/10 active:scale-[0.98] transition flex items-center justify-center gap-2">Delete
            user
        </button>
    @endif

    <!-- Modal Delete User -->
    <div x-show="deleteModal" x-transition.opacity x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70">

        <div @click.outside="deleteModal = false"
            class="w-full max-w-sm rounded-2xl bg-[#0b0b0b] border border-white/10 p-6">

            <!-- Header -->
            <div class="flex items-center gap-3 mb-4">
                <div class="h-10 w-10 rounded-full bg-red-500/20 text-red-400 flex items-center justify-center">
                    <span class="material-symbols-outlined">warning</span>
                </div>

                <h2 class="text-lg font-semibold">
                    Delete Confirmation
                </h2>
            </div>

            <!-- Body -->
            <p class="text-white/70 text-sm mb-6">
                This action will permanently delete this user.
                This action <span class="font-semibold text-red-400">cannot be undone</span>.
                Are you sure you want to continue?
            </p>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">
                <button @click="deleteModal = false" type="button"
                    class="px-4 py-2 rounded-md text-sm bg-white/10 hover:bg-white/20 transition">
                    Cancel
                </button>

                <button @click="$wire.deleteUser(); deleteModal = false" type="button"
                    class="px-4 py-2 rounded-md text-sm bg-red-500 text-white/90 hover:bg-red-400 transition">
                    Delete Anyway
                </button>
            </div>
        </div>
    </div>


</div>
