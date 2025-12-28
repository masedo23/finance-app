<div class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    <!-- HEADER -->
    <div class="relative flex items-center mb-6">
        <div class="absolute left-0">
            <x-arrow-back href="{{ route('daftar-user') }}"></x-arrow-back>
        </div>

        <h1 class="mx-auto text-lg font-bold">User Detail</h1>
    </div>

    <!-- PROFILE CARD -->
    <div class="bg-white/5 border border-white/10 rounded-md p-6 flex flex-col items-center text-center">
        <div class="w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center mb-3 overflow-hidden">
            <img src="{{ asset('img/avatar.jpg') }}">
        </div>

        <h2 class="text-lg font-semibold">Edo Sudrajat</h2>
        <p class="text-sm text-white/50">admin@fintech.com</p>
        <p class="text-xs text-white/40 mt-1">Joined · 12 Jan 2025</p>
    </div>

    <!-- INFO -->
    <div class="mt-6 space-y-3">
        <div class="bg-white/5 border border-white/10 rounded p-4 flex justify-between">
            <span class="text-white/60">Role</span>
            <span class="font-medium text-primary">Administrator</span>
        </div>

        <div class="bg-white/5 border border-white/10 rounded p-4 flex justify-between">
            <span class="text-white/60">Status</span>
            <span class="text-green-400 font-medium">Active</span>
        </div>

        <div class="bg-white/5 border border-white/10 rounded p-4 flex justify-between">
            <span class="text-white/60">Last Login</span>
            <span class="text-white/70">2 hours ago</span>
        </div>
    </div>

    <!-- ACTIONS -->
    <div class="mt-8 space-y-3">
        <a href="{{ route('edit-user') }}" wire:navigate
            class="inline-block text-center w-full h-11 leading-11 cursor-pointer rounded bg-primary/25 text-primary font-semibold text-sm tracking-wide border border-primary/30 hover:bg-primary/25 hover:border-primary active:scale-[0.98] transition">Edit
            user</a>
        <x-danger-button>Delete user</x-danger-button>
    </div>
</div>
