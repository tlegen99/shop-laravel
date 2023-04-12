@extends('layouts.app')

@section('title_page', 'Подтверждение заказа')

@section('content')
    
    <div class="order">
        <div class="row">
            
            <h1 class="h1">Подтвердите заказ</h1>
            
            <div class="order__text">
                Общая стоимость заказа: <b>{!! $order->getFullPrice() !!}</b>
            </div>
            <div class="order__text">
                Укажите номер телефон, что бы наш менеджер смог связаться с вами:
            </div>
            
            <form action="{!! route('basket-confirm'); !!}" method="POST" class="order__form">
                <div class="order__form__input">
                    <label for="form-name" class="label">
                        Имя:
                    </label>
                    <input type="text" name="name" id="form-name" class="input">
                </div>
                
                <div class="order__form__input">
                    <label for="form-phone" class="label">
                        Телефон:
                    </label>
                    <input type="tel" name="phone" id="form-phone" placeholder="+7(___)-__-__-__" class="input">
                </div>
                @csrf
                <button type="submit" class="button button_blue">
                    Подтвердить заказ
                </button>
            </form>
        </div>
    </div>
    
@endsection

