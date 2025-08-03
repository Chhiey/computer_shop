<?php $__env->startSection('title', 'All Products'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Sidebar for Brand, Price Filter, and Best Products -->
        <div class="col-md-3">
            <div class="filter-box">
                <h4 class="filter-title">Find by Brand</h4>
                <ul class="brand-list">
                    <li><input type="checkbox"> Mac</li>
                    <li><input type="checkbox"> MSI</li>
                    <li><input type="checkbox"> Asus</li>
                    <li><input type="checkbox"> Other</li>
                </ul>
                <br>
                <br>
                <h4 class="filter-title">Find by Price</h4>
                <input type="range" min="0" max="2000" step="10" value="650" class="price-range" id="priceRange">
                <p>Price: $<span id="priceValue">650</span></p>
                <br>
                <br>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-md-9">
            <div class="row" id="product-list">
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?php echo e(asset('frontend/img/computer/photo_23_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 1</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_20_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 2</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_29_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 3</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_6_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 4</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_14_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 5</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_5_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 6</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_2_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 7</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_19_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 8</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product-item">
                    <div class="product">
                        <div class="product-img">
                        <img src="<?php echo e(asset('frontend/img/computer/photo_12_2025-02-07_23-03-18.JPG')); ?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">Product Name 9</a></h3>
                            <h4 class="product-price">$499.99 <del>$599.99</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                            <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('priceRange').addEventListener('input', function() {
        document.getElementById('priceValue').innerText = this.value;
    });
</script>

<div class="text-center" id="pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</div>

<?php $__env->stopSection(); ?>
<style>
.product {
    display: flex;
    flex-direction: column;
    height: 400px; /* Set a fixed height for the entire product box */
    overflow: hidden; /* Ensure content doesn't overflow */
}

.product-img {
    width: 100%;
    height: 250px; /* Set a fixed height for the images */
    overflow: hidden; /* Hide anything that overflows */
}

.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure images cover the container */
}

.product-body {
    flex-grow: 1;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.product-name, .product-price, .product-rating, .btn {
    margin-bottom: 10px;
}


</style>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/allproduct/index.blade.php ENDPATH**/ ?>