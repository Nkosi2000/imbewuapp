<footer class="bg-gray-900 border-t border-gray-800 py-6 mt-auto">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
            <div class="text-center md:text-left">
                <p class="text-sm text-gray-400">
                    &copy; {{ date('Y') }} 
                    <span class="font-medium text-gray-300">{{ config('app.name', 'Imbewu App') }}</span>. 
                    All rights reserved.
                </p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm">
                @if(Route::has('privacy'))
                    <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-gray-200 transition-colors">Privacy</a>
                @endif
                @if(Route::has('terms'))
                    <span class="text-gray-600 select-none">·</span>
                    <a href="{{ route('terms') }}" class="text-gray-400 hover:text-gray-200 transition-colors">Terms</a>
                @endif
                @if(Route::has('support'))
                    <span class="text-gray-600 select-none">·</span>
                    <a href="{{ route('support') }}" class="text-gray-400 hover:text-gray-200 transition-colors">Support</a>
                @endif
            </div>
        </div>
    </div>
</footer>