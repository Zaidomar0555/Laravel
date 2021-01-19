<?php

namespace App\Http\Controllers\menuOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\JunctionTable;

class MealController extends Controller
{
    public function index(){

         $info = JunctionTable::all();
         return view('menuOrder.menu', ['members' => $info]);
        //return view('menuOrder.menu');


        
       
    }


    // public function testJunction(){

    //     $info = JunctionTable::get();
    //     return view('menuOrder.menu', ['members' => $info]);

    // }


}
