<div
    class="relative w-full min-h-screen overflow-hidden
           bg-linear-to-b from-[#102210] via-[#081608] to-[#020502]
           text-white font-[Inter]">

    <!-- GLOW DECORATION (SAFE) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-24 -right-24 w-72 h-72 bg-primary/10 rounded-full blur-[120px]"></div>
        <div class="absolute top-1/2 -left-32 w-64 h-64 bg-primary/5 rounded-full blur-[100px]"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col min-h-screen max-w-md mx-auto px-6">

        <!-- CENTER AREA -->
        <div class="flex flex-col justify-center flex-1 gap-6">

            <!-- HEADER -->
            <div>
                <h1 class="text-2xl font-bold">Create Account</h1>
                <p class="text-white/60 text-sm">
                    Sign up to start your financial journey
                </p>
            </div>

            <!-- FORM -->
            <form wire:submit.prevent="register"
                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 flex flex-col gap-5">

                <!-- FULL NAME -->
                <div>
                    <label for="name" class="text-sm text-white/70">Full Name</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size:22px">person</span>
                        <input type="text" wire:model.defer="name" placeholder="Your full name" id="name"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                    @error('name')
                        <p class="text-yellow-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div>
                    <label for="email" class="text-sm text-white/70">Email</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size:22px">email</span>
                        <input type="text" wire:model.defer="email" placeholder="Name@example.com" name="email"
                            id="email"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                    @error('email')
                        <p class="text-yellow-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div x-data="{ show: false }">
                    <label for="password" class="text-sm text-white/70">Password</label>

                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size:22px">
                            lock
                        </span>

                        <input id="password" :type="show ? 'text' : 'password'" wire:model.defer="password"
                            placeholder="Create password"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-12
                   text-white placeholder-white/30
                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">

                        <!-- TOGGLE -->
                        <button type="button" @click="show = !show"
                            class="absolute right-4 top-1/2 -translate-y-1/2
                   text-white/40 hover:text-white transition flex items-center">
                            <span class="material-symbols-outlined text-[20px]!">
                                <span x-text="show ? 'visibility_off' : 'visibility'"></span>
                            </span>
                        </button>
                    </div>

                    @error('password')
                        <p class="text-yellow-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- CONFIRM PASSWORD -->
                <div x-data="{ show: false }">
                    <label for="password_confirmation" class="text-sm text-white/70">
                        Confirm Password
                    </label>

                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size:22px">
                            lock
                        </span>

                        <input id="password_confirmation" :type="show ? 'text' : 'password'"
                            wire:model.defer="password_confirmation" placeholder="Repeat password"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-12
                   text-white placeholder-white/30
                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">

                        <!-- TOGGLE -->
                        <button type="button" @click="show = !show"
                            class="absolute right-4 top-1/2 -translate-y-1/2
                   text-white/40 hover:text-white transition flex items-center">
                            <span class="material-symbols-outlined text-[20px]!">
                                <span x-text="show ? 'visibility_off' : 'visibility'"></span>
                            </span>
                        </button>
                    </div>
                </div>


                <!-- TERMS -->
                <label class="flex items-start gap-3 text-xs text-white/60">
                    <input type="checkbox" wire:model.live="agree"
                        class="mt-0.5 rounded border-white/20 bg-transparent text-primary focus:ring-primary">

                    <span class="leading-snug">
                        I agree to the
                        <a href="{{ route('terms') }}" class="text-primary hover:underline">
                            Privacy Policy
                        </a>
                        and
                        <a href="{{ route('terms') }}" class="text-primary hover:underline">
                            Terms & Conditions
                        </a>
                    </span>
                </label>

                <!-- SUBMIT -->
                <button @disabled(!$agree)
                    class="flex items-center justify-center gap-2 w-full h-11
                           rounded bg-primary/25 text-primary font-semibold text-sm
                           border border-primary/30
                            active:scale-[0.98] transition {{ $agree ? 'hover:bg-primary/30 bg-primary/25 text-primary border border-primary/30 active:scale-[0.98]' : 'bg-white/5 text-white/30 border border-white/10 cursor-not-allowed' }}">
                    <div class="flex justify-center" wire:loading wire:target="register">
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
                    <span>Register</span>
                </button>
            </form>

            <!-- FOOTER -->
            <div class="text-center pb-6 text-sm text-white/60">
                Already have an account?
                <a href="{{ route('login') }}" wire:navigate class="text-primary font-semibold hover:underline">
                    Sign in
                </a>
            </div>
        </div>
    </div>
</div>
