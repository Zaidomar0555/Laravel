<?php

namespace App\Http\Controllers\menuOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Meal;


class MealController extends Controller
{

    public function index(){

        $meal = Meal::orderBy('type')->get();
        return view('menuOrder.menu', ['meals' => $meal]);

    }

    public function showdetails(){

      return view('menuOrder.mealDetails');

    }

    /*
    *   // the one below, i accessed meal table throgh the user, by using the pivot table
      // return User::find(1)->meal()->get();


      // the one below, i accessed user table throgh the meal, by using the pivot table
      //return Meal::find(1)->user()->get();


      //  $meal = JunctionTable::all();
      //  return view('menuOrder.menu', ['members' => $info]);
      //return view('menuOrder.menu');

    */





}
