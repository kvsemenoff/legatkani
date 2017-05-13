<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
		<?php require_once('includes/header_bottom.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">

			<div class="container paddingnone">

				<h2 class="h2 favorite__caption">Батист</h2>
				<ul class="breadcrumps ">
					<li class="breadcrumps__link breadcrumps__link_home"><a href="/" class="bread_menu__link_bg">Главная</a></li>	
					<li class="breadcrumps__link breadcrumps__link_home"><a href="#" class="bread_menu__link_bg">Каталог</a></li>					
					<li class="breadcrumps__link"><span>Кружево</span></li>
				</ul>


				<div class="product__galery">
					
					<div class="product__leftbox">
						<div class="product__img">
							<img src="img/galerybig.jpg" alt="">
							<div class="tovar_img__toplent tovar_img__toplent_new"><span>новинка</span></div>
						</div>	
						<div class="product__img-choise">
							<div><img src="img/galerysm1.jpg" alt="" data-bigimg="img/galerybig.jpg"></div>
							<div><img src="img/galerysm2.jpg" alt="" data-bigimg="img/galerybig.jpg"></div>
							<div><img src="img/galerysm3.jpg" alt="" data-bigimg="img/galerysm3.jpg"></div>
						</div>
					</div>
					<div class="product__rightbox">
						<div class="product__addlist">
							<a href="#">Добавить в закладки</a>
						</div>
						<div class="product__leftchar">
							<span>Артикул:</span>
							<span>Цена:</span>
							<span>Ширина:</span>
							<span>Состав:</span>
							<span>Цвет:</span>
							<span>Тип ткани:</span>
							<span>Производитель:</span>
							<span>Метраж:</span>
						</div>
						<div class="product__rightchar">
							<span>25- 6256</span>
							<div class="product__summ">
								<span><b>1 250 </b>руб.</span> <a href="#">Показать цену в У.Е.</a>
							</div>
							<span>154 м</span>
							<span>хлопок, эластин 100%</span>
							<span>белый, сирень, серый</span>
							<span>Батист принтованный</span>
							<span>Италия</span>
							<div class="product__metr">
								<div class="product__metrboxnumber">
									<input type="text" value="3" class="product__numberinp">
									<span class="product__metr-up"></span>
									<span class="product__metr-down"></span>
								</div>
								<span>Итого: <b>3 750</b> руб.</span>
							</div>
						</div>

						<div class="product__buttons">
							<a href="#" class="button button__news button__news_buy">
								<span class="button__news_txt button__news_buy_txt">Заказать</span>
							</a>
							<a href="#" class="button button__basket">
								<span class="button__basket_txt">В корзину</span>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>

			</div>

		</div>
		<div class="n-footer">
			<?php require_once('includes/footer.php'); ?>
		</div>
	</div>
</div>
</body>
</html>

<script>
	$('.product__numberinp').on("change keyup input click", function() {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
	$('.product__metr-up').on('click', function () {
		var inpnumber = $('.product__numberinp').val();
		inpnumber = parseFloat(inpnumber);
		if (inpnumber > 0) {
			inpnumber++;
		}
		$('.product__numberinp').val(inpnumber);			
	});
	$('.product__metr-down').on('click', function () {
		var inpnumber = $('.product__numberinp').val();
		x = parseFloat(inpnumber);
		if (inpnumber > 1) {
			inpnumber--;
		}
		$('.product__numberinp').val(inpnumber);		
	});


	$('.product__img-choise img').on('click', function(evt) { 
		evt.preventDefault();       		
		var imgPath = $(this).attr('data-bigimg');         
		var oldImage = $('.product__img img');              
		var newImage = $('<img src="' + imgPath +'">' ); 
		$(this).parents('.product__leftbox').find('.product__img').html(newImage); 
	});
</script>






