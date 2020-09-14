@extends('layouts.layout')

@section('content')
    
<div class="flex-center postition-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Pizza list</h1>
        </div>
        @foreach ($pizzas as $pizza)
            <div class="pizza-list">
                {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                <br>
            </div>
            
        @endforeach
    </div>
</div>
    
    @stop 

    {{-- @endsection --}}