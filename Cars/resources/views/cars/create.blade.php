@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="text-center">
            <h1 class="fs-1 text-uppercase fw-bold">
                Create Car
            </h1>
        </div>
    </div>

    <div class="py-5 d-flex flex-column align-items-center">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="name"
                    placeholder="Brand name...">

                    <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="founded"
                    placeholder="Founded...">

                    <input 
                    type="text"
                    class="shadow-lg p-3 mb-5 bg-body rounded fst-italic d-block"
                    name="description"
                    placeholder="Description...">

                     <button type="submit" class="shadow-lg p-3 mb-5 bg-info rounded text-uppercase d-block w-100">
                        Submit
                     </button>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="m-auto text-center">
        @foreach ($errors->all() as $error)
            <li class="list-style-none text-danger">
                {{ $error }}
            </li>
        @endforeach
    </div>
@endif
@endsection