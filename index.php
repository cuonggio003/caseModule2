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
								<li><i class="ti-location-pin"></i>vị trí cửa hàng</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Thỏa thuận hàng ngày</a></li>
								<li><i class="ti-user"></i> <a href="#">tài khoản của tôi</a></li>
								
								<li><a href="login.php">đăng nhập</a></li>
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
									<option selected="selected">Tất cả các loại</option>
									<option>sách trong nước</option>
									<option>sách nhập khẩu</option>
									<option>sách mới nhất</option>
								</select>
								<form>
									<input name="search" placeholder="tìm kiếm tại đây....." type="search">
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
										<span>2 sản phẩm</span>
										<a href="#">xem giỏ hàng</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="images/homes/dacnhantam.jpeg" alt=""></a>
											<h4><a href="#">Đắc Nhân Tâm</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="images/homes/PHP.jpeg" alt=""></a>
											<h4><a href="#">lập trình php</a></h4>
											<p class="quantity">1x - <span class="amount">$75.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>tổng tiền</span>
											<span class="total-amount">$174.00</span>
										</div>
										<a href="checkout.html" class="btn animate">thanh toán ngay</a>
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
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh Mục Sản Phẩm</h3>
								<ul class="main-category">
									<li><a href="#">Nhưng Cuốn Sách Mới Nhất<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="#">Mật mã Da Vinci</a></li>
											<li><a href="#">Để được công nhận</a></li>
											<li><a href="#">Nơi nào có ý chí nơi đó có đường đi</a></li>
											<li><a href="#">Đánh thức mục đích sống</a></li>
											<li><a href="#">Đừng ép tôi phải lớn</a></li>
											<li><a href="#">Tôi tài năng, bạn cũng vậy</a></li>
											<li><a href="#">Không khoan nhượng</a></li>
											<li><a href="#">Suy nghĩ là tồn tại</a></li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">Bán Chạy Nhất<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Sách giáo khoa</a>
												<div class="image">
													<img src="images/homes/sgk.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">sách nâng cao</a>
													<a href="#">sách giải bài tập</a>
													<a href="#">từ điển tiếng anh</a>
													<a href="#">học tốt ngữ văn</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">sách lập trình</a>
												<div class="image">
													<img src="images/homes/laptrinh.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">lập trình PHP</a>
													<a href="#">lập trình java</a>
													<a href="#">lập trình C++</a>
													<a href="#">lập trình C#</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">top 10 cuốn sách hay sẽ thay đổi cuộc đời bạn</a>
												<div class="image">
													<img src="images/homes/top10.jpeg" alt="">
												</div>
												<div class="inner-link">
													<a href="#">khổng tử</a>
													<a href="#">dám nghĩ dám làm</a>
													<a href="#">đánh thúc mục đích sống</a>
													<a href="#">cuộc đời ngắn lắm đừng ngủ dài</a>
												</div>
											</li>
										</ul>
									<li><a href="#">Sách Chính trị – pháp luật</a></li>
									<li><a href="#">Sách Khoa học công nghệ – Kinh tế</a></li>
									<li><a href="#">Sách Văn học nghệ thuật</a></li>
									<li><a href="#">Sách Văn hóa xã hội – Lịch sử</a></li>
									<li><a href="#">Sách Giáo trình</a></li>
									<li><a href="#">Sách Truyện, tiểu thuyết</a></li>
									<li><a href="#">Sách Tâm lý, tâm linh, tôn giáo</a></li>
									<li><a href="#">Sách Sách thiếu nhi</a></li>
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
												<li class="active"><a href="#">Nhà</a></li>
												<li><a href="#">Sản Phẩm </a></li>
												<li><a href="#">Dịch Vụ</a></li>
												<li><a href="#">Cửa Hàng<i class="ti-angle-down"></i><span class="new">Mới</span></a>
													<ul class="dropdown">
														<!-- <li><a href="shop-grid.html">cửa hàng</a></li> -->
														<li><a href="cart.html">giỏ đựng</a></li>
														<li><a href="checkout.html">thủ tục thanh toán</a></li>
													</ul>
												</li>
												<li><a href="#">Các Trang</a></li>
												<li><a href="#">Blog<i class="ti-angle-down"></i></a>
													<ul class="dropdown">
														<!-- <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li> -->
													</ul>
												</li>
												<!-- <li><a href="contact.html">Liên Hệ Chúng Tôi</a></li> -->
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
										<h1><span>giảm giá đến 50%</span>Cửa Hàng Bán Sách Trực Tuyến </h1>
										<p>Trong cuộc sống nếu khi bạn cảm thấy trở nên bế tắc hay nản chán với công việc bạn chọn, hãy nghĩ đến lí do mà ta bắt đầu !</p>
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
							<p>Tài chính kinh doanh</p>
							<h3>bộ sưu tập<br>tài chính kinh doanh</h3>
							<a href="#">khám phá ngay</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/homes/khoahockinhte.jpeg" alt="">
						<div class="content">
							<p>sách khoa học công nghệ và kinh tế</p>
							<h3>sách mới nhất <br> 2021</h3>
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
							<p>sách cho trẻ em</p>
							<h3>hiện tại <br>giảm giá lên đến<span>40%</span></h3>
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
						<h2>Mặt Hàng Thịnh Hành</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">8 cuốn sách thịnh hành nhất hiện nay</a></li>

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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">cách sống</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">kinh thánh tiếng việt</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">nghành kinh tế</a></h3>
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
														
														<span class="new">mới</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">chứng khoán</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">học cách giao tiếp</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">muôn kiếp nhân sinh</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">đánh thức con người phi thường</a></h3>
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
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>thêm vào danh sách yêu thích</span></a>

														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">thêm vào giỏ hàng</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">học cách làm người lãnh đạo</a></h3>
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
							<p class="text">Hiệu sách, nơi mang đến doanh số bán hàng cho thế giới tri thức, ở đây có đầy đủ các loại sách mà bạn đã tìm kiếm bấy lâu nay. Hoặc săn tìm những cuốn sách có hạn mà chúng tôi đều có thể đáp ứng được.</p>
							<p class="call">Có câu hỏi? Gọi cho chúng tôi 24/7<span><a href="tel:0123456789">+025 25 25 25</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Thông Tin</h4>
							<ul>
								<li><a href="#">Câu hỏi thường gặp</a></li>
								<li><a href="#">Điều khoản và điều kiện</a></li>
								<li><a href="#">Liên hệ chúng tôi</a></li>
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Dịch Vụ Khách Hàng</h4>
							<ul>
								<li><a href="#">Phương thức thanh toán</a></li>
								<li><a href="#">Hoàn tiền</a></li>
								<li><a href="#">Lợi nhuận</a></li>
								<li><a href="#">Đang chuyển hàng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Nhận Trong Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>SỐ 3 phố đi bộViệt</li>
									<li>Thủ đô hà nội.</li>
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
								<p>Bản quyền © 2021 <a href="http://www.wpthemesgrid.com" target="_blank">cuonggio.VN</a> - Mọi quyền được bảo lưu.</p>
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