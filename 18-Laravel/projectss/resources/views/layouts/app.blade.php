<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold flex text-gray-100 no-underline border-b-4 border-b-white/50 hover:border-b-white">
                    <div class="text-white cursor-pointer flex gap-2 justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                          </svg>
                    </div>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base flex gap-5">
                    {{-- @if(session()->get('locate') = 'es') opacity-100 @else opacity-50 @endif --}}
                    @guest
                    <div class="select-flag flex gap-4">
                        <a href="{{url('lang/es')}}">
                            <img src="{{asset('images/es.png')}}" class="rounded-full p-1 bg-black/50 hover:scale-110 hover:bg-black/70 transition @if(session()->get('locate') == 'es') opacity-100 @else opacity-50 @endif "> 
                        </a>
                        <a href="{{url('lang/en')}}">
                            <img src="{{asset('images/en.png')}}" class="rounded-full p-1  bg-black/50 hover:scale-110 hover:bg-black/70 transition @if(session()->get('locate') == 'en') opacity-100 @else opacity-50 @endif">
                        </a>
                    </div>
                    <div class="text-white bg-black/50 p-2 rounded-xl flex gap-2 justify-center items-center hover:scale-110 hover:bg-black/70">
                        <a class="no-underline  flex flex-wrap gap-2 justify-center items-center" href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                              </svg>
                              
                              
                              {{ __('general.login-title') }}</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="text-white bg-black/50 p-2 rounded-xl flex gap-2 justify-center items-center hover:scale-110 hover:bg-black/70">
                            <a class="no-underline  flex" href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                  </svg>
                                  
                                  {{ __('general.register') }}</a>
                        </div>
                        @endif
                    @else
                    <div class="flex items-center gap-1">

                        <img src="{{ asset(Auth::user()->photo) }}" alt="" class="h-10 w-10 items-center">
                        @auth()
                            <a href="{{url('home')}}" class="m-2 underline">
                                <span>{{ Auth::user()->fullname }}</span>
                            </a>
                        @endauth
                        

                        <a href="{{ route('logout') }}"
                           class="no-underline bg-black/50 rounded-xl p-2 flex hover:scale-110 hover:bg-black/70 items-center"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                
                                  {{ __('Logout') }}
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                  </svg></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
