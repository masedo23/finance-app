<form wire:submit.prevent
    class="relative h-screen
           bg-background-dark font-[Inter] text-white antialiased
           selection:bg-primary selection:text-black">

    <!-- SCROLL CONTAINER -->
    <main class="h-full overflow-y-auto no-scrollbar">

        <!-- HEADER (NOW SCROLLS) -->
        <header class="flex items-center px-5 pt-10 pb-4">

            <x-close href="{{ route('history') }}"></x-close>

            <h2 class="flex-1 text-center text-lg font-bold">
                Edit Transaction
            </h2>
        </header>

        <!-- CONTENT -->
        <section class="px-5 pb-25">

            <!-- TYPE -->
            <div class="mt-2 mb-8">
                <div class="glass-panel p-1 rounded-xl flex h-11">
                    <label class="flex-1 cursor-pointer">
                        <input type="radio" name="type" checked class="peer sr-only">
                        <div
                            class="h-full flex items-center justify-center
                                   text-xs font-semibold
                                   text-white/60
                                   peer-checked:bg-surface-dark peer-checked:bg-primary/80 rounded peer-checked:text-background-dark transition">
                            Income
                        </div>
                    </label>

                    <label class="flex-1 cursor-pointer">
                        <input type="radio" name="type" class="peer sr-only p-100">
                        <div
                            class="h-full flex items-center justify-center
                                   text-xs font-semibold
                                   text-white/60
                                   peer-checked:bg-surface-dark peer-checked:bg-primary/80 rounded peer-checked:text-background-dark transition">
                            Expanse
                        </div>
                    </label>
                </div>
            </div>

            <!-- AMOUNT -->
            <div class="flex flex-col items-center mb-10">
                <p class="text-primary/60 text-[11px] uppercase mb-2 tracking-widest">
                    Enter Amount
                </p>

                <div class="flex items-center">
                    <span class="text-white text-3xl font-bold mr-2">Rp.</span>
                    <input type="text" placeholder="0"
                        class="bg-transparent border-none focus:ring-0
                               text-4xl font-bold text-white text-center
                               placeholder:text-white/20 w-40">
                </div>
            </div>

            <!-- FORM -->
            <div class="space-y-4">
                <div class="glass-input rounded-xl p-4">
                    <label class="text-sm text-primary/70 mb-1 block">
                        Date
                    </label>
                    <div class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/40 text-[20px]">
                            calendar_today
                        </span>
                        <input type="date"
                            class="bg-transparent border-none focus:ring-0
                                   text-white w-full scheme-dark outline outline-primary/30 py-4 px-2 rounded">
                    </div>
                </div>

                <div class="glass-input rounded-xl p-4">
                    <label class="text-sm text-primary/70 mb-1 block">
                        Note
                    </label>
                    <div class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/40 text-[20px]">
                            sticky_note_2
                        </span>
                        <textarea
                            class="bg-transparent border border-primary/30 rounded focus:ring-0
                                   text-white w-full pt-4 px-2"
                            name="note"></textarea>

                    </div>
                </div>
            </div>

            <!-- ACTION -->
            <div class="mt-10 flex flex-col gap-5">
                <x-button-save>Save Transaction</x-button-save>
                <x-danger-button>Delete Transaction</x-danger-button>
            </div>

        </section>
    </main>
</form>
