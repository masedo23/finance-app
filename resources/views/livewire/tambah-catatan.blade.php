<div class="relative min-h-screen flex flex-col overflow-hidden bg-zinc-950 text-white font-inter">

    <!-- Background -->
    <div class="fixed inset-0 pointer-events-none">
        <div
            class="absolute -top-32 -left-32 w-[60%] h-[60%] 
                    bg-emerald-400/15 blur-[140px] rounded-full">
        </div>

        <div
            class="absolute -bottom-32 -right-32 w-[50%] h-[50%] 
                    bg-emerald-500/10 blur-[120px] rounded-full">
        </div>

        <div class="absolute inset-0 bg-linear-to-b from-zinc-900 via-zinc-900 to-black"></div>
    </div>

    <!-- Header -->
    <header class="relative z-10 flex items-center justify-between px-5 my-10">
        <x-close href="{{ route('notes') }}"></x-close>

        <h1 class="text-lg font-bold">Add Note</h1>

        <div class="size-10"></div>
    </header>

    <!-- Content -->
    <form class="relative z-10 flex-1 px-6 pb-24" wire:submit.prevent="tambahCatatan">
        <div
            class="my-5 p-6 rounded-xl bg-white/5 backdrop-blur-xl
                   border border-white/10 flex flex-col gap-6">

            <!-- Title -->
            <div>
                <label class="text-sm text-primary/70">Note Title</label>
                <input type="text" placeholder="e.g. Buy a macbook air" wire:model="title"
                    class="mt-2 w-full py-3 px-4 rounded-sm
                           bg-black/30 border border-white/10 focus:outline-none
                           focus:border-primary/70 placeholder:text-sm" />

                @error('title')
                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content -->
            <div class="flex flex-col flex-1">
                <label class="text-sm text-primary/70" for="note-text">Note Text</label>
                <textarea id="note-text" rows="10" wire:model="content"
                    class="mt-2 p-4 rounded-sm
                           bg-black/30 border border-white/10
                           focus:outline-none
                           focus:ring-0 focus:ring-primary/70
                           focus:border-primary/70 placeholder:text-sm"
                    placeholder="Write your note here..."></textarea>
                @error('content')
                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Save Button -->
        <div class="mt-6">
            <x-button-save>Add Note</x-button-save>
        </div>

    </form>

</div>
