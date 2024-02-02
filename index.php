<?php include "config/core.php";

	// header('location: services/site/ ');
	
	// site setting
	$menu_name = 'home';
	// $site_set = [];
?>
<? include "block/header.php"; ?>

	<div class="">
		<!-- top -->
		<div class="pack_b1">
			 <div class="bl_c">
					<div class="pack_b1_c">
						<div class="pack_b1_l">
							<h1 class="pack_b1_h">Мы помогаем зарабатывать <br> в интернете</h1>
							<div class="pack_b1_lt">
								<h6 class="pack_b1_h2">Делаем сайты, cервисы, графический дизайн, <br>мобильные приложения и продвижение</h6>
								<div class="btn disb_zab"><?=t::w('To get the consultation')?></div>
							</div>
						</div>
						<div class="pack_b1_n">
							<div class="lazy_img" data-src="/assets/img/logo/logo 3d.png"></div>
						</div>
					</div>
			 </div>
		</div>
	
		<!--  -->
		<div class="">
			<div class="bl_c">
				<div class="ms_service">

					<? $services_c = db::query("select * from services_category where sell = 1 order by number asc"); ?>
					<? while ($services_cd = mysqli_fetch_array($services_c)): ?>
						<? $category_id = $services_cd['id']; ?>
						
						<div class="ms_service_i">
							<div class="ms_service_ic">
								<div class="ms_service_ic_img lazy_img" data-src="/assets/img/icons/<?=$services_cd['img']?>"></div>
								<div class="ms_service_ics">
									<div class="ms_service_ics_h2"><?=$services_cd['name_ru']?></div>
									<div class="ms_service_ics_p"><?=$services_cd['offer_index_ru']?></div>
									<a class="btn btn_cm btn_dd btn_dd2" href=""><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
							<? $services = db::query("select * from services where category_id = '$category_id' and index_view is not null order by index_view asc"); ?>
							<? if (mysqli_num_rows($services)): ?>
								<div class="ms_service_ib">
									<? while ($services_d = mysqli_fetch_array($services)): ?>
										<a class="btn btn_cm" href="/services/<?=$services_d['url']?>"><?=$services_d['names_ru']?></a>
									<? endwhile ?>
								</div>
							<? endif ?>
						</div>

					<? endwhile ?>

				</div>
			</div>
		</div>


		<!--  -->
		<div class="">
			<div class="bl_c">
				<div class="head_c">
					<h3><span>Мы делаем это.</span> <br> Каждый день</h3>
					<p>Развиваем бренды. Создаём креатив. <br> Подключаем маркетинг. Делаем продажи.</p>
				</div>
				<div class="ms_case_c">

					<? $cases = db::query("select * from cases order by ins_dt desc limit 20"); ?>
					<? while ($case_d = mysqli_fetch_array($cases)): ?>
						<? $case_id = $case_d['id']; ?>
						<? $client_d = fun::clients($case_d['client_id']); ?>
						<? $service_d = fun::services($case_d['service_id']); ?>
						<div class="ms_case_i">
							<div class="ms_case_ic">
								<div class="ms_case_it lazy_img" data-src="/assets/img/clients/<?=$client_d['logo']?>"></div>
								<div class="ms_case_im">
									<span><?=$client_d['name_ru']?></span>
									<div class=""><?=$service_d['names_ru']?></div>
									<p><?=$client_d['disc_ru']?></p>
									<a href=""><?=$case_d['url']?></a>
								</div>
							</div>
						</div>
					<? endwhile ?>
				
				</div>
				<div class="txt_c">
					<a class="btn btn_cm" href="/cases/">Смотреть все кейсы</a>
				</div>
			</div>
		</div>

		<!--  -->
		<div class="">
			<div class="bl_c">
				<div class="head_c">
					<h3><span>Хорошо знакомые.</span> <br> И такие новые</h3>
					<p>Мы готовы познакомится с тобой поближе. А также всегда <br> открыты новым людям в команду и новым коллаборациям с <br> брендами. Не стесняйся, <a href="">выходи с нами на связь.</a></p>
				</div>
				<div class="ms_bls2_c">
					<div class="ms_bls2_ci">
						<div class="ms_bls2_cih">1К+</div>
						<p>выполненных проектов</p>
					</div>
					<div class="ms_bls2_ci">
						<div class="ms_bls2_cih">50+</div>
						<p>бизнесов на обслуживании</p>
					</div>
					<div class="ms_bls2_ci">
						<div class="ms_bls2_cih">350+</div>
						<p>digital-услуг</p>
					</div>
				</div>
				<div class="ms_bls2_b">
					<div class="ms_bls2_bi">
						<div class="ms_bls2_bic">
							<div class="ms_bls2_bich">Команда <span>#gprog</span></div>
							<p>Свежие ребята со свежими идеями. Горим своим делом.</p>
							<a class="btn btn_cm" href="/about/team/">Подробнее</a>
						</div>
						<div class="ms_bls2_bis lazy_img" data-src="/assets/img/bag/2021-07-17 16.45.03.JPG"></div>
					</div>
					<div class="ms_bls2_bi">
						<div class="ms_bls2_bic">
							<div class="ms_bls2_bich">Клиенты <span>#gprog</span></div>
							<p>С клиентами мы дружим. А к проектам клиентов относимся как к своим.</p>
							<a class="btn btn_cm" href="/clients/">Подробнее</a>
						</div>
						<div class="ms_bls2_bis lazy_img" data-src="/assets/img/bag/2021-07-17 17.38.31.JPG"></div>
					</div>
					<div class="ms_bls2_bi">
						<div class="ms_bls2_bic">
							<div class="ms_bls2_bich">Кейсы <span>#gprog</span></div>
							<p>Нам есть чем похвастаться. Потому что делаем с душой.</p>
							<a class="btn btn_cm" href="/cases/">Подробнее</a>
						</div>
						<div class="ms_bls2_bis lazy_img" data-src="/assets/img/bag/first-slide.png"></div>
					</div>
				</div>
			</div>
		</div>


	</div>

<? include "block/footer.php"; ?>