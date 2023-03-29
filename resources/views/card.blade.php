<div class="products__item">
    <div class="products__item__image">
        <img src="images/products/phone/1/image.jpeg" alt="">
    </div>
    
    <div class="products__item__name">
        {!! $product->name !!}
    </div>
    
    <div class="products__item__price">
        {!! $product->price !!}
    </div>
    
    <div class="products__item__buttons">
        <a href="/" class="button button_blue">
            В корзину
        </a>
        <a href="{!! route('product', [$product->category->code, $product->code]) !!}" class="button detail">
            Подрбонее
        </a>
    </div>
</div>