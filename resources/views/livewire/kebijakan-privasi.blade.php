<div
    class="relative min-h-screen overflow-x-hidden bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    <!-- HEADER -->
    <div class="relative max-w-xl mx-auto my-10">
        <x-arrow-back href="{{ url()->previous() }}" class="absolute left-0 top-1/2 -translate-y-1/2" />

        <h1 class="text-center text-lg font-bold">
            Privacy & Terms
        </h1>
    </div>


    <!-- CONTENT -->
    <div class="max-w-xl mx-auto bg-white/5 border border-white/10 rounded-md p-6 space-y-6">

        <!-- PRIVACY POLICY -->
        <div class="space-y-3 text-sm text-white/70 leading-relaxed">
            <h2 class="text-sm font-semibold text-white">Privacy Policy</h2>

            <p>
                This application collects basic user information such as name and email
                solely for authentication and application functionality.
            </p>

            <p>
                User data is stored securely and will not be shared with third parties.
                We are committed to protecting user privacy and maintaining data security.
            </p>
        </div>

        <!-- TERMS -->
        <div class="border-t border-white/10 pt-4 space-y-3 text-sm text-white/70 leading-relaxed">
            <h2 class="text-sm font-semibold text-white">Terms & Conditions</h2>

            <p>
                By using this application, users agree to use the system responsibly
                and not for any unlawful or harmful activities.
            </p>

            <p>
                The developer reserves the right to update features, modify access,
                or improve the system at any time for better performance and security.
            </p>
        </div>

        <!-- DEVELOPER -->
        <div class="border-t border-white/10 pt-4 space-y-3 text-sm">
            <h2 class="text-sm font-semibold text-white">Developer</h2>

            <div class="flex justify-between gap-4">
                <span class="text-white/60 shrink-0">Name</span>
                <span class="font-medium text-right">Edo Sudrajat</span>
            </div>

            <div class="flex justify-between gap-4">
                <span class="text-white/60 shrink-0">Contact</span>
                <a href="https://wa.me/6283152643338" target="_blank"
                    class="font-medium text-primary hover:underline break-all text-right">
                    +62 831-5264-3338
                </a>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <p class="text-center text-xs text-white/30 mt-6">
        © {{ now()->year }}. All rights reserved.
    </p>

</div>
