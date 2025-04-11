<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">NutriCheck</a>

        <!-- Navigation Links -->
        <div class="flex space-x-6 items-center">
            <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Products</a>
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-blue-600 font-medium">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600 font-medium">Register</a>
            @endauth
        </div>
    </div>
</nav>
