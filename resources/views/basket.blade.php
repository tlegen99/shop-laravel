@extends('layouts.app')

@section('title_page', 'Корзина')

@section('content')
    
    <div class="basket">
        <div class="row">
            
            <h1 class="h1">Корзина</h1>
            <p>Оформление заказа</p>
            
            <div class="basket__grid">
                <table>
                  <tr>
                    <td>Название</td>
                    <td>Количество</td>
                    <td>Цена</td>
                    <td>Стоимость</td>
                  </tr>
                </table>
                <div class="basket__item">
                    <div class="basket__item__image">
                    
                    </div>
                </div>
            </div>
            <div class="basket__grid">
                <div class="basket__grid__image">
                    <img src="/images/products/phone/1/image.jpeg" alt="">
                </div>
                
                <div class="basket__grid__info">

                </div>
            </div>
        </div>
    </div>
    
@endsection

