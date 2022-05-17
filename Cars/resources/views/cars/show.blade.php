@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="text-center">
        <h1 class="">
            {{ $car->name }}
        </h1>
    </div>
</div>

<div class="text-center">
        <span class="text-uppercase fs-6 text-primary fst-italic">
            Founded:{{ $car->founded }}
        </span>
        <p class="lead fs-6">
            {{ $car->description }}
        </p>

        <table>
            <tr>
                <th>
                    Model
                </th>
                <th>
                    Engines
                </th>
                <th>
                    Date
                </th>
            </tr>

            @forelse ($car->carModels as $model )
                <tr>
                    <td>
                        {{ $model->model_name }}
                    </td>
                    <td>
                        @foreach ($car->engines as $engine)
                            @if ($model->id ==$engine->model_id)
                               {{ $engine->engine_name }} 
                            @endif
                        @endforeach
                    </td>
                    <td>
                        {{ date('d-m-Y', strtotime ($car->productionDate->created_at)
                        ) }}
                    </td>
                </tr>
                
            @empty
                <p>
                    No models found
                </p>
            @endforelse
        </table>

        {{-- <p>
            Product Types
            @forelse ($car->products as $product)
                {{ $product->name }}
            @empty
                <p>
                    No car product found
                </p>
            @endforelse
        </p> --}}
        <hr class="mt-4 mb-4">
    
</div>

@endsection