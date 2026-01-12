<div
    class="relative min-h-screen overflow-x-hidden 
           bg-linear-to-b from-[#102210] via-[#081608] to-[#020502]
           text-white px-5 py-6">

    <div class="max-w-xl mx-auto">

        <!-- HEADER -->
        <div class="relative my-10">
            <x-arrow-back href="{{ route('home') }}" class="absolute left-0 top-1/2 -translate-y-1/2" />

            <h1 class="text-center text-lg font-bold">
                About & Policies
            </h1>
        </div>

        <!-- CONTENT -->
        <div class="bg-white/5 border border-white/10 rounded-md p-6 space-y-10">

            <!-- ABOUT -->
            <section class="space-y-3">
                <h2 class="text-sm font-semibold text-white">
                    About Application
                </h2>

                <p class="text-sm text-white/70 leading-relaxed">
                    This application is a
                    <span class="text-white font-medium">
                        web-based financial tracking system
                    </span>
                    designed to help users manage daily financial activities
                    such as income, expenses, loans, and notes.
                </p>
            </section>

            <!-- FEATURES -->
            <section class="space-y-3">
                <h2 class="text-sm font-semibold text-white">
                    Features
                </h2>

                <ul class="list-disc list-inside text-sm text-white/60 space-y-2">
                    <li>Income & expense tracking</li>
                    <li>Loan & debt management</li>
                    <li>Transaction history</li>
                    <li>Notes & waiting list</li>
                    <li>Secure authentication</li>
                </ul>
            </section>

            <!-- TECHNOLOGY -->
            <section class="border-t border-white/10 pt-6 space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-white/60">Technology</span>
                    <span class="font-medium">Laravel & Livewire</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-white/60">Platform</span>
                    <span class="font-medium">Web Application</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-white/60">Version</span>
                    <span class="font-medium">v1.0.0</span>
                </div>
            </section>

            <!-- PRIVACY POLICY -->
            <section class="border-t border-white/10 pt-6 space-y-3">
                <h2 class="text-sm font-semibold text-white">
                    Privacy Policy
                </h2>

                <p class="text-sm text-white/70 leading-relaxed">
                    This application collects basic user information such as
                    name and email solely for authentication purposes.
                </p>

                <p class="text-sm text-white/70 leading-relaxed">
                    User data is stored securely and will not be shared with
                    third parties.
                </p>
            </section>

            <!-- TERMS -->
            <section class="border-t border-white/10 pt-6 space-y-3">
                <h2 class="text-sm font-semibold text-white">
                    Terms & Conditions
                </h2>

                <p class="text-sm text-white/70 leading-relaxed">
                    By using this application, users agree to use the system
                    responsibly and lawfully.
                </p>

                <p class="text-sm text-white/70 leading-relaxed">
                    The developer reserves the right to update features or
                    modify access at any time.
                </p>
            </section>

            <!-- DEVELOPER -->
            <section class="border-t border-white/10 pt-6 space-y-3 text-sm">
                <h2 class="text-sm font-semibold text-white">
                    Developer
                </h2>

                <div class="flex justify-between">
                    <span class="text-white/60">Name</span>
                    <span class="font-medium">Edo Sudrajat</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-white/60">Contact</span>
                    <a href="https://wa.me/6283152643338" target="_blank"
                        class="font-medium text-primary hover:underline">
                        0831-5264-3338
                    </a>
                </div>
            </section>

        </div>

        <!-- FOOTER -->
        <p class="text-center text-xs text-white/30 mt-6">
            © {{ now()->year }}. All rights reserved.
        </p>

    </div>
</div>
