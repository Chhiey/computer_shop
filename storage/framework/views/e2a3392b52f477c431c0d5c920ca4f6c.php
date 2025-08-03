<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="<?php echo e(request()->is('allProduct') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/allProduct')); ?>">All Product</a>
                </li>
                <li class="<?php echo e(request()->is('accessories') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/accessories')); ?>">Accessories</a>
                </li>
                <li class="<?php echo e(request()->is('contactus') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/contactus')); ?>">Contact Us</a>
                </li>
                <li class="<?php echo e(request()->is('service') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/service')); ?>">Service</a>
                </li>
                <li class="<?php echo e(request()->is('aboutus') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/aboutus')); ?>">About Us</a>
                </li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION --><?php /**PATH /Users/mengly/Documents/Setec/web/Computer-Shop/resources/views/frontend/layout/menu.blade.php ENDPATH**/ ?>