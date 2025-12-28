<div class="min-h bg-background-dark font-[Inter] text-white antialiased selection:bg-primary selection:text-black">

    {{-- Wrapper Mobile --}}
    <div
        class="relative min-h-screen w-full flex flex-col bg-[linear-gradient(180deg,#0a1f0a_0%,#000_100%)] overflow-x-hidden">

        {{-- Top App Bar --}}
        <div class="relative flex items-center p-4 pb-2 z-10">
            <x-arrow-back href="{{ route('home') }}"></x-arrow-back>

            <h2 class="absolute left-0 right-0 text-center text-white text-lg font-bold pointer-events-none">
                All Transactions
            </h2>
        </div>


        {{-- Search & Filter --}}
        <div class="z-10 bg-linear-to-b from-[#051005] via-[#081608] to-transparent pb-2">

            {{-- Search --}}
            <div class="px-4 py-3">
                <div
                    class="flex items-center h-12 rounded-xl glass-effect border border-transparent
                            focus-within:border-primary/50 focus-within:ring-1 focus-within:ring-primary/50">
                    <span class="material-symbols-outlined text-white/60 pl-4">search</span>
                    <input type="text" placeholder="Search transactions..."
                        class="flex-1 bg-transparent border-0 px-3 text-white
           placeholder:text-white/40
           focus:outline-none focus:ring-0" />

                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="flex-1 overflow-y-auto px-4 pb-24 space-y-6">

            {{-- Item --}}
            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">

                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-500">
                        arrow_upward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-red-500 font-bold neon-text-glow">-450.00</p>
                    <span class="text-[10px] uppercase text-red-500/50">Expense</span>
                </div>
            </a>


            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">
                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">
                        arrow_downward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-primary font-bold neon-text-glow">+450.00</p>
                    <span class="text-[10px] uppercase text-primary/50">
                        Income
                    </span>
                </div>
            </a>

            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">

                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-500">
                        arrow_upward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-red-500 font-bold neon-text-glow">-450.00</p>
                    <span class="text-[10px] uppercase text-red-500/50">Expense</span>
                </div>
            </a>


            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">
                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">
                        arrow_downward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-primary font-bold neon-text-glow">+450.00</p>
                    <span class="text-[10px] uppercase text-primary/50">
                        Income
                    </span>
                </div>
            </a>

            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">

                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-500">
                        arrow_upward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-red-500 font-bold neon-text-glow">-450.00</p>
                    <span class="text-[10px] uppercase text-red-500/50">Expense</span>
                </div>
            </a>


            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">
                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">
                        arrow_downward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-primary font-bold neon-text-glow">+450.00</p>
                    <span class="text-[10px] uppercase text-primary/50">
                        Income
                    </span>
                </div>
            </a>

            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">

                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-500">
                        arrow_upward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-red-500 font-bold neon-text-glow">-450.00</p>
                    <span class="text-[10px] uppercase text-red-500/50">Expense</span>
                </div>
            </a>


            <a href="{{ route('edit-history') }}" wire:navigate
                class="glass-effect rounded-2xl p-3 flex items-center gap-4 transition active:scale-[0.98] active:bg-white/10">
                <div class="size-10 rounded-full bg-white/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">
                        arrow_downward
                    </span>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">Freelance Payment</p>
                    <p class="text-xs text-white/50 truncate">
                        Design Project • 10:00 AM
                    </p>
                </div>

                <div class="text-right">
                    <p class="text-primary font-bold neon-text-glow">+450.00</p>
                    <span class="text-[10px] uppercase text-primary/50">
                        Income
                    </span>
                </div>
            </a>
        </div>
    </div>
    <x-bottom-navbar />
</div>
