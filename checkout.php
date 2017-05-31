<?php require('parts/header.php'); ?>
<?php require('parts/products-array.php'); ?>
<div class="container">
	<div class="breadcrumb-wrapper">
		<ol class="breadcrumb d-none d-md-block">
			<li class="breadcrumb-item"><a href="#">Главная</a></li>
			<li class="breadcrumb-item active">Корзина</li>
		</ol>
	</div>
	<div class="basket-wrapper row justify-content-center mb-7">
		<div class="block-title basket-title text-center text-sm-left col-15 col-xl-11 mb-md-6">
			<h3>Ваша Корзина</h3>
		</div>
		<div class="basket col-15 col-xl-11">
			<div class="basket-header d-none d-md-flex text-muted">
				<div class="basket-col basket-col-img">Товар</div>
				<div class="basket-col-info d-flex">
					<!-- Пустые ячейки для соблюдения вертикальных колонок правильных размеров  -->
					<div class="basket-col basket-col-name"></div>
					<div class="basket-col basket-col-size text-center">Размер</div>
					<div class="basket-col basket-col-count text-center">Количество</div>
					<div class="basket-col basket-col-price text-center">Цена</div>
					<div class="basket-col basket-col-control text-center"></div>
				</div>
			</div>
			<div class="basket-body mb-4 mb-md-3">
				<?php foreach ([1,3,6] as $i){?>
					<div class="basket-row product d-flex align-items-stretch">
						<div class="basket-col basket-col-img product-img">
							<a href="<?=$products[$i]['link']?>"><img src="<?=$root?>build/img/products/<?=$products[$i]['img']['url']?>" alt="<?=$products[$i]['img']['alt']?>" class="img-fluid" data-object-fit="cover"></a>
						</div>
						<div class="basket-col-info product-info d-flex flex-wrap align-items-center align-content-start align-content-md-center">
							<div class="basket-col basket-col-name mb-3 mb-md-0">
								<div class="product-name">
									<a href="<?=$products[$i]['link']?>"><?=$products[$i]['name']?></a>
								</div>
							</div>
							<div class="basket-col basket-col-size mb-4 mb-md-0 mr-2 mr-md-0">
								<label for="#basket-size-<?=$i?><?=$i?>" class="sr-only">Размер</label>
								<select name="" class="custom-select custom-select-light" id="basket-size-<?=$i?>">
									<option value="xs">XS</option>
									<option value="s">S</option>
									<option value="xl">M</option>
									<option value="xl">XXL</option>
								</select>
							</div>
							<div class="basket-col basket-col-count mb-4 mb-md-0">
								<div class="custom-number">
									<label for="basket-count-<?=$i?>" class="sr-only">Количество</label>
									<input id="basket-count-<?=$i?>" type="number" class="form-control custom-number-input" min="0" max="<?=$products[$i]['count']?>" value="1"/>
									<button class="btn btn-icon custom-number-btn custom-number-btn-minus">-</button>
									<button class="btn btn-icon custom-number-btn custom-number-btn-plus">+</button>
								</div>
							</div>
							<div class="basket-col basket-col-price mb-2 mb-md-0">
								<div class="product-price"><span class="price"><?=$products[$i]['price']?>&nbsp;<s>Р</s></span></div>
							</div>
							<div class="basket-col basket-col-articul">
								<div class="product-articul text-muted"><small>Артикул: <?=$products[$i]['articul']?></small></div>
							</div>
							<div class="basket-col basket-col-control">
								<button class="btn btn-icon btn-close"></button>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="basket-footer d-flex justify-content-between">
				<div class="basket-footer-col">
					<a class="btn-link btn-link-back text-uppercase" href="#">Продолжить покупки</a>
				</div>
				<div class="basket-footer-col text-right">
					<div class="basket-total">
						Итого: <span class="total">28570&nbsp;<s>Р</s></span>
					</div>
					<div class="basket-delivery"><small>Доставка: 0</small></div>
				</div>
			</div>
		</div>
	</div>
	<div class="checkout-wrapper row justify-content-center mb-7 mb-md-8">
		<div class="block-title checkout-title text-center text-sm-left col-15 col-xl-11 mb-md-7">
			<h3>Оформление заказа</h3>
		</div>
		<div class="checkout col-15 col-xl-11">
			<form action="" class="checkout-form row flex-wrap">
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-1" class="text-center text-md-left">e-mail</label>
					<input type="email" id="checkout-input-1" class="form-control"/>
				</div>
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-2" class="text-center text-md-left">телефон</label>
					<input type="tel" id="checkout-input-2" class="form-control"/>
				</div>
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-3" class="text-center text-md-left">имя</label>
					<input type="text" id="checkout-input-3" class="form-control"/>
				</div>
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-4" class="text-center text-md-left">фамилия</label>
					<input type="text" id="checkout-input-4" class="form-control"/>
				</div>
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-5" class="text-center text-md-left">город</label>
					<input type="text" id="checkout-input-5" class="form-control"/>
				</div>
				<div class="form-group col w-100 w-md-50 mb-4 mb-md-5">
					<label for="checkout-input-6" class="text-center text-md-left">адрес</label>
					<!-- .txt-col-* (1 - 4) высота textarea, строк -->
					<textarea id="checkout-input-6" class="form-control txt-col-3 txt-col-md-1"></textarea>
				</div>
				<div class="form-group col w-100 mb-4 mb-md-6">
					<label for="checkout-input-7" class="text-center text-md-left">комментарий</label>
					<textarea id="checkout-input-7" class="form-control txt-col-4"></textarea>
				</div>
				<div class="form-note col w-100 text-center mb-3 mb-md-4">
					<p>После обработки заказа мы&nbsp;свяжемся с&nbsp;Вами!</p>
				</div>
				<!-- .btn-sb - специальный стиль текста для кнопок
					roboto medium в верхнем регистре
					по умолчанию в кнопках roboto light без трансформации
					.btn-md - средний размер кнопки, уменьшенный шрифт и увеличенные отступы
					.btn-center - центрирует кнопку, делает ее блочной, задает максимальную ширину 230px -->
				<input type="submit" class="btn btn-secondary btn-sb btn-md btn-center" value="Перейти к оплате"/>
			</form>
		</div>
	</div>
</div>
<?php require($root.'parts/footer.php'); ?>