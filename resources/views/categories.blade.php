@extends('layouts.app')

@section('title_page')Все категории@endsection

@section('content')
    <div class="categories">
        <div class="row">
            <div class="categories__grid">
                @foreach($categories as $category)
                    <div class="categories__item">
                        <div class="categories__item__image">
                            <img src="images/categories/phone.jpg" alt="">
                        </div>
                        <a href="{!! route("category", $category->code) !!}" class="categories__item__name">
                            {!! $category->name !!}
                        </a>
                        <div class="categories__item__desc">
                            {!! $category->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
