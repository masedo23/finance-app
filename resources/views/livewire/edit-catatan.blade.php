<div x-data="{ deleteModal: false }"
    class="relative min-h-screen flex flex-col overflow-hidden bg-zinc-950 text-white font-inter">

    <!-- Background -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute -top-32 -left-32 w-[60%] h-[60%] 
                    bg-emerald-400/15 blur-[140px]">
        </div>

        <div class="absolute -bottom-32 -right-32 w-[50%] h-[50%] 
                    bg-emerald-500/10 blur-[120px]">
        </div>

        <div class="absolute inset-0 bg-linear-to-b from-zinc-900 via-zinc-900 to-black"></div>
    </div>

    <!-- Header -->
    <header class="relative z-10 flex items-center justify-between px-6 pt-12 pb-4">
        <x-close href="{{ route('notes') }}"></x-close>

        <h1 class="text-lg font-bold">Edit Note</h1>

        <div class="size-10"></div>
    </header>

    <!-- Content -->
    <main class="relative z-10 flex-1 px-6 pb-24">
        <div
            class="my-5 p-6 rounded-sm bg-white/5 backdrop-blur-xl
                   border border-white/10 flex flex-col gap-6">

            <!-- Title -->
            <div>
                <label class="text-md text-primary/70 font-bold">Note Title</label>
                <input wire:model="title" type="text" placeholder="e.g. Buy a macbook air"
                    class="mt-2 w-full h-14 px-4 rounded-sm
                           bg-black/30 border border-white/10 focus:outline-none
                           focus:border-primary/70"
                    value="{{ $catatan->title }}" />

                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content -->
            <div class="flex flex-col flex-1">
                <label class="text-md text-primary/70 font-bold">Note Text</label>
                <textarea wire:model="content" rows="6"
                    class="mt-2 min-h-60 p-4 rounded-sm
                           bg-black/30 border border-white/10
                           focus:outline-none
                           focus:ring-0 focus:ring-primary/70
                           focus:border-primary/70
                           resize-none"
                    placeholder="Write your note here..."></textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ACTION -->
        <div class="flex flex-col gap-5">

            <button type="button" wire:click="editCatatan"
                class="w-full h-11 cursor-pointer rounded text-white/90 bg-primary/25 font-semibold text-sm tracking-wide border border-primary/30 hover:bg-primary/25 hover:border-primary active:scale-[0.98] transition">Save
                Note
            </button>

            <button type="button" @click="deleteModal = true"
                class="text-white60 w-full h-11 cursor-pointer rounded border border-red-500/30 p-3 font-semibold text-sm bg-red-500/10 hover:border-red-500 hover:bg-red-500/10 active:scale-[0.98] flex items-center justify-center gap-2 transition">Delete
                Note
            </button>
        </div>

    </main>

    <!-- Modal Delete -->
    <div x-show="deleteModal" x-transition.opacity x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 font-inter">

        <div @click.outside="deleteModal = false" x-transition.scale
            class="bg-[#102210] border border-white/10 rounded-2xl p-6 w-full max-w-sm text-center shadow-lg">

            <!-- Icon top -->
            <div class="flex justify-center mb-4">
                <span class="material-symbols-outlined text-red-500 text-6xl animate-bounce">
                    delete_forever
                </span>
            </div>

            <!-- Modal Text -->
            <h2 class="text-lg font-semibold mb-1 text-red-400">
                Confirm Delete
            </h2>

            <p class="text-white/70 text-sm mb-6 leading-relaxed">
                Are you sure you want to delete this note? <br>
                This action <span class="font-semibold text-red-400">cannot be undone</span>.
            </p>

            <!-- Buttons -->
            <div class="flex justify-center gap-3">
                <button @click="deleteModal = false" type="button"
                    class="px-4 py-2 rounded-md text-sm text-white/90 bg-white/10 hover:bg-white/20 transition">
                    Cancel
                </button>

                <button @click="$wire.hapusCatatan(); deleteModal = false" type="button"
                    class="px-4 py-2 rounded-md text-sm bg-red-500 hover:bg-red-600 text-white/90 transition">
                    Delete
                </button>
            </div>
        </div>
    </div>



</div>
