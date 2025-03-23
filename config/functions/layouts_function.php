<?php
function setHeader($args, ...$links)
{
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $args->title ?></title>
		<link rel="shortcut icon" href="<?= LOGO; ?>logo.jpg" type="image/jpg" sizes="32x32">

		<?php foreach ($links as $link) { ?>
			<link rel="stylesheet" href="<?= CSS; ?><?= $link ?>.css">
		<?php } ?>


	</head>
	<header>
		<div class="header-container">
		<img src="<?= LOGO; ?>logo.jpg" alt="SOA UTEM Logo">
			<h1>SOA - UTEM Buzón</h1>
		</div>
	</header>

	<body>
	<?php
}

function setFooter(...$scripts)
{
	?>
		<?php foreach ($scripts as $script) { ?>
			<script src="<?= JS; ?><?= $script ?>.js"></script>
		<?php }
	}

	function closeFooter()
	{ ?>
		<footer>
			<div class="footer-container">
				<p>Síguenos en:</p>
				<a href="https://www.instagram.com/soautem_?igsh=ZzFzam50NnRwZ2hy" target="_blank">Instagram</a> |
				<a href="#" target="_blank">Facebook</a> |
				<a href="#" target="_blank">X</a>
				<p>&copy; 2025 SOA - UTEM. Todos los derechos reservados.</p>
			</div>
		</footer>
	</body>

	</html>

<?php
	}

?>