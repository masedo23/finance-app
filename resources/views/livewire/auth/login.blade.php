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

            {{-- Toast Notification --}}
            @if (session('message'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class="fixed top-6 left-1/2 -translate-x-1/2 z-50
               flex items-center gap-3 rounded-xl
               bg-white/10 backdrop-blur-md
               border border-white/10
               px-4 py-3 text-sm text-green-300">

                    <span class="material-symbols-outlined text-green-400">
                        check_circle
                    </span>

                    <span class="flex-1">
                        {{ session('message') }}
                    </span>

                    <button @click="show = false" class="text-white/40 hover:text-white transition">
                        ✕
                    </button>
                </div>
            @endif


            <!-- HEADER -->
            <div>
                <h1 class="text-2xl font-bold mb-2">Welcome Back</h1>
                <p class="text-white/60 text-sm">
                    Please enter your details to access your dashboard.
                </p>
            </div>

            <!-- FORM -->
            <form wire:submit.prevent="login"
                class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 flex flex-col gap-5">

                <div>
                    <label for="email" class="text-sm text-white/70">Email</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size: 22px;">
                            mail
                        </span>
                        <input id="email" type="text" wire:model.defer="email" placeholder="user@example.com"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="text-sm text-white/70">Password</label>
                    <div class="relative mt-2">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 material-symbols-outlined"
                            style="font-size: 22px;">
                            lock
                        </span>
                        <input id="password" type="password" wire:model.defer="password" placeholder="••••••••"
                            class="w-full bg-black/30 rounded py-3 pl-12 pr-4
                                   text-white placeholder-white/30
                                   outline-none focus:ring-1 focus:ring-primary/60 placeholder:text-sm">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    class="flex justify-center items-center gap-2 w-full h-11 cursor-pointer rounded-md bg-primary/25 text-white/80 font-semibold text-sm tracking-wide border border-primary/30 hover:bg-primary/25 hover:border-primary active:scale-[0.98] transition">
                    <div class="flex justify-center" wire:loading wire:target="login">
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
                    <span>Log in</span>
                </button>
                <a href="{{ route('google.login') }}"
                    class="group relative flex items-center text-sm justify-center gap-3 w-full py-3 rounded-md
          bg-white/90 backdrop-blur-md text-black font-medium
          hover:bg-white transition overflow-hidden">

                    <span
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition
                 bg-linear-to-r from-blue-400/20 via-red-400/20 to-yellow-400/20"></span>

                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 z-10">
                    <span class="z-10">Continue with Google</span>
                </a>


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
