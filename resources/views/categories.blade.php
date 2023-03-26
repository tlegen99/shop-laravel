@extends('layouts.app')

@section('title_page')Все категории@endsection

@section('content')
    <div class="categories">
        <div class="row">
            <div class="categories__grid">
                <div class="categories__item">
                    <div class="categories__item__image">
                        <img src="images/categories/phone.jpg" alt="">
                    </div>
                    <a href="javascript:void(0);" class="categories__item__name">
                        Мобильные телефоны
                    </a>
                    <div class="categories__item__desc">
                        Раздел с мобильными телефонами
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__image">
                        <img src="images/categories/portativ.png" alt="">
                    </div>
                    <a href="javascript:void(0);" class="categories__item__name">
                        Портативная техника
                    </a>
                    <div class="categories__item__desc">
                        Раздел с портативной техникой
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__image">
                        <img src="images/categories/bitovaya.png" alt="">
                    </div>
                    <a href="javascript:void(0);" class="categories__item__name">
                        Бытовая техника
                    </a>
                    <div class="categories__item__desc">
                        Раздел с бытовой техникой
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
