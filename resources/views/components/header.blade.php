<header class="bg-neutral-900 dark:bg-neutral-850 dark:text-white sticky top-0 z-10 flex justify-between items-center p-4">
    <div>
        <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
            <span class="flex h-9 w-9 items-center justify-center rounded-md">
                <img src="{{ asset('favicon.svg') }}" class="h-7 fill-current text-white" />
            </span>
            <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
        </a>
    </div>
    <div class="flex items-center gap-3">
        @if (Auth::guest())
            <a href="{{ route('login') }}" class="link-dark">Login</a>
            <a href="{{ route('register') }}" class="link-dark ms-3">Register</a>
        @endif

        @auth
            <a href="{{ route('logout') }}" class="link-dark">Logout</a>
            <a href="{{ route('profile') }}" class="link-dark ms-3">Profile</a>
        @endauth

    </div>
</header>