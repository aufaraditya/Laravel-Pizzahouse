@extends('.layouts.layout') <!-- Get Layout from folder 'views/layouts/layout' -->

        @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/Pizzauf.png" alt="pizza house logo" />
                <div class="title m-b-md">
                    The WKWK Land Best Pizzas
                </div>
                <p class="mssg">{{session('mssg')}}</p>
                <a href="{{ route('pizza.create') }}">Order a Pizza</a>
            </div>
        </div>
        @endsection
