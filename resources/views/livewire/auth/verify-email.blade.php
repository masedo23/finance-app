<div
    class="relative w-full h-dvh
           bg-linear-to-b from-[#102210] via-[#081608] to-[#020502]
           text-white font-[Inter] overflow-hidden">

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col h-full max-w-md mx-auto px-6">

        <!-- CENTER AREA -->
        <div class="flex flex-col justify-center items-center flex-1 gap-6 text-center">

            {{-- TOAST --}}
            <div x-data="{
                show: false,
                type: 'success',
                message: ''
            }"
                x-on:toast.window="
        const payload = $event.detail;
        type = payload.type ?? 'success';
        message = payload.message ?? payload;
        show = true;
        setTimeout(() => show = false, 3000);
    "
                x-show="show" x-transition.opacity x-cloak
                class="fixed top-6 left-1/2 -translate-x-1/2 z-50
           flex items-center gap-3
           px-4 py-3 rounded-xl text-sm
           backdrop-blur-md border shadow-lg"
                :class="{
                    'bg-emerald-500/20 border-emerald-500/30 text-emerald-300': type === 'success',
                    'bg-red-500/20 border-red-500/30 text-red-300': type === 'error'
                }">
                <!-- ICON -->
                <span class="material-symbols-outlined text-lg" x-text="type === 'error' ? 'error' : 'check_circle'">
                </span>

                <!-- MESSAGE -->
                <span x-text="message"></span>

                <!-- CLOSE -->
                <button @click="show = false" class="ml-2 text-white/40 hover:text-white transition">
                    ✕
                </button>
            </div>

            <!-- ICON -->
            <div
                class="flex items-center justify-center
                       w-14 h-14 rounded-full
                       bg-primary/20 border border-primary/30">
                <span class="material-symbols-outlined text-primary text-3xl">
                    mark_email_unread
                </span>
            </div>

            <!-- HEADER -->
            <div wire:poll.3000ms>
                <h1 class="text-2xl font-bold mb-2">
                    Verify your email
                </h1>
                <p class="text-white/60 text-sm">
                    We’ve sent a verification link to
                </p>
                <p class="mt-1 text-sm font-medium text-white">
                    {{ auth()->user()->email }}
                </p>
            </div>

            <!-- CARD -->
            <div
                class="w-full
                       bg-white/5 backdrop-blur-xl
                       border border-white/10
                       rounded-xl p-6
                       flex flex-col gap-5 text-center">

                <p class="text-sm text-white/70 leading-relaxed">
                    Click the button inside the email to activate your account.
                    <br>
                    If you don’t see it, check your spam folder.
                </p>

                <!-- RESEND -->
                <div wire:poll.1s="poll">
                    <button wire:click="resend" wire:loading.attr="disabled" @disabled($cooldown > 0)
                        class="relative flex justify-center items-center w-full h-11 rounded-md font-semibold text-sm tracking-wide transition active:scale-[0.98] {{ $cooldown > 0
                            ? 'bg-white/5 text-white/30 cursor-not-allowed'
                            : 'bg-primary/25 text-white/80 hover:border-primary' }}">

                        <!-- LOADING -->
                        <div wire:loading wire:target="resend" class="absolute">
                            <span>Resend verification email</span>
                        </div>

                        <!-- NORMAL -->
                        <div wire:loading.remove wire:target="resend" class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">refresh</span>

                            @if ($cooldown > 0)
                                <span>Resend available in {{ $cooldown }}s</span>
                            @else
                                <span>Resend verification email</span>
                            @endif
                        </div>
                    </button>
                </div>


                <!-- LOGOUT -->
                <button wire:click="logout"
                    class="flex items-center justify-center gap-2
                           text-sm text-white/50 hover:text-white transition">
                    <span class="material-symbols-outlined text-[18px]">
                        logout
                    </span>
                    Log out
                </button>
            </div>

            <!-- FOOTER -->
            <p class="text-white/50 text-xs pb-6">
                You won’t be able to access the dashboard until your email is verified.
            </p>

        </div>
    </div>
</div>
