<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SnakeHub - Step Into Greatness</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-900">
    
    <nav class="bg-white py-4 px-6 md:px-12 flex justify-between items-center sticky top-0 z-50 shadow-sm">
        <div class="text-2xl font-bold tracking-tighter">
            Snake<span class="text-blue-600">Hub</span>
        </div>

        <div class="hidden md:flex space-x-8 text-sm font-semibold text-gray-500">
            <a href="#" class="text-blue-600">Home</a>
            <a href="#" class="hover:text-blue-600 transition-colors duration-200">New Arrivals</a>
            <a href="#" class="hover:text-blue-600 transition-colors duration-200">Men</a>
            <a href="#" class="hover:text-blue-600 transition-colors duration-200">Women</a>
            <a href="#" class="hover:text-blue-600 transition-colors duration-200">Sale</a>
        </div>

        <div class="flex items-center space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 transition">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-blue-700 transition duration-300 shadow-lg shadow-blue-200">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-blue-600 rounded-[3rem] p-8 md:p-20 relative overflow-hidden shadow-2xl min-h-[550px] flex items-center">
            
            <div class="relative z-10 max-w-2xl text-white">
                <div class="inline-block bg-white/20 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 border border-white/30">
                    New Season Collection
                </div>
                <h1 class="text-6xl md:text-8xl font-extrabold leading-tight mb-8">
                    Step Into <br>
                    <span class="text-blue-200">Greatness</span>
                </h1>
                <p class="text-blue-100 text-lg md:text-xl mb-10 leading-relaxed max-w-lg opacity-90">
                    Discover the latest collection of premium sneakers designed for performance, style, and comfort. Up to 50% off on selected items.
                </p>
                
                <div class="flex flex-wrap gap-5">
                    <button class="bg-white text-blue-700 px-10 py-4 rounded-full font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                        Shop Now
                    </button>
                    <button class="bg-transparent border-2 border-white/40 text-white px-10 py-4 rounded-full font-bold hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
                        View Collection
                    </button>
                </div>

                <div class="mt-16 flex items-center gap-12 pt-10 border-t border-white/20">
                    <div>
                        <div class="text-3xl font-extrabold">500+</div>
                        <div class="text-blue-200 text-sm font-medium uppercase tracking-wider">Models</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold">50K+</div>
                        <div class="text-blue-200 text-sm font-medium uppercase tracking-wider">Customers</div>
                    </div>
                </div>
            </div>

            <div class="absolute -right-20 -top-20 w-[700px] h-[700px] bg-blue-500 rounded-full opacity-50 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 w-[500px] h-[500px] bg-blue-400 rounded-full opacity-30 blur-2xl"></div>

            <div class="hidden lg:flex absolute right-16 top-1/2 -translate-y-1/2 w-[600px] h-[600px] items-center justify-center transform hover:rotate-0 transition-transform duration-700">
                <div class="text-white/10 font-black text-9xl rotate-[-15deg] select-none uppercase tracking-tighter">
                    Sneakers
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-12 text-gray-400 text-sm border-t border-gray-100">
        <p>&copy; 2026 SnakeHub Project. Crafted with Passion for Sneakerheads.</p>
    </footer>

</body>
</html>








{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SnakeHub - Step Into Greatness</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">
    
    <nav class="bg-white py-4 px-6 md:px-12 flex justify-between items-center sticky top-0 z-50 shadow-sm">
        <div class="text-2xl font-bold tracking-tighter">
            Snake<span class="text-blue-600">Hub</span>
        </div>

        <div class="hidden md:flex space-x-8 text-sm font-semibold text-gray-500">
            <a href="#" class="text-blue-600">Home</a>
            <a href="#" class="hover:text-blue-600 transition">New Arrivals</a>
            <a href="#" class="hover:text-blue-600 transition">Men</a>
            <a href="#" class="hover:text-blue-600 transition">Women</a>
            <a href="#" class="hover:text-blue-600 transition">Sale</a>
        </div>

        <div class="flex items-center space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-blue-600 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl min-h-[500px] flex items-center">
            
            <div class="relative z-10 max-w-xl text-white">
                <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 border border-white/30">
                    New Season Collection
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6">
                    Step Into <br>
                    <span class="text-blue-200">Greatness</span>
                </h1>
                <p class="text-blue-100 text-lg mb-8 leading-relaxed max-w-md">
                    Discover the latest collection of premium sneakers designed for performance, style, and comfort. Up to 50% off on selected items.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-white text-blue-700 px-8 py-3.5 rounded-full font-bold hover:bg-gray-100 transition shadow-lg">
                        Shop Now
                    </button>
                    <button class="bg-transparent border-2 border-white/30 text-white px-8 py-3.5 rounded-full font-bold hover:bg-white/10 transition backdrop-blur-sm">
                        View Collection
                    </button>
                </div>

                <div class="mt-12 flex items-center gap-8 pt-8 border-t border-white/20">
                    <div>
                        <div class="text-2xl font-bold">500+</div>
                        <div class="text-blue-200 text-sm">Sneaker Models</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">50K+</div>
                        <div class="text-blue-200 text-sm">Happy Customers</div>
                    </div>
                </div>
            </div>

            <div class="absolute -right-20 -top-20 w-[600px] h-[600px] bg-blue-500 rounded-full opacity-50 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 w-[400px] h-[400px] bg-blue-400 rounded-full opacity-30 blur-2xl"></div>

            <div class="hidden md:flex absolute right-10 top-1/2 -translate-y-1/2 w-[500px] h-[500px] items-center justify-center">
                <div class="text-white/20 font-bold text-6xl rotate-[-15deg] select-none">
                    [SHOE IMAGE]
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-10 text-gray-400 text-sm">
        &copy; 2026 SnakeHub Project. All rights reserved.
    </footer>

</body>
</html> --}}