	<!-- body end -->
	</div>

	<? if ($site_set['footer']): ?>
		<!-- footer start -->
		<footer class="footer">
			<div class="bl_c">
				<? if ($site_set['footer_c']): ?>
					<div class="foot_c">
						<div class="foot_ct">
							<div class="foot_cti">
								<div class="foot_logo">
									<div>G prog</div>
									<p>Digital Business Agency</p>
								</div>
							</div>
							<div class="foot_cti">
								
							</div>
							<div class="foot_cti">
								<a class="foot_n " href="tel:<?=$site['phone']?>">
									<div><?=$site['phone_view']?></div>
									<p><?=t::w('calc_al')?></p>
								</a>
							</div>
						</div>
						<div class="foot_cb">
							<div class="foot_sos">
								<? $sn = db::query("select * from site_sn where main is not null ORDER BY `site_sn`.`type` ASC, `site_sn`.`number` ASC"); ?>
								<? while ($sn_d = mysqli_fetch_array($sn)): ?>
									<a target="_blank" href="<?=$sn_d['link'].$sn_d['main']?>"><?=$sn_d['icon']?></a>
								<? endwhile ?>
								<!-- <a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i></a> -->
							</div>
						</div>
					</div>
				<? endif ?>
				<div class="footer_b">
					<div><a href="#/about/privacy">Privacy Policy</a></div>
					<div>© 2018-2024, G prog</div>
				</div>
			</div>
		</footer>
	<? endif ?>

	<!--  -->
	<? if ($site['metrika'] != null): ?> <noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript> <? endif ?>
	<? if ($site['pixel'] != null): ?> <noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript> <? endif ?>

	<!-- main js -->
	<script src="/assets/js/func.js?v=<?=$ver?>"></script>
	<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script> <? endforeach ?>

</body>
</html>

	<? include 'modal.php'; ?>