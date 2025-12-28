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


        <!-- CONTENT -->
        <div class="flex-1 p-4 space-y-4">

            <!-- PINNED NOTE -->
            <div class="relative rounded-2xl overflow-hidden border border-white/10 mb-8">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAMAx_Ot7eoh8tD9NZAnZhHWQeImtUXdKDq-313nblqLml49KRJs-UimkYjWRfqBHQkhCplbKKcIYSP3JlYFDGxYzJNEfSd7uWIy2gCFpKKFViHBw74az4_u86wv9_h1GbcfNZtqZHfOwXooFMDKS-y23eNZm5C_YuIbK17cz-YGA3eptKBOMOfgMbC1qoSrV2P7WljzaAs8DIuOTppS726PO-6wqUEBX5D8dwQQjV-kIRuqXnDlJ8lO1pWNhuTOuW6G0ghNIZNVd-t')">
                </div>
                <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/60 to-transparent"></div>

                <div class="relative p-6 pt-32">

                    <h3 class="text-2xl font-bold mb-1">Add a Note</h3>
                    <p class="text-sm text-white/80 line-clamp-2">Manage your finances for a better future</p>
                </div>
            </div>

            {{-- add button --}}
            <div class="flex justify-between items-end">

                <p class="text-xs text-white/40 uppercase tracking-widest mt-4 ml-5">Recent</p>

                <a href="{{ route('create-note') }}" wire:navigate
                    class="flex items-center px-3 py-2 rounded bg-primary/80 hover:bg-primary text-black text-sm font-semibold shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-200">Add
                    a
                    note
                </a>

            </div>


            <!-- NOTE ITEM -->
            <div class="flex flex-col mb-15">
                <a href="{{ route('edit-note') }}" wire:navigate
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}" wire:navigate
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}" wire:navigate
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}" wire:navigate
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>

                <a href="{{ route('edit-note') }}"
                    class="glass-panel p-5 rounded-xl block transition active:scale-[0.98] active:bg-white/10">

                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-bold truncate">
                            Investment Ideas
                        </h4>

                        <p class="text-sm text-white/60 mt-1 line-clamp-2">
                            Research green energy ETFs and monitor NVDA resistance.
                        </p>

                        <span class="text-xs text-white/40 mt-2 block">
                            10:42 AM
                        </span>
                    </div>

                </a>
            </div>

        </div>
    </div>
    <x-bottom-navbar />

</div>
