@extends('layouts.app')

@section('title_page', 'Корзина')

@section('content')
    
    <div class="basket">
        <div class="row">
            
            <h1 class="h1">Корзина</h1>
            <p>Оформление заказа</p>
            
            <div class="basket__grid">
                <table>
                    <thead>
                      <tr>
                        <td>Название</td>
                        <td>Количество</td>
                        <td>Цена</td>
                        <td>Стоимость</td>
                      </tr>
                </thead>
                
                <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>
                                <img src="/images/products/phone/1/image.jpeg" alt="" width="56" height="56">
                                <a href="{!! route('product', [$product->category->code, $product->code]) !!}">
                                    {!! $product->name !!}
                                </a>
                            </td>
                            <td>
                                <div class="count-wrapper">
                                    <form action="{!! route('basket-remove', $product) !!}" method="POST">
                                        <button type="submit" class="button del-btn">-</button>
                                        @csrf
                                    </form>
                                    
                                    <span class="count" data-js="count">
                                        {!! $product->pivot->count !!}
                                    </span>
                                    
                                    <form action="{!! route('basket-add', $product) !!}" method="POST">
                                        <button type="submit" class="button add-btn">+</button>
                                        @csrf
                                    </form>
                                </div>
                            </td>
                            <td>{!! $product->price !!}</td>
                            <td>{!! $product->getPriceForCount() !!}</td>
                        </tr>
                    @endforeach
                
                    <tr class="basket-sum">
                        <td colspan="3">Общая стоимость:</td>
                        <td>{!! $order->getFullPrice() !!}</td>
                    </tr>
                </tbody>
                </table>
                <br>
                <a href="{!! route('basket-order') !!}" class="button button_green">
                    Оформить заказ
                </a>
            </div>
        </div>
    </div>
    
@endsection

