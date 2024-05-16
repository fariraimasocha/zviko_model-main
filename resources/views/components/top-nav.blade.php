<nav class="bg-blue1 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <h1 class="text-white text-sm">Whatsapp:0782 486 5651 | Email:info@zvikolearning.co.zw |  Zviko Park Learning </h1>
            <div class="flex space-x-1">
                <div class="rounded-full w-3 h-3 bg-white mt-2">
                </div>
                @if (Auth::check())
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button class="text-white text-sm">LOGOUT</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">
                        <button class="text-white text-sm">LOGIN</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
