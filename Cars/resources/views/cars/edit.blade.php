@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="text-center">
            <h1 class="fs-1 text-uppercase fw-bold">
                Update Car
            </h1>
        </div>
    </div>

    <div class="py-5">
        <form action="/cars/{{ $car->id }}" method="POST" class="d-flex flex-column align-items-center">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="name"
                    value="{{ $car->name }}">

                    <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="founded"
                    value="{{ $car->founded }}">

                    <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="description"
                    value="{{ $car->description }}">

                     <button type="submit" class="shadow-lg p-3 mb-5 bg-info rounded text-uppercase d-block w-100">

                        Submit
                     </button>
            </div>
        </form>
    </div>
@endsection