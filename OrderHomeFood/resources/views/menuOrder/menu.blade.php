@extends('layouts.app')


@section('content')



  <h1 class="text-center font-serif text-2xl font-bold ">Menu</h1>
<div class="flex justify-center">


    <div class="w-8/12 bg-white p-6 rounded-lg">

        @auth

          <h1 class="text-center">Hello {{auth()->user()->name}}</h1>


        @endauth


        @guest
             <h1 class="text-center">Dear guest, if you wish to order, please <a href="/login" class="text-blue-500"> LOGIN </a> first.
               You do not have an accout? please <a href="/register" class="text-blue-500"> REGISTER </a> </h1>
        @endguest





    </div>



</div>

<div class="row">

  <a  href="{{url('/total')}}" type="submit"  value="total">show total</a>


</div>

<br>


<div class="row">

  <h1 class="text-center font-serif text-2xl font-bold">AUTHENTIC</h1>
  <br>
  <div class="grid grid-cols-3 divide-x divide-gray-500">

    @foreach($meals as $meal)
      @if($meal->type == "authentic")

      <div class="flex justify-center" >

           <ul>
             <h1 class="text-center text-2xl text-blue"><a href="#" value="order">Order</a></h1>
             <h2 class="text-center font-black">Name:</h2>
             <li class="text-center"><a href="">{{$meal->name}}</a></li>
              <h2 class="text-center font-black">Description:</h2>
             <li class="text-center"> {{$meal->description}}</li>
             <h2 class="text-center font-black">Price:</h2>
             <li class="text-center">${{$meal->price}}</li>
             <br>
           </ul>


      </div>

      @endif
    @endforeach
  



  </div>


</div>

<br><br>

<div class="row">

  <h1 class="text-center font-serif text-2xl font-bold">MEAT</h1>
  <br>
  <div class="grid grid-cols-3 divide-x divide-gray-500">

    @foreach($meals as $meal)
      @if($meal->type == "meat")

      <div class="flex justify-center" >
        <ul>
          <h1 class="text-center text-2xl text-blue"><a href="#">Order</a></h1>
          <h2 class="text-center font-black">Name:</h2>
          <li class="text-center"><a href="" value="mealName">{{$meal->name}}</a></li>
           <h2 class="text-center font-black">Description:</h2>
          <li class="text-center"> {{$meal->description}}</li>
          <h2 class="text-center font-black">Price:</h2>
          <li class="text-center">${{$meal->price}}</li>
          <br>
        </ul>


      </div>

      @endif
    @endforeach




  </div>


</div>

<br><br>

<div class="row">

  <h1 class="text-center font-serif text-2xl font-bold">SALAD</h1>
  <br>
  <div class="grid grid-cols-3 divide-x divide-gray-500">

    @foreach($meals as $meal)
      @if($meal->type == "salad")

      <div class="flex justify-center" >
        <ul>
           <h1 class="text-center text-2xl text-blue"><a href="#">Order</a></h1>
          <h2 class="text-center font-black">Name:</h2>
          <li class="text-center"><a href="" value="mealName">{{$meal->name}}</a></li>
           <h2 class="text-center font-black">Description:</h2>
          <li class="text-center"> {{$meal->description}}</li>
          <h2 class="text-center font-black">Price:</h2>
          <li class="text-center">${{$meal->price}}</li>
          <br>
        </ul>


      </div>

      @endif
    @endforeach




  </div>


</div>











@endsection
