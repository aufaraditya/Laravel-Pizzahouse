@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST"> <!-- Send to '/pizzas' route with 'POST' Request Method-->
        @csrf
            <label for="name">Your Name:</label>
            <input type="text" id ="name" name="name" required>
            <label for="type">Choose Pizza Type:</label>
            <select name="type" id ="type"> 
                <option value="margarita">Margartita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose Base Type:</label>
            <select name="base" id ="base"> 
                <option value="cheesy">Cheesy</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label for="">Extra Toppings</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/> <!-- [] means stored in array!-->
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
                <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
            </fieldset>          
            <input type="submit" value="Order Pizza">    
        </form>
    </div>
@endsection