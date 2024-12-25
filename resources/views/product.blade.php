@include('header')
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	@include('navbar')
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Security & Privacy</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".camera">Cameras</li>
                            <li data-filter=".firewall">FireWalls</li>
                            <li data-filter=".alarm">Alarm Systems</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center camera">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/cc2.jpg" alt=""></a>
						</div>
						<h3>Security Camera</h3>
						<p class="product-price"><span>Explore our advanced security camera systems at</span> 85$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center alarm">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/alarmsys.jpg" alt=""></a>
						</div>
						<h3>Alarm Systems</h3>
						<p class="product-price"> 70$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center firewall">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/firewall.png" alt=""></a>
						</div>
						<h3>FireWall</h3>
						<p class="product-price"> 35$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center firewall">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/Untitled2.jpg" alt=""></a>
						</div>
						<h3>FireWall</h3>
						<p class="product-price"> 35$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center camera">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/cc3.jpg" alt=""></a>
						</div>
						<h3>Security Camera</h3>
						<p class="product-price"> 80$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center camera">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/Untitled.jpg" alt=""></a>
						</div>
						<h3>Security Camera</h3>
						<p class="product-price"> 80$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
	<!-- footer -->
	@include('footer')
</body>
</html>