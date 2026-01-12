<div class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

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
            <img src="{{ $user->avatar_url }}" alt="User Avatar"
                class="w-full h-full object-cover">
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
        <div class="mt-8 space-y-3">
            <x-danger-button wire:click="deleteUser" wire:confirm="Are you sure you want to delete this user?">Delete
                user</x-danger-button>
        </div>
    @endif

</div>
