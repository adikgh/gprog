<? if ($site_set['header']): ?>
	<!-- header -->
	<div class="header <?=($site_set['menu']=='bl'?'header_bl':'')?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="header_l">
					<a class="logo" href="/">G prog</a>
				</div>
				<div class="header_r">

					<a class="menu_cn menu_cn2 menu_cn3" href="tel:<?=$site['phone']?>">
						<div class="menu_cizt">
							<span><?=t::w('Sales department')?></span>
							<div><?=$site['phone_view']?></div>
						</div>
						<div class="menu_cizi"><i class="fas fa-phone-alt"></i></div>
					</a>
	
				</div>
			</div>
		</div>
	</div>
<? endif ?>