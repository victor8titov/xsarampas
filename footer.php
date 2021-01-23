
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
            <li><a href="<?php echo get_site_url();?>/katalog/bouly-i-puly/">Бассейны для скейт парков</a></li>
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
      <h4>ПРОЕКТИРОВАНИЕ СТРОИТЕЛЬСТВО СКЕЙТ ПАРКОВ</h4>
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

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

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

</body>
</html>