<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $redirect);
	exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>'Pyra'Torrent</title>
		<link rel="stylesheet" href="https://github.com/WiAndRuTEAM/WiAndRuTEAM.github.io/main.css" type="text/css" charset="utf-8">
		<meta name="description" content="Молодой Torrent-сайт, на котором вы сможете найти различные игры по вкусу.">
		<meta name="keywords" content="игры торрент, игры через торрент, торрент игры, торент игры, скачать игры, скачать игры торрент, скачать торрент игры, скачать игры с торрента,горячие новинки торрент, torrent games,торрент геймс">
		<link href="https://github.com/WiAndRuTEAM/WiAndRuTEAM.github.io/img/TorrentIcon.ico" rel="shortcup icon" type="image/x-icon">
	</head>
	
	<body>
	    <header>
		    <div id="logo">
			    <a href="https://wiandruteam.github.io/" title="На главную страницу">
				    <img src="https://github.com/WiAndRuTEAM/WiAndRuTEAM.github.io/img/Logo.png" title="'Pyra'Torrent" alt="'Pyra'Torrent">
					<span>'Pyra'Torrent</span>
				</a>
			</div>
			
			<div id="about">
			    <a href="" title="Поиск игр">Игры</a>
				<a href="" title="Поиск программ">Программы</a>
			</div>
			
			<div id="reg_auth">
			    <a href="" title="Войти">
				    <div id="btn">
					    Войти
					</div>
				</a>
				
				<a href="" title="Войти">
				    <div id="btn">
					    Войти
					</div>
				</a>
			</div>
		</header>
	</body>
</html>