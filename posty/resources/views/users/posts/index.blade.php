@extends('layouts.app')


@section('content')



<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

    <h1 class="text-center">Welcome to {{$user->name}} post profile page!!</h1>
    <p>Posted {{  $posts->count()  }} {{  Str::plural('post', $posts->count())  }}</p>
    @if($posts->count())
            @foreach($posts as $post)
               <x-post :post="$post"/>
            @endforeach
            {{$posts ->links()}}

        @else
            <p>No posts for {{$user->name}}</p>
        @endif

    </div> 
</div>

@endsection