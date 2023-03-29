@extends('layouts.app')

@section('title_page', 'Категория ' . $category->name)

@section('content')
    <div class="products">
        <div class="row">
            <h1 class="h1">{!! $category->name !!}</h1>
            <p>
                {!! $category->description !!}
            </p>
            <div class="products__grid">
                @foreach($category->products as $product)
                    @include('card', ['product' => $product])
                @endforeach
            </div>
        </div>
    </div>
@endsection
