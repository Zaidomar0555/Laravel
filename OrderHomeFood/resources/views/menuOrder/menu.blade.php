@extends('layouts.app')


@section('content')




<div class="flex justify-center">

    <div class="w-8/12 bg-white p-6 rounded-lg">
        <p class="text-center">Intro for the site </p>
         

    </div>

    

</div>


 @foreach($members as $member)

 <p>{{$member->user()->name}} and {{$member->meal()->name}}  and {{$member->meal()->price}}</p>

 @endforeach


<div class="row">

<div class="col-4-lg">

<div class="flex justify-center p-6">

<div class="flex space-x-24">
    <div class="w-8/8 bg-white p-6 rounded-lg">

        <div>picture</div>
        <div>info about that meal </div>
    
    </div> 

     <div class="w-8/8 bg-white p-6 rounded-lg">

         <div>picture</div>
        <div>info about that meal </div>
    
     </div> 


     <div class="w-8/8 bg-white p-6 rounded-lg">

         <div>picture</div>
        <div>info about that meal </div>
    
     </div> 


     <div class="w-8/8 bg-white p-6 rounded-lg">

         <div>picture</div>
        <div>info about that meal </div>
    
     </div> 

     
</div>
</div>

</div>

<div class="col-4-lg">

    <div class="flex justify-center p-6">
    
    <div class="flex space-x-24">
        <div class="w-8/8 bg-white p-6 rounded-lg">
 
        <div>picture</div>
        <div>info about that meal </div>
        
        </div> 
 
         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 


         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 


         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 
 
         
    </div>
 </div>

    </div>

    <div class="col-4-lg">

    <div class="flex justify-center p-6">
    
    <div class="flex space-x-24">
        <div class="w-8/8 bg-white p-6 rounded-lg">
 
        <div>picture</div>
        <div>info about that meal </div>
        
        </div> 
 
         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 


         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 


         <div class="w-8/8 bg-white p-6 rounded-lg">
 
         <div>picture</div>
        <div>info about that meal </div>
        
         </div> 
 
         
    </div>
 </div>

    </div>

</div>




@endsection