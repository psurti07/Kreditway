<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, height=device-height, initial-scale=1, user-scalable=0, user-scalable=no, user-scalable=0" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#194ba2">
	<!--=====Title=======-->
	<title>
		<?php if (isset($meta->title)) {
			echo $meta->title;
		} else {
			echo "Apply for Instant Personal Loan Online approvals | Rupay Credit";
		} ?>
	</title>
	<meta name="description" content="<?php if (isset($meta->descriptions)) {
		echo $meta->descriptions;
	} ?>" />
	<meta name="keywords" content="<?php if (isset($meta->keywords)) {
		echo $meta->keywords;
	} ?>" />

	<meta property="og:title" content="Apply for a Personal Loan Online - RupayCredit">
	<meta property="og:site_name" content="Kreditway">
	<meta property="og:url" content="<?php echo site_url(); ?>">
	<meta property="og:description"
		content="Apply online for personal loans with RupayCredit. Enjoy instant approvals, simple terms, and a hassle-free loan process. Start your application today!">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo base_url('assets/img/logo/logo.png'); ?>">
	<meta property="og:locale" content="en_IN">
	<script type="text/javascript">     (function(c,l,a,r,i,t,y){         c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};         t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;         y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);     })(window, document, "clarity", "script", "rfpq02sai7"); </script>
	<link rel="canonical" href="<?php echo base_url(uri_string()); ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="author" content="vw-team">

	<!--=====Fav icon=======-->
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo/rupeycredit_favicon.png') ?>" type="image/x-icon" />
	<link rel="icon" href="<?= base_url('assets/') ?>img/logo/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="<?= base_url('assets/') ?>img/logo/apple-icon.png">
	<link rel="icon" href="<?= base_url('assets/') ?>img/logo/apple-icon.png" type="image/x-icon">
	<!--=====CSS=======-->
	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/odometer.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/default.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/digi-custom.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/toastr.min.css') ?>">

	<!-- Facebook Domain + Pixel Code -->
	<?php
	$fbdomain = getFacebookDomain();
	if ($fbdomain != null) {
		echo '<meta name="facebook-domain-verification" content="' . $fbdomain . '" />';
	}

	$fbpixel = getFacebookPixel();
	if ($fbpixel != null) {
		?>
		<script>
			! function (f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function () {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?php echo $fbpixel; ?>');
			fbq('track', 'PageView');
			
		</script>
		<noscript><img height="1" width="1" style="display:none"
				src="https://www.facebook.com/tr?id=<?php echo $fbpixel; ?>&ev=PageView&noscript=1" /></noscript>
	<?php } ?>
	<!-- End Facebook Domain + Pixel Code -->

	<script type="onlineprocess/ld+json">
{
  "@context": "http://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "RupayCredit",
      "image": "https://kreditway/assets/img/logo/logo.png",
      "telephone": "+91-7314599786",
      "email": "info@kreditway
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2nd Floor, Plot 28, Parvati Nagar Soc, Bapa Sitaram Ck, Katargam",
        "addressLocality": "Surat",
        "addressRegion": "Gujarat",
        "postalCode": "395004",
        "addressCountry": "IN"
      },
      "url": "https://kreditway
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://kreditway.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Apply Now",
          "item": "https://kreditway/onlineprocess/applynow"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FAQs",
          "item": "https://kreditway/faqs"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Raise a Request",
          "item": "https://kreditway.com/support/request"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Customer Login",
          "item": "https://kreditway.com/customer"
        }
      ]
    },
    {
      "@type": "Organization",
      "name": "RupayCredit",
      "url": "https://kreditway.com",
      "logo": "https://kreditway.com/assets/img/logo/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-7314599786",
        "contactType": "Customer Service",
        "areaServed": "IN",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/people/Kreditwaycom/61558079536672/",
        "https://x.com/rupaycredi36563",
        "https://www.instagram.com/kreditways/?hl=en",
        "https://www.linkedin.com/in/rupay-credit-339214312/",
        "https://www.youtube.com/channel/UCdkrDBAk7oOxBk6hRkDesNQ",
        "https://in.pinterest.com/kreditwayofficial/"
      ]
    },
    {
      "@type": "WebSite",
      "url": "https://kreditway.com",
      "name": "RupayCredit",
      "description": "RupayCredit offers hassle-free personal loans with instant approvals and simple online application processes. Get financial aid when you need it most!",
      "publisher": {
        "@type": "Organization",
        "name": "RupayCredit",
        "logo": {
          "@type": "ImageObject",
          "url": "https://kreditway.com/assets/img/logo/logo.png"
        }
      }
    }
  ]
}
</script>

</head>

<body>
	<!-- Scroll-top -->
	<button class="scroll__top scroll-to-target" data-target="html">
		<i class="fas fa-angle-up"></i>
	</button>
	<!-- Scroll-top-end-->
	<!-- header-area -->
	<header class="tg-header__style-five transparent-header">
		<div id="sticky-header" class="tg-header__area tg-header__area-five">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tgmenu__wrap">
							<nav class="tgmenu__nav">
								<div class="py-0 py-lg-4">
									<a><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo"></a>
								</div>
							</nav>
						</div>
						<!-- Mobile Menu  -->
						<div class="tgmobile__menu">
							<nav class="tgmobile__menu-box">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<div class="nav-logo">
									<a><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo"></a>
								</div>
								<div class="tgmobile__search">
									<form action="#">
										<input type="text" placeholder="Search here...">
										<button><i class="fas fa-search"></i></button>
									</form>
								</div>
								<div class="tgmobile__menu-outer">
									<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
								</div>
							</nav>
						</div>
						<div class="tgmobile__menu-backdrop"></div>
						<!-- End Mobile Menu -->
					</div>
				</div>
			</div>
		</div>
	</header>
