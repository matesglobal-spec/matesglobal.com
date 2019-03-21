<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$metadescription;?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <!--<link rel="canonical" href="<?=current_url();?>">-->
    <title><?=$title;?> </title>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/OwlCarousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/aos/aos.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-180x180.png" />
    
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="yandex-verification" content="66f7b376f5725be9" />
	<script type="application/ld+json">
	{
	 "@context": "http://schema.org",
	 "@type": "Organization",
	 "name": "Mates Group",
	 "alternateName": "Best recruitment agencies, Labour Hire in Australia, Mates Group",
	 "url": "https://www.matesgroup.com.au",
	 "logo": "https://ibb.co/LZ8x1sQ",
	 "contactPoint": {
	 "@type": "ContactPoint",
	 "telephone": "+61 02 87333549",
	 "contactType": "customer service",
	 "areaServed": "AU",
	 "availableLanguage": "English"
	 },
	 "sameAs": [
	 "https://www.facebook.com/matesgroup.aus",
	 "https://twitter.com/matesgroupau",
	 "https://www.instagram.com/matesgroup.au/",
	 "https://www.linkedin.com/company/mates-group",
	 "https://www.pinterest.com.au/matesgroup/"
	 ]
	}
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132889509-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132889509-1');
</script>
<meta name="google-site-verification" content="m7dGfGkrrwg1PWhXDcD5qeeHrj_uQWIXnQnCU61SWFc" />
</head>

<body>
    <?php 
    if($this->session->userdata('cookies') || $this->input->cookie('ci_session')){ }else{ ?>
    <div id="noti">
        <div class="container">
            <div class="col-md-9">
                <p>We are using cookies to provide you the best experience on our website. By accepting cookies, you agree that we may store and access cookies and similar technologies on your device. <a href="#">View Policy</a>
               </p>
            </div>
            <div class="col-md-3">
                <button onclick="acceptsCookies();" class="btn btn-info">Accepts</button>
                <button onclick="declineCookies();" class="btn btn-default">Decline</button>
            </div>

        </div>
    </div>
    <?php } ?>
    <div class="wrapper">
        <!-- Start Header -->
        
        