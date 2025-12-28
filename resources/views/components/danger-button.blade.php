<button
    class="w-full h-11 cursor-pointer rounded border border-red-500/30 p-3
           text-red-400 font-semibold text-sm bg-red-500/10
           hover:border-red-500 hover:bg-red-500/10
           active:scale-[0.98] transition">
    <div class="flex items-center justify-center gap-2">
        {{ $slot }}
    </div>
</button>
