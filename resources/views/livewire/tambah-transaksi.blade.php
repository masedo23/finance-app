<main
    class="relative h-screen
           bg-background-dark font-[Inter] text-white antialiased
           selection:bg-primary selection:text-black">

    <!-- SCROLL CONTAINER -->
    <div class="h-full overflow-y-auto no-scrollbar">

        <header class="relative flex items-center px-5 my-10">
            <x-close href="{{ route('home') }}"></x-close>

            <h2 class="absolute left-1/2 -translate-x-1/2 text-lg font-bold">
                Add Transaction
            </h2>
        </header>


        <!-- CONTENT -->
        <div class="px-5 mt-20">
            <form wire:submit.prevent="tambahTransaksi">

                {{-- ====================== TYPE ====================== --}}
                <div class="mt-2 mb-8">
                    <div class="glass-panel p-1 rounded-xl grid grid-cols-4 h-11 gap-1">

                        {{-- Income --}}
                        <label class="cursor-pointer">
                            <input type="radio" wire:model="type" value="income" class="peer sr-only">
                            <div
                                class="h-full flex items-center justify-center
                text-xs font-semibold text-white/60
                peer-checked:bg-primary peer-checked:text-black
                rounded transition">
                                Income
                            </div>
                        </label>

                        {{-- Expense --}}
                        <label class="cursor-pointer">
                            <input type="radio" wire:model="type" value="expense" class="peer sr-only">
                            <div
                                class="h-full flex items-center justify-center
                text-xs font-semibold text-white/60
                peer-checked:bg-primary peer-checked:text-black
                rounded transition">
                                Expense
                            </div>
                        </label>

                        {{-- Receivable --}}
                        <label class="cursor-pointer">
                            <input type="radio" wire:model="type" value="receivable" class="peer sr-only">
                            <div
                                class="h-full flex items-center justify-center
                text-xs font-semibold text-white/60
                peer-checked:bg-primary peer-checked:text-black
                rounded transition">
                                Receivable
                            </div>
                        </label>

                        {{-- Payable --}}
                        <label class="cursor-pointer">
                            <input type="radio" wire:model="type" value="payable" class="peer sr-only">
                            <div
                                class="h-full flex items-center justify-center
                text-xs font-semibold text-white/60
                peer-checked:bg-primary peer-checked:text-black
                rounded transition">
                                Payable
                            </div>
                        </label>
                    </div>
                </div>


                {{-- Error message untuk type --}}
                @error('type')
                    <span class="text-yellow-500 text-xs mt-2">{{ $message }}</span>
                @enderror

                {{-- ====================== AMOUNT ====================== --}}
                <div x-data="{
                    display: '',
                    raw: @entangle('amount')
                }" class="flex flex-col items-center mb-10">
                    <p class="text-primary/60 text-[11px] uppercase mb-2 tracking-widest">
                        Enter Amount
                    </p>

                    <div class="flex items-center">
                        <span class="text-white text-3xl font-bold mr-2">Rp.</span>

                        <input type="text" x-model="display"
                            @input="raw = display.replace(/\D/g, ''); display = new Intl.NumberFormat('id-ID').format(raw);"
                            placeholder="0"
                            class="bg-transparent border-none focus:ring-0
                   text-4xl font-bold text-white text-center
                   placeholder:text-white/20 w-50">
                    </div>

                    @error('amount')
                        <span class="text-yellow-500 text-xs mt-3">{{ $message }}</span>
                    @enderror
                </div>



                {{-- ====================== TITLE ====================== --}}
                <div class="glass-input rounded-xl p-4 mb-4">
                    <label for="title" class="text-sm text-primary/70 mb-1 block">
                        Title
                    </label>
                    <div class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/40 text-[20px]">label</span>
                        <input id="title" type="text" wire:model="title"
                            class="bg-transparent border-none focus:ring-0
                          text-white w-full scheme-dark outline outline-primary/30 py-4 px-2 rounded"
                            placeholder="E.g. Buy a macbook air">
                    </div>

                    {{-- Error message untuk title --}}
                    @error('title')
                        <span class="text-yellow-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- ====================== NOTE ====================== --}}
                <div class="glass-input rounded-xl p-4 mb-4">
                    <label for="note" class="text-sm text-primary/70 mb-1 block">
                        Note
                    </label>
                    <div class="flex gap-3 items-center">
                        <span class="material-symbols-outlined text-white/40 text-[20px]">sticky_note_2</span>
                        <textarea id="note" wire:model="note"
                            class="bg-transparent border border-primary/30 rounded text-white w-full pt-4 px-2 focus:outline-none focus:ring-0 focus:border-primary/30"
                            placeholder="Description (optional)"></textarea>
                    </div>

                    {{-- Error message untuk note --}}
                    @error('note')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                {{-- ====================== BUTTON ====================== --}}
                <div class="mt-10">
                    <button type="submit"
                        class="flex justify-center items-center gap-2 w-full h-11 cursor-pointer rounded bg-primary/25 text-primary font-semibold text-sm tracking-wide border border-primary/30 hover:bg-primary/25 hover:border-primary active:scale-[0.98] transition">
                        <div class="flex justify-center" wire:loading wire:target="tambahTransaksi">
                            <svg aria-hidden="true" class="w-6 h-6 animate-spin text-white/20 fill-emerald-400"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />

                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                        <span>Add Transaction</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
