


<style>
    .ukuran {
        width: 200px;
        height: 240px;
        /* opacity: 0.5; */

    }
    .imgi {
        pointer-events: none;
    }
</style>

<div class="section145">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="main-title-tt">
    <div class="main-title-left">
    <span>For You</span>
    <h2>Prodak Terbaru</h2>
    </div>
    <a href="#" class="see-more-btn">See All</a>
    </div>
    </div>

    <div class="col-md-12">
    <div class="owl-carousel featured-slider owl-theme">
        
    @foreach ($data as $post_terbaru)
        
    <div class="item">
    <div class="product-item">
    {{-- <a href="single_product_view.html" class="product-img"> --}}
    <img class="ukuran" src="{{ $post_terbaru->gambar }}" alt="">
    <div class="product-absolute-options">
    <span class="offer-badge-1">New</span>
    <span class="like-icon" title="wishlist"></span>
    </div>
    </a>

    <div class="product-text-dt">
    <p>Available<span>(In Stock)</span></p>
    <h4>{{ $post_terbaru->judul }}</h4>
    <div class="product-price">Rp.{{ $post_terbaru->content }}</div>
    <div class="qty-cart">
    <div class="quantity buttons_added">
    <input type="button" value="-" class="minus minus-btn">
    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
    <input type="button" value="+" class="plus plus-btn">
    </div>
    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
    </div>
    </div>
    </div>
    </div>
    @endforeach

    <div class="item">
    <div class="product-item">
    <a href="single_product_view.html" class="product-img">
    <img src="{{asset('template')}}/images/product/img-5.jpg" alt="">
    <div class="product-absolute-options">
    <span class="offer-badge-1">New</span>
    <span class="like-icon" title="wishlist"></span>
    </div>
    </a>

    <div class="product-text-dt">
    <p>Available<span>(In Stock)</span></p>
    <h4>Product Title Here</h4>
    <div class="product-price">$6.95</div>
    <div class="qty-cart">
    <div class="quantity buttons_added">
    <input type="button" value="-" class="minus minus-btn">
    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
    <input type="button" value="+" class="plus plus-btn">
    </div>
    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
    </div>
    </div>
    </div>
    </div>

    <div class="item">
    <div class="product-item">
    <a href="single_product_view.html" class="product-img">
    <img src="{{asset('template')}}/images/product/img-6.jpg" alt="">
    <div class="product-absolute-options">
    <span class="offer-badge-1">New</span>
    <span class="like-icon" title="wishlist"></span>
    </div>
    </a>
    <div class="product-text-dt">
    <p>Available<span>(In Stock)</span></p>
    <h4>Product Title Here</h4>
    <div class="product-price">$8 <span>8.75</span></div>
    <div class="qty-cart">
    <div class="quantity buttons_added">
    <input type="button" value="-" class="minus minus-btn">
    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
    <input type="button" value="+" class="plus plus-btn">
    </div>
    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    