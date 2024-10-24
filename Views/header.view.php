<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta author="LI, Yuguang (24060501S)">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="stylesheet" href="<?= $app->config['default']['root'] ?>/statics/reset.css">
		<link rel="stylesheet" href="<?= $app->config['default']['root'] ?>/statics/customize.css">
		<title><?= $app->config['default']['title'] ?></title>
		<meta name="description" content="所有商品">
	</head>
	<body>
		<header class="header-wrapper">
			<div class="header-left">
				<a href="<?= $app->config['default']['root'] ?>">
					<!-- logo designed by https://www.freelogoservices.com/step1 -->
					<img class="logo" src="https://img.shoplineapp.com/media/image_clips/62b821d70d459b00127f089c/original.png?1656234455" alt="The Hong Kong Child Code Lab logo" title="The Hong Kong Child Code Lab logo">
				</a>
			</div>
			<div class="header-right">
				<nav class="menu">
					<a href="<?= $app->config['default']['root'] ?>">首頁</a>
					<a href="<?= $app->config['default']['root'] ?>/goods/">所有商品</a>
					<a href="<?= $app->config['default']['root'] ?>/goods/discount">特價專區Special Offers</a>
					<a href="<?= $app->config['default']['root'] ?>/goods/recommend">推薦商品</a>
					<a href="<?= $app->config['default']['root'] ?>/goods/category/?categoryId=1">影音產品</a>
				</nav>
				<div class="nav-svg">

					<a href="<?= $app->config['default']['root'] ?>/cart">
						<!-- https://fonts.google.com/icons?selected=Material+Symbols+Rounded:shopping_cart:FILL@0;wght@300;GRAD@0;opsz@24&icon.query=card&icon.size=30&icon.color=%23000000&icon.style=Rounded -->
						<svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#000000"><path d="M286.15-97.69q-29.15 0-49.57-20.43-20.42-20.42-20.42-49.57 0-29.16 20.42-49.58 20.42-20.42 49.57-20.42 29.16 0 49.58 20.42 20.42 20.42 20.42 49.58 0 29.15-20.42 49.57-20.42 20.43-49.58 20.43Zm387.7 0q-29.16 0-49.58-20.43-20.42-20.42-20.42-49.57 0-29.16 20.42-49.58 20.42-20.42 49.58-20.42 29.15 0 49.57 20.42t20.42 49.58q0 29.15-20.42 49.57Q703-97.69 673.85-97.69ZM240.61-730 342-517.69h272.69q3.46 0 6.16-1.73 2.69-1.73 4.61-4.81l107.31-195q2.31-4.23.38-7.5-1.92-3.27-6.54-3.27h-486Zm-28.76-60h555.38q24.54 0 37.11 20.89 12.58 20.88 1.2 42.65L677.38-494.31q-9.84 17.31-26.03 26.96-16.2 9.66-35.5 9.66H324l-46.31 84.61q-3.08 4.62-.19 10 2.88 5.39 8.65 5.39h427.7q12.76 0 21.38 8.61 8.61 8.62 8.61 21.39 0 12.77-8.61 21.38-8.62 8.62-21.38 8.62h-427.7q-40 0-60.11-34.5-20.12-34.5-1.42-68.89l57.07-102.61L136.16-810H90q-12.77 0-21.38-8.62Q60-827.23 60-840t8.62-21.38Q77.23-870 90-870h61.15q10.24 0 19.08 5.42 8.85 5.43 13.46 15.27L211.85-790ZM342-517.69h280-280Z"/>
							<!-- 红色圆形背景 -->
							<circle cx="680" cy="-680" r="250" fill="red" />
							<!-- 右上角的白色角标 -->
							<text x="550" y="-520" font-size="500" fill="white">8</text>
						</svg>
					</a>

					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#000000"><path d="M380.77-335.39q-102.46 0-173.54-71.07-71.07-71.08-71.07-173.54t71.07-173.54q71.08-71.07 173.54-71.07t173.54 71.07q71.07 71.08 71.07 173.54 0 42.85-14.38 81.85-14.39 39-38.39 67.84l230.16 230.16q8.31 8.3 8.5 20.88.19 12.58-8.5 21.27t-21.08 8.69q-12.38 0-21.07-8.69L530.46-388.16q-30 24.77-69 38.77-39 14-80.69 14Zm0-59.99q77.31 0 130.96-53.66 53.66-53.65 53.66-130.96t-53.66-130.96q-53.65-53.66-130.96-53.66t-130.96 53.66Q196.15-657.31 196.15-580t53.66 130.96q53.65 53.66 130.96 53.66Z"/></svg>
					</a>
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#000000"><path d="M480-492.31q-57.75 0-98.87-41.12Q340-574.56 340-632.31q0-57.75 41.13-98.87 41.12-41.13 98.87-41.13 57.75 0 98.87 41.13Q620-690.06 620-632.31q0 57.75-41.13 98.88-41.12 41.12-98.87 41.12ZM180-248.46v-28.16q0-29.38 15.96-54.42 15.96-25.04 42.66-38.5 59.3-29.07 119.65-43.61 60.35-14.54 121.73-14.54t121.73 14.54q60.35 14.54 119.65 43.61 26.7 13.46 42.66 38.5Q780-306 780-276.62v28.16q0 25.3-17.73 43.04-17.73 17.73-43.04 17.73H240.77q-25.31 0-43.04-17.73Q180-223.16 180-248.46Zm60 .77h480v-28.93q0-12.15-7.04-22.5-7.04-10.34-19.11-16.88-51.7-25.46-105.42-38.58Q534.7-367.69 480-367.69q-54.7 0-108.43 13.11-53.72 13.12-105.42 38.58-12.07 6.54-19.11 16.88-7.04 10.35-7.04 22.5v28.93Zm240-304.62q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0-80Zm0 384.62Z"/></svg>
					</a>
				</div>
			</div>
		</header>
