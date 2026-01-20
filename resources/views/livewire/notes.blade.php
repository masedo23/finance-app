<div
    class="bg-background-dark font-display text-white antialiased selection:bg-primary selection:text-black overflow-x-hidden">

    <div class="relative min-h-screen flex flex-col z-10">

        <!-- Background Effects -->
        <div class="fixed inset-0 pointer-events-none">
            <div class="absolute inset-0 bg-green-gradient opacity-80"></div>
            <div class="absolute top-[-10%] right-[-20%] w-125 h-125 bg-primary/10 rounded-full blur-[100px]">
            </div>
            <div class="absolute bottom-[-10%] left-[-10%] w-7500px] bg-primary/5 rounded-full blur-[80px]">
            </div>
        </div>

        <!-- HEADER -->
        <header class="relative flex items-center p-4 glass-panel mx-2 mt-2 rounded-xl">

            <x-arrow-back href="{{ route('home') }}"></x-arrow-back>

            <h2 class="absolute left-0 right-0 text-center text-lg font-bold tracking-wide pointer-events-none">
                Short Notes
            </h2>

        </header>

        {{-- Toast Notification --}}
        @if (@session('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                class="mx-4 mb-6 flex items-center gap-3 rounded-xl bg-white/10 backdrop-blur-md border border-white/10 px-4 py-3 text-sm text-green-300">

                <!-- Icon -->
                <span class="material-symbols-outlined text-green-400">
                    check_circle
                </span>

                <!-- Message -->
                <span class="flex-1">
                    {{ session('message') }}
                </span>

                <!-- Close -->
                <button @click="show = false" class="text-white/40 hover:text-white transition">
                    ✕
                </button>
            </div>
        @endif
        <!-- CONTENT -->
        <div class="flex-1 p-4 space-y-4">

            <!-- PINNED NOTE -->
            <div class="relative rounded-2xl overflow-hidden border border-white/10 mb-8">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image:url('{{ asset('img/hero.png') }}')">
                </div>
                <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/60 to-transparent"></div>

                <div class="relative p-6 pt-32">

                    <h3 class="text-2xl font-bold mb-1">Add a Note</h3>
                    <p class="text-sm text-white/80 line-clamp-2">Manage your finances for a better future</p>
                </div>
            </div>

            {{-- add button --}}
            <div class="flex justify-between items-end">

                <p class="text-xs text-white/40 uppercase tracking-widest mt-4 ml-5">
                    {{ $notes->isNotEmpty() ? 'Recent' : '' }} </p>

                <a href="{{ route('create-note') }}" wire:navigate
                    class="flex items-center px-3 py-2 rounded bg-primary/80 hover:bg-primary text-black text-sm font-semibold shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-200">Add
                    a note
                </a>

            </div>

            <!-- NOTE ITEM -->
            <div class="flex flex-col mb-15">
                @forelse ($notes as $note)
                    <a href="{{ route('edit-note', $note->id) }}" wire:navigate
                        class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                        <div class="flex-1 min-w-0">
                            <h4 class="text-lg font-bold truncate">
                                {{ $note->title }}
                            </h4>

                            <p class="text-sm text-white/60 mt-1 line-clamp-2">
                                {{ $note->content }}
                            </p>

                            <span class="text-xs text-white/40 mt-2 block">
                                {{ $note->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-white/40 mt-10">
                        No notes found. Click "Add a note" to create your first note.
                    </p>
                @endforelse
            </div>

        </div>
    </div>
    <x-bottom-navbar />

</div>
