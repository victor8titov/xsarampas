<?php
/**
 * Template Name: Шаблон города
 */

get_header(); ?>

	<!-- content -->
	<div class="row content">
		<div class="page-city-title">
			<?php echo '<h1>'. esc_html( get_the_title() ) .'</h1>'; ?>
		</div>

		<?php

		// check if the repeater field has rows of data
		if( have_rows('gallery') ): ?>

		<div class="page-city-gallery">
		
		<?php while ( have_rows('gallery') ) : the_row();
		        // display a sub field value
		        $image = get_sub_field('gallery_img');
		        $label = get_sub_field('gallery_label');
		?>
			<div class="page-city-gallery-block" style="background-image: url(<?php echo $image; ?>);">
				<div class="page-city-gallery-block__label">
					<?php echo $label; ?>
				</div>
			</div>

			<?php endwhile; ?>

		</div>

		<?php endif;

		?>

		<div class="page-city-top-content">
			<?php the_content(); ?>
		</div>

		<!-- shaddow  -->
		<div class="row">
			<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg"><div id="comp-ion142hgcont" class="s32cont" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0"><div id="comp-ion142hgline" class="s32line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0"></div></div></div>
		</div>

		<!-- 3 columns 2 -->
		<?php if( get_field('show-block-3-columns') ): ?>
		<div class="row" style="padding: 0 30px">
			
			<div class="main_h1"><?php the_field('block-skates_title'); ?></div>
	
			<?php while ( have_rows('block-skates_content') ) : the_row();
		        $title = get_sub_field('block-skates_content-title');
		        $text = get_sub_field('block-skates_content-text');
		        $link = get_sub_field('block-skates_content-link');
			?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="s6">
						<p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span 	style="font-weight:bold;"><?php echo $title; ?></span></span></p>
						<p class="font_8 font_14" style="padding: 30px 0"><?php echo $text; ?></p>
						<a href="<?php echo $link; ?>" class="s7link-ver-2">ПОДРОБНЕЕ</a>
					</div>			
				</div>

			<?php endwhile; ?>

		</div>
		

		<!-- shaddow  -->
		<div class="row">
			<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" 	data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg">
				<div id="comp-ion142hgcont" class="s32cont" 	data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0">
					<div id="comp-ion142hgline" class="s32line" 	data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0">
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
	</div>

	<!-- what is rsa -->
	<?php if( get_field('show-perfect-park') ): ?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					
					<div class="s24" style="padding-top: 43px;">
					<div id="comp-ioqxg9m6inlineContent" class="s24inlineContent">
					
					<div><div style="text-align: center;" class="s6" id="comp-ion142hl">				
						<div style="font-size:24px;" class="font_2"><span style="font-size:24px;"><?php the_field('perfect-skate_subtitle'); ?></span></div>
					</div>
					<div class="s6" id="comp-ion142hp" style="padding-bottom: 73px; text-align: center;">
						<div style="font-size:36px;" class="font_2"><span style="color:#1BB7EE;"><span style="font-size:36px;"><?php the_field('perfect-skate_title'); ?></span></span></div>
					</div></div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						
						<div style="float: left; width: 62px; height: 70px;" title="" class="s5" id="comp-ion142id">
							<div style="width: 62px; height: 70px;" id="comp-ion142idlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142id.0">
								<div id="comp-ion142idimg" class="s5img" style="position: relative; width: 62px; height: 70px;"><div class="s5imgpreloader" id="comp-ion142idimgpreloader"></div>
									<img id="comp-ion142idimgimage" alt="" style="width: 62px; height: 70px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_2dd06df1b1b34c64993de20e44f7ccd5.png" alt="" />
								</div>
							</div>
						</div>
						
						<div style="margin-left: 70px;width: 218px;" class="s6" id="comp-ion142i9"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">АКТУАЛЬНЫЕ ПЛОЩАДКИ</span></span></div></div>
						<div style="margin-left: 70px;width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>					
						<div style="margin-left: 70px; margin-bottom: 70px; width: 182px;" class="s6" id="comp-ion142ip"><p class="font_8"><?php the_field('actual_11'); ?></p></div>
						
						<div style="float: left; width: 62px; height: 66px;" title="" class="s5" id="comp-ion142j2">
							<div style="width: 62px; height: 66px;" id="comp-ion142j2link" class="s5link">
								<div id="comp-ion142j2img" class="s5img" style="position: relative; width: 62px; height: 66px;">
									<div class="s5imgpreloader" id="comp-ion142j2imgpreloader">
									</div>
									<img id="comp-ion142j2imgimage" alt="" style="width: 62px; height: 66px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7a8e71689678434f9e7801c06e23cc09.png" />
								</div>
							</div>
						</div>
						
						<div style="margin-left: 70px;width: 218px;" class="s6" id="comp-ion142iy"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПРИЯТНАЯ СМЕТА</span></span></div></div>
						<div style="margin-left: 70px;width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>
						<div style="margin-left: 70px;margin-bottom: 70px;width: 182px;" class="s6" id="comp-ion142iu" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142iu"><p class="font_8"><?php the_field('actual_12'); ?></div>						
									
								
						<div style="float: left; width: 62px; height: 62px;" title="" class="s5" id="comp-ion142jw">
							<div style="width: 62px; height: 62px;" id="comp-ion142jwlink" class="s5link">
								<div id="comp-ion142jwimg" class="s5img" style="position: relative; width: 62px; height: 62px;">
									<div class="s5imgpreloader" id="comp-ion142jwimgpreloader"></div>
									<img id="comp-ion142jwimgimage" alt="" style="width: 62px; height: 62px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_ade5b1c855d14626bb9f284d5f22a4fe.png" />
								</div>
							</div>
						</div>

						<div style="margin-left: 70px; width: 218px;" class="s6" id="comp-ion142jc"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПРОЕКТ +</span></span></div></div>
						<div style="margin-left: 70px; width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>
						<div style="margin-left: 70px; margin-bottom: 70px; width: 182px;" class="s6" id="comp-ion142j8"><p class="font_8"><?php the_field('actual_13'); ?></p></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="width: 302px; height: 182px; padding-top: 90px;" title="" class="s5" id="comp-ion142i4">
							<a style="cursor: pointer; width: 302px; height: 182px;" href="http://www.xsaramps.com/2glavnaya" target="_self" id="comp-ion142i4link" class="s5link">
								<div id="comp-ion142i4img" data-style="" class="s5img">
									<div class="s5imgpreloader" id="comp-ion142i4imgpreloader"></div>
									<img id="comp-ion142i4imgimage" alt="" style="width: 250px; height: 182px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_44bbd4d32ddd4356957c0ca67b4caefc.png" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="float: right; width: 60px; height: 68px;" title="" class="s5" id="comp-ion142l0">
							<div style="width: 60px; height: 68px;" id="comp-ion142l0link" class="s5link">
								<div id="comp-ion142l0img" class="s5img" style="position: relative; width: 60px; height: 68px;">
									<div class="s5imgpreloader" id="comp-ion142l0imgpreloader"></div>
									<img id="comp-ion142l0imgimage" alt="" style="width: 60px; height: 68px; object-fit: fill;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_144eb8bb662044428d128609bca3f488.png">
								</div>
							</div>
						</div>
						<div style="margin-right: 70px; width: 233px;" class="s6" id="comp-ion142kv"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ОРИГИНАЛЬНЫЙ СКЕЙТ ПАРК</span></span></div></div>
						<div style="margin-right: 70px; width: 180px; height: 5px;" class="s17" id="comp-ion142lg"><div id="comp-ion142lgline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 36px; width: 180px;" class="s6" id="comp-ion142kp"><p class="font_8" ><?php the_field('actual_21'); ?></p></div>
						<div style="float: right; width: 60px; height: 100px;" title="" class="s5" id="comp-ion142l5">
							<div style="width: 60px; height: 100px;" id="comp-ion142l5link" class="s5link">
								<div id="comp-ion142l5img" class="s5img" style="position: relative; width: 60px; height: 100px;">
									<div class="s5imgpreloader" id="comp-ion142l5imgpreloader"></div>
									<img id="comp-ion142l5imgimage" alt="" style="width: 60px; height: 100px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_3cee82100a5c4fdfbac11afae4e75e34.png">
								</div>
							</div>
						</div>
						<div style="margin-right: 70px; width: 266px;" class="s6" id="comp-ion142kl"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПОСТАВКА В КРАТЧАЙШИЕ СРОКИ</span></span></div></div>
						<div style="margin-right: 70px; width: 210px; height: 5px;" class="s17" id="comp-ion142lu"><div id="comp-ion142luline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 5px; width: 180px;" class="s6" id="comp-ion142kg"><p class="font_8"><?php the_field('actual_22'); ?></p></div>
						<div style="float: right; width: 60px; height: 60px;" title="" class="s5" id="comp-ion142la">
							<div style="width: 60px; height: 60px;" id="comp-ion142lalink" class="s5link">
								<div id="comp-ion142laimg" data-style="" class="s5img" style="position: relative; width: 60px; height: 60px;">
									<div class="s5imgpreloader" id="comp-ion142laimgpreloader">
									</div>
									<img id="comp-ion142laimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142la.0.0.$image" style="width: 60px; height: 60px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_ad62bb46abd4468fa708778e3ca42bab.png" />
								</div>
							</div>
						</div>
						<div style="margin-right: 70px;width: 216px;" class="s6" id="comp-ion142kc"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ГАРАНТИЯ 2+1</span></span></div></div>
						<div style="margin-right: 70px;width: 130px; height: 5px;" class="s17" id="comp-ion142ln"><div id="comp-ion142lnline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 70px; width: 180px;" class="s6" id="comp-ion142k8"><p class="font_8"><span style="font-family:'open sans', sans-serif; font-size:12px; line-height:normal;"><?php the_field('actual_23'); ?></span></p></div>
					</div>
			</div>
		</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row">
		<div style="height: 5px;" class="s8" id="comp-ion142m8" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142m8"><div id="comp-ion142m8line" class="s8line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142m8.0"></div></div>
	</div>
	
	<!-- what is rsa nums -->
	<?php if( get_field('show-parks-in-numbers') ): ?>
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<div class="s16" id="comp-ion142px">
					<div data-type="bgimage" id="comp-ion142pxbg" class="s16bg" style="background-image: none;">
					</div>
					<div id="comp-ion142pxinlineContent" class="s16inlineContent">
					</div>
				</div>

				<div style="height: 346px;" class="s24" id="comp-ion142w9">
					<div id="comp-ion142w9inlineContent" class="s24inlineContent">
					
					<br />
					
					<div style="width: 402px; position: absolute; left: 278px; top: -1px; height: 39px;" class="s25" id="comp-ion142wj">
						<div class="s25_left s25_shd"></div>
						<div class="s25_right s25_shd"></div>
						<div id="comp-ion142wjbg" class="s25bg"></div>
						<div id="comp-ion142wjinlineContent" class="s25inlineContent"><div style="text-align: center;" class="s6" id="comp-ion142wp"><div class="font_2"><?php the_field('numbers_title'); ?></div></div></div>
					</div>
				
				<div style="width: 230px; position: absolute; left: 55px; top: 66px;" class="s6" id="comp-ion142x0"><div style="text-align:right; font-size:28px;" class="font_2"><span class="color_11"><span style="font-size:28px;">XSA RAMPS</span></span></div>

				<div style="font-size:16px; text-align:right;" class="font_2"><span class="color_11"><span style="font-size:16px;"><span style="font-style:italic;">Команда профессионалов</span></span></span></div>
				</div><div style="width: 8px; position: absolute; left: 347px; top: 76px; height: 8px;" class="style-ion142x6" id="comp-ion142x4" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142x4"><style type="text/css">.style-ion142x6 svg {width:100%;height:100%;position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;fill:#FFFFFF;fill-opacity:1;stroke:rgba(255, 255, 255, 1);stroke-width:1px;}
				.style-ion142x6 svg * {vector-effect:non-scaling-stroke;}</style><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="-14.285714285714278 -14.285714285714278 228.57142857142856 228.57142857142856" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
				<g><path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path></g>
				</svg></div><div style="width: 8px; position: absolute; left: 599px; top: 76px; height: 8px;" class="style-ion142xc" id="comp-ion142xa" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xa"><style type="text/css">.style-ion142xc svg {width:100%;height:100%;position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;fill:#FFFFFF;fill-opacity:1;stroke:rgba(255, 255, 255, 1);stroke-width:1px;}
				.style-ion142xc svg * {vector-effect:non-scaling-stroke;}</style><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="-14.285714285714278 -14.285714285714278 228.57142857142856 228.57142857142856" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;"><g><path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path></g></svg></div><div style="width: 142px; position: absolute; left: 408px; top: 102px; height: 34px;" class="s28" id="comp-ion142xf" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf"><b class="s28_tl" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.0"></b><b class="s28_tr" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.1"></b><b class="s28_bl" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.2"></b><b class="s28_br" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.3"></b><div id="comp-ion142xfbg" class="s28bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.4"></div><div id="comp-ion142xfinlineContent" class="s28inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.5"><div style="left: 32px; width: 92px; position: absolute; top: 6px;" class="s6" id="comp-ion142xj" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.5.$comp-ion142xj"><div style="font-size:18px;" class="font_2"><span style="font-size:18px;"><span class="color_11"><span style="font-style:italic;">Основано</span></span></span></div>
				</div></div></div><div style="width: 130px; position: absolute; left: 412px; top: 58px;" class="s6" id="comp-ion142xu" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xu"><div style="text-align:right; font-size:48px;" class="font_2"><span style="font-size:48px;"><font color="#ffffff">200</font></span><span style="font-size:50px;"><font color="#ffffff">6</font></span></div>
				</div><div style="width: 260px; position: absolute; left: 664px; top: 66px;" class="s6" id="comp-ion142xz" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xz"><div class="font_2" style="font-size:28px;"><span style="color:#ffffff;"><?php the_field('numbers_16'); ?> ЛЕТ ОПЫТА</span></div>
				<div class="font_2" style="font-size:16px;"><span style="color:#ffffff;">строительства лучших парков</span></div>
				</div><div style="position: absolute; left: 477px; top: 179px; width: 38px; height: 40px;" data-exact-height="40" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142y4" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4"><div style="width: 38px; height: 40px;" id="comp-ion142y4link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0"><div id="comp-ion142y4img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0" style="position: relative; width: 38px; height: 40px;"><div class="s5imgpreloader" id="comp-ion142y4imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0.0"></div><img id="comp-ion142y4imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0.$image" style="width: 38px; height: 40px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="width: 170px; position: absolute; left: 0px; top: 231px;" class="s6" id="comp-ion142ya" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142ya"><div class="font_2" style="font-size:50px; text-align:center;"><span style="font-size:50px;"><span class="color_11"><?php the_field('numbers_11'); ?></span></span></div>
				<div class="font_2" style="font-size:16px; text-align:center;"><span style="color:#ffffff;">уникальных</span></div>
				<div class="font_2" style="font-size:16px; text-align:center;"><span style="color:#ffffff;">скейт парков</span></div>
				</div><div style="width: 182px; position: absolute; left: 188px; top: 245px;" class="s6" id="comp-ion142yf" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142yf"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11"><?php the_field('numbers_12'); ?></span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>человек начали&nbsp;</i></font><i style="color:rgb(255, 255, 255);">заниматься</i></div>
				</div><div style="width: 170px; position: absolute; left: 387px; top: 233px;" class="s6" id="comp-ion142yj" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142yj"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11"><?php the_field('numbers_13'); ?></span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>человек</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>на вашей площадке</i></font></div>
				</div><div style="width: 170px; position: absolute; left: 575px; top: 236px;" class="s6" id="comp-ion142z2" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142z2"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11"><?php the_field('numbers_14'); ?></span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>профессионалов</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>в команде</i></font></div>
				</div><div style="width: 190px; position: absolute; left: 763px; top: 234px;" class="s6" id="comp-ion142z7" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142z7"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11"><?php the_field('numbers_15'); ?></span></span><span class="color_11"><span style="font-size:18px;">м²</span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>передовой</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>экспериментальной</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>базы</i></font></div>
				</div><div style="position: absolute; left: 439px; top: 176px; width: 42px; height: 48px;" data-exact-height="48" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zc" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc"><div style="width: 42px; height: 48px;" id="comp-ion142zclink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0"><div id="comp-ion142zcimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0" style="position: relative; width: 42px; height: 48px;"><div class="s5imgpreloader" id="comp-ion142zcimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0.0"></div><img id="comp-ion142zcimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0.$image" style="width: 42px; height: 48px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7a8e71689678434f9e7801c06e23cc09.png"></div></div></div><div style="position: absolute; left: 599px; top: 192px; width: 26px; height: 28px;" data-exact-height="28" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zi" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi"><div style="width: 26px; height: 28px;" id="comp-ion142zilink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0"><div id="comp-ion142ziimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0" style="position: relative; width: 26px; height: 28px;"><div class="s5imgpreloader" id="comp-ion142ziimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0.0"></div><img id="comp-ion142ziimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0.$image" style="width: 26px; height: 28px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 629px; top: 192px; width: 26px; height: 28px;" data-exact-height="28" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zn" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn"><div style="width: 26px; height: 28px;" id="comp-ion142znlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0"><div id="comp-ion142znimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0" style="position: relative; width: 26px; height: 28px;"><div class="s5imgpreloader" id="comp-ion142znimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0.0"></div><img id="comp-ion142znimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0.$image" style="width: 26px; height: 28px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 689px; top: 192px; width: 26px; height: 27px;" data-exact-height="27" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zt" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt"><div style="width: 26px; height: 27px;" id="comp-ion142ztlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0"><div id="comp-ion142ztimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0" style="position: relative; width: 26px; height: 27px;"><div class="s5imgpreloader" id="comp-ion142ztimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0.0"></div><img id="comp-ion142ztimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0.$image" style="width: 26px; height: 27px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 659px; top: 192px; width: 26px; height: 27px;" data-exact-height="27" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zz" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz"><div style="width: 26px; height: 27px;" id="comp-ion142zzlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0"><div id="comp-ion142zzimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0" style="position: relative; width: 26px; height: 27px;"><div class="s5imgpreloader" id="comp-ion142zzimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0.0"></div><img id="comp-ion142zzimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0.$image" style="width: 26px; height: 27px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 815px; top: 175px; width: 40px; height: 48px;" data-exact-height="48" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14304" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304"><div style="width: 40px; height: 48px;" id="comp-ion14304link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0"><div id="comp-ion14304img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0" style="position: relative; width: 40px; height: 48px;"><div class="s5imgpreloader" id="comp-ion14304imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0.0"></div><img id="comp-ion14304imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0.$image" style="width: 40px; height: 48px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7d9e7cbbb5324f7a9f29d3d8e4792048.png"></div></div></div><div style="position: absolute; left: 193px; top: 181px; width: 18px; height: 21px;" data-exact-height="21" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430g" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g"><div style="width: 18px; height: 21px;" id="comp-ion1430glink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0"><div id="comp-ion1430gimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0" style="position: relative; width: 18px; height: 21px;"><div class="s5imgpreloader" id="comp-ion1430gimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0.0"></div><img id="comp-ion1430gimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0.$image" style="width: 18px; height: 21px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 193px; top: 201px; width: 18px; height: 21px;" data-exact-height="21" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430m" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m"><div style="width: 18px; height: 21px;" id="comp-ion1430mlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0"><div id="comp-ion1430mimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0" style="position: relative; width: 18px; height: 21px;"><div class="s5imgpreloader" id="comp-ion1430mimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0.0"></div><img id="comp-ion1430mimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0.$image" style="width: 18px; height: 21px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 212px; top: 202px; width: 20px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430t" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t"><div style="width: 20px; height: 22px;" id="comp-ion1430tlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0"><div id="comp-ion1430timg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0" style="position: relative; width: 20px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1430timgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0.0"></div><img id="comp-ion1430timgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0.$image" style="width: 20px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 231px; top: 202px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430z" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z"><div style="width: 18px; height: 22px;" id="comp-ion1430zlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0"><div id="comp-ion1430zimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1430zimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0.0"></div><img id="comp-ion1430zimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 250px; top: 201px; width: 20px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14315" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315"><div style="width: 20px; height: 22px;" id="comp-ion14315link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0"><div id="comp-ion14315img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0" style="position: relative; width: 20px; height: 22px;"><div class="s5imgpreloader" id="comp-ion14315imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0.0"></div><img id="comp-ion14315imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0.$image" style="width: 20px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 269px; top: 201px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431c" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c"><div style="width: 18px; height: 22px;" id="comp-ion1431clink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0"><div id="comp-ion1431cimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1431cimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0.0"></div><img id="comp-ion1431cimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 326px; top: 181px; width: 20px; height: 23px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431m" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m"><div style="width: 20px; height: 23px;" id="comp-ion1431mlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0"><div id="comp-ion1431mimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0" style="position: relative; width: 20px; height: 23px;"><div class="s5imgpreloader" id="comp-ion1431mimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0.0"></div><img id="comp-ion1431mimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0.$image" style="width: 20px; height: 23px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 345px; top: 202px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431t" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t"><div style="width: 18px; height: 22px;" id="comp-ion1431tlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0"><div id="comp-ion1431timg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1431timgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0.0"></div><img id="comp-ion1431timgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 345px; top: 181px; width: 18px; height: 23px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14329" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329"><div style="width: 18px; height: 23px;" id="comp-ion14329link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0"><div id="comp-ion14329img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0" style="position: relative; width: 18px; height: 23px;"><div class="s5imgpreloader" id="comp-ion14329imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0.0"></div><img id="comp-ion14329imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0.$image" style="width: 18px; height: 23px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 44px; top: 179px; width: 80px; height: 63px;" data-exact-height="63" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1432g" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g"><div style="width: 80px; height: 63px;" id="comp-ion1432glink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0"><div id="comp-ion1432gimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0" style="position: relative; width: 80px; height: 63px;"><div class="s5imgpreloader" id="comp-ion1432gimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0.0"></div><img id="comp-ion1432gimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0.$image" style="width: 80px; height: 63px; object-fit: fill;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_144eb8bb662044428d128609bca3f488.png"></div></div></div></div></div>

			</div>
	</div>
	<?php endif; ?>

	<!-- team -->
	<?php if( get_field('show-team-slider') ): ?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
			<div style="padding: 40px 0;">
				<div>
				<div class="s6" id="comp-ion142sy"><div class="font_2">КОМАНДА</div></div>
				<div class="s6" id="comp-ion142sh"><div style="font-size:36px; text-align:center;" class="font_2"><span style="color:#1BB7EE;"><span style="font-size:36px;">XSA RAMPS</span></span></div></div>
				</div>
			</div>
			<!-- carousel -->
			<div style="height: 300px;">
				<ul id="mycarousel" class="jcarousel-skin-tango">
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/taranov_konstantin.jpg" widht="300" height="300" alt="Таранов Константин" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/hromov_vyacheslav.jpg" widht="300" height="300" alt="Хромов Вячеслав" /></li>			
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/grigorash_nikita.jpg" widht="300" height="300" alt="Григораш Никита" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/lobko_grigory.jpg" widht="300" height="300" alt="Лобко Григорий" /></li>			
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/korolevich_yulia.jpg" widht="300" height="300" alt="Королевич Юлия" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/kulagin_denis.jpg" widht="300" height="300" alt="Кулагин Денис" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/bakulin_pavel.jpg" widht="300" height="300" alt="Бакулин Павел" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/antonov_yuri.jpg" widht="300" height="300" alt="Антонов Юрий" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/kirilenko_dariya.jpg" widht="300" height="300" alt="Кириленко Дарья" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/martynov_viktor.jpg" widht="300" height="300" alt="Мартынов Виктор" /></li>
				</ul>
			</div>
		</div>
	</div>

	<?php endif; ?>


	<!-- clients -->
	<?php if( get_field('show-clients') ): ?>
	<div class="row" style="padding-top: 40px;">
		<div style="text-align: center;" class="s6" id="comp-ion142u8"><div style="font-size:36px; text-align:center; padding: 20px;" class="font_2">КЛИЕНТЫ</div></div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://www.gazprom.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_43cf8e97b4ae44629e43cc831ddbe900.jpg" alt="" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.sochiolympicpark.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_7e44448392ce46b2bdaf63d98b7c824e-mv2_d_3712_2181_s_2.png" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.redbull.com/ru/ru"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_406ffcfa7dd14ff9a5badffd35a5f98e-mv2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://krasnodar.beeline.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_b9a642eb4fcb4c08a7a091e428102259-mv2.png" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://rosaski.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_1f700ffef76f4e43a56c82667a8b1347-mv2.jpg" alt="" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://sochiautodrom.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_49d6abf216b6484f8e24e6169cc1b75e-mv2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://molodinfo.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_b01968ae83a5405aba4a6e33879d1b59.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="https://vans.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_646d38d1a942424181054f0b201c9bf8.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://sport.mos.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_2372618d9f1a41d3b1d2784c36e9350e.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.sochiadm.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_8dad374871bd47f3936d687a669b29c2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.lukoil.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_91c6e998ed5b4688ae30f9ca0eaec420.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.dcshoes.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_6222fb83a21b496caa3bedb432d08e8c-mv2.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_d5c8cf6903b24aba89586634bd1a0a10-mv2.png" /></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="https://www.krd.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_a776926a32f4453ba207fa5e803391b1.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://xsastore.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_6f31bb2eb1654b6c9ce406f7a3f48b5f.png" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://z-games.com.ua/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_562d7b0900e34ad790663a9d9bdc2a66.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://develug.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_8fe19dc8252c488a81236bc92865fbfc-mv2.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	</div>
	<?php endif; ?>

		
	<?php if ( get_field('youtube_video') ) : ?>
		<div class="video">
			<iframe width="100%" height="455" src="<?php the_field('youtube_video'); ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?php endif; ?>


	

	
	<div class="row">

			<div class="main_1 container">
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 main_1_slogan">
					<div><?php the_field('text-under-video-block'); ?></div>
				</div>
				
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 main_1_icons">
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-2.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-4.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-1.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-3.png" width="80" alt="" /></div>
				</div>
			
			</div>
			
			<div class="row container seo_text_block">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 seo-text-block">
					<h2 class="seo-text-block__title"><?php the_field('bottom-seo_title'); ?></h2>
					<div class="seo-text-block__separator"></div>
					<div class="seo-text-block__text"><?php the_field('bottom-seo_text'); ?></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				</div>
			</div>

	</div>

	
<?php get_footer();