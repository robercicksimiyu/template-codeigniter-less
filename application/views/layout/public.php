<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?=$this->layout->title?></title>
		<meta charset="<?=$this->layout->charset?>" />
		<meta name="viewport" content="<?=$this->layout->viewport?>" />
		<meta http-equiv="X-UA-Compatible" content="<?=$this->layout->XUACompatible?>" />
		<meta name="HandheldFriendly" content="<?=$this->layout->HandheldFriendly?>" />
		<meta name="description" content="<?=$this->layout->description?>" />
		<meta name="keywords" content="<?=$this->layout->keywords?>" />
		<meta name="robots" content="<?=$this->layout->robots?>" />
		<link rel="canonical" href="<?=$this->layout->canonical?>" />
		<link rel="stylesheet" href="<?base_url()?>assets/styles/style.css">
		<?=$this->layout->css()?>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<script src="<?=base_url()?>assets/scripts/vendor/head.load.min.js" data-headjs-load="<?=base_url()?>assets/scripts/scripts.js"></script>
		<?=$this->layout->js('header')?>
		<?=$this->layout->scr('header')?>

	</head>
	<body>
<?if(isset($lesscError)) echo $lesscError?>
		<section class="wrapper">
			<header>

			</header>
			<main>
				<?=$content?>

			</main>
			<footer>
				
			</footer>
		</section>
		<?=$this->layout->js()?>
		<?=$this->layout->scr('footer')?>
		<?=$this->layout->scr('ready')?>

	</body>
</html>