<?php
$root = '';
$depth = substr_count($_SERVER['REQUEST_URI'], '/') - 2;
if($depth > 0){
	for ($i = 1; $i <= $depth; $i++) {
		$root .= '../';
	}
}

$mainPage = false;
if(strpos($_SERVER['REQUEST_URI'], '/index.php') || preg_match('/commode\/$/', $_SERVER['REQUEST_URI'])){
	$mainPage = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700|PT+Sans+Narrow:700|Roboto:100,300,300i,500,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="<?=$root?>build/css/main.css" rel="stylesheet">
    <title>Commode</title>
</head>
<body class="<?php if ($mainPage):?>home-page<?php endif;?>">
<div class="svg-placeholder d-none"><?php include($root.'build/img/svg/sprite.svg');?></div>
<?php require($root.'parts/modal-main-nav.php');?>
<div class="pagewrap-area pagewrap-area-layout-wide pagewrap-area-container-fixed">
<div class="header fixed-top">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-between">
			<div class="btn-menu-wrapper col-3 col-md-5">
				<button class="btn btn-icon btn-menu" data-toggle="modal" data-target="#mainNavModal">
					<div></div><div></div><div></div>
				</button>
			</div>
			<div class="logo-wrapper col-9 col-md-5">
				<a href="/" class="logo">
					<svg class="logo-img"><use xlink:href="#logo"/></svg>
				</a>
			</div>
			<div class="buttons-group col-3 col-md-5 d-flex justify-content-end align-items-end">
				<div class="collapse-modal-wrapper btn-wrapper d-inline-block">
					<a href="telto:+79504219253" role="button" data-toggle="collapse" data-target="#modal-contacts-1" class="btn btn-icon btn-bold btn-phone d-none d-md-inline-block">
						<svg class="btn-icon-img"><use xlink:href="#phone"/></svg>
						<span class="btn-icon-text btn-icon-text--dashed">8&nbsp;950&nbsp;421&nbsp;92&nbsp;53</span>
					</a>
					<div class="collapse collapse-modal collapse-modal-sm" id="modal-contacts-1" tabindex="-1" aria-hidden="true">
						<?php require($root.'parts/modal-contacts.php');?>
					</div>
				</div>
				<a href="#" class="btn btn-icon btn-lg btn-favorite d-none d-md-inline-block">
					<svg class="btn-icon-img stroke-2"><use xlink:href="#heart"/></svg>
					<span class="btn-icon-count--over">9</span>
				</a>
				<a href="#" class="btn btn-icon btn-lg btn-basket">
					<svg class="btn-icon-img"><use xlink:href="#basket"/></svg>
					<span class="btn-icon-count--over">10</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="page-area">