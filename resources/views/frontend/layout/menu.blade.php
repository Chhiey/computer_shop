<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ request()->is('allProduct') ? 'active' : '' }}">
                    <a href="{{ url('/allProduct') }}">All Product</a>
                </li>
                <li class="{{ request()->is('accessories') ? 'active' : '' }}">
                    <a href="{{ url('/accessories') }}">Accessories</a>
                </li>
                <li class="{{ request()->is('contactus') ? 'active' : '' }}">
                    <a href="{{ url('/contactus') }}">Contact Us</a>
                </li>
                <li class="{{ request()->is('service') ? 'active' : '' }}">
                    <a href="{{ url('/service') }}">Service</a>
                </li>
                <li class="{{ request()->is('aboutus') ? 'active' : '' }}">
                    <a href="{{ url('/aboutus') }}">About Us</a>
                </li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->