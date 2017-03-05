<?php
/*
Template Name: landing
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mixikids</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
	<link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<section id="header">
		<div class="section-navbar wow fadeInDown">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url') ?>/images/logo1.png" alt=""></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a class="order" href="#">Каталог</a></li>
			        <li><a href="#triggers">Преимущества</a></li>
			        <li><a href="#category">Товары</a></li>
			        <li><a href="#howtowork">Схема работы</a></li>
			        <li><a href="#reviews">Отзывы</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div><!--.section-navbar-->
		<div class="section-table">
			<div class="section-row">
				<div class="section-cell">
					<div class="section-center">
						<h1>Интернет-магазин детской одежды в Полоцке и Новополоцке</h1>
						<h2>У нас самые низкие цены</h2>
						<div class="section-btn">
							<a href="" class="btn btn-primary">Посмотреть каталог</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!--#header-->
	<section id="triggers">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 item wow fadeInLeft">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/trig-anchor.png" alt="anchor" class=" ">
					</div>
					<h3>Низкие цены</h3>
					<p>У нас Вы надёте товары с самыми низкими ценами в нашем регионе</p>
				</div>
				<div class="col-md-4 item wow fadeInDown">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/trig-truck.png" alt="truck" class=" ">
					</div>
					<h3>Бесплатная доставка</h3>
					<p>Бесплатная доставка курьером по Полоцку и Новополоцку</p>
				</div>
				<div class="col-md-4 item wow fadeInRight">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/trig-pers.png" alt="pers" class=" ">
					</div>
					<h3>Доброжелательный персонал</h3>
					<p>Мы всегда выслушаем Ваши предложения и поможем с выбором</p>
				</div>
			</div>
		</div>
	</section><!--#triggers-->
	<section id="category">
		<div class="container">
			<div class="row text-center	reviews-head">
				<h2>В нашем магазине Вы найдёте одежду как для мальчиков, так и для девочек разных возрастов</h2>
			</div>
			<div class="row text-center">
				<div class="col-md-4 item wow bounceInLeft">
					<div>
						<a href=""><img src="<?php bloginfo('template_url') ?>/images/cat-boys.jpg" alt="boys"></a>
						<h3><a href="">Для мальчиков</a></h3>
					</div>
				</div>
				<div class="col-md-4 item wow bounceInDown">
					<div>
						<a href=""><img src="<?php bloginfo('template_url') ?>/images/cat-girls.jpg" alt="girls"></a>
						<h3><a href="">Для девочек</a></h3>
					</div>
				</div>
				<div class="col-md-4 item wow bounceInRight">
					<div>
						<a href=""><img src="<?php bloginfo('template_url') ?>/images/cat-babys.jpg" alt="babys"></a>
						<h3><a href="">Для малышей</a></h3>
					</div>
				</div>
			</div>
		</div>
	</section><!--#category-->
	<section id="howtowork">
		<div class="container">
			<div class="row text-center	reviews-head">
				<h2>Схема работы проста</h2>
			</div>
			<div class="row text-center">
				<div class="col-md-1"></div>
				<div class="col-md-2 item">
					<div>
						<img class="wow rotateInDownLeft" src="<?php bloginfo('template_url') ?>/images/how-cart.png" alt="cart">
						<h3>Оформляете заказ на сайте</h3>
					</div>
				</div>
				<div class="col-md-2">
					<div class="arrow">
						<!-- <img src="<?php bloginfo('template_url') ?>/images/arrow.png" alt="arrow"> -->
					</div>
				</div>
				<div class="col-md-2 item">
					<div>
						<img class="wow rotateIn" src="<?php bloginfo('template_url') ?>/images/how-phone.png" alt="phone">
						<h3>Наш менеджер перезванивает Вам</h3>
					</div>
				</div>
				<div class="col-md-2">
					<div class="arrow">
						<!-- <img src="<?php bloginfo('template_url') ?>/images/arrow.png" alt="arrow"> -->
					</div>
				</div>
				<div class="col-md-2 item">
					<div>
						<img class="wow rotateInDownRight" src="<?php bloginfo('template_url') ?>/images/how-sent.png" alt="sent">
						<h3>Вы получаете товар по почте или курьером</h3>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</section><!--#howtowork-->
	<section id="reviews">
		<div class="container">
			<div class="row text-center	reviews-head">
				<h2>Наши отзывы</h2>
			</div>
			<div class="row text-center">
				<div class="col-sm-6 col-md-3 item">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle front wow zoomIn" data-toggle="modal" data-target="#marina1">
						<span><i class="fa fa-comment back" aria-hidden="true"></i></span>
						<!-- Modal -->
						<div class="modal fade" id="marina1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Марина</h4>
						      </div>
						      <div class="modal-body">
						      	<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle">
						      	<p>Отзыв Марины, отзыв марины, отзыв марины, отзыв марины, отзыв марины</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<h3 data-toggle="modal" data-target="#marina1">Марина</h3>
					<p data-toggle="modal" data-target="#marina1">Отзыв Марины, отзыв марины...</p>
				</div>
				<div class="col-sm-6 col-md-3 item">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle front wow zoomIn" data-toggle="modal" data-target="#marina2">
						<span><i class="fa fa-comment back" aria-hidden="true"></i></span>
						<!-- Modal -->
						<div class="modal fade" id="marina2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Марина</h4>
						      </div>
						      <div class="modal-body">
						      	<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle">
						      	<p>Отзыв Марины, отзыв марины, отзыв марины, отзыв марины, отзыв марины</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<h3 data-toggle="modal" data-target="#marina2">Марина</h3>
					<p data-toggle="modal" data-target="#marina2">Отзыв Марины, отзыв марины...</p>
				</div>
				<div class="col-sm-6 col-md-3 item">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle front wow zoomIn" data-toggle="modal" data-target="#marina3">
						<span><i class="fa fa-comment back" aria-hidden="true"></i></span>
						<!-- Modal -->
						<div class="modal fade" id="marina3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Марина</h4>
						      </div>
						      <div class="modal-body">
						      	<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle">
						      	<p>Отзыв Марины, отзыв марины, отзыв марины, отзыв марины, отзыв марины</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<h3 data-toggle="modal" data-target="#marina3">Марина</h3>
					<p data-toggle="modal" data-target="#marina3">Отзыв Марины, отзыв марины...</p>
				</div>
				<div class="col-sm-6 col-md-3 item">
					<div>
						<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle front wow zoomIn" data-toggle="modal" data-target="#marina4">
						<span><i class="fa fa-comment back" aria-hidden="true"></i></span>
						<!-- Modal -->
						<div class="modal fade" id="marina4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Марина</h4>
						      </div>
						      <div class="modal-body">
						      	<img src="<?php bloginfo('template_url') ?>/images/marina.jpg" alt="marina" class="img-circle">
						      	<p>Отзыв Марины, отзыв марины, отзыв марины, отзыв марины, отзыв марины</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<h3 data-toggle="modal" data-target="#marina4">Марина</h3>
					<p data-toggle="modal" data-target="#marina4">Отзыв Марины, отзыв марины...</p>
				</div>
			</div>
		</div>
	</section><!--#reviews-->
	<section id="footer">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-6 item text-left">
					<p>
						Чтобы посмотреть
						одежду для детей
						перейдите по ссылке
						ниже
					</p>
					<div class="section-btn">
						<a href="" class="btn btn-primary">Посмотреть каталог</a>
					</div>
				</div>
				<div class="col-sm-6 item text-left">
					<p>
						Остались вопросы<br />
						Свяжитесь с нами
					</p>
					<p class="contact phone text-left">
						+375 29 555-55-55
					</p>
					<p class="contact mail text-left">
						asd@mail.ru
					</p>
					<div class="sosial text-center">
						<div class="row">
							<div class="col-xs-6"><a class="vk" href="#"></a></div>
							<div class="col-xs-6"><a class="ok" href="#"></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--#footer-->
	<section id="copyright">
		<div class="container-fluid">
			<div class="row text-left">
				<p>Copyright 2016</p>
			</div>
		</div>
	</section><!--#copyright-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery-3.0.0.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/scripts.js"></script>
</body>
</html>