
<footer class="footer">
    <!-- footer menu -->
    <div class="menu-oneline menu-oneline_footer">
   <ul>
      <li><a href="<?php echo get_site_url();?>/">ГЛАВНАЯ</a></li>
      <li><a href="<?php echo get_site_url();?>/news/">НОВОСТИ</a></li>
      <li><a href="<?php echo get_site_url();?>/projects">ПРОЕКТЫ</a></li>
      <li><a href="<?php echo get_site_url();?>/process-cihc/">УСЛУГИ</a></li>
      <li>
         <a href="<?php echo get_site_url();?>/katalog/">КАТАЛОГ</a>
         <ul class="menu-oneline__sub-menu">
            <li><a href="<?php echo get_site_url();?>/katalog/skejt-parki/">Скейт-парки</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/minirampy/">Минирампы</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/bouly-i-puly/">Боулы и пулы</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/krytye-skejtparki/">Крытые cкейт-парки</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/betonnye-skejtparki/">Бетонные скейт-парки</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/extrim-parki/">Экстрим парки</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/pamp-treki-bmx/">Памп треки для BMX</a></li>
            <li><a href="<?php echo get_site_url();?>/katalog/bouly-i-puly/">Бассейны для скейт-парков</a></li>
         </ul>
      </li>
      <li><a href="<?php echo get_site_url();?>/media">МЕДИА</a></li>
      <li><a href="<?php echo get_site_url();?>/about">КОМАНДА</a></li>
      <li><a href="<?php echo get_site_url();?>/history">ИСТОРИЯ</a></li>
      <li><a href="<?php echo get_site_url();?>/contact">КОНТАКТЫ</a></li>
   </ul>
   </div>

   <!-- side left -->
   <div class="footer__left-side">
      <h4>ПРОЕКТИРОВАНИЕ СТРОИТЕЛЬСТВО СКЕЙТ-ПАРКОВ</h4>
      <h6>Лидеры индустрии, передовые технологии</h6>
   </div>

   <!-- side middle -->
   <div class="footer__middle">
      <a href="#" class="footer__img-logo">
         <img alt="" src="<?php echo URI_IMAGES; ?>/logo.png" width="125" height="68" />
      </a>
      <h1>УМНЫЕ СКЕЙТ-ПАРКИ</h1>
      <div>
         <a href="http://vk.com/xsaramps">
            <img alt="" src="<?php echo URI_IMAGES ?>/8cabc8e4a93c458bbf6508caed8ad7d2.png" >
         </a>
         <a href="https://www.facebook.com/XSA.world">
            <img alt="" src="<?php echo URI_IMAGES ?>/d3470ec8ca26475da4b228f0199b5d3d.png" >
         </a>
         <a href="https://www.instagram.com/xsaramps/">
            <img alt="" src="<?php echo URI_IMAGES ?>/530d907aaf7648c89c79be7eea724d9c.png" >
         </a>
         <a href="http://www.youtube.com/channel/UCPicdyUFk1QdadYd0fEE34g">
            <img alt="" src="<?php echo URI_IMAGES ?>/af037f3cc11741d1ada5c7f70d1074bf.png" >
         </a>
      </div>
   </div>

   <!-- side right -->
   <div class="footer__right-side">
      <a href="mailto:admin@xsaramps.com">admin@xsaramps.com</a>
      <h4>8(800)500-90-46</h4>
      <button class="xsa-button">Закажи скейт-парк сейчас</button>
   </div>
   
   <!-- bottom part footer -->
   <div class="footer__small-line-left-side">
      <span>XSA-Ramps / Tel 8(800)500-90-46 / </span>
      <a href="mailto:admin@xsaramps.com">admin@xsaramps.com</a>
      <span> / © 2014-2017 by StoneCloud</span>
   </div>
   <div class="footer__small-line-right-side">
      <a href="testWebserver/stati/">Полезные статьи</a>
   </div>
  
</footer>

<!-- После рефакторинга header удалилась одна обвертка перепроверить нужен ли последний div -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script type="text/javascript">
   document.addEventListener( 'wpcf7mailsent', function( event ) {
      var formId = event.detail.contactFormId
      console.log('wpcf7mailsent', event)
      if ( 4153 === formId || 268 === formId ) {
         console.log('wpcf7mailsent--- send and run script',ym)
         ym(28627086,'reachGoal','order')
      }
   });
</script>

<script>
<!-- Получить UTM-метки в виде urlencoded -->
function webjack_get_utm_from_cookie() {
	try {
		var utm = 
		'&utm_source=' + webjack_get_cookie('utm_source') +
		'&utm_medium=' + webjack_get_cookie('utm_medium') +
		'&utm_campaign=' + webjack_get_cookie('utm_campaign') +
		'&utm_content=' + webjack_get_cookie('utm_content') +
		'&utm_term=' + webjack_get_cookie('utm_term') +
		'&roistat=' + webjack_get_cookie('roistat_visit');
		return utm;
	} catch (err) {
		console.log(err);
	}
};


<!-- Сохранить UTM-метки в виде сookie -->
function webjack_set_utm_to_cookie() {
	try {
		let utm ={
			utm_source: webjack_get_url_parameter('utm_source'),
			utm_medium: webjack_get_url_parameter('utm_medium'),
			utm_campaign:  webjack_get_url_parameter('utm_campaign'),
			utm_content: webjack_get_url_parameter('utm_content'),
			utm_term: webjack_get_url_parameter('utm_term')
		};
		
		var utm_update = false;
		for (key in utm) {
			if (utm[key] != "" ) { 
				utm_update = true;
			}
		}		
		
		if (utm_update) { 
			for (key in utm) {
				let updatedCookie = encodeURIComponent(key) + "=" + encodeURIComponent(utm[key]);
				document.cookie = updatedCookie;
			}
		}		
	} catch (err) {
		console.log(err);
	}
};


<!-- Получить параметры URL -->
function webjack_get_url_parameter(name) {
	try {
		name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
		var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
		var results = regex.exec(location.search);
		return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
	} catch (err) {
		console.log(err);
	}
};


<!-- Получить значение cookie -->
function webjack_get_cookie(name) {
	try {
		let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : "";
	} catch (err) {
		console.log(err);
	}
}


<!-- Подключить отправку данных форм на webhook webjack.ru -->
	webjack_set_utm_to_cookie();
	$('form').on('submit', function () {
      $.post('https://webjack.ru/webhooks/http/b86f5804aa964b6a809b626b94fb5e61/', $(this).serialize()+webjack_get_utm_from_cookie());
    })
</script>

</body>
</html>