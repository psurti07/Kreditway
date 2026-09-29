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
	<title><?php if (isset($meta->title)) {
		echo $meta->title;
	} else {
		echo "Apply for Instant Personal Loan Online approvals | Rupay Credit";
	} ?></title>
	<meta name="description" content="<?php if (isset($meta->descriptions)) {
		echo $meta->descriptions;
	} ?>" />
	<meta name="keywords" content="<?php if (isset($meta->keywords)) {
		echo $meta->keywords;
	} ?>" />

	<meta property="og:title" content="RupayCredit - Quick Digital Loans for Instant Financial Solutions">
	<meta property="og:site_name" content="Kreditway">
	<meta property="og:url" content="<?php echo site_url(); ?>">
	<meta property="og:description"
		content="Access instant personal loans with RupayCredit. Enjoy quick approvals and easy online applications for your financial needs.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo base_url('assets/img/logo/logo.png'); ?>">
	<meta property="og:locale" content="en_IN">

	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RupayCredit - Quick Digital Loans for Instant Financial Solutions">
    <meta name="twitter:description" content="Apply for instant personal loans with RupayCredit. Enjoy hassle-free approvals and seamless online processes.">
    <meta name="twitter:image" content="https://kreditway.com/assets/img/logo/logo.png">

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

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/odometer.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/default.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css?t=1000') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/toastr.min.css') ?>">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	<script>
		const base_url = '<?php echo base_url(); ?>';
	</script>

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
	<!-- Taboola Pixel Code -->
	<script type='text/javascript'>
		window._tfa = window._tfa || [];
		window._tfa.push({ notify: 'event', name: 'page_view', id: 1756190 });
		!function (t, f, a, x) {
			if (!document.getElementById(x)) {
				t.async = 1; t.src = a; t.id = x; f.parentNode.insertBefore(t, f);
			}
		}(document.createElement('script'),
			document.getElementsByTagName('script')[0],
			'//cdn.taboola.com/libtrc/unip/1756190/tfa.js',
			'tb_tfa_script');
	</script>
	<!-- End of Taboola Pixel Code -->

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16731328369"></script>
	<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-16731328369'); </script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-P3EHBQNKB5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'G-P3EHBQNKB5');
	</script>

	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5W6F8DZ7');</script>
	<!-- End Google Tag Manager -->
	<script type="onlineprocess/ld+json">
{
  "@context": "http://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "name": "RupayCredit",
      "image": "https://kreditway.com/assets/img/logo/logo.png",
      "telephone": "+91-7314599786",
      "email": "info@kreditway.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2nd Floor, Plot 28, Parvati Nagar Soc, Bapa Sitaram Ck, Katargam",
        "addressLocality": "Surat",
        "addressRegion": "Gujarat",
        "postalCode": "395004",
        "addressCountry": "IN"
      },
      "url": "https://kreditway.com"
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
          "item": "https://kreditway.com/onlineprocess/applynow"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FAQs",
          "item": "https://kreditway.com/faqs"
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
          "url": "https://kreditwayom/assets/img/logo/logo.png"
        }
      }
    }
  ]
}
</script>
<script id="messenger-widget-b" src="https://cdn.express-chat.com/website-bot.js" defer>6961e8b4516fb9ad5a7435fa,6961e60f04ad4cd6c8b1f8fb,agent</script>
</head>

<body>
	<!-- Mgid Sensor -->
<script type="text/javascript">
    (function() {
        var d = document, w = window;
        w.MgSensorData = w.MgSensorData || [];
        w.MgSensorData.push({
            cid:901011,
            project: "a.mgid.com"
        });
        var l = "a.mgid.com";
        var n = d.getElementsByTagName("script")[0];
        var s = d.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var dt = !Date.now?new Date().valueOf():Date.now();
        s.src = "https://" + l + "/mgsensor.js?d=" + dt;
        n.parentNode.insertBefore(s, n);
    })();
</script>
<!-- /Mgid Sensor -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W6F8DZ7" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<button class="scroll__top scroll-to-target" data-target="html">
		<i class="fas fa-angle-up"></i>
	</button>
	<!-- Scroll-top-end-->
	<!-- header-area -->
	<header class="tg-header__style-five transparent-header">
		<div id="sticky-header" class="tg-header__area tg-header__area-five border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tgmenu__wrap">
							<nav class="tgmenu__nav">
								<div class="">
									<a href="<?= site_url(); ?>"><img src="<?= base_url('assets/img/logo/logo.png'); ?>"
											alt="Logo" width="180"></a>
								</div>
								<div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
									<ul class="navigation">
										<li>
											<a href="<?php echo site_url(); ?>">Home</a>
										</li>
										<li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
										<li><a href="javascript:;" onclick="goToMenu('plans')">Subscription</a></li>
										<li><a href="javascript:;" onclick="goToMenu('contact')">Contact Us</a></li>
									

									</ul>
								</div>
								<div class="tgmenu__action tgmenu__action-five d-none d-md-block">
									<ul class="list-wrap res-btn-menu">
	<li><a href="<?= base_url('customer') ?>">Login</a></li>
										<li class="header-btn"><a href="<?= base_url('onlineprocess/applynow') ?>"
												class="btn">Apply Now</a>
										</li>
									</ul>
								</div>
								<div class="mobile-nav-toggler mobile-nav-toggler-two">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="none">
										<path
											d="M0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2Z"
											fill="currentcolor" />
										<path
											d="M0 9C0 7.89543 0.895431 7 2 7C3.10457 7 4 7.89543 4 9C4 10.1046 3.10457 11 2 11C0.895431 11 0 10.1046 0 9Z"
											fill="currentcolor" />
										<path
											d="M0 16C0 14.8954 0.895431 14 2 14C3.10457 14 4 14.8954 4 16C4 17.1046 3.10457 18 2 18C0.895431 18 0 17.1046 0 16Z"
											fill="currentcolor" />
										<path
											d="M7 2C7 0.895431 7.89543 0 9 0C10.1046 0 11 0.895431 11 2C11 3.10457 10.1046 4 9 4C7.89543 4 7 3.10457 7 2Z"
											fill="currentcolor" />
										<path
											d="M7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9Z"
											fill="currentcolor" />
										<path
											d="M7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16Z"
											fill="currentcolor" />
										<path
											d="M14 2C14 0.895431 14.8954 0 16 0C17.1046 0 18 0.895431 18 2C18 3.10457 17.1046 4 16 4C14.8954 4 14 3.10457 14 2Z"
											fill="currentcolor" />
										<path
											d="M14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9Z"
											fill="currentcolor" />
										<path
											d="M14 16C14 14.8954 14.8954 14 16 14C17.1046 14 18 14.8954 18 16C18 17.1046 17.1046 18 16 18C14.8954 18 14 17.1046 14 16Z"
											fill="currentcolor" />
									</svg>
								</div>
							</nav>
						</div>
						<!-- Mobile Menu  -->
						<div class="tgmobile__menu">
							<nav class="tgmobile__menu-box">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<div class="nav-logo">
									<a href="<?= site_url(); ?>"><img src="<?= base_url('assets/img/logo/logo.png'); ?>"
											alt="Logo"></a>
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
	<!-- header-area-end -->
