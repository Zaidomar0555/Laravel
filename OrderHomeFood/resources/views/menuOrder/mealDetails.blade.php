@extends('layouts.app')


@section('content')

<h1>Here the details about the item selected</h1>
@foreach($memebrs as $check)

<p>{{$check->name}}</p>

@endforeach

@endsection
