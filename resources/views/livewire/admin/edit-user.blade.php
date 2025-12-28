<div class="min-h-screen bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    <!-- HEADER -->
    <div class="relative flex items-center mb-6">
        <div class="absolute left-0">
            <x-close href="{{ route('detail-user') }}" />
        </div>

        <h1 class="mx-auto text-lg font-bold">Edit User</h1>
    </div>

    <!-- FORM -->
    <form class="space-y-5">

        <!-- Avatar -->
        <div class="flex justify-center">
            <div class="relative">
                <div class="w-24 h-24 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/avatar.jpg') }}" alt="">
                </div>

                <button type="button"
                    class="absolute -bottom-1 -right-1 w-8 h-8 rounded-full bg-primary text-black flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm">edit</span>
                </button>
            </div>
        </div>

        <!-- Name -->
        <div>
            <label class="text-sm text-white/70">Full Name</label>
            <input type="text"
                class="mt-2 w-full bg-black/30 rounded py-3 px-4
                       text-white placeholder-white/30
                       outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm"
                placeholder="Edo Sudrajat">
        </div>

        <!-- Email -->
        <div>
            <label class="text-sm text-white/70">Email</label>
            <input type="email"
                class="mt-2 w-full bg-black/30 rounded py-3 px-4
                       text-white placeholder-white/30
                       outline-none focus:ring-1 focus:ring-primary/60 placeholder:sm"
                placeholder="admin@fintech.com">
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="text-sm text-white/70">Status</label>
            <select
                class="mt-2 w-full bg-black/30 rounded py-3 px-4 text-white outline-none focus:ring-1 focus:ring-primary/60appearance-none">
                <option class="bg-zinc-900 text-white">Active</option>
                <option class="bg-zinc-900 text-white">Suspended</option>
            </select>

        </div>

        <!-- ACTIONS -->
        <div class="pt-6 space-y-3">
            <x-button-save>Save Changes</x-button-save>
        </div>

    </form>
</div>
