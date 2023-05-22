<? include "../config/core.php";

   
	$site_name = 'link';
   $site_set['header'] = false;
   $site_set['footer'] = false;
   $css = ['../fonts/DangerNeue/stylesheet', '../fonts/FuturaPT/stylesheet', 'gh'];

   $site = mysqli_fetch_array(db::query("select * from `site` where id = 2"));

?>
<? include "../block/header.php"; ?>
<? unset($_SESSION['loader']); ?>


   <div class="lbl1">
      <div class="bl_c">
         <div class="lbl1_tj">
            <div class="lbl1_tjl">
               <div class="lazy_img" data-src="/assets/img/logo/logo.png"></div>
            </div>
            <div class="lbl1_tjr">
               <? if ($site['instagram']): ?>
                  <a href="https://instagram.com/<?=$site['instagram']?>">
                     <i class="fab fa-instagram"></i>
                  </a>
               <? endif ?>
               <? if ($site['tiktok']): ?>
                  <a href="https://tiktok.com/<?=$site['tiktok']?>">
                     <div class="lazy_img" data-src="/assets/img/icons/tiktok_w.png"></div>
                  </a>
               <? endif ?>
               <? if ($site['youtube']): ?>
                  <a href="https://youtube.com/@<?=$site['youtube']?>">
                     <i class="fab fa-youtube"></i>
                  </a>
               <? endif ?>
               <? if ($site['behance']): ?>
                  <a href="https://behance.net/<?=$site['behance']?>">
                     <i class="fab fa-behance"></i>
                  </a>
               <? endif ?>
            </div>
         </div>
         <div class="lbl1_c">
            <div class="lbl1_ct">
               <div class="lbl1_t">
                  <div class="lbl1_tc">
                     <div class="lazy_img" data-src="/assets/img/bag/003.png"></div>
                  </div>
               </div>
               <div class="lbl1_cm">
                  <!-- <h1>Эксперт по быстрому <br> выходу на фриланс <br> и удаленному <br> заработку</h1> -->
                  <h1>Жылдам <span>фрилансқа <br> шығу мен онлайн <br> табыс</span> табудың <br> эксперты</h1>
               </div>
               <!-- <div class="lbl1_cmc">
                  <div class="lbl1_cmh">Әлібек Бауыржанұлы</div>
                  <div class="lbl1_cmp">2014 жылдан бастап финансовый рынокта торговля жасаймын (Криптовалюта, акция, форекс)</div>
               </div> -->
               <div class="lbl1_cy">
                  <div class="lbl1_cyi">
                     <i class="far fa-badge-check"></i>
                     <div><span>Кәсіпті жүйелеумен</span> <br> айналысамын</div>
                  </div>
                  <div class="lbl1_cyi">
                     <i class="far fa-badge-check"></i>
                     <div>IT саласында <span>8-ші жыл</span></div>
                  </div>
               </div>
            </div>
            <div class="lbl1_cb">
               <a class="btn " href="#">
                  <span>Консультация алу</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </a>
               <a class="btn btn_cm" href="#">
                  <span>Толығырақ курс жайлы</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="lbl10">
      <div class="bl_c">
         <div class="lbl10_c">
            <div class="lbl10_cm">
               <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/2581.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p>Аңызға айналған <span>"Web Pro"</span></p>
                        <p>сайт әзірлеу курсы</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 3 месяца профессию</p>
                        <p>создателя сайтов и зарабатывай</p>
                        <p><span>на этом от 100 000 ₽ в месяц</span></p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>800 выпускников курса</p>
                        <p>9,7 оценка курса выпускниками</p>
                        <p>даем каждому первых клиентов</p>
                     </div>
                     <div class="btn">
                        <span>Жазылу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a>

               <!-- <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Мастер-классқа қатысу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Онлайн <span>мастер-класс</span></div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 2 часа базу в создании</p>
                        <p>сайтов и построй личный план</p>
                        <p>к заработку в 100 000 ₽</p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>больше 2000 человек прошли обучающий мастер-класс</p>
                        <p>в подарок урок по созданию первого сайта</p>
                     </div>
                     <div class="btn">
                        <span>Қатысу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a> -->

               <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Мастер-классқа қатысу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Консультация</div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 2 часа базу в создании</p>
                        <p>сайтов и построй личный план</p>
                        <p>к заработку в 100 000 ₽</p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>больше 2000 человек прошли обучающий мастер-класс</p>
                        <p>в подарок урок по созданию первого сайта</p>
                     </div>
                        <!-- <li>Жеке өзім разбор жасаймын</li>
                        <li>Трейдинг саласы бойынша 10 жылдық тәжірибеммен бөлісемін</li>
                        <li>Кеңес алу ұзақтығы 2 сағат</li> -->
                     <div class="btn">
                        <span>Жазылу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a>

               <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Мастер-классқа қатысу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p>Наставничество</p> <!-- Тәлімгерлік -->
                        <p><span>(жеке оқыту)</span></p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 2 часа базу в создании</p>
                        <p>сайтов и построй личный план</p>
                        <p>к заработку в 100 000 ₽</p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>больше 2000 человек прошли обучающий мастер-класс</p>
                        <p>в подарок урок по созданию первого сайта</p>
                     </div>
                     <div class="btn">
                        <span>Жазылу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a>

               <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Мастер-классқа қатысу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Сайтқа <span>заказ қабылдау</span></div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 2 часа базу в создании</p>
                        <p>сайтов и построй личный план</p>
                        <p>к заработку в 100 000 ₽</p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>больше 2000 человек прошли обучающий мастер-класс</p>
                        <p>в подарок урок по созданию первого сайта</p>
                     </div>
                     <div class="btn">
                        <span>Жазылу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a>


               <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Курс сатып алғым келеді">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/kerfin7_nea_2788.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p><span>«Web Pro» курсының</span></p>
                        <p>пікірлері</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Что становится с учениками</p>
                        <p>нашего курса <span>после выпускного?</span></p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>Кто-то зарабатывает за несколько месяцев на новый макбук</p>
                        <p>Кто-то начинает сотрудничество с Тинькофф и покупает в 19 лет новую мазду с салона</p>
                        <p>А кто-то… <br><br> Но лучше читай сам и вдохновляйся</p>
                     </div>
                     <div class="btn">
                        <span>Пікірлерді оқу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a>


               <!-- <a class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Курс сатып алғым келеді">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/kerfin7_nea_2788.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Курс Trading Pro</div>
                     <ul class="lbl10_cmlbp">
                        <li>Курсты 800 адам толық өтіп шықты</li>
                        <li>2 айлық практикалық курс</li>
                        <li>Түлектердің курсты бағалауы - 10 на 9.7</li>
                        <li>Толық практикадан тұратын курс</li>
                     </ul>
                     <div class="btn">
                        <span>Сатып алу</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                  </div>
               </a> -->

            </div>
         </div>
      </div>
   </div>

   <div class="lbl12">
      <div class="bl_c">
         <div class="head_c">
            <h4>Әлеуметтік желілер</h4>
         </div>
         <div class="lbl12_c lbl12_c2">
            <a class="lbl12_c2i" href="https://wa.me/<?=$site['whatsapp']?>">
               <div class="lbl12_c2iq">
                  <p>Жеке</p>
                  <p>инстаграм</p>
               </div>
               <div class="btn btn_back btn_back2">
                  <span>Қарау</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </div>
            </a>
            <a class="lbl12_c2i" href="https://wa.me/<?=$site['whatsapp']?>">
               <div class="lbl12_c2iq">
                  <p>Телеграм</p>
                  <p>канал</p>
               </div>
               <div class="btn btn_back btn_back2">
                  <span>Қарау</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </div>
            </a>
            <a class="lbl12_c2i" href="https://wa.me/<?=$site['whatsapp']?>">
               <div class="lbl12_c2iq">
                  <p>Ютуб</p>
                  <p>канал</p>
               </div>
               <div class="btn btn_back btn_back2">
                  <span>Қарау</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </div>
            </a>
            <a class="lbl12_c2i" href="https://wa.me/<?=$site['whatsapp']?>">
               <div class="lbl12_c2iq">
                  <p>Behance-де</p>
                  <p>кейстер</p>
               </div>
               <div class="btn btn_back btn_back2">
                  <span>Қарау</span>
                  <div><i class="far fa-long-arrow-right"></i></div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <!-- <div class="lbl1_cb" id="top2">
      <div class="lbl1_cbc">
      <? if ($site['instagram']): ?>
            <a href="https://instagram.com/<?=$site['instagram']?>">
               <i class="fab fa-instagram"></i>
               <span>Instagram</span>
            </a>
         <? endif ?>
         <? if ($site['tiktok']): ?>
            <a href="https://tiktok.com/<?=$site['tiktok']?>">
               <div class="lazy_img" data-src="/assets/img/icons/Tiktok-icon-on-transparent-background-PNG.png"></div>
               <span>Tik-Tok</span>
            </a>
         <? endif ?>
         <? if ($site['youtube']): ?>
            <a href="https://youtube.com/@<?=$site['youtube']?>">
               <i class="fab fa-youtube"></i>
               <span>YouTube</span>
            </a>
         <? endif ?>
         <? if ($site['telegram']): ?>
            <a href="https://t.me/<?=$site['telegram']?>">
               <i class="fab fa-telegram"></i>
               <span>Telegram</span>
            </a>
         <? endif ?>
      </div>
      <div class="lbl1_cbs">
         <i class="fal fa-info-circle"></i>
         <span>Әлеуметтік желіме жазылуды ұмытпаңыз</span>
      </div>
   </div> -->




   <div class="lbl12">
      <div class="bl_c">
         <div class="head_c">
            <h4>Байланысу желісі</h4>
         </div>
         <div class="lbl12_c">
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn">
               <span>Кері байланыс</span>
               <div><i class="far fa-long-arrow-right"></i></div>
            </a>
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_whatsapp btn_none">
               <span>Whatsapp-ма жазу</span>
               <div><i class="fab fa-whatsapp"></i></div>
            </a>
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_telegram btn_none">
               <span>Telegram-ма жазу</span>
               <div><i class="fab fa-telegram-plane"></i></div>
            </a>
            <a href="tel:<?=$site['phone']?>" class="btn btn_cm btn_none">
               <span>Қоңырау шалу</span>
               <div><i class="far fa-phone-alt"></i></div>
            </a>
         </div>
      </div>
   </div>



   
   <!-- -->
   <div class="lbl10">
      <div class="bl_c">
         <div class="head_c">
            <h4>Тапсырыстар бойынша</h4>
         </div>
         <div class="lbl10_c">
            <div class="lbl10_cm">
               <div class="lbl10_cml">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/2581.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p><span>Жеке өзіме</span> сайтқа</p>
                        <p>тапсырыс беру</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 3 месяца профессию</p>
                        <p>создателя сайтов и зарабатывай</p>
                        <p><span>на этом от 100 000 ₽ в месяц</span></p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>800 выпускников курса</p>
                        <p>9,7 оценка курса выпускниками</p>
                        <p>даем каждому первых клиентов</p>
                     </div>
                     <div class="btn">
                        <span>Өтініш қалдыру</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                     <a class="btn btn_back" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">Жылдам байланысу</a>
                  </div>
               </div>

               <div class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Мастер-классқа қатысу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p><span>Менің шәкірттеріме</span></p>
                        <p>сайт жасату</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 2 часа базу в создании</p>
                        <p>сайтов и построй личный план</p>
                        <p>к заработку в 100 000 ₽</p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>больше 2000 человек прошли обучающий мастер-класс</p>
                        <p>в подарок урок по созданию первого сайта</p>
                     </div>
                     <div class="btn">
                        <span>Өтініш қалдыру</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                     <a class="btn btn_back" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">Жылдам байланысу</a>
                  </div>
               </div>

               <div class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Курс сатып алғым келеді">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/kerfin7_nea_2788.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p><span>Оку платформасын</span></p>
                        <p>жасауға тапсырыс беру</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Что становится с учениками</p>
                        <p>нашего курса <span>после выпускного?</span></p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>Кто-то зарабатывает за несколько месяцев на новый макбук</p>
                        <p>Кто-то начинает сотрудничество с Тинькофф и покупает в 19 лет новую мазду с салона</p>
                        <p>А кто-то… <br><br> Но лучше читай сам и вдохновляйся</p>
                     </div>
                     <div class="btn">
                        <span>Өтініш қалдыру</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                     <a class="btn btn_back" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">Жылдам байланысу</a>
                  </div>
               </div>

               <div class="lbl10_cml" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/2581.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">
                        <p><span>Мобильді қосымша</span></p>
                        <p>тапсырыс беру</p>
                     </div>
                     <div class="lbl10_cmlbx">
                        <p>Освой за 3 месяца профессию</p>
                        <p>создателя сайтов и зарабатывай</p>
                        <p><span>на этом от 100 000 ₽ в месяц</span></p>
                     </div>
                     <div class="lbl10_cmlbp">
                        <p>800 выпускников курса</p>
                        <p>9,7 оценка курса выпускниками</p>
                        <p>даем каждому первых клиентов</p>
                     </div>
                     <div class="btn">
                        <span>Өтініш қалдыру</span>
                        <div><i class="far fa-long-arrow-right"></i></div>
                     </div>
                     <a class="btn btn_back" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Консультация жазылу">Жылдам байланысу</a>
                  </div>
               </div>

            </div>

            <div class="lbl12_c">
               <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_whatsapp btn_none">
                  <span>Басқа ұсынысым бар</span>
                  <div><i class="fab fa-whatsapp"></i></div>
               </a>
            </div>
         </div>
      </div>
   </div>






   <footer class="footer">
      <div class="bl_c">
         <div class="footer_b">
            <div><a href="/about/privacy">Privacy Policy</a></div>
            <div>G prog</div>
         </div>
      </div>
   </footer>

<? include "../block/footer.php"; ?>