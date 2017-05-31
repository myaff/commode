<?php require('parts/header.php'); ?>
<?php require($root.'parts/products-array.php'); ?>
<div id="top-carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#top-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#top-carousel" data-slide-to="1"></li>
		<li data-target="#top-carousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block img-fluid w-100" src="<?=$root?>build/img/banner.jpg" alt="First slide" data-object-fit="cover">
			<div class="carousel-caption d-flex flex-column justify-content-between align-items-center">
				<div class="display-1">
					<!-- Стиль заголовка применяется для тэгов h1-h4, можно использовать любой. -->
					<h3>Весна-лето 2017</h3>
				</div>
				<!-- 	.btn-exp - специальный стиль текста в кнопке - 
						жирный разреженный 'pt sans caprion' в верхнем регистре 
						по умолчанию в кнопках roboto light без трансформации -->
				<a href="#" class="btn btn-outline-light btn-lg btn-exp">смотреть</a>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid w-100" src="<?=$root?>build/img/banner.jpg" alt="Second slide" data-object-fit="cover">
			<div class="carousel-caption d-flex flex-column justify-content-between align-items-center">
				<div class="display-1"><h3>Осень-зима 2017</h3></div>
				<!-- 	.btn-exp - специальный стиль текста в кнопке - 
						жирный разреженный 'pt sans caprion' в верхнем регистре 
						по умолчанию в кнопках roboto light без трансформации -->
				<a href="#" class="btn btn-outline-light btn-lg btn-exp">смотреть</a>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid w-100" src="<?=$root?>build/img/banner.jpg" alt="Third slide" data-object-fit="cover">
			<div class="carousel-caption d-flex flex-column justify-content-between align-items-center">
				<div class="display-1"><h3>Весна-лето 2018</h3></div>
				<!-- 	.btn-exp - специальный стиль текста в кнопке - 
						жирный разреженный 'pt sans caprion' в верхнем регистре 
						по умолчанию в кнопках roboto light без трансформации -->
				<a href="#" class="btn btn-outline-light btn-lg btn-exp">смотреть</a>
			</div>
		</div>
	</div>
</div>
<div class="section section-features d-none d-md-block">
	<!-- к стандартным .container и .container-fluid добавлено сочетание 
		.container-fluid.container-* 
		* - xs, sm, md, lg, xl
		которое задает максимальную ширину резиновому контейнеру .container-fluid -->
	<div class="container-fluid container-xl">
		<div class="card-deck">
			<div class="card card-feature text-center">
				<img class="card-img-center img-fluid" src="<?=$root?>build/img/fact-1.png" alt="Card img">
				<div class="card-title"><h4>Бесплатная доставка</h4></div>
				<div class="card-text"><p>При покупке от 3000 руб</p></div>
			</div>
			<div class="card card-feature text-center">
				<img class="card-img-center img-fluid" src="<?=$root?>build/img/fact-2.png" alt="Card img">
				<div class="card-title"><h4>Новинки каждую неделю</h4></div>
				<div class="card-text"><p>Более 100 брендов со всего мира</p></div>
			</div>
			<div class="card card-feature text-center">
				<img class="card-img-center img-fluid" src="<?=$root?>build/img/fact-3.png" alt="Card img">
				<div class="card-title"><h4>Возврат и обмен</h4></div>
				<div class="card-text"><p>В течение 30 дней</p></div>
			</div>
		</div>
	</div>
