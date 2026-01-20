<div class="relative w-full h-dvh bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white font-[Inter]">

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col h-full max-w-md mx-auto px-6">

        <div class="flex flex-col justify-center flex-1 gap-6">
            <div wire:ignore x-data="{ show: false, message: '' }"
                x-on:notify.window="show = true; message = $event.detail.message; setTimeout(() => show = false, 3000)"
                x-show="show" x-transition
                class="fixed top-6 left-1/2 -translate-x-1/2 z-50
           flex items-center gap-3 rounded-xl
           bg-white/10 backdrop-blur-md
           border border-white/10
           px-4 py-3 text-sm text-green-300">

                <span class="material-symbols-outlined text-green-400">
                    check_circle
                </span>

                <span x-text="message" class="flex-1"></span>

                <button @click="show = false" class="text-white/40 hover:text-white transition">
                    ✕
                </button>
            </div>

            <!-- HEADER -->
            <div class="text-center">
                <h1 class="text-2xl font-bold mb-2">Forgot Password?</h1>
                <p class="text-white/60 text-sm">Enter your email to reset your password.</p>
            </div>

            <!-- FORM -->
            <form wire:submit.prevent="sendResetLink"
                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 flex flex-col gap-5">

                <div>
                    <label for="email" class="text-sm text-white/70">Email</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size: 22px;">
                            mail
                        </span>
                        <input id="email" wire:model.defer="email" placeholder="user@example.com"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4 text-white placeholder-white/30 outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                    @error('email')
                        <p class="text-yellow-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="flex justify-center items-center gap-2 w-full h-11 cursor-pointer rounded-md bg-primary/25 text-white/80 font-semibold text-sm tracking-wide border border-primary/30 hover:bg-primary/25 hover:border-primary active:scale-[0.98] transition">
                    <span>Send Reset Link</span>
                </button>

                <div class="text-center text-xs text-white/60 mt-2">
                    <a href="{{ route('login') }}" wire:navigate class="hover:text-primary transition">Back to Sign
                        in</a>
                </div>

            </form>

        </div>
    </div>
</div>
