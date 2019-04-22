<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>OUTERFEST(an Interfest 2.0)</title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/animations.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url() ?>assets/img/outerfest_logo_sml.png" alt="logo" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="scroll nav-link" href="#">HOME</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						EVENT
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">NPC</a>
						<a class="dropdown-item" href="#">NLC</a>
						<a class="dropdown-item" href="#">NST</a>
						<a class="dropdown-item" href="#">REEVA</a>
					</div>
				</li>
				<li class="nav-item nav-login">
					<a class="scroll nav-link" href="<?= base_url(); ?>home/login">LOGIN</a>
				</li>
			</ul>
		</div>
	</nav>
	<section id="header" class="animatedParent">
		<div class="mesh"></div>
		<div class="title animated fadeIn slower">WeebPro 2019</div>
		<p class="tagline animated fadeIn slower">
			Situs Interfest keren kek gini kek
		</p>

		<div class="explore-btn animated fadeIn slower">
			<a href="#npc" class="btn">Explore</a>
		</div>
	</section>
	<section id="npc" class="animatedParent">
		<div class="left-side animated fadeIn slower">
			<div>
				<div class="logo">NPC</div>
				<div class="title with">
					with <a href="#" target="_blank"><img src="<?= base_url() ?>/assets/img/bukalapak.png"></a>
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">National Programming Contest</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor ipsum, quasi, hic incidunt, nihil architecto atque quam quis animi ullam eveniet! Praesentium necessitatibus cupiditate ipsum nobis quo natus, autem neque.
			</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/npc" class="btn" style="margin-right: 15px;">SELENGKAPNYA</a>
			</div>
		</div>
	</section>
	<section id="nlc" class="animatedParent">
		<div class="left-side order-lg-12 animated fadeIn slower">
			<div class="logo">NLC</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">National Logic Competition</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere molestias delectus velit! Sit ab laudantium, ipsum fugit doloribus id autem praesentium cum dolorum veritatis saepe nostrum soluta architecto esse!</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/nlc" class="btn" style="margin-right: 15px;">SELENGKAPNYA</a>
				<a href="https://schematics.its.ac.id/nlc/pengumuman" class="btn" style="margin-right: 15px;">PENGUMUMAN</a>
			</div>
		</div>
	</section>
	<section id="nst" class="animatedParent">
		<div class="left-side animated fadeIn slower">
			<div>
				<div class="logo">NST</div>
				<div class="title with">
					with <a href="#" target="_blank"><img src="<?= base_url() ?>/assets/img/bukalapak.png"></a>
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">National Seminar of Technology</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni mollitia sequi officia blanditiis quidem, id quisquam veniam distinctio beatae voluptate illo voluptas, non iusto. Architecto vel pariatur culpa quaerat aperiam!</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/nst" class="btn">SELENGKAPNYA</a>
			</div>
		</div>
	</section>
	<section id="reeva" class="animatedParent">
		<div class="left-side order-lg-12 animated fadeIn slower">
			<div class="logo parallax" id="reeva-parallax">REEVA</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">Revolutionary Entertainment and Expo with Various Arts</div>
			<div class="bottom-line"></div>
			<div class="desc">
				REEVA adalah konser musik dan pameran kebudayaan sebagai puncak acara dalam serangkaian acara Schematics 2018. REEVA hadir untuk menyajikan wadah bagi seluruh pelaku seni dan komunitas serta menjadi event yang menghibur bagi masyarakat.
			</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/reeva" class="btn">SELENGKAPNYA</a>
			</div>
		</div>
	</section>
	<section id="footer">
		<div class="mesh"></div>
		<div class="logo">
			<img src="<?= base_url() ?>/assets/img/sp.png" alt="logo">
		</div>
		<div class="sosmed">
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_line.png" alt="line"></a>
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_ig.png" alt="ig"></a>
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_fb.png" alt="fb"></a>
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_tw.png" alt="twitter"></a>
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_yt.png" alt="youtube"></a>
			<a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_ask.png" alt="ask"></a>
		</div>

		<div class="copyright">&copy; Schematics 2018</div>
	</section>
	</div>

	<div id="sponsor">
		<div class="sponsor1">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor1child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor1child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor1child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor1child">
		</div>
		<div class="sponsor2">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor2child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor2child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor2child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor2child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor2child">
		</div>
		<div class="sponsor3">
			<a href="https://idcloudhost.com/" target="_blank">
				<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor3child">
			</a>
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor3child">
			<img src="<?= base_url() ?>/assets/img/sp.png" class="sponsor3child">
		</div>
	</div>
	<!-- SCRIPT HERE -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>/assets/js/css3-animate-it.js"></script>

</body>

</html>