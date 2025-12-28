<div
    class="relative w-full h-dvh overflow-hidden
           bg-linear-to-b from-[#102210] via-[#081608] to-[#020502]
           text-white font-[Inter]">

    <!-- Glow -->
    <div class="absolute -top-24 -right-24 w-75 h-75 bg-primary/10 rounded-full blur-[120px]"></div>
    <div class="absolute top-1/2 -left-32 w-62.5 h-62.5 bg-primary/5 rounded-full blur-[100px]"></div>

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col h-full max-w-md mx-auto px-6">

        <!-- CENTER AREA -->
        <div class="flex flex-col justify-center flex-1 gap-6">

            <!-- HEADER -->
            <div>
                <h1 class="text-3xl font-bold mb-2">Welcome Back</h1>
                <p class="text-white/60">
                    Please enter your details to access your dashboard.
                </p>
            </div>

            <!-- FORM -->
            <form wire:submit.prevent="login"
                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 flex flex-col gap-5">

                <div>
                    <label class="text-sm text-white/70">Email</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size: 22px;">
                            mail
                        </span>
                        <input type="email" wire:model.defer="email" placeholder="user@example.com"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                </div>

                <div>
                    <label class="text-sm text-white/70">Password</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size: 22px;">
                            lock
                        </span>
                        <input type="password" wire:model.defer="password" placeholder="••••••••"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                </div>

                <x-button-save>Login</x-button-save>
            </form>
            <!-- FOOTER -->
            <div class="text-center pb-6">
                <p class="text-white/60 text-sm">
                    Don’t have an account?
                    <a href="{{ route('register') }}" wire:navigate
                        class="text-primary font-semibold hover:underline">Sign
                        up</a>
                </p>
            </div>
        </div>
    </div>
</div>