</div>
<div class="section section-new-prods">
	<div class="container">
		<div class="section-title display-narrow">
			<h2>Новинки</h2>
		</div>
		<div class="product-list row">
			<?php foreach ($productsSpecial as $key => $product) { ?>
				<div class="col w-50 w-md-33 <?php if($key == 6){ ?>d-lg-none<?php }else{ ?>w-lg-20<?php } ?>">
					<div class="card product product--new text-center">
						<img class="img-fluid card-img w-100" src="<?=$root?>build/img/products/<?=$product['img']['url']?>" alt="<?=$product['img']['alt']?>" data-object-fit="cover">
						<div class="card-img-overlay product-info d-flex flex-column align-items-center justify-content-end">
							<div class="product-name-wrapper">
								<span class="product-name"><?=$product['name']?></span>
							</div>
							<div class="product-price">
								<span class="price"><?=$product['price']['current']?>&nbsp;<s>Р</s></span>
							</div>
							<!-- 	.btn-bold - специальный стиль текста в кнопке - 
									жирный roboto в верхнем регистре 
									по умолчанию в кнопках roboto light без трансформации -->
							<a href="<?=$product['link']?>" class="btn btn-dark btn-block btn-bold product-btn">Купить</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="section-text">
			<p>Здесь можно текст о новинках, ваши любимые пояса-корсеты от Рады Державец снова в Commode. И кое-что ещё! Новые ремни, пояса и чокеры. Яркие цвета, разнообразные фактуры и материалы! Хочешь увидеть больше? Ждём в гости!</p>
		</div>
		<div class="section-btn">
			<!-- 	.btn-bold - специальный стиль текста в кнопке - 
					жирный roboto в верхнем регистре 
					по умолчанию в кнопках roboto light без трансформации -->
			<a href="#" class="btn btn-link btn-lg btn-bold">смотреть новинки</a>
		</div>
	</div>
</div>
<div class="section section-banner">
	<div class="section-img text-center">
		<img class="img-fluid d-sm-none" src="<?=$root?>build/img/banner-2-mobile.jpg" alt="Banner/" data-object-fit="cover">
		<img class="img-fluid d-none d-sm-inline" src="<?=$root?>build/img/banner-2.jpg" alt="Banner/" data-object-fit="cover">
	</div>
	<div class="container">
		<div class="section-text d-none d-sm-block">
			<p>Эксклюзивные вещи от нашего собственного бренда Commode design и еще какой-нибудь важный текст о бренде.</p>
		</div>
		<div class="section-btn">
			<!-- 	.btn-exp - специальный стиль текста в кнопке - 
					жирный разреженный 'pt sans caprion' в верхнем регистре 
					по умолчанию в кнопках roboto light без трансформации -->
			<a href="#" class="btn btn-outline-dark btn-lg btn-exp">смотреть</a>
		</div>
	</div>
</div>
<div class="section section-sale">
	<div class="container">
		<div class="section-title display-narrow">
			<h2>Sale</h2>
		</div>
		<div class="product-list row">
			<?php foreach ($productsSpecial as $key => $product) { ?>
				<div class="col w-50 w-md-33 <?php if($key == 6){ ?>d-lg-none<?php }else{ ?>w-lg-20<?php } ?>">
					<div class="card product product--sale text-center">
						<img class="img-fluid card-img w-100" src="<?=$root?>build/img/products/<?=$product['img']['url']?>" alt="<?=$product['img']['alt']?>" data-object-fit="cover">
						<div class="card-img-overlay product-info d-flex flex-column align-items-center justify-content-end">
							<div class="product-name-wrapper">
								<span class="product-name"><?=$product['name']?></span>
							</div>
							<div class="product-price">
								<span class="old-price"><del><?=$product['price']['old']?>&nbsp;<s>Р</s></del></span>
								<span class="price"><?=$product['price']['current']?>&nbsp;<s>Р</s></span>
							</div>
							<!-- 	.btn-bold - специальный стиль текста в кнопке - 
									жирный roboto в верхнем регистре 
									по умолчанию в кнопках roboto light без трансформации -->
							<a href="<?=$product['link']?>" class="btn btn-dark btn-block btn-bold product-btn">Купить</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="section-btn">
			<!-- .btn-bold - специальный стиль текста в кнопке - 
				жирный roboto в верхнем регистре 
				по умолчанию в кнопках roboto light без трансформации -->
			<a href="#" class="btn btn-link btn-lg btn-bold">смотреть</a>
		</div>
	</div>
</div>
<div class="section section-lookbook">
	<div class="container">
		<div class="section-title display-narrow">
			<h2>lookbook</h2>
		</div>
		<div class="section-text">
			<p>Здесь можно текст о лукбуке, ваши любимые пояса-корсеты от Рады Державец снова в Commode. И кое-что ещё! Новые ремни, пояса и чокеры. Яркие цвета, разнообразные фактуры и материалы! Хочешь увидеть больше? Ждём в гости!</p>
		</div>
		<div class="row card-img-group">
			<div class="col w-100 w-md-50">
				<div class="card">
					<a href="#">
						<img class="img-fluid w-100" src="<?=$root;?>build/img/lookbook-1.jpg" alt="Look 1" data-object-fit="cover">
					</a>
				</div>
			</div>
			<div class="col w-100 w-md-50">
				<div class="row">
					<div class="col w-50">
						<div class="card">
							<a href="#">
								<img class="img-fluid w-100" src="<?=$root;?>build/img/lookbook-2.jpg" alt="Look 2" data-object-fit="cover">
							</a>
						</div>
					</div>
					<div class="col w-50">
						<div class="card-">
							<a href="#">
								<img class="img-fluid w-100" src="<?=$root;?>build/img/lookbook-3.jpg" alt="Look 3" data-object-fit="cover">
							</a>
						</div>
					</div>
				</div>
				<div class="row d-none d-md-flex">
					<div class="col">
						<div class="card">
							<a href="#">
								<img class="img-fluid w-100" src="<?=$root;?>build/img/lookbook-4.jpg" alt="Look 4" data-object-fit="cover">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-btn">
			<!-- .btn-bold - специальный стиль текста в кнопке - 
				жирный roboto в верхнем регистре 
				по умолчанию в кнопках roboto light без трансформации -->
			<a href="#" class="btn btn-link btn-lg btn-bold">смотреть луки</a>
		</div>
	</div>
</div>
<div class="section section-subscribe">
	<div class="container">
		<div class="card card-outline-primary card-subscribe">
			<div class="card-block text-center">
				<div class="card-title h4 mb-4"><em>Узнавайте первыми о&nbsp;новых поступлениях и&nbsp;распродажах!</em></div>
				<form action="" class="form-inline subscribe-form d-sm-flex align-items-stretch">
					<label class="sr-only" for="subscribe-email">Введите e-mail</label>
					<!-- для .form-control добавлены цветовые варианты,
						аналогичные кнопкам - .form-control-outline-*
						* - primary, success, info, warning, danger, dark, light -->
					<input type="email" class="subscribe-field form-control form-control-outline-primary form-control-lg mb-3 mr-sm-2 mb-sm-0" id="subscribe-email" placeholder="Введите e-mail">
					<button type="submit" class="btn btn-primary subscribe-btn">Подписаться</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require($root.'parts/footer.php'); ?>