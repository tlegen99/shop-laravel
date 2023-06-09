@extends('layouts.app')

@section('title_page')Все товары@endsection

@php
$products = $products ?? null;
@endphp

@section('content')
    <div class="products">
        <div class="row">
            <h1 class="h1">Все товары</h1>
            
            <div class="products__grid">
                @foreach($products as $product)
                    @include('card', ['product' => $product])
                @endforeach
            </div>
        </div>
    </div>
@endsection
