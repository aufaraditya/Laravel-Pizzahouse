<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza; //Reffereing to a Model

class PizzaController extends Controller
{

    /* This method used to limit view of non login users for any Route connected to this controller
    public function __construct(){
        $this->middleware('auth');
    }*/


    public function index(){
    
        
        // $pizzas = Pizza::all();  //Return All Data  
        // $pizzas = Pizza::orderBy('name', 'desc')->get();  // Pizza:orderBy will get the data with corresponding filter, ->get() to get the data
        // $pizzas = Pizza::where('type', 'hawaiian')->get(); 
        $pizzas = Pizza::latest()->get(); 

        return view('pizzas.index', [ //'pizzas.index' means the view stored in 'views/pizzas/index.blade.php'
            'pizzas' => $pizzas,
            ]);  /*if path '/' then return view called 'pizzas' in 'resources/views/pizzas.blade.php'*/
    }


    public function show($id){
         // use the $id variable to query the db for a record

         $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]); //'pizzas.show' means the view stored in 'views/pizzas/show.blade.php'
    }


    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        $pizza = new Pizza(); //Create New Object from a Model

        $pizza->name = request('name');
        $pizza->type = request('type'); //get value from input with attribute name = 'type'
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('mssg', 'Thank you for ordering');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect("{{ route( 'pizza.index' )}}");


    }

}
