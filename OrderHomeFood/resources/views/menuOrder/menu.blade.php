@extends('layouts.app')


@section('content')




<div class="flex justify-center">

    <div class="w-8/12 bg-white p-6 rounded-lg">
        <h1 class="text-center">Menu</h1>




    </div>



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
             <h2 class="text-center font-black">Name:</h2>
              <form class="text-center" action="{{route('menu.mealDetails')}}" method="get">
                  <button type="submit">{{$meal->name}}</button>
              </form>
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
          <h2 class="text-center font-black">Name:</h2>
          <li class="text-center">{{$meal->name}}</li>
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
          <h2 class="text-center font-black">Name:</h2>
          <li class="text-center">{{$meal->name}}</li>
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
