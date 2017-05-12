<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
		<?php require_once('includes/header_bottom.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="lace">
				<div class="container lace-container">
					<div class="col-lg-3">
						<div class="lace__sidebar">
							<div class="sidebar-menu sidebar-menu__style">
								<ul class="sidebar-menu__item">
									<li><a href="#">новинки</a></li>
									<li><a href="#">распродажа</a></li>
									<li><a href="#">ожидается</a></li>
									<li><a href="#">плательно-блузочная</a></li>
									<li><a href="#">плащевая</a></li>
									<li><a href="#">плиссе</a></li>
									<li><a href="#">подклад</a></li>
									<li><a href="#">сток</a></li>
									<li><a href="#">кружево</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">шанель</a></li>
									<li><a href="#">inkjet (принт)</a></li>
									<li><a href="#">атлас-стрейч</a></li>
									<li><a href="#">бархат</a></li>
									<li><a href="#">вискоза</a></li>
									<li><a href="#">джинса с вышивкой</a></li>
									<li><a href="#">дубленка</a></li>
									<li><a href="#">жаккард</a></li>
									<li><a href="#">костюмная</a></li>
									<li><a href="#">кружево</a></li>
									<li><a href="#">курточная</a></li>
									<li><a href="#">лен</a></li>
									<li><a href="#">мех</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<ul class="filter">
							<li class="filter__menu">
								<a href="#" class="filter__link">тип ткани</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">цвет</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">вид дизайна</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">состав</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">ширина</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">назанчение</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__menu">
								<a href="#" class="filter__link">цена</a>
								<ul class="filter__hover_menu">
									<li><a href="#">шелк натуральный</a></li>
									<li><a href="#">хлопок</a></li>
									<li><a href="#">полиэстр</a></li>
								</ul>
							</li>
							<li class="filter__clear">
								<a href="#">Сбросить</a>
							</li>
						</ul>
						<div class="clear"></div>

						<div class="filter_sort">
							<div class="filter__vid">
								<span>вид:</span>
								<a href="#" class="vid__table"></a>
								<a href="#" class="vid__string"></a>
							</div>
							<div class="filter__sortbox">
								<span>сортировать:</span>
								<a href="#" class="sort__price_sort">Цена по возрастанию</a>
								<a href="#" class="showprice_link sort__showprice">Показать цены в У.Е.</a>
							</div>
							<div class="filter__onpage">
								<span>на странице: </span>
								<a href="#" class="filter__onpage__checked">20</a>
								<a href="#">40</a>
								<a href="#">60</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="button__filer">
							<span>Фильтр</span>
						</div>
						<div class="filer__accordion">
							<div class="filer__accordion__price">
								<a href="#" class="showprice_link">Показать цены в У.Е.</a>
								<a href="#" class="sort__price_sort">Цена по возрастанию</a>
							</div>

							<div class="filer__accordion_box">
								<a href="js-show-color" class="filer__accordion_link">цвет</a>
								<div class="filer__accordion_show js-show-color">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_box">
								<a href="js-show-view" class="filer__accordion_link">вид дизайна</a>
								<div class="filer__accordion_show js-show-view">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_box">
								<a href="js-show-inside" class="filer__accordion_link">состав</a>
								<div class="filer__accordion_show js-show-inside">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_box">
								<a href="js-show-width" class="filer__accordion_link">ширина</a>
								<div class="filer__accordion_show js-show-width">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_box">
								<a href="js-show-for" class="filer__accordion_link">назначение</a>
								<div class="filer__accordion_show js-show-for">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_box">
								<a href="js-show-price" class="filer__accordion_link">цена</a>
								<div class="filer__accordion_show js-show-price">
									<a href="#">шелк натуральный</a>
									<a href="#">хлопок</a>
									<a href="#">полиэстр</a>
									<a href="#">эластан</a>
								</div>
							</div>
							<div class="filer__accordion_clear">
								<a href="#" class="filer__accordion_hide"><span>Свернуть фильтр</span></a>
								<a href="#" class="filer__accordion_clearlink"><span>Сбросить</span></a>
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
