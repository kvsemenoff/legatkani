<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
		<?php require_once('includes/header_bottom.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="inner-de basket-page">
				<div class="container">
					<div class="row">
						<div class="h1-wrap">
							<h1 class="h1">Моя корзина</h1>
						</div>
						<div class="breadcrumps-wrap">
							<ul class="breadcrumps">
								<li class="breadcrumps__link breadcrumps__link_home"><a href="/" class="bread_menu__link_bg">Главная</a></li>				
								<li class="breadcrumps__link"><span>Корзина</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="basket-list">
					<div class="item item__title clearfix">
						<div class="container">
							<div class="row">
								<div class="item__img"></div>
								<div class="item__descr"></div>
								<div class="vertical-middle item__price-one">
									<span>Цена за 1м</span>
								</div>
								<div class="vertical-middle item__quan">
									<div class="switch__number">
										<span>Метраж</span>
									</div>
								</div>
								<div class="vertical-middle item__price-all">
									<span>Общая стоимость</span>
								</div>
								<div class="vertical-middle item__sale">
									<span>Скидка(%)</span>
								</div>
								<div class="vertical-middle item__price-order">
									<span>Сумма заказа</span>
								</div>
								<div class="vertical-middle item__delete"></div>
							</div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="container">
							<div class="row">
								<div class="item__img">
									<img src="img/tkan.jpg" alt="">
								</div>
								<div class="vertical-middle item__descr">
									<span>Ткань Жаккард</span>
									<i>Арт. 25-54558</i>
								</div>
								<div class="vertical-middle item__price-one">
									<span>1500</span>
									<i>Показать цену в У.Е.</i>
								</div>
								<div class="vertical-middle item__quan">
									<div class="switch__number">
										<input type="text" value="1" disabled="disabled" id="quantity"> 
										<span class="switch__button switch__button_down">-</span> 
										<span class="switch__button switch__button_up">+</span>
									</div>
								</div>
								<div class="vertical-middle item__price-all">
									<span>3000</span>
								</div>
								<div class="vertical-middle item__sale">
									<span>15</span>
								</div>
								<div class="vertical-middle item__price-order">
									<span>2550</span>
								</div>
								<div class="vertical-middle item__delete">
									<button></button>
								</div>
							</div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="container">
							<div class="row">
								<div class="item__img">
									<img src="img/tkan1.jpg" alt="">
								</div>
								<div class="vertical-middle item__descr">
									<span>Пальтовая ткань однотонная</span>
									<i>Арт. 25-54558</i>
								</div>
								<div class="vertical-middle item__price-one">
									<span>1500</span>
									<i>Показать цену в У.Е.</i>
								</div>
								<div class="vertical-middle item__quan">
									<div class="switch__number">
										<input type="text" value="1" disabled="disabled" id="quantity"> 
										<span class="switch__button switch__button_down">-</span> 
										<span class="switch__button switch__button_up">+</span>
									</div>
								</div>
								<div class="vertical-middle item__price-all">
									<span>3000</span>
								</div>
								<div class="vertical-middle item__sale">
									<span>15</span>
								</div>
								<div class="vertical-middle item__price-order">
									<span>2550</span>
								</div>
								<div class="vertical-middle item__delete">
									<button></button>
								</div>
							</div>
						</div>
					</div>
					<div class="item-total">
						<div class="container">
							<div class="row">
								<div class="total-row">
									<span>Всего:</span>
									<i>4 500 руб.</i>
								</div>
								<div class="total-row">
									<span>Ваша скидка:</span>
									<i>525 руб.</i>
								</div>
								<div class="total-row total-row_bold">
									<span>Итого со скидкой:</span>
									<i>3 975 руб.</i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="basket-list">
					<span class="basket-list__title">Ожидаемые ткани</span>
					<div class="item clearfix">
						<div class="container">
							<div class="row">
								<div class="item__img">
									<img src="img/tkan2.jpg" alt="">
									<div class="tovar_img__toplent tovar_img__toplent_new">
										<span>ожидается</span>
									</div>
								</div>
								<div class="vertical-middle item__descr">
									<span>Ткань Жаккард</span>
									<i>Арт. 25-54558</i>
								</div>
								<div class="vertical-middle item__price-one">
									<span>1500</span>
									<i>Показать цену в У.Е.</i>
								</div>
								<div class="vertical-middle item__quan">
									<div class="switch__number">
										<input type="text" value="1" disabled="disabled" id="quantity"> 
										<span class="switch__button switch__button_down">-</span> 
										<span class="switch__button switch__button_up">+</span>
									</div>
								</div>
								<div class="vertical-middle item__price-all">
									<span>3000</span>
								</div>
								<div class="vertical-middle item__sale">
									<span>15</span>
								</div>
								<div class="vertical-middle item__price-order">
									<span>2550</span>
								</div>
								<div class="vertical-middle item__delete">
									<button></button>
								</div>
							</div>
						</div>
					</div>
					<div class="item clearfix">
						<div class="container">
							<div class="row">
								<div class="item__img">
									<img src="img/tkan3.jpg" alt="">
									<div class="tovar_img__toplent tovar_img__toplent_new">
										<span>ожидается</span>
									</div>
								</div>
								<div class="vertical-middle item__descr">
									<span>Пальтовая ткань однотонная</span>
									<i>Арт. 25-54558</i>
								</div>
								<div class="vertical-middle item__price-one">
									<span>1500</span>
									<i>Показать цену в У.Е.</i>
								</div>
								<div class="vertical-middle item__quan">
									<div class="switch__number">
										<input type="text" value="1" disabled="disabled" id="quantity"> 
										<span class="switch__button switch__button_down">-</span> 
										<span class="switch__button switch__button_up">+</span>
									</div>
								</div>
								<div class="vertical-middle item__price-all">
									<span>3000</span>
								</div>
								<div class="vertical-middle item__sale">
									<span>15</span>
								</div>
								<div class="vertical-middle item__price-order">
									<span>2550</span>
								</div>
								<div class="vertical-middle item__delete">
									<button></button>
								</div>
							</div>
						</div>
					</div>
					<div class="item-total">
						<div class="container">
							<div class="row">
								<div class="total-row">
									<span>Всего:</span>
									<i>4 500 руб.</i>
								</div>
								<div class="total-row">
									<span>Ваша скидка:</span>
									<i>525 руб.</i>
								</div>
								<div class="total-row total-row_bold">
									<span>Итого со скидкой:</span>
									<i>3 975 руб.</i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="basket-list__total">
					<div class="container">
						<div class="row">
							<span>Итого весь заказ:</span>
							<i>10 975 руб.</i>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="basket-order">
							<p class="order__title">Оформление заказа</p>
							<div class="tabs">
								<div class="tabs-block">
									<div class="tabs">
										<div class="tab tab-0">
											<label class="checkbox__label">
												<input class="checkbox" type="radio" name="checkbox-test" checked>
												<span class="checkbox-custom"></span>
												<span class="label_txt">Физ лицо</span>
											</label>
										</div>
										<div class="tab tab-1 active">
											<label class="checkbox__label">
												<input class="checkbox" type="radio" name="checkbox-test" >
												<span class="checkbox-custom"></span>
												<span class="label_txt">Юр лицо/ИП</span>
											</label>
										</div>
									</div>
									<div class="tabs-content">
										<div class="tab-content tab-0">
											<div class="tab-text">
												<p>Монобукет из хризантем смело можно назвать самым универсальным подарком. Достаточно строгий с первого взгляда, он станет достойным презентом для мужчины. Но скромность хризантем обманчива, не зря они являются символом солнца, дающего жизнь и свет. Дам порадует классический образ букета, красота цветов и ненавязчивый аромат.</p>
											</div>
										</div>
									</div>
									<div class="tabs-content">
										<div class="tab-content tab-1">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ipsa qui aliquam quae recusandae a sint aliquid similique id consectetur esse magni tempore harum dolorem, illum voluptatem debitis, libero, laboriosam.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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