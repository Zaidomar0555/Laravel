<?php

namespace App\Http\Controllers\menuOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use App\Models\Meal;


class MealController extends Controller
{

  public function __construct(){
      $this->middleware(['guest']);
  }

  // public function __construct(){
  //     $this->middleware(['auth']);
  // }





    public function index(){

        $meal = Meal::orderBy('type')->get();
        return view('menuOrder.menu', ['meals' => $meal]);

    }

  public function showTotal(/*$username*/)
    {



    //$check =  Meal::where('name', $username)->get()->all();
      $count = Meal::count();
      $check = Meal::sum('price');


    // Maybe if make a loop that loops through the values of that selected names and add their values. after that, i will show
    // the results in a different page as a reciept to the customer.
      $testSumTwoCol = Meal::where('name', '=', 'xx')->value('price');
      $testsum = Meal::where('name', '=', 'vvc')->value('price');
      $total = $testSumTwoCol + $testsum;

      if($check == true)
      {
          dd($count,$check,$total);
          //return view('menuOrder.mealDetails', ['memebrs' => $check]);
      }
      else
      {
      dd("name is not found");
      }


    }

    // public function showResult()
    // {
    //
    //   //check if the name exists, if yes, then get the price of that meal.
    //   //User::find(1)->meal()->get();
    //
    //   // my idea, i will make a while loop that sets to true, and make a button/done order button,
    //   //when i click the button, the bool will set to false, which it will stop the while loop and get the total values(price) of the names clicked
    //   // and get the total price of all th selected names(meals).
    // //  $username = array();
    //   $bool = true;
    //   //$check = Meal::where('name', '=', $username)->value('price');
    //   $test1 = Meal::where('name', '=', 'Jareesh');
    //   $test2 = Meal::where('name', '=', 'mofateh');
    //   $test3 = Meal::where('name', '=', 'xx');
    //
    //   $collections = collect([$test1, $test2,$test3]);
    //   $array = [];
    //   $i = 0;
    //   $total = 0 ;
    //   foreach($collections as $collection){
    //     $array[$collection] = $collections[$collection];
    //   }
    //
    //   return dd($array);
    //
    // // if($bool != false){
    // //   return  dd($collection);
    // // }
    // //  $check = Meal::where('name', '=', $username)->value('price');
    //
    //   // return view('menuOrder.orderResults',['results' => $bool]);
    //
    // }





}
