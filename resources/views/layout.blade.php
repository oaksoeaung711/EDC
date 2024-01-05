<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logos/logo.png') }}" type="image/png" sizes="30x30" >
    <title>EDC</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="container mx-auto relative">
        {{-- Start Header --}}
            <header class="my-2 bg-white md:static sticky top-0 inset-x-0 z-30">
                <div class="flex justify-between items-center">
                    {{-- Logo --}}
                    <a class="flex items-center">
                        <img src="{{ asset('images/logos/logo.png') }}" class="w-20 h-20 md:w-32 md:h-32" >
                        <div class="text-primary">
                            <h2 class="text-sm md:text-3xl tracking-widest">E.D.C</h2>
                            <h6 class="text-xs md:text-base font-normal">Extracurricular Development Center</h6>
                        </div>
                    </a>

                    {{-- Infos --}}
                    <div class="hidden md:flex gap-x-5">
                        <p class="flex gap-2">
                            <i class="fi fi-rr-mobile-button text-primary text-2xl"></i>
                            <span class="flex flex-col text-sm gap-1">
                                <span class="font-bold text-lg">Call</span>
                                <span class="text-zinc-600 text-sm">09771435596</span>
                            </span>
                        </p>
                        <p class="flex gap-2">
                            <i class="fi fi-rr-business-time text-primary text-2xl"></i>
                            <span class="flex flex-col text-sm gap-1">
                                <span class="font-bold text-lg">Work Time</span>
                                <span class="text-zinc-600 text-sm">9 AM - 4 PM</span>
                            </span>
                        </p>
                        <p class="flex gap-2">
                            <i class="fi fi-rr-map-marker text-primary text-2xl"></i>
                            <span class="flex flex-col text-sm gap-1">
                                <span class="font-bold text-lg">Address</span>
                                <span class="text-zinc-600 text-xs">No.(504/506), Room A (4),</span>
                                <span class="text-zinc-600 text-xs">39<sup>th</sup> St (Lower Block), Kyauktada,</span>
                                <span class="text-zinc-600 text-xs">Yangon</span>
                            </span>
                        </p>
                        <p class="flex gap-2">
                            <i class="fi fi-rr-social-network text-primary text-2xl"></i>
                            <span class="flex flex-col text-sm gap-1">
                                <span class="font-bold text-lg">Follow Us</span>
                                <a href="https://www.facebook.com/profile.php?id=100095479575321" class="text-2xl text-primary"><i class="fi fi-brands-facebook"></i></a>
                            </span>
                        </p>
                    </div>
                    <div class="md:hidden mr-2">
                        <button id="nav-btn" class="p-5 text-2xl text-primary"><i class="fi fi-rr-menu-burger"></i></button>
                    </div>
                </div>
            </header>
            <hr class="hidden md:block"/>
            {{-- Start Mobile Nav --}}
            <nav id="mobile-nav" class="block md:hidden max-w-[250px] bg-secondary fixed inset-0 z-40 shadow transition-all duration-300 -left-[250px] h-screen">
                <div class="mt-20">
                    <ul class="text-xl space-y-10 p-5 text-white">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('program') }}">Programs</a></li>
                        <li><a href="{{ route('activities') }}">Activities</a></li>
                        <li class="flex items-center gap-2">Follow Us: <a href="https://www.facebook.com/profile.php?id=100095479575321" class="text-2xl"><i class="fi fi-brands-facebook flex items-center"></i></a></li>
                    </ul>
                </div>
            </nav>
            {{-- Start Desktop Nav --}}
                <nav class="my-10 hidden md:block">
                    <div>
                        <ul class="flex gap-x-20">
                            <li class="text-xl">
                                <a id="home" href="{{ route('index') }}" class="relative tracking-[1px] hover:text-primary after:contents-[''] after:bg-primary after:h-[3px] after:w-[0%] after:left-0 after:-bottom-[5px] after:rounded-xl after:absolute after:duration-300 hover:after:w-[100%]">Home</a>
                            </li>
                            <li class="text-xl">
                                <a id="about" href="{{ route('about') }}" class="relative tracking-[1px] hover:text-primary after:contents-[''] after:bg-primary after:h-[3px] after:w-[0%] after:left-0 after:-bottom-[5px] after:rounded-xl after:absolute after:duration-300 hover:after:w-[100%]">About Us</a>
                            </li>
                            <li class="text-xl">
                                <a id="programs" href="{{ route('program') }}" class="relative tracking-[1px] hover:text-primary after:contents-[''] after:bg-primary after:h-[3px] after:w-[0%] after:left-0 after:-bottom-[5px] after:rounded-xl after:absolute after:duration-300 hover:after:w-[100%]">Programs</a>
                            </li>
                            <li class="text-xl">
                                <a id="activities" href="{{ route('activities') }}" class="relative tracking-[1px] hover:text-primary after:contents-[''] after:bg-primary after:h-[3px] after:w-[0%] after:left-0 after:-bottom-[5px] after:rounded-xl after:absolute after:duration-300 hover:after:w-[100%]">Activities</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            {{-- End Desktop Nav --}}
        {{-- End Header --}}
        
        @yield('content')

        <hr class="my-5"/>
        <div class="my-5 flex justify-around items-center">
            <p class="text-center">&copy; Extracurricular Development Center</p>
            <div class="flex items-center gap-3">
                <p>Follow Us :</p>
                <a href="https://www.facebook.com/profile.php?id=100095479575321" class="text-xl text-primary"><i class="fi fi-brands-facebook flex items-center"></i></a>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/splide.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
    @yield('scripts')
</body>
</html>

@if (request()->routeIs('index'))
    <script type="text/javascript">
        document.getElementById('home').classList.toggle("after:w-[0%]")
        document.getElementById('home').classList.toggle("after:w-[100%]")
    </script>
@elseif (request()->routeIs('about'))
    <script type="text/javascript">
        document.getElementById('about').classList.toggle("after:w-[0%]")
        document.getElementById('about').classList.toggle("after:w-[100%]")
    </script>
@elseif (request()->routeIs('program'))
    <script type="text/javascript">
        document.getElementById('programs').classList.toggle("after:w-[0%]")
        document.getElementById('programs').classList.toggle("after:w-[100%]")
    </script>
@elseif (request()->routeIs('activities'))
    <script type="text/javascript">
        document.getElementById('activities').classList.toggle("after:w-[0%]")
        document.getElementById('activities').classList.toggle("after:w-[100%]")
    </script>
@endif