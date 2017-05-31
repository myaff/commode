<?php require('parts/header.php'); ?>
<div class="container">
	<div class="breadcrumb-wrapper">
		<ol class="breadcrumb d-none d-md-block">
			<li class="breadcrumb-item"><a href="#">Главная</a></li>
			<li class="breadcrumb-item active">Каталог</li>
		</ol>
	</div>
	<div class="row catalog-wrapper">
		<div class="catalog-nav col-15 col-sm-5 col-lg-3">
			<div class="block-title d-none d-md-block">Каталог</div>
			<?php require($root.'parts/catalog-nav.php'); ?>
		</div>
		<div class="catalog col-15 col-sm-10 col-lg-12">
			<div class="d-none d-md-flex align-items-center justify-content-between sort-wrapper">
				<div class="block-title">Платья</div>
				<div class="sort form-inline">
					<small class="text-muted mr-2">Сортировать по</small>
					<select class="custom-select custom-select-sm">
						<option selected>дате поступления</option>
						<option value="1">популярности</option>
						<option value="2">цене</option>
					</select>
				</div>
			</div>
			<div class="product-list row">
				<?php require($root.'parts/products-array.php'); ?>
				<?php foreach ($products as $key => $product) { ?>
					<div class="col w-50 w-md-33 w-lg-25">
						<div class="card product text-center h-product" itemscope itemtype="http://schema.org/Product">
							<div class="product-img">
								<a href="<?=$product['link']?>">
									<img class="img-fluid u-photo" 
										 src="<?=$root?>build/img/products/<?=$product['img']['url']?>" 
										 alt="<?=$product['img']['alt']?>" 
										 itemprop="image" data-object-fit="cover" />
								</a>
								<button type="button" class="btn btn-icon product-likes">
									<svg class="btn-icon-img no-fill"><use xlink:href="#heart"/></svg>
									<div class="btn-icon-count--over"><?php if($product['likes']){ echo $product['likes'];} ?></div>
								</button>
							</div>
							<div class="product-name p-name" itemprop="name">
								<a href="<?=$product['link']?>"><?=$product['name']?></a>
							</div>
							<div class="product-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<span class="price p-price" value="<?=$product['price']?>"><?=$product['price']?>&nbsp;<s>Р</s></span>
								<meta itemprop="price" content="<?=$product['price']?>">
								<meta itemprop="priceCurrency" content="RUB">
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<nav class="pagination-wrapper">
				<ul class="pagination justify-content-between justify-content-sm-end align-items-center">
					<li class="page-item page-item--prev">
						<a href="#" class="page-link">
							<svg class="no-fill"><use xlink:href="#arrow-down"/></svg>
						</a>
					</li>
					<!-- Обычную пагинацию с номерами странц тоже можно -->
					<!-- <li class="page-item"><a href="#" class="page-link">1</a></li> -->
					<!-- <li class="page-item"><a href="#" class="page-link">2</a></li> -->
					<li class="page-text">
						<small class="text-muted">Страница</small> <small>1&nbsp;из&nbsp;56</small>
					</li>
					<li class="page-item page-item--next">
						<a href="#" class="page-link">
							<svg class="no-fill"><use xlink:href="#arrow-down"/></svg>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<?php require($root.'parts/footer.php'); ?>