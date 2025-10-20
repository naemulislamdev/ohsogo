<div class="card border-0 product w-100 ">
    <div class="product-item border border-dark wow animate__animated animate__zoomOutLite">
        <a href="{{ route('product.details', $product->slug) }}" class="product-img-container ">
            <img class="card-img-top product-img"
                src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product['thumbnail'] }}"
                alt="{{ $product['id'] }}" />
        </a>
        @if ($product->discount > 0)
            <button class="btn btn-sm bg-pink position-sticky discount-btn">
                @if ($product->discount_type == 'percent')
                    {{ round($product->discount, $decimal_point_settings) }}%
                @elseif($product->discount_type == 'flat')
                    {{ \App\CPU\Helpers::currency_converter($product->discount) }}
                @endif
            </button>
        @endif
        <div class="product-info">
            <button class="add-to-cart">ADD TO CART</button>
        </div>
    </div>
    <div class="card-body px-0">
        <a href="{{ route('product.details', $product->slug) }}" class="card-title stretched-link h4">
            {{ $product['name'] }}
        </a>
        <p class="card-text">
            @if ($product->discount > 0)
                <span
                    class="text-decoration-line-through">{{ \App\CPU\Helpers::currency_converter($product->unit_price) }}</span>

                <span
                    class="ms-2">{{ \App\CPU\Helpers::currency_converter(
                        $product->unit_price - \App\CPU\Helpers::get_product_discount($product, $product->unit_price),
                    ) }}</span>
            @else
                <span class="ms-2">{{ \App\CPU\Helpers::currency_converter($product->unit_price) }}</span>
            @endif
        </p>
        <div class="product-rating-star">★★★★★</div>
    </div>
</div>
