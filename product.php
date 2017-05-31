<?php require('parts/header.php'); ?>
<div class="container">
	<div class="breadcrumb-wrapper d-flex align-items-center justify-content-end justify-content-md-between">
		<ol class="breadcrumb d-none d-md-block">
			<li class="breadcrumb-item"><a href="#">Главная</a></li>
			<li class="breadcrumb-item"><a href="#">Каталог</a></li>
			<li class="breadcrumb-item active">Платья</li>
		</ol>
		<div class="link-back-wrapper text-right">
			<a href="catalog.php" class="btn btn-icon btn-sm btn-link-back">
				<svg class="btn-icon-img no-fill"><use xlink:href="#arrow-back"/></svg>
				<span class="btn-icon-text btn-icon-text--lined text-uppercase">Платья</span>
			</a>
		</div>
	</div>
	<div class="row product-detail h-product" itemscope itemtype="http://schema.org/Product">
		<div class="product-info-wrapper col-15 d-md-none text-center">
			<div class="product-name p-name" itemprop="name">
				<!-- Тэг заголовка любой из h1-h4 -->
				<h1>Полупрозрачное платье в викторианском стиле TOP20 Studio</h1>
			</div>
			<div class="product-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<!-- Если скидка, можно добавить зачеркнутую старую цену -->
				<!-- <span class="old-price"><del>11690&nbsp;Р</del></span> -->
				<span class="price p-price" value="9690">9690&nbsp;<s>Р</s></span>
				<meta itemprop="price" content="9690">
				<meta itemprop="priceCurrency" content="RUB">
			</div>
		</div>
		<div class="product-img-wrapper col-15 col-md-8 col-lg-9 col-xl-10">
			<div class="row card-img-group">
				<div class="product-img col-15 col w-sm-50 w-md-100 w-lg-50">
					<div class="card">
						<a href="<?=$root?>build/img/product-detail/product-detail-1.jpg">
							<img src="<?=$root?>build/img/product-detail/product-detail-1.jpg" alt="Product Image 1" class="img-fluid u-photo" itemprop="image" data-object-fit="cover"/>
						</a>
					</div>
				</div>
				<div class="product-img col-15 col w-sm-50 w-md-100 w-lg-50">
					<div class="card">
						<a href="<?=$root?>build/img/product-detail/product-detail-2.jpg">
							<img src="<?=$root?>build/img/product-detail/product-detail-2.jpg" alt="Product Image 2" class="img-fluid u-photo" data-object-fit="cover"/>
						</a>
					</div>
				</div>
				<div class="product-img col-15 col w-sm-50 w-md-50 w-lg-50">
					<div class="card">
						<a href="<?=$root?>build/img/product-detail/product-detail-3.jpg">
							<img src="<?=$root?>build/img/product-detail/product-detail-3.jpg" alt="Product Image 3" class="img-fluid u-photo" data-object-fit="cover"/>
						</a>
					</div>
				</div>
				<div class="product-img d-none d-sm-block col w-sm-50 w-md-50 w-lg-50">
					<div class="card">
						<a href="<?=$root?>build/img/product-detail/product-detail-1.jpg">
							<img src="<?=$root?>build/img/product-detail/product-detail-1.jpg" alt="Product Image 4" class="img-fluid u-photo" data-object-fit="cover"/>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="product-info-wrapper col-15 col-md-7 col-lg-6 col-xl-5">
			<div class="product-name d-none d-md-block">
				<!-- Тэг заголовка любой из h1-h4 -->
				<h2>Полупрозрачное платье в викторианском стиле TOP20 Studio</h2>
			</div>
			<div class="product-label-wrapper text-center text-md-left">
				<!-- Варианты ярлыков сделаны по аналогии с кнопками,
					 т.е. поддерживается .product-label-* и .product-label-outline-*
					 * - primary, success, info, warning, danger, dark, light -->
				<span class="product-label product-label-outline-dark">new</span>
				<!-- Можно еще добавить -->
				<!-- <span class="product-label product-label-success">sale</span> -->
			</div>
			<div class="product-price d-none d-md-block">
				<!-- Если скидка, можно добавить зачеркнутую старую цену -->
				<!-- <span class="old-price"><del>11690&nbsp;Р</del></span> -->
				<span class="price">9690&nbsp;<s>Р</s></span>
			</div>
			<div class="choose-size-wrapper text-center text-md-left">
				<!-- .legend-* - размер шрифта legend
					* - xs, sm, lg, xl, по умолчанию 1rem -->
				<legend class="legend-xs text-muted">Выберите размер</legend>
				<div class="form-check form-check-inline text-center text-md-left">
					<label for="choose-size-radio-1" class="custom-control custom-radio choose-size-radio">
						<input type="radio" checked id="choose-size-radio-1" class="custom-control-input" name="choose-size"/>
						<span class="choose-size-text">S</span>
					</label>
					<label for="choose-size-radio-2" class="custom-control custom-radio choose-size-radio">
						<input type="radio" id="choose-size-radio-2" class="custom-control-input" name="choose-size"/>
						<span class="choose-size-text">M</span>
					</label>
					<label for="choose-size-radio-3" class="custom-control custom-radio choose-size-radio">
						<input type="radio" id="choose-size-radio-3" class="custom-control-input" name="choose-size"/>
						<span class="choose-size-text">L</span>
					</label>
				</div>
			</div>
			<div class="product-buttons-wrapper">
				<!-- .btn-sb - специальный стиль текста для кнопок
					roboto medium в верхнем регистре
					по умолчанию в кнопках roboto light без трансформации
					.btn-md - средний размер кнопки, уменьшенный шрифт и увеличенные отступы -->
				<a href="#" class="btn btn-secondary btn-sb btn-md product-btn">Добавить в корзину</a>
				<button class="btn btn-icon d-none d-lg-inline-block btn-wishlist">
					<svg class="btn-icon-img no-fill stroke-2">
						<use xlink:href="#heart"></use>
					</svg>
					<span class="btn-icon text btn-icon-text--lined">Добавить в wishlist</span>
				</button>
			</div>
			<div class="product-articul text-center text-md-left">
				<small class="text-muted">Артикул: 1832-09</small>
			</div>
			<hr/>
			<div class="product-desc-wrapper">
				<div class="block-title text-center text-md-left">
					<h5>Описание</h5>
				</div>
				<div class="product-desc e-description" itemprop="description">
					<p>Пастораль – один из главных и самых свежих летних трендов. Вариации на тему наивной романтики можно встретить в последних коллекциях Erdem, Jacquemus и Blumarine. Платья простого силуэта из натуральных материалов хорошо сидят на любой фигуре и комфортны в жаркий сезон.<br/>
					Совет стилиста: Подобную модель можно смело сочетать с балетками и соломенной шляпой. Любой, от широкополой до канотье.<br/>
					- Эксклюзивный бренд LYYKTEAM;<br/>
					- Легкий дышащий хлопок;<br/>
					- Миди-длина, скрывающая объем бедер;<br/>
					- Регулируемая линия плеча.</p>
				</div>
				<div class="block-title text-center text-md-left">
					<h5>Доставка и возврат</h5>
				</div>
				<p>Доставим бесплатно, если сумма покупки 3000 и более.<br/>
				Возврат в течение 14 дней не зависимо от причины.</p>
			</div>
		</div>
	</div>
	<div class="section section-related-products">
		<div class="section-title display-lines">
			<h3>дополнить образ</h3>
		</div>
		<div class="row product-list">
			<?php require($root.'parts/products-array.php'); ?>
			<?php for ($i = 1; $i <= 5; $i++) { ?>
				<?php $j = $i+4; ?>
				<div class="<?php if($i == 5){?>d-none d-lg-block<?php } else {?>w-50 w-md-25<?php } ?> col w-lg-20">
					<div class="card product text-center">
						<div class="product-img">
							<a href="<?=$products[$j]['link']?>"><img class="img-fluid" src="<?=$root?>build/img/products/<?=$products[$j]['img']['url']?>" alt="<?=$products[$j]['img']['alt']?>" data-object-fit="cover"></a>
							<button type="button" class="btn btn-icon product-likes">
								<svg class="btn-icon-img no-fill"><use xlink:href="#heart"/></svg>
								<div class="btn-icon-count--over"><?php if($products[$j]['likes']){ echo $products[$j]['likes'];} ?></div>
							</button>
						</div>
						<a href="<?=$products[$j]['link']?>" class="product-name"><?=$products[$j]['name']?></a>
						<div class="product-price"><span class="price"><?=$products[$j]['price']?>&nbsp;<s>Р</s></span></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php require($root.'parts/footer.php'); ?>