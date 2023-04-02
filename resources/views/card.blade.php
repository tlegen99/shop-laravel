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
    
    <form action="{!! route('basket-add', $product) !!}" method="POST" class="products__item__buttons">
        <button type="submit" role="button" class="button button_blue">
            В корзину
        </button>
        <a href="{!! route('product', [$product->category->code, $product->code]) !!}" class="button detail">
            Подрбонее
        </a>
        @csrf
    </form>
</div>