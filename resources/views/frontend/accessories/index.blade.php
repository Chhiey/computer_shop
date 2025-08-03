@extends('frontend.layout.master')
@section('title', 'Accessories')
@section('content')
<div class="container">
    <div class="row" id="product-list">

        <!-- Product 1: VGA Card -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4336.jpg') }}" alt="VGA Card">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Radeon RX 6700 XT VGA</a></h3>
                    <h4 class="product-price">$599.99 <del class="product-old-price">$649.99</del></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 2: Cooling Fan -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                   <img src="{{ asset('frontend/img/access/IMG_4348.JPG')}}" alt="Cooling Fan">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Corsair iCUE H150i Elite</a></h3>
                    <h4 class="product-price">$189.99 <del class="product-old-price">$219.99</del></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 3: Wireless Mouse -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4334.jpg') }}" alt="Wireless Mouse">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Logitech MX Master 3 Wireless Mouse</a></h3>
                    <h4 class="product-price">$89.99 <del class="product-old-price">$99.99</del></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 4: Keyboard -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4335.JPG') }}" alt="Keyboard">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Razer BlackWidow V3 Keyboard</a></h3>
                    <h4 class="product-price">$99.99 <del class="product-old-price">$119.99</del></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 5: USB Drive -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4356.JPG') }}" alt="USB Drive">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">SanDisk 128GB USB 3.0</a></h3>
                    <h4 class="product-price">$29.99</h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 6: Headset -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4351.JPG') }}" alt="Headset">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">SteelSeries Arctis 7 Wireless</a></h3>
                    <h4 class="product-price">$169.99 <del class="product-old-price">$189.99</del></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 7: Power Supply -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4360.JPG') }}" alt="Power Supply">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Corsair RM850x 850W PSU</a></h3>
                    <h4 class="product-price">$129.99</h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 8: Monitor Stand -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4361.JPG') }}" alt="Monitor Stand">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">VIVO Adjustable Monitor Stand</a></h3>
                    <h4 class="product-price">$49.99</h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

        <!-- Product 9: Cable Management Kit -->
        <div class="col-md-4 col-xs-6 product-item">
            <div class="product">
                <div class="product-img">
                    <img src="{{ asset('frontend/img/access/IMG_4358.JPG') }}" alt="Cable Management Kit">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#">Cable Management Kit</a></h3>
                    <h4 class="product-price">$19.99</h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span class="product-availability"><i class="fa fa-check-circle"></i> In Stock</span>
                    <a href="#" class="btn btn-danger add-to-cart">Add to Cart</a>
                    <a href="#" class="btn btn-outline-dark quick-view">Quick View</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->
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

</div>

@endsection