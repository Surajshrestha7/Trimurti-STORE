<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="./img/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
	<!-- Meta SEO -->
	<title>
		<?php echo $title; ?>
	</title>
	<meta name="author" content="Suraz Shrestha">
	<meta name="description" content="<?php echo $title; ?>">
	<meta name="keywords" content="<?php echo $title; ?>">
	<!-- Import CSS -->
	<link rel="stylesheet" href="./css/stylesUtilities.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


	<!-- My css -->
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/inner-page.css">
	<style>
		/* Selective Sticky Style */
	
	</style>
</head>

<body>
	<!-- Wrapper Start -->
	<div class="wrapper">
		<!-- Header Sections -->
		<header id="main-header" class="header bg-white <?php echo ($page == 'home' ? 'home' : ''); ?> ">
			<!-- header top -->
			<div class="header-top">
				<!-- header top top -->
				<div class="top-header-content">
					<div class="container top-header-flex">
						<div class="location-heading">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
								<path fill="currentColor"
									d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
							</svg>
							<a href="">Our Locations</a>
						</div>
						<div class="social-icon-header">
							<div class="icons-head"><a href=""><img src="./img/facebook.png" alt=""></a></div>
							<div class="icons-head"><a href=""><img src="./img/instagram.png" alt=""></a></div>
							<div class="icons-head"><a href=""><img src="./img/tiktok.png" alt=""></a></div>
						</div>
					</div>
				</div>
			</div> <!-- closing header-top early to exclude it from navigation stickiness -->
			
			<!-- NEW Sticky Part Starts Here -->
			<div id="sticky-header-part">
				<!-- header-top-bottom -->
				<div class="header-top-bottom">
					<div class="container">
						<div class="header-middle-flex">
							<div class="logo">
								<img src="./img/logo.png" alt="Trimurti Store">
							</div>
							
							<div class="search-box-wrap d-none d-md-flex">
								<div class="search-box">
									<input type="text" placeholder="Search For Products">
									<div class="search-btn">
										<svg viewBox="0 0 24 24">
											<path d="M10 2a8 8 0 105.29 14.29l4.7 4.7 1.41-1.41-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
										</svg>
									</div>
								</div>
							</div>

							<div class="header-icons-wrap">
								<!-- call us - hidden on small mobile -->
								<div class="call-us d-none d-lg-flex">
									<div class="call-us-icons">
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
											<path fill="currentColor" d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.98.98 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02c-.37-1.11-.56-2.3-.56-3.53c0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99" />
										</svg>
									</div>
									<div class="call-us-number">
										<h3>Call Us</h3>
										<a href="tel:<?php echo $phone; ?>"> <?php echo $phone; ?></a>
									</div>
								</div>

								<!-- profile/cart/wishlist icons -->
								<div class="profile-box">
									<div class="boxes">
										<a href="" title="Wishlist">
											<div class="love-box">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
													<path fill="currentColor" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z" />
												</svg>
											</div>
										</a>
										<a href="" title="Profile">
											<div class="profile-box-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
													<path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
												</svg>
											</div>
										</a>
										<a href="" title="Cart" class="active">
											<div class="cart-box">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
													<path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
												</svg>
											</div>
										</a>
									</div>
								</div>
								
								<!-- Hamburger Menu Button (Moved here for better mobile layout) -->
								<button class="hamburger-btn d-lg-none" id="mobile-menu-trigger" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
										<path fill="currentColor" d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z" />
									</svg>
								</button>
							</div>
						</div>
						
						<!-- Row 2: Search Box on mobile -->
						<div class="mobile-search-row d-md-none">
							<div class="search-box">
								<input type="text" placeholder="Search For Products">
								<div class="search-btn">
									<svg viewBox="0 0 24 24">
										<path d="M10 2a8 8 0 105.29 14.29l4.7 4.7 1.41-1.41-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<!-- header bottom -->
			<div class="header-bottom d-none d-lg-block">
				<div class="container">
					<div class="header-bottom-flex">
						<div class="header-bottom-left">
							<div class="dropdown">
								<button class=" category-dropdown" type="button" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
										<path fill="#fff"
											d="M6 8a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2zM19 8a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2zM32 8a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2zm0 13a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2z" />
									</svg> &nbsp; All Categories &nbsp; <svg class="catagory-dropdown-svg"
										xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 12 24">
										<path fill="#fff" fill-rule="evenodd"
											d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
									</svg>
								</button>

								<ul class="dropdown-menu category-menu-custom">
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/Smartphones.png" alt="SmartPhones"></div>
											<span>SmartPhones</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/Laptops.png" alt="Laptops"></div>
											<span>Laptops</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/pc-components.png" alt="Pc Components"></div>
											<span>Pc Components</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/smartwatches.png" alt="Smartwatches"></div>
											<span>Smartwatches</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/speakers.png" alt="Speakers"></div>
											<span>Speakers</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item category-item-link" href="#">
											<div class="cat-img-box"><img src="./img/camera.png" alt="Camera"></div>
											<span>Camera</span>
										</a>
									</li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item text-primary text-center fw-bold py-2" href="#">View All Categories</a></li>
								</ul>
							</div>
						</div>
						<div class="header-bottom-right">
							<div class="header-nav-main">
								<ul>
									<li class="<?php echo ($page == 'home' ? 'active' : ''); ?>">
										<a href="./home" title="Home">Home</a>
									</li>
									<li class="dropdown <?php echo ($page == 'products' ? 'active' : ''); ?>">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products <i class="fa fa-chevron-down ms-1 nav-chevron"></i></a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="./products">All Products</a></li>
											<li><a class="dropdown-item" href="./products?cat=electronics">SmartPhones</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Camera</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Laptop</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Pc Components</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item text-primary" href="#">View All</a></li>
										</ul>
									</li>
									<li class="dropdown <?php echo ($page == 'Hot Deals' ? 'active' : ''); ?>">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hot Deals <i class="fa fa-chevron-down ms-1 nav-chevron"></i></a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="./products?cat=electronics">SmartPhones</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Camera</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Laptop</a></li>
											<li><a class="dropdown-item" href="./products?cat=fashion">Pc Components</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item text-primary" href="#">View All</a></li>
										</ul>
									</li>
									<li class="<?php echo ($page == 'repair' ? 'active' : ''); ?>">
										<a href="./repair" title="Repair">Repair</a>
									</li>
									<li class="<?php echo ($page == 'compare' ? 'active' : ''); ?>">
										<a href="./compare" title="Compare">Compare</a>
									</li>
									<li class="<?php echo ($page == 'contact' ? 'active' : ''); ?>">
										<a href="./contact" title="Contact">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		<script>
			// Reliable Scroll Detection for Selective Part
			(function() {
				window.addEventListener('load', function() {
					const stickyPart = document.getElementById('sticky-header-part');
					if (!stickyPart) return;
					
					// Activation point: below the Top Promo bar
					const stickyPoint = 60;
					
					function checkScroll() {
						const scrollPos = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
						if (scrollPos > stickyPoint) {
							stickyPart.classList.add('is-sticky');
						} else {
							stickyPart.classList.remove('is-sticky');
						}
					}
					
					window.addEventListener('scroll', checkScroll);
					checkScroll();
				});
			})();
		</script>
		</div> <!-- closing #sticky-header-part -->
		</header> <!-- closing header -->

			<!-- Mobile Side Menu -->
			<div class="mobile-nav-overlay" id="mobile-overlay"></div>
			<div class="mobile-side-menu" id="side-menu">
				<div class="mobile-menu-header">
					<div class="mobile-logo">
						<img src="./img/logo.png" alt="Trimurti Store">
					</div>
					<button class="close-mobile-menu" id="close-menu">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" />
						</svg>
					</button>
				</div>
				
				<div class="mobile-menu-content">
					<div class="mobile-menu-section">
						<h4>Shop</h4>
						<ul class="mobile-nav-list">
							<li class="has-submenu">
								<a href="javascript:void(0)" class="submenu-toggle">Categories <i class="fa fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="#">SmartPhones</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Pc Components</a></li>
									<li><a href="#">Smartwatches</a></li>
									<li><a href="#">Speakers</a></li>
								</ul>
							</li>
						</ul>
					</div>
					
					<div class="mobile-menu-section">
						<h4>Main Menu</h4>
						<ul class="mobile-nav-list">
							<li class="<?php echo ($page == 'home' ? 'active' : ''); ?>"><a href="./home">Home</a></li>
							<li class="has-submenu">
								<a href="javascript:void(0)" class="submenu-toggle">Products <i class="fa fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="./products">All Products</a></li>
									<li><a href="./products?cat=electronics">SmartPhones</a></li>
									<li><a href="./products?cat=fashion">Camera</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="javascript:void(0)" class="submenu-toggle">Hot Deals <i class="fa fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="./products?cat=electronics">SmartPhones</a></li>
									<li><a href="./products?cat=fashion">Camera</a></li>
								</ul>
							</li>
							<li class="<?php echo ($page == 'repair' ? 'active' : ''); ?>"><a href="./repair">Repair</a></li>
							<li class="<?php echo ($page == 'compare' ? 'active' : ''); ?>"><a href="./compare">Compare</a></li>
							<li class="<?php echo ($page == 'contact' ? 'active' : ''); ?>"><a href="./contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
				<div class="mobile-menu-footer">
					<div class="mobile-call">
						<i class="fa fa-phone"></i> <?php echo $phone; ?>
					</div>
					<div class="mobile-socials">
						<a href=""><img src="./img/facebook.png" alt=""></a>
						<a href=""><img src="./img/instagram.png" alt=""></a>
						<a href=""><img src="./img/tiktok.png" alt=""></a>
					</div>
				</div>

	</div> <!-- closing side-menu -->

	<!-- Remaining page content will be inside .wrapper which continues here -->