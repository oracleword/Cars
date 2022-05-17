@extends('layouts.app')

@section('content')
    <div class="py-5 text-center">
        <div class="">
            <h1 class="">
                cars
            </h1>
        </div>
    </div>
    
    <div class="p-3 px-5">
        <a href="cars/create">
            Add a new car &rarr;
        </a>
    </div>
    <div>
        @foreach ($cars as $car)
        <div class="px-5">
            <div class="float-end">
                <a class="p-3" href="cars/{{ $car->id }}/edit">
                Edit &rarr;</a>

                <form action="/cars/{{ $car->id }}" method="POST" class="pt-3">
                @csrf
                @method('delete')
                <button type="submit" class=" fst-italic text-danger">
                    Delete &rarr;
                </button>
                </form>
            </div>
            <span class="text-uppercase fs-6 text-primary fst-italic">
                Founded:{{ $car->founded }}
            </span>
            <h2 class="fs-1">
               <a href="/cars/ {{ $car->id }}">
                {{ $car->name }}
            </a>
            </h2>
            <p class="lead fs-6">
                {{ $car->description }}
            </p>
            <hr class="mt-4 mb-4">
        </div>
            
        @endforeach
    </div>
@endsection