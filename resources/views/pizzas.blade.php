@extends('layouts.layout')

@section('content')
    
<div class="flex-center postition-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Pizza list</h1>
        </div>
        @foreach ($pizzas as $pizza)
            <div class="pizza-list">
              {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
            
        @endforeach
    </div>
</div>
    
    @stop 

    {{-- @endsection --}}