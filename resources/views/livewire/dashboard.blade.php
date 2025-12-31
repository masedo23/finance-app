<div class="h-screen bg-background-dark font-[Inter] text-white antialiased selection:bg-primary selection:text-black">
    <div
        class="relative min-h-screen w-full flex flex-col bg-[linear-gradient(180deg,#0a1f0a_0%,#000_100%)] overflow-x-hidden pb-24">

        <!-- Header -->
        <header
            class="flex items-center justify-between p-6 pt-8 sticky top-0 z-20 bg-linear-to-b from-[#0a1f0a] to-transparent">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="relative h-12 w-12 rounded-full overflow-hidden border-2 border-white/10">
                        <img src="{{ asset('img/avatar.jpg') }}" class="h-full w-full object-cover">
                    </div>

                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-primary border-2 border-[#0a1f0a]">
                    </div>
                </div>
                <div>
                    <p class="text-gray-400 text-xs font-medium">Welcome,</p>
                    <h1 class="text-lg font-bold capitalize">{{ $user->name }}</h1>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="flex-1 px-5 flex flex-col gap-6">

            <!-- Balance Card -->
            <div
                class="rounded-2xl p-6 relative overflow-hidden group
                    bg-white/5 backdrop-blur-xl
                    border border-white/10
                    shadow-[0_4px_30px_rgba(0,0,0,0.1)] py-10">

                <div
                    class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-primary/10 blur-3xl group-hover:bg-primary/20 transition">
                </div>

                <div class="relative flex flex-col gap-1">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Total Balance</span>
                        <span
                            class="flex items-center gap-1 px-2 py-1 rounded-full border border-primary/20 bg-primary/10 text-primary text-xs font-bold">
                            <span class="material-symbols-outlined text-sm">trending_up</span> +2.5%
                        </span>
                    </div>

                    <h2 class="text-4xl font-bold mt-2">Rp. {{ $totalBalance }}</h2>
                    <p class="text-gray-500 text-xs">Last updated just now</p>
                </div>
            </div>

            <!-- Income & Expense -->
            <div class="grid grid-cols-2 gap-4">
                <div
                    class="rounded-2xl px-2 py-6 bg-white/5 backdrop-blur-xl border border-white/10 relative overflow-hidden flex items-center">

                    <!-- Icon -->
                    <div
                        class="h-10 w-10 rounded-full bg-white/5 flex items-center justify-center border border-white/10">
                        <span class="material-symbols-outlined text-primary">arrow_downward</span>
                    </div>

                    <!-- Text -->
                    <div class="ml-4">
                        <p class="text-gray-400 text-xs">Income</p>
                        <p class="text-md text-primary font-semibold">Rp. {{ $income }}</p>
                    </div>
                </div>

                <div
                    class="rounded-2xl px-2 bg-white/5 backdrop-blur-xl border border-white/10 relative overflow-hidden flex items-center">

                    <!-- Icon -->
                    <div
                        class="h-10 w-10 rounded-full bg-white/5 flex items-center justify-center border border-white/10">
                        <span class="material-symbols-outlined text-red-500">arrow_upward</span>
                    </div>

                    <!-- Text -->
                    <div class="ml-4">
                        <p class="text-gray-400 text-xs">Expense</p>
                        <p class="text-md text-red-500 font-semibold">Rp. {{ $expensetotal }}</p>
                    </div>
                </div>

            </div>

            <!-- Recent Transactions -->
            <div class="flex flex-col gap-2">

                <div class="flex items-center justify-between py-2">
                    <h3 class="text-lg font-bold">Pinned Transactions</h3>
                    <a href="{{ route('history') }}" wire:navigate
                        class="text-primary text-sm font-semibold hover:text-white transition">
                        See All
                    </a>
                </div>

                <div class="flex flex-col gap-3">
                    @forelse ($transactions as $transaction)
                        <a href="{{ route('edit-history',$transaction->id) }}" wire:navigate wire:key="transaction-{{ $transaction->id }}"
                            class="flex items-center justify-between p-3 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10 hover:bg-white/10 transition cursor-pointer">

                            <div class="flex items-center gap-4">
                                <div
                                    class="h-10 w-10 rounded-full flex items-center justify-center border 
                           {{ $transaction->type === 'income' ? 'bg-green-500/20 border-green-500/20 text-green-400' : 'bg-red-500/20 border-red-500/20 text-red-400' }}">
                                    <span class="material-symbols-outlined">
                                        {{ $transaction->type === 'income' ? 'arrow_downward' : 'arrow_upward' }}
                                    </span>
                                </div>
                                <div>
                                    <p class="font-semibold truncate capitalize">{{ $transaction->title }}</p>
                                    <p class="text-xs text-gray-400 truncate">
                                        {{ $transaction->note ? $transaction->note . ' • ' : '' }}
                                        {{ $transaction->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </div>

                            <div class="text-right">
                                <p
                                    class="{{ $transaction->type === 'income' ? 'text-green-500' : 'text-red-500' }} font-bold">
                                    {{ $transaction->type === 'income' ? '+' : '-' }}{{ number_format($transaction->amount) }}
                                </p>

                                <span
                                    class="text-[10px] uppercase {{ $transaction->type === 'income' ? 'text-green-500/50' : 'text-red-500/50' }}">
                                    {{ $transaction->type }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="text-center text-green-500 font-semibold mt-10">Alhamdulillah, debt-free!</p>
                    @endforelse
                </div>

            </div>

        </main>
    </div>
    <x-bottom-navbar />
</div>
