<div
    class="min-h-screen overflow-x-hidden bg-linear-to-b from-[#102210] via-[#081608] to-[#020502] text-white px-5 py-6">

    <div class="max-w-xl mx-auto">

        <!-- HEADER -->
        <div class="relative my-10">
            <x-arrow-back href="{{ route('profile') }}" class="absolute left-0 top-1/2 -translate-y-1/2" />

            <h1 class="text-center text-lg font-bold">
                About Application
            </h1>
        </div>


        <!-- CONTENT -->
        <div class="bg-white/5 border border-white/10 rounded-md p-6 space-y-6">

            <!-- DESCRIPTION -->
            <div class="space-y-2 text-sm text-white/70 leading-relaxed">
                <p>
                    This application is a
                    <span class="text-white font-medium">web-based financial tracking system</span>
                    designed to help users record and manage daily financial activities
                    such as income, expenses, and loan transactions.
                </p>

                <p>
                    Users can track how much money they receive, spend, lend to others,
                    or borrow from others, as well as create short notes and waiting lists
                    for pending transactions or reminders.
                </p>
            </div>


            <!-- FEATURES -->
            <ul class="space-y-2 text-sm text-white/60 list-disc list-inside">
                <li>Recording income and expense transactions</li>
                <li>Tracking money lent to others and borrowed from others</li>
                <li>Simple financial history and transaction logs</li>
                <li>Waiting list and short note management</li>
                <li>Secure user authentication</li>
            </ul>


            <!-- TECHNOLOGY -->
            <div class="border-t border-white/10 pt-4 space-y-3 text-sm">
                <div class="flex justify-between gap-4">
                    <span class="text-white/60 shrink-0">Technology</span>
                    <span class="font-medium text-right">
                        Laravel & Livewire
                    </span>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="text-white/60 shrink-0">Platform</span>
                    <span class="font-medium text-right">
                        Web Application
                    </span>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="text-white/60 shrink-0">
                        Application Version
                    </span>
                    <span class="font-medium text-right">
                        v1.0.0
                    </span>
                </div>
            </div>

            <!-- DEVELOPER -->
            <div class="border-t border-white/10 pt-4 space-y-3 text-sm">
                <h2 class="text-sm font-semibold text-white">
                    Developer
                </h2>

                <div class="flex justify-between gap-4">
                    <span class="text-white/60 shrink-0">Name</span>
                    <span class="font-medium text-right">
                        Edo Sudrajat
                    </span>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="text-white/60 shrink-0">Contact</span>
                    <a href="https://wa.me/6283152643338" target="_blank"
                        class="font-medium text-primary hover:underline break-all text-right">
                        0831-5264-3338
                    </a>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <p class="text-center text-xs text-white/30 mt-6">
            © {{ now()->year }}. All rights reserved.
        </p>

    </div>
</div>
