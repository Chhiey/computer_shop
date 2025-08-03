<?php $__env->startSection('title', 'service'); ?>
<?php $__env->startSection('content'); ?>
<style>
    /* Main Product Container */
    .product {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease, background-color 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background: #fff;
        margin-bottom: 30px;
    }

    /* Hover effect for product card */
    .product:hover {
        transform: scale(1.05);
        background-color: #f7f7f7;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Product Image */
    .product-img img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    /* Zoom effect on hover */
    .product-img:hover img {
        transform: scale(1.1);
        opacity: 0.85;
    }

    /* Product body section */
    .product-body {
        padding: 20px;
        text-align: center;
        background-color: #fafafa;
    }

    /* Product Name */
    .product-name a {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product-name a:hover {
        color: #ff5722;
    }

    /* Product Price */
    .product-price {
        font-size: 18px;
        color: #ff5722;
        margin: 10px 0;
        font-weight: bold;
    }

    /* Old Price */
    .product-old-price {
        text-decoration: line-through;
        color: #777;
    }

    /* Rating Stars */
    .product-rating {
        margin: 15px 0;
        font-size: 18px;
        color: #ff5722;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .product-rating i {
        transition: color 0.3s ease;
    }

    .product-rating:hover i {
        color: #ff7043;
        transform: scale(1.1);
    }

    /* Button Container */
    .product-btns {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 15px;
    }

    /* Buttons */
    .product-btns button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 18px;
        color: #555;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .product-btns button:hover {
        color: #ff5722;
        transform: scale(1.2);
    }

    /* Add to Cart Button */
    .add-to-cart-btn {
        width: 100%;
        padding: 14px;
        background: #ff5722;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        position: relative;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .add-to-cart-btn:hover {
        background: #e64a19;
        transform: scale(1.05);
    }

    /* Add to Cart Pulse Effect */
    .add-to-cart-btn:active {
        animation: pulse 0.4s ease-in-out;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }

    /* Add to Cart Icon */
    .add-to-cart-btn i {
        margin-right: 10px;
    }

    /* Mobile responsiveness */
    @media (max-width: 767px) {
        .product {
            margin-bottom: 20px;
        }
        .product-body {
            padding: 15px;
        }
    }
</style>

<div class="row">
    <!-- Product 1 -->
    <div class="col-md-4 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="<?php echo e(asset('frontend/img/sms24ultra.png')); ?>" alt="Galaxy S24 Ultra">
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">Galaxy S24 Ultra</a></h3>
                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i></button>
                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                </div>
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="<?php echo e(asset('frontend/img/sms24ultra.png')); ?>" alt="Galaxy S24 Ultra">
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">Galaxy S24 Ultra</a></h3>
                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i></button>
                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                </div>
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="<?php echo e(asset('frontend/img/sms24ultra.png')); ?>" alt="Galaxy S24 Ultra">
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">Galaxy S24 Ultra</a></h3>
                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i></button>
                    <button class="quick-view"><i class="fa fa-eye"></i></button>
                </div>
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Additional Products can be added here in the same format -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/smartsphone/index.blade.php ENDPATH**/ ?>