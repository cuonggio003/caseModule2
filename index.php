<?php
include_once('db/connect.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>shop books</title>

	
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">



</head>

<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +090 -999-9999</li>
								<li><i class="ti-email"></i> shopcuonggio@vip.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i>v??? tr?? c???a h??ng</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Th???a thu???n h??ng ng??y</a></li>
								<li><i class="ti-user"></i> <a href="#">t??i kho???n c???a t??i</a></li>
								
								<li><a href="login.php">????ng nh???p</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/homes/logo.png" alt=" "></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">T???t c??? c??c lo???i</option>
									<option>s??ch trong n?????c</option>
									<option>s??ch nh???p kh???u</option>
									<option>s??ch m???i nh???t</option>
								</select>
								<form>
									<input name="search" placeholder="t??m ki???m t???i ????y....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 s???n ph???m</span>
										<a href="#">xem gi??? h??ng</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="images/homes/dacnhantam.jpeg" alt=""></a>
											<h4><a href="#">?????c Nh??n T??m</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="images/homes/PHP.jpeg" alt=""></a>
											<h4><a href="#">l???p tr??nh php</a></h4>
											<p class="quantity">1x - <span class="amount">$75.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>t???ng ti???n</span>
											<span class="total-amount">$174.00</span>
										</div>
										<a href="checkout.html" class="btn animate">thanh to??n ngay</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh M???c S???n Ph???m</h3>
								<ul class="main-category">
									<li><a href="#">Nh??ng Cu???n S??ch M???i Nh???t<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="#">M???t m?? Da Vinci</a></li>
											<li><a href="#">????? ???????c c??ng nh???n</a></li>
											<li><a href="#">N??i n??o c?? ?? ch?? n??i ???? c?? ???????ng ??i</a></li>
											<li><a href="#">????nh th???c m???c ????ch s???ng</a></li>
											<li><a href="#">?????ng ??p t??i ph???i l???n</a></li>
											<li><a href="#">T??i t??i n??ng, b???n c??ng v???y</a></li>
											<li><a href="#">Kh??ng khoan nh?????ng</a></li>
											<li><a href="#">Suy ngh?? l?? t???n t???i</a></li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">B??n Ch???y Nh???t<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">S??ch gi??o khoa</a>
												<div class="image">
													<img src="images/homes/sgk.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">s??ch n??ng cao</a>
													<a href="#">s??ch gi???i b??i t???p</a>
													<a href="#">t??? ??i???n ti???ng anh</a>
													<a href="#">h???c t???t ng??? v??n</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">s??ch l???p tr??nh</a>
												<div class="image">
													<img src="images/homes/laptrinh.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">l???p tr??nh PHP</a>
													<a href="#">l???p tr??nh java</a>
													<a href="#">l???p tr??nh C++</a>
													<a href="#">l???p tr??nh C#</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">top 10 cu???n s??ch hay s??? thay ?????i cu???c ?????i b???n</a>
												<div class="image">
													<img src="images/homes/top10.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">kh???ng t???</a>
													<a href="#">d??m ngh?? d??m l??m</a>
													<a href="#">????nh th??c m???c ????ch s???ng</a>
													<a href="#">cu???c ?????i ng???n l???m ?????ng ng??? d??i</a>
												</div>
											</li>
										</ul>
									<li><a href="#">S??ch Ch??nh tr??? ??? ph??p lu???t</a></li>
									<li><a href="#">S??ch Khoa h???c c??ng ngh??? ??? Kinh t???</a></li>
									<li><a href="#">S??ch V??n h???c ngh??? thu???t</a></li>
									<li><a href="#">S??ch V??n h??a x?? h???i ??? L???ch s???</a></li>
									<li><a href="#">S??ch Gi??o tr??nh</a></li>
									<li><a href="#">S??ch Truy???n, ti???u thuy???t</a></li>
									<li><a href="#">S??ch T??m l??, t??m linh, t??n gi??o</a></li>
									<li><a href="#">S??ch S??ch thi???u nhi</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
												<li class="active"><a href="#">Nh??</a></li>
												<li><a href="#">S???n Ph???m </a></li>
												<li><a href="#">D???ch V???</a></li>
												<li><a href="#">C???a H??ng<i class="ti-angle-down"></i><span class="new">M???i</span></a>
													<ul class="dropdown">
														<!-- <li><a href="shop-grid.html">c???a h??ng</a></li> -->
														<li><a href="cart.html">gi??? ?????ng</a></li>
														<li><a href="checkout.html">th??? t???c thanh to??n</a></li>
													</ul>
												</li>
												<li><a href="#">C??c Trang</a></li>
												<li><a href="#">Blog<i class="ti-angle-down"></i></a>
													<ul class="dropdown">
														<!-- <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li> -->
													</ul>
												</li>
												<!-- <li><a href="contact.html">Li??n H??? Ch??ng T??i</a></li> -->
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>gi???m gi?? ?????n 50%</span>C???a H??ng B??n S??ch Tr???c Tuy???n </h1>
										<p>Trong cu???c s???ng n???u khi b???n c???m th???y tr??? n??n b??? t???c hay n???n ch??n v???i c??ng vi???c b???n ch???n, h??y ngh?? ?????n l?? do m?? ta b???t ?????u !</p>
										<img src="images/homes/a1900x700.jpeg" alt="" width="1900" height="700">
										<div class="button">
											<a href="#" class="btn">Mua ngay!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/homes/sachchinhtri.jpeg" alt="">
						<div class="content">
							<p>T??i ch??nh kinh doanh</p>
							<h3>b??? s??u t???p<br>t??i ch??nh kinh doanh</h3>
							<a href="#">kh??m ph?? ngay</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/homes/khoahockinhte.jpeg" alt="">
						<div class="content">
							<p>s??ch khoa h???c c??ng ngh??? v?? kinh t???</p>
							<h3>s??ch m???i nh???t <br> 2021</h3>
							<a href="#">mua ngay</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="images/homes/treem.jpeg" alt="">
						<div class="content">
							<p>s??ch cho tr??? em</p>
							<h3>hi???n t???i <br>gi???m gi?? l??n ?????n<span>40%</span></h3>
							<a href="#">mua ngay</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->

	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>M???t H??ng Th???nh H??nh</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">8 cu???n s??ch th???nh h??nh nh???t hi???n nay</a></li>

							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/cachsong.png" alt="">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">c??ch s???ng</a></h3>
													<div class="product-price">
														<span>$79.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/kinhthanh.png" alt="">

													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">kinh th??nh ti???ng vi???t</a></h3>
													<div class="product-price">
														<span>$58.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/kinhtecogi.png" alt="">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">ngh??nh kinh t???</a></h3>
													<div class="product-price">
														<span>$68.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/chungkhoan.png" alt="">
														
														<span class="new">m???i</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">ch???ng kho??n</a></h3>
													<div class="product-price">
														<span>$98.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/giaotiep.png" alt="">
														
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">h???c c??ch giao ti???p</a></h3>
													<div class="product-price">
														<span>$65.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/muonkiepnhansinh.png" alt="">
														
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">mu??n ki???p nh??n sinh</a></h3>
													<div class="product-price">
														<span>$49.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/danhthuc.png" alt="">
														
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">????nh th???c con ng?????i phi th?????ng</a></h3>
													<div class="product-price">
														<span>$56.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/homes/nguoilanhdao.png" alt="">
														
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>th??m v??o danh s??ch y??u th??ch</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">th??m v??o gi??? h??ng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">h???c c??ch l??m ng?????i l??nh ?????o</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="images/homes/logo2.png" alt=""></a>
							</div>
							<p class="text">Hi???u s??ch, n??i mang ?????n doanh s??? b??n h??ng cho th??? gi???i tri th???c, ??? ????y c?? ?????y ????? c??c lo???i s??ch m?? b???n ???? t??m ki???m b???y l??u nay. Ho???c s??n t??m nh???ng cu???n s??ch c?? h???n m?? ch??ng t??i ?????u c?? th??? ????p ???ng ???????c.</p>
							<p class="call">C?? c??u h???i? G???i cho ch??ng t??i 24/7<span><a href="tel:0123456789">+025 25 25 25</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Th??ng Tin</h4>
							<ul>
								<li><a href="#">C??u h???i th?????ng g???p</a></li>
								<li><a href="#">??i???u kho???n v?? ??i???u ki???n</a></li>
								<li><a href="#">Li??n h??? ch??ng t??i</a></li>
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>D???ch V??? Kh??ch H??ng</h4>
							<ul>
								<li><a href="#">Ph????ng th???c thanh to??n</a></li>
								<li><a href="#">Ho??n ti???n</a></li>
								<li><a href="#">L???i nhu???n</a></li>
								<li><a href="#">??ang chuy???n h??ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Nh???n Trong Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>S??? 3 ph??? ??i b???Vi???t</li>
									<li>Th??? ???? h?? n???i.</li>
									<li>shopcuonggio@vip.com</li>
									<li>+025 052 003</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>B???n quy???n ?? 2021 <a href="http://www.wpthemesgrid.com" target="_blank">cuonggio.VN</a> - M???i quy???n ???????c b???o l??u.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>

</html>