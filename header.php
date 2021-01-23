<?php
/**
 * The header for our theme
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<?php wp_head(); ?>

<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/favicon.png" rel="icon" type="image/png" />
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/favicon.png" rel="shortcut icon" type="image/png" />
  
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css3.2.0/bootstrap.min.css" rel="stylesheet" />

<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/ui.totop.css" type="text/css" media="screen" rel="stylesheet" />
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/flexslider.css" type="text/css" media="screen" rel="stylesheet" />
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/corusel.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
  
<!--[if lt IE 9]>
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/colorboxIE.css" rel="stylesheet" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/ie7.css" rel="stylesheet" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/ie8.css" rel="stylesheet" media="screen" />
<![endif]-->
<!--[if lte IE 9]>
<link href="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/css/ie.css" rel="stylesheet" media="screen" />
<![endif]-->
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js3.2.0/bootstrap.min.js" async></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js3.2.0/jquery-1.8.3.min.js"></script>

<script defer src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/jquery.ui.totop.js" async></script>
<script defer src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/jquery.flexslider.js" async></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/jquery.fancybox-1.3.4.js" type="text/javascript" async></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/jquery.maskedinput.min.js" type="text/javascript" async></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/js/document.ready.js" type="text/javascript" async></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SRNFGC');</script>
<!-- End Google Tag Manager -->

<meta name="p:domain_verify" content="f6a5049cd2ee4724bf4c4eeb6dfa8c0e"/>
<meta name="google-site-verification" content="pa07Ue7pb6Gm45xFO-RETuyl2rr9lxFr_afpxyi5P3I" />
<meta name="yandex-verification" content="7ddc5666689539ae" />

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Anton:n,b,i,bi|Basic:n,b,i,bi|Caudex:n,b,i,bi|Chelsea+Market:n,b,i,bi|Corben:n,b,i,bi|EB+Garamond:n,b,i,bi|Enriqueta:n,b,i,bi|Forum:n,b,i,bi|Fredericka+the+Great:n,b,i,bi|Jockey+One:n,b,i,bi|Josefin+Slab:n,b,i,bi|Jura:n,b,i,bi|Kelly+Slab:n,b,i,bi|Marck+Script:n,b,i,bi|Lobster:n,b,i,bi|Mr+De+Haviland:n,b,i,bi|Niconne:n,b,i,bi|Noticia+Text:n,b,i,bi|Overlock:n,b,i,bi|Patrick+Hand:n,b,i,bi|Play:n,b,i,bi|Sarina:n,b,i,bi|Signika:n,b,i,bi|Spinnaker:n,b,i,bi|Monoton:n,b,i,bi|Sacramento:n,b,i,bi|Cookie:n,b,i,bi|Raleway:n,b,i,bi|Open+Sans+Condensed:300:n,b,i,bi|Amatic+SC:n,b,i,bi|Cinzel:n,b,i,bi|Sail:n,b,i,bi|Playfair+Display:n,b,i,bi|Libre+Baskerville:n,b,i,bi|&amp;subset=latin-ext,cyrillic,japanese,korean,arabic,hebrew,latin" id="font_googleFonts">


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SRNFGC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="SITE_CONTAINER">
<div class="container">
<!-- header -->
<div class="header row" onmousemove="$('.submenu_catalog').css('display','none');">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-left">
      <div class="s6" id="i5r1klzj">
         <div class="font_2" style="font-size:18px; text-align:right;"><span style="font-size:18px;">ПРОЕКТИРОВАНИЕ</span></div>
         <div class="font_2" style="font-size:18px; text-align:right;"><span style="font-size:18px;">СТРОИТЕЛЬСТВО</span></div>
         <div class="font_2" style="font-size:18px; text-align:right;"><span style="font-size:18px;">СКЕЙТ-ПАРКОВ</span></div>
         <div class="font_2" style="font-size:14px; text-align:right;"><span style="color:rgb(27, 183, 238);"><span style="font-size:20px;"><span style="font-size:14px;"><span style="font-style:italic;">Лидеры индустрии,</span></span></span></span></div>
         <div class="font_2" style="font-size:14px; text-align:right;"><span style="color:#1BB7EE;"><span style="font-style:italic;">передовые технологии</span></span></div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-center">
      <div class="s5" id="i307f6gg">
         <a style="cursor: pointer; width: 125px; height: 68px;" href="/" target="_self" id="i307f6gglink" class="s5link">
						<img id="i307f6ggimgimage" alt="" src="<?php echo URI_IMAGES; ?>/logo.png" width="125" height="68" />
         </a>
      </div>
      <div class="s6" id="i5pl3hhu">
				<span style="font-size:14px;" class="font_2">УМНЫЕ СКЕЙТ-ПАРКИ</span>
      </div>
      <div class="s9" id="comp-ilf2b4ef">
         <div id="comp-ilf2b4efitemsContainer" class="s9itemsContainer">
            <div style="width:22px;height:22px;margin-bottom:0;margin-right:3px;display:inline-block;" class="s9imageItem" id="comp-ilf2b4ef0image">
               <noindex>
                  <a rel="nofollow" href="http://vk.com/xsaramps" target="_blank" data-content="http://vk.com/xsaramps" data-type="external" id="comp-ilf2b4ef0imagelink" class="s9imageItemlink" >
                     <div style="width: 22px; height: 22px;" id="comp-ilf2b4ef0imageimage" class="s9imageItemimage" >
                        <div class="s9imageItemimagepreloader" id="comp-ilf2b4ef0imageimagepreloader" ></div>
                        <img id="comp-ilf2b4ef0imageimageimage" alt="" src="/wp-content/themes/xsarampas/assets/images/8cabc8e4a93c458bbf6508caed8ad7d2.png" style="width: 22px; height: 22px; object-fit: cover;">
                     </div>
                  </a>
               </noindex>
            </div>
            <div style="width:22px;height:22px;margin-bottom:0;margin-right:3px;display:inline-block;" class="s9imageItem" id="comp-ilf2b4ef1image">
               <noindex>
               <a rel="nofollow" href="https://www.facebook.com/XSA.world" target="_blank" data-content="https://www.facebook.com/XSA.world" data-type="external" id="comp-ilf2b4ef1imagelink" class="s9imageItemlink" >
                  <div style="width: 22px; height: 22px;" id="comp-ilf2b4ef1imageimage" class="s9imageItemimage" >
                     <div class="s9imageItemimagepreloader" id="comp-ilf2b4ef1imageimagepreloader" ></div>
                     <img id="comp-ilf2b4ef1imageimageimage" alt=""  src="/wp-content/themes/xsarampas/assets/images/d3470ec8ca26475da4b228f0199b5d3d.png" style="width: 22px; height: 22px; object-fit: cover;">
                  </div>
               </a>
            </div>
            <div style="width:22px;height:22px;margin-bottom:0;margin-right:3px;display:inline-block;" class="s9imageItem" id="comp-ilf2b4ef2image" >
               <noindex>
                  <a rel="nofollow" href="https://www.instagram.com/xsaramps/" target="_blank" data-content="https://www.instagram.com/xsastore/" data-type="external" id="comp-ilf2b4ef2imagelink" class="s9imageItemlink" >
                     <div style="width: 22px; height: 22px;" id="comp-ilf2b4ef2imageimage" class="s9imageItemimage" >
                        <div class="s9imageItemimagepreloader" id="comp-ilf2b4ef2imageimagepreloader" ></div>
                        <img id="comp-ilf2b4ef2imageimageimage" alt=""  src="/wp-content/themes/xsarampas/assets/images/530d907aaf7648c89c79be7eea724d9c.png" style="width: 22px; height: 22px; object-fit: cover;">
                     </div>
                  </a>
               </noindex>
            </div>
            <div style="width:22px;height:22px;margin-bottom:0;margin-right:3px;display:inline-block;" class="s9imageItem" id="comp-ilf2b4ef3image" >
               <noindex>
                  <a rel="nofollow" href="http://www.youtube.com/channel/UCPicdyUFk1QdadYd0fEE34g" target="_blank" data-content="http://www.youtube.com/channel/UCPicdyUFk1QdadYd0fEE34g" data-type="external" id="comp-ilf2b4ef3imagelink" class="s9imageItemlink" >
                     <div style="width: 22px; height: 22px;" id="comp-ilf2b4ef3imageimage" class="s9imageItemimage" >
                        <div class="s9imageItemimagepreloader" id="comp-ilf2b4ef3imageimagepreloader" ></div>
                        <img id="comp-ilf2b4ef3imageimageimage" alt=""  src="/wp-content/themes/xsarampas/assets/images/af037f3cc11741d1ada5c7f70d1074bf.png" style="width: 22px; height: 22px; object-fit: cover;">
                     </div>
                  </a>
               </noindex>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-right">
      <div class="s6" id="i5pl65b6">
         <div class="font_2" style="font-size:14px;"><span style="text-decoration:underline;"><a href="mailto:admin@xsaramps.com" target="_self" data-content="admin@xsaramps.com" data-type="mail"><span style="font-size:14px;">admin@xsaramps.com</span></a></span></div>
      </div>
      <div class="s6" id="i5pl9ong">
         <div style="font-size:24px; line-height: 24px;padding-top:10px;padding-bottom:10px;" class="font_2">
            <span style="font-size:22px;line-height:28px;">8(800)500-90-46</span><br />
            <!-- <br /><span style="font-size: 16px;position: relative; top: -8px;">звонок бесплатный</span> -->
         </div>
      </div>
      <div id="i5plf9fq" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="position: absolute;	 height: 33px; min-height: 16px; width: 258px;" class="s7" data-state="desktop shouldUseFlex center"  data-prev-text="Закажи скейт-парк сейчас" data-prev-min-width="164" data-prev-width="258"><a href="/feedback" target="_self" data-keep-roots="true" data-anchor="#c6uu" id="i5plf9fqlink" class="g-transparent-a s7link" ><span id="i5plf9fqlabel" class="s7label" >Закажи скейт-парк сейчас</span></a></div>
   </div>
</div>
<!-- header -->
<!-- line -->
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom: 1px solid rgba(191, 191, 191, 1);"></div>
</div>
<!-- menu -->
<div class="row">
   <div style="text-align:center;" class="s4 s4itemsContainer">
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/" class="s4repeaterButtonlabel">ГЛАВНАЯ</a></div>
      <div class="s4repeaterButton" onmousemove="$('.submenu_catalog').css('display','none');"><a href="<?php echo get_site_url();?>/process-cihc/" class="s4repeaterButton s4repeaterButtonlabel">УСЛУГИ</a></div>
      <div class="s4repeaterButton" onmousemove="$('.submenu_catalog').css('display','block');">
         <a href="<?php echo get_site_url();?>/katalog/" class="s4repeaterButton s4repeaterButtonlabel">КАТАЛОГ</a>
         <div class="submenu_catalog" onmouseleave="$('.submenu_catalog').css('display','none');">
            <div><a href="http://www.xsaramps.com/katalog/skejt-parki/">Скейт-парки</a></div>
            <div><a href="http://www.xsaramps.com/katalog/minirampy/">Минирампы</a></div>
            <div><a href="http://www.xsaramps.com/katalog/bouly-i-puly/">Боулы и пулы</a></div>
            <div><a href="http://www.xsaramps.com/katalog/krytye-skejtparki/">Крытые cкейт-парки</a></div>
            <div><a href="http://www.xsaramps.com/katalog/betonnye-skejtparki/">Бетонные скейт-парки</a></div>
            <div><a href="http://www.xsaramps.com/katalog/extrim-parki/">Экстрим парки</a></div>
            <div><a href="http://www.xsaramps.com/katalog/pamp-treki-bmx/">Памп треки для BMX</a></div>
            <div><a href="http://www.xsaramps.com/katalog/bouly-i-puly/">Бассейны для скейт парков</a></div>
         </div>
      </div>
      <div class="s4repeaterButton" onmousemove="$('.submenu_catalog').css('display','none');"><a href="<?php echo get_site_url();?>/news/" class="s4repeaterButton s4repeaterButtonlabel">НОВОСТИ</a></div>
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/projects/" class="s4repeaterButton s4repeaterButtonlabel">ПРОЕКТЫ</a></div>
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/media/" class="s4repeaterButton s4repeaterButtonlabel">ВИДЕО</a></div>
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/about/" class="s4repeaterButton s4repeaterButtonlabel">КОМАНДА</a></div>
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/history/" class="s4repeaterButton s4repeaterButtonlabel">ИСТОРИЯ</a></div>
      <div class="s4repeaterButton"><a href="<?php echo get_site_url();?>/contact/" class="s4repeaterButton s4repeaterButtonlabel">КОНТАКТЫ</a></div>
   </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom: 1px solid rgba(191, 191, 191, 1);"></div>
<!-- menu -->

