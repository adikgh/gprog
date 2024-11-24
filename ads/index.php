<? include "../config/core.php";

	// header('location: services/site/ ');
	
	// site setting
	$menu_name = 'home';
	// $site_set = [];

	$css = ['ads'];

?>
<? include "../block/header.php"; ?>

	<div class="apps">
		<!-- top -->
		<div class="pack_b1">
			<div class="bl_c">
				<div class="pack_b1_c">
					<div class="pack_b1_l">
						<h1 class="pack_b1_h">🚀 Запустим вашу контекстную рекламу всего за 3 часа, и первые клиенты придут уже сегодня!</h1>
						<div class="pack_b1_lt">
							<h6 class="pack_b1_h2">Настройка и сопровождение контекстной рекламы в Яндекс и Google</h6>
							<div class="btn disb_zab">Уау, запустить</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bl_c">
			<div class="blweb2">
				<div class="blweb2_l">
					<div class="">Клиенты:</div>
					<p class="">Emsu Saryagash, Lighterior, BTS Architect, Aru Academy, <br class="desktop"> Qalan Edu, Bron Sanatorium, Carpet Cleaning</p>
					<a class="">и ещё 50 компании</a>
				</div>
				<div class="pack_b1_n">
					<div class="lazy_img" data-src="/assets/img/logo/logo 3d.png"></div>
				</div>
			</div>
		</div>

		<div class="bl_c">
			<div class="blweb3">
				<div class="blweb3_tx">Профессиональный Маркетинг Агентсва для бизнеса. Работая с нашей командой, вы получаете грамотный подход к рекламу, которая поможет быстро и качественно запустить ваш проект и кардинально изменить подход к вашему маркетингу.</div>
				<div class="blweb3_c">
					<div class="blweb3_n">
						<div>Работаем с</div>
						<p>2018 года</p>
						<span></span>
					</div>
					<div class="blweb3_n">
						<div>Потратим месяц в рекламу</div>
						<p>$5000+ </p>
						<span></span>
					</div>
					<div class="blweb3_n">
						<div>Создали более</div>
						<p>250+ рекламу</p>
						<span></span>
					</div>
				</div>
			</div>
		</div>


		<!-- <div class="bl_c">
			<div class="blweb4">
				<div class=""></div>
				<div class="">
					<div class="blweb3_tx">Не просто создаём сайты, а берём ваш бренд под свой продакшн. Выводим ваш проект на необходимые показатели. Занимаемся комплексным продвижением.</div>
					<div class="blweb3_tx">Формируем с помощью дизайна правильный коммерческий имидж для вашего бренда. Максимально эффективно привлекаем потребительский спрос вашего рынка.</div>
				</div>
			</div>
		</div> -->


		<!--  -->
		<div class="">
			<div class="bl_c">
				<div class="head_c head_c2 txt_c">
					<div class="head_c2_icon lazy_img" data-src="/assets/img/icons/rocket_1f680.png"></div>
					<h2 class="">Вот что мы делаем</h2>
					<p class="">Наше портфолио насчитывает более 250+ рекламы из разных областей <br class="desktop"> деятельности. Вот некоторые из них.</p>
				</div>

				<div class="blweb8_c">

					<? $cases = db::query("select * from cases where service_id = 8 and number is not null order by number asc limit 12"); ?>
					<? // $cases = db::query("select * from cases order by ins_dt desc limit 8"); ?>
					<? while ($case_d = mysqli_fetch_array($cases)): ?>
						<? $case_id = $case_d['id']; ?>
						<? $client_d = fun::clients($case_d['client_id']); ?>
						<? $service_d = fun::services($case_d['service_id']); ?>
						<div class="blweb8_n">
							<div class="blweb8_nt lazy_img" data-src="/assets/img/cases/ads/<?=$case_d['img_web']?>"></div>
							<div class="blweb8_nc">
								<span><?=$case_d['company_name']?> / <?=$case_d['txt2_ru']?></span>
								<p><?=$case_d['ads_type']?></p>
								<!-- <a target="_blank" href="https://<?=$case_d['url']?>"><?=$case_d['url']?></a> -->
							</div>
						</div>
					<? endwhile ?>
				
				</div>
				<!-- <div class="txt_c">
					<a class="btn btn_cm" href="/cases/">Смотреть все кейсы</a>
				</div> -->
			</div>
		</div>



		

		


		<div class="bl_c">
			<div class="blweb11">
				<div class="head_c head_c2">
					<h2 class="">Примерная <br class="desktop"> стоимость <br> рекламы</h2>
					<p class="">Мы можем вас сориентировать <br class="desktop"> по примерной стоимости, <br class="desktop"> но это будут лишь ориентиры, <br class="desktop"> конечную цену формируем только <br class="desktop"> после аудита вашего проекта.</p>
				</div>
				<div class="blweb11_r">
					<div class="blweb11_r0">
						<div class="blweb11_r0_span">1. Выберите тарифный план</div>
						<div class="blweb11_r0i blweb11_r0i_active" data-id="1">Старт</div>
						<div class="blweb11_r0i " data-id="2">Классика</div>
						<div class="blweb11_r0i" data-id="3">Премиум</div>
					</div>
					<div class="blweb11_r1">
						<div class="blweb11_r0_span">2. Выберите подходящий пакет</div>

						<div class="blweb11_rn act_bl1 pricing_block--yellow">
							<div class="blweb11_rnh">Тест на 7 дней</div>
							<div class="blweb11_rnt">45 000 ₸</div>
							<ul class="blweb11_rl">
								<li>поможем вам протестировать новую нишу</li>
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google</li>
								<li>получайте 7+ прямых звонков в день (это зависеть от ниши)</li>
								<li>30.000 за бюджет (60$)</li>
								<li>+ 15.000 за услугу</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/handshake_1f91d.png"></div>
								<p>Если у вас нет собственного сайта, мы предлагаем готовый сайт в аренду!</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>
						
						<div class="blweb11_rn act_bl1 pricing_block--green">
							<div class="blweb11_rnh">Месячная услуга (30 дней)</div>
							<div class="blweb11_rnt">50 000 ₸ / мес</div>
							<ul class="blweb11_rl">
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google</li>
								<li>получайте 7+ прямых звонков в день (это зависеть от ниши)</li>
								<li>до 50 количество ключевых слов</li>
								<li>слежение за балансом</li>
								<li>отчеты и рекомендации по дальнейшим действиям</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>ежемесячный бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/handshake_1f91d.png"></div>
								<p>Если у вас нет собственного сайта, мы предлагаем готовый сайт в аренду!</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>
						
						<!--  -->
						
						<div class="blweb11_rn act_bl2 dsp_n pricing_block--yellow">
							<div class="blweb11_rnh">Без сопровождение</div>
							<div class="blweb11_rnt">120 000 ₸</div>
							<ul class="blweb11_rl">
								<li>мы грамотно создадим для вас рекламный аккаунт, а дальше вы сможете использовать его по своему усмотрению</li>
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google</li>
								<li>до 100 количество ключевых слов</li>
								<li>увеличение количества переходов на сайт</li>
								<li>снижение стоимости клика</li>
								<li>снижение количества нецелевых переходов</li>
								<li>подбор типов соответствия и минус слов</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/wrapped-gift_1f381.png"></div>
								<p>Можете купить сайт <br> с скидкой 30%</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>
						
						<div class="blweb11_rn act_bl2 dsp_n pricing_block--green">
							<div class="blweb11_rnh">Месячная услуга (30 дней)</div>
							<div class="blweb11_rnt">75 000 ₸ / мес</div>
							<ul class="blweb11_rl">
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google</li>
								<li>до 150 количество ключевых слов</li>
								<li>увеличение количества переходов на сайт</li>
								<li>снижение количества нецелевых переходов</li>
								<li>подбор типов соответствия и минус слов</li>
								<li>снижение стоимости х2 клика</li>
								<li>снижение стоимости х2 заявки</li>
								<li>расширение охвата аудитории</li>
								<li>увеличение количества контактов с аудиторией после посещения сайта</li>
								<li>повышение конверсии сайта</li>
								<li>слежение за балансом</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>отчеты и рекомендации по дальнейшим действиям</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>установка счетчиков Метрики, GA, GTM</li>
								<li>установка целей</li>
								<li>ежемесячный бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/wrapped-gift_1f381.png"></div>
								<p>Можете купить сайт <br> с скидкой 30%</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>

						<div class="blweb11_rn act_bl2 dsp_n pricing_block--pink">
							<div class="blweb11_rnh">Все контексты на месяц</div>
							<div class="blweb11_rnt">100 000 ₸ / мес</div>
							<ul class="blweb11_rl">
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google и Яндекс (сразу на двух каналах)</li>
								<li>OLX реклама берем на ответственность</li>
								<li>до 250 количество ключевых слов</li>
								<li>увеличение количества переходов на сайт</li>
								<li>снижение количества нецелевых переходов</li>
								<li>снижение стоимости х2 клика</li>
								<li>снижение стоимости х2 заявки</li>
								<li>расширение охвата аудитории</li>
								<li>увеличение количества контактов с аудиторией после посещения сайта</li>
								<li>повышение конверсии сайта</li>
								<li>слежение за балансом</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>отчеты и рекомендации по дальнейшим действиям</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>установка счетчиков Метрики, GA, GTM</li>
								<li>установка целей</li>
								<li>ежемесячный бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/wrapped-gift_1f381.png"></div>
								<p>Можете купить сайт <br> с скидкой 40%</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>

						<!--  -->

						<div class="blweb11_rn act_bl3 dsp_n pricing_block--blue">
							<div class="blweb11_rnh">Все контексты на месяц</div>
							<div class="blweb11_rnt">200 000 ₸ / мес</div>
							<ul class="blweb11_rl">
								<li>мы берем ваш бизнес как свой основной проект и делаем его лидером на рынке</li>
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google и Яндекс (сразу на двух каналах)</li>
								<li>OLX реклама берем на ответственность</li>
								<li>до 500 количество ключевых слов</li>
								<li>увеличение количества переходов на сайт</li>
								<li>снижение количества нецелевых переходов</li>
								<li>снижение стоимости х4 клика</li>
								<li>снижение стоимости х4 заявки</li>
								<li>снижение стоимости х5 клиента</li>
								<li>снижение стоимости х5 звонков</li>
								<li>расширение охвата аудитории</li>
								<li>увеличение количества контактов с аудиторией после посещения сайта</li>
								<li>повышение конверсии сайта</li>
								<li>слежение за балансом</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>отчеты и рекомендации по дальнейшим действиям</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>установка счетчиков Метрики, GA, GTM</li>
								<li>установка целей</li>
								<li>анализ поведения пользователей (вебвизор)</li>
								<li>ежемесячный бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/wrapped-gift_1f381.png"></div>
								<p>Можете купить сайт <br> с скидкой 50%</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>

						<div class="blweb11_rn act_bl3 dsp_n pricing_block--pink">
							<div class="blweb11_rnh">Полный маркетинг на месяц</div>
							<div class="blweb11_rnt">300 000 ₸ / мес</div>
							<ul class="blweb11_rl">
								<li>мы берем ваш бизнес как свой основной проект и делаем его лидером на рынке</li>
								<li>ваша ниша займет топовые позиции в поисковой выдаче Google и Яндекс (сразу на двух каналах)</li>
								<li>таргет реклама инстаграм и тик-ток берем на ответственность</li>
								<li>реклама в ютуб берем на ответственность</li>
								<li>OLX реклама берем на ответственность</li>
								<li>до 500 количество ключевых слов</li>
								<li>увеличение количества переходов на сайт</li>
								<li>снижение количества нецелевых переходов</li>
								<li>снижение стоимости х4 клика</li>
								<li>снижение стоимости х4 заявки</li>
								<li>снижение стоимости х5 клиента</li>
								<li>снижение стоимости х5 звонков</li>
								<li>расширение охвата аудитории</li>
								<li>увеличение количества контактов с аудиторией после посещения сайта</li>
								<li>повышение конверсии сайта</li>
								<li>слежение за балансом</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>отчеты и рекомендации по дальнейшим действиям</li>
								<li>рекомендация по сайту (элементы, адаптивность, конверсии)</li>
								<li>установка счетчиков Метрики, GA, GTM</li>
								<li>установка целей</li>
								<li>анализ поведения пользователей (вебвизор)</li>
								<li>ежемесячный бюджет на рекламные кампании не входит в стоимость наших работ</li>
							</ul>
							<div class="blweb11_rf">
								<div class="lazy_img" data-src="/assets/img/icons/wrapped-gift_1f381.png"></div>
								<p>Можете купить сайт <br> с скидкой 60%</p>
							</div>
							<div class="blweb11_rn_btn">
								<div class="btn btn_bl disb_zab">Оставить заявку</div>
							</div>
						</div>

					</div>
					

				</div>
			</div>
		</div>







		<div class="">
			<div class="bl_c">
				<div class="head_c head_c2 txt_c">
					<div class="head_c2_icon lazy_img" data-src="/assets/img/icons/our-clients-icon.webp"></div>
					<h2 class="">Вы в хорошей компании</h2>
					<p class="">У нас внушительный список партнёров, с которыми мы рука об руку <br class="desktop"> развиваемся в digital-пространстве. Одним из них можете стать и вы. </p>
				</div>
				<div class="blweb12_c">
					<? $clients = db::query("select * from clients where logo is not null order by id asc limit 12"); ?>
					<? while ($clients_d = mysqli_fetch_array($clients)): ?>
						<div class="lazy_img" data-src="/assets/img/clients/<?=$clients_d['logo']?>"></div>
					<? endwhile ?>
				</div>
			</div>
		</div>


		



	</div>

<? include "../block/footer.php"; ?>