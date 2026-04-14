<footer class="bg-gray-900 border-t border-gray-800 mt-auto py-6">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <span class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Imbewu App') }}. All rights reserved.
                </span>
            </div>
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                @if(Route::has('privacy'))
                    <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-gray-300 transition">Privacy</a>
                @endif
                @if(Route::has('terms'))
                    <span class="text-gray-600">•</span>
                    <a href="{{ route('terms') }}" class="text-gray-400 hover:text-gray-300 transition">Terms</a>
                @endif
                @if(Route::has('support'))
                    <span class="text-gray-600">•</span>
                    <a href="{{ route('support') }}" class="text-gray-400 hover:text-gray-300 transition">Support</a>
                @endif
            </div>
        </div>
    </div>
</footer>