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
					<div class="item">
						<div class="container">
							<div class="row">
								<div class="item__img">
									<img src="img/tkan.jpg" alt="">
								</div>
								<div class="item__descr">
									<span>Ткань Жаккард</span>
									<i>Арт. 25-54558</i>
								</div>
								<div class="item__proce-one">
									<span>1500</span>
									<i>Показать цену в У.Е.</i>
								</div>
								<div class="item__quan">
									<div class="switch__number">
										<input type="text" value="1" disabled="disabled" id="quantity"> 
										<span class="switch__button switch__button_down">-</span> 
										<span class="switch__button switch__button_up">+</span>
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