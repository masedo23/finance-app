<div class="relative min-h-screen flex flex-col overflow-hidden bg-zinc-950 text-white font-inter">

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
            <x-button-save wire:click="editCatatan">Save Note</x-button-save>
            <x-danger-button wire:click="hapusCatatan" wire:confirm="Are you sure you want to delete this note?">Delete
                Note</x-danger-button>
        </div>

    </main>

</div>
