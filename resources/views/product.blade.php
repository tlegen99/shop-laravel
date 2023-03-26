@extends('layouts.app')

@section('title_page')Продукт@endsection

@section('content')
    
    <div class="product">
        <div class="row">
            
            <h1 class="h1">Apple iPhone 14 Pro</h1>
            
            <div class="product__detail">
                <div class="product__detail__image">
                    <img src="images/products/phone/1/image.jpeg" alt="">
                </div>
                
                <div class="product__detail__info">
                    <div class="product__detail__row product__detail__price">
                        Цена: <span>184 990 ₽</span>
                    </div>
                    <div class="product__detail__row product__detail__desc">
                        Описание: <span>Отличный телефон с памятью 128 ГБ</span>
                    </div>
                    <a href="/cart" class="button button_green product__detail__cart">
                        Добавить в корзину
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection

