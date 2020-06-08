@extends('layouts.app') <!-- Get Layout from folder 'views/layouts/layout' -->

        @section('content')
            <div class="wrapper pizza-index">
                <h1>Pizza Orders</h1>
                @foreach($pizzas as $pizza)
                    <div class="pizza-item">
                        <img src="/img/pizza.png" alt="pizza icon">
                        <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4> 
                    </div>
                @endforeach

                <!-- if it's NOT 'cheesy crust' then print <p></p> -->
              {{--  @unless ($base == 'cheesy crust')  --}}
                <!--     <p> You don't have a cheesy crust </p> -->
                {{--   @endunless --}}
            </div>
        @endsection

