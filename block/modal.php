<? if ($site_set['cl_wh']): ?>
	<!-- phone -->
	<!-- <a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
		<div type="button" class="callback-bt">
		   <i class="fab fa-whatsapp"></i>
		</div>
	</a> -->
	<div class="callback">
		<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=">
			<div type="button" class="callback-btw">
			   <i class="fab fa-whatsapp"></i>
			   <span>Whatsapp</span>
			</div>
		</a>
		<a target="_blank" href="tel:<?=$site['phone']?>">
			<div type="button" class="callback-bt">
			   <i class="fal fa-phone"></i>
			   <span>Телефон</span>
			</div>
		</a>
	</div>	
<? endif ?>

<!--  -->
<div class="bl_mess"><div class="bl_mess_sam"></div></div>


<? if ($site_set['form']): ?>
	<!-- block form -->
	<div class="pop_bl fr">
		<div class="pop_bl_a zabr_back"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c">
				<h4><?=t::w('Need a consultation?')?></h4>
				<p><?=t::w('Fill out the form and we will contact you shortly')?></p>
			</div>
			<div class="form_c">
				<div class="form_im">
					<input type="text" class="form_im_txt name" placeholder="<?=t::w('Enter your name ..')?>">
					<div class="form_icon"><i class="far fa-user"></i></div>
				</div>
				<div class="form_im">
					<input type="tel" class="form_im_txt phone ms_phone" placeholder="8 (___) ___-__-__">
					<div class="form_icon"><i class="far fa-phone-alt"></i></div>
				</div>
				<div class="form_im form_im_bn">
					<div class="btn orderSend">
						<span><?=t::w('Submit your')?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<? endif ?>