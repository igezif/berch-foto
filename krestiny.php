<?php
	function excess($files) {
		$result = array();
		for ($i = 0; $i < count($files); $i++) {
			if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
		}
		return $result;
	}
	$dir = "foto/krestiny";
	$files = scandir($dir);
	$files = excess($files);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Фото крестины</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Фотографии крестины" />
	<meta name="keywords" content="фото крестины, фотограф на крестины" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div id = "container">
		<?php require_once("blocks/header.php");?>
		<nav class = "menu top-menu">
			<ul>
				<li>
					<a href="/">Главная</a>
				</li>
				<li>
					<a href="svadba.php">Свадьба</a>
				</li>
				<li>
					<span>Крестины</span>
				</li>
				<li>
					<a href="yubiley.php">Юбилей</a>
				</li>
			</ul>
		</nav>
		<table id = "film">
			<tr>
				<td class="film_line">

				</td>
				<td id = "film_body">
					<div>
					<?php for ($i = 0; $i < count($files); $i++) { ?>
						<a href="<?=$dir."/".$files[$i]?>" data-lightbox="roadtrip" class="img_gallery" title="Фото крестин">
							<img src="<?=$dir."/".$files[$i]?>" alt="Изображение" />
						</a>
					<?php } ?>
					</div>
				</td>
				<td class="film_line">

				</td>
			</tr>
		</table>
		<nav class = "menu bottom-menu">
			<ul>
				<li>
					<a href="/">Главная</a>
				</li>
				<li>
					<a href="svadba.php">Свадьба</a>
				</li>
				<li>
					<span>Крестины</span>
				</li>
				<li>
					<a href="yubiley.php">Юбилей</a>
				</li>
			</ul>
		</nav>
	</div>
	<?php require_once("blocks/footer.php");?>
</body>
</html>
