<div class="relative w-full h-dvh bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white font-[Inter]">

    <div class="relative z-10 flex flex-col h-full max-w-md mx-auto px-6">

        <div class="flex flex-col justify-center flex-1 gap-6">

            <!-- HEADER -->
            <div class="text-center">
                <h1 class="text-2xl font-bold mb-2">Verify your email</h1>
                <p class="text-white/60 text-sm">
                    Enter the 6-digit code we sent to your email
                </p>
            </div>

            <!-- CARD -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 flex flex-col gap-6">

                <!-- OTP INPUT -->
                <div class="flex justify-center gap-3">
                    @for ($i = 0; $i < 6; $i++)
                        <input type="text" maxlength="1" inputmode="numeric"
                            wire:model.defer="otp.{{ $i }}"
                            class="w-12 h-14 text-center text-xl font-semibold
                                   bg-black/30 rounded-lg border border-white/10
                                   outline-none focus:ring-2 focus:ring-primary/60" />
                    @endfor
                </div>

                @error('otp')
                    <p class="text-yellow-400 text-xs text-center">
                        {{ $message }}
                    </p>
                @enderror

                <!-- VERIFY BUTTON -->
                <button wire:click="verify"
                    class="w-full h-11 rounded-md
                           bg-primary/25 text-white/80 font-semibold text-sm
                           border border-primary/30
                           hover:bg-primary/30 hover:border-primary
                           active:scale-[0.98] transition">
                    Verify Code
                </button>

                <!-- RESEND -->
                <div class="text-center text-xs text-white/60">
                    Didn’t receive the code?
                    <button wire:click="resend" class="text-primary hover:underline ml-1">
                        Resend
                    </button>
                </div>

            </div>

            <!-- BACK -->
            <div class="text-center text-xs text-white/50">
                <a href="{{ route('login') }}" wire:navigate class="hover:text-primary transition">
                    Back to Sign in
                </a>
            </div>

        </div>
    </div>
</div>
