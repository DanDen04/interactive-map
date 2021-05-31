<?php

include "databases.php";

$result = mysqli_query($induction, "SELECT * FROM `audiences`");

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Интерактивная карта</title>
	<meta name="description" content="">
	<meta name="keywords" content=" ">
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	<div class="title"><h1>2 Этаж</h1></div>
	

	<div class="map">
		<svg>
			
			<path data-id="1206" d="M 761,743 H 861 V 862 H 761 Z" />
			<path data-id="1207" d="m 864,743 h 47 v 119 h -47 z" />
			<path data-id="1205" d="m 761,921 h 63 v 15 h 3 v -15 h 126 v 128 H 827 v -98 h -3 v 98 h -63 z" />
			<path data-id="1204" d="m 956,921 h 113 v 128 H 956 Z" />
			<path data-id="1208" d="m 956,692 h 274 V 862 H 956 Z" />
			<path data-id="1203" d="m 1131,921 h 95 v 128 h -95 z" />
			<path data-id="1202" d="m 1229,921 h 45 v 128 h -45 z" />
			<path data-id="1201" d="m 1277,921 h 138 v 128 h -138 z" />
			<path data-id="1209" d="m 1350,743 h 65 v 119 h -65 z" />


			<path data-id="2201" d="m 1279,581 v -26 h -64 v 26 z" />
			<path data-id="2202" d="m 1279,552 v -39 h -64 v 39 z" />
			<path data-id="2203" d="m 1215,510 v -20 h 64 v 20 z" />
			<path data-id="2204" d="M 1278.8522,411.90818 1279,334 h -64 v 78 z" />
			<path data-id="2205" d="m 1279,331 v -41 h -64 v 41 z" />
			<path data-id="2206" d="M 1278.8792,224.12343 1215,224 v 63 h 64 z" />
			<path data-id="2207" d="m 1215,87 h 64 v 77 h -64 z" />
			<path data-id="2208" d="m 1152,22 v 34 h 119 V 22 Z"/>
			<path data-id="2209" d="m 1315,22 h 77 v 57 h -77 z" />
			<path data-id="2210" d="M 1271.0186,61.032998 1246,61 v 21 h 25 z" />
			<path data-id="2211" d="m 1315,82 h 92 v 113 h -19 v 3 h 19 v 22 h -92 v -22 h 58 v -3 h -58 z" />
			<path data-id="2212" d="m 1407,223 h -92 v 102 h 92 z" />
			<path data-id="2213" d="m 1315,328 h 92 v 19 h -92 z" />
			<path data-id="2214" d="m 1315,350 h 92 v 19 h -92 z" />
			<path data-id="2215" d="m 1315,372 h 92 v 74 h -92 z" />
			<path data-id="2216" d="m 1407,472 v -23 h -92 v 23 z" />
			<path data-id="2217" d="m 1315,475 h 92 v 66 h -10 v 3 h 10 v 37 h -58 v -37 h 36 v -3 l -69.964,-0.0177 z" />


			<path data-id="3209" d="m 1210,412 v -41 h -97 v 41 z" />
			<path data-id="3208" d="m 1007,371 -6e-4,24.75832 29.4072,18.22323 L 1110,414 v -43 z" />
			<path data-id="3207" d="m 1004,310 v 85 h -75 v -10.00384 h -3.05427 L 926,395 h -24 v -30.02202 h 7.90131 v -3.0654 h -7.82654 L 902,310 h 24 v 52 h -9.3809 v 2.97798 L 926,365 v 13.21788 h 3.14157 L 929,310 Z" />
			<path data-id="toilet" d="m 877,395 h 22 L 898.98939,364.97666 887,365 v -3 L 898.98939,361.9332 899,310 h -22 v 52 h 3 v 3 h -3 z" />
			<path data-id="service_room" d="m 862,395 h 12 L 874.003,346.91535 862,347 Z" />
			<path data-id="bathroom" d="m 847,310 h 27 l 0.003,33.90244 L 857,344 v 3 h 2 v 48 h -12 v -48 h 3 v -3 h -3 z" />
			<path data-id="3206" d="m 844,395 v -85 h -80 v 58.20907 h -3.23136 L 761,310 h -21 v 85 h 21 v -15.90699 h 3.08916 L 764,395 Z" />
			<path data-id="3205" d="m 686,310 h 51 v 85 h -51 z" />
			<path data-id="3204" d="m 579,310 h 104 v 85 H 579 v -18 h -3 v 18 h -83 v -85 h 83 v 54 h 3 z" />
			<path data-id="3203" d="m 493,398 v 76 h 50 v -43 h 3 v 43 h 81 v -76 h -81 v 20 h -3 v -20 z" />
			<path data-id="3202" d="m 899,474 v -51 h 24 v 51 z" />
			<path data-id="3201" d="m 926,474 h 78 v -51 h -78 z" />
		</svg>

		<img src="svg/Интерактивная карта 2 этаж(тест).svg" alt="" />
	</div>

<!-- 	<ul>
		<li><a href="0_Floor.html">0 Этаж</a></li>
		<li><a href="1_Floor.html">1 Этаж</a></li>
		<li><a class="active" href="2_Floor.html">2 Этаж</a></li>
		<li><a href="3_Floor.html">3 Этаж</a></li>
		<li><a href="4_Floor.html">4 Этаж</a></li>
	</ul> -->

	<!-- <div id="floorNext">
		<input type="button" value="На этаж выше" onclick="window.location.href = '3_Floor.html'">
	</div>
	<div id="floorPrevious">
		<input type="button" value="На этаж ниже" onclick="window.location.href = '1_Floor.html'">
	</div> -->

	<div class="info">

		<?php 
			while($audienc = mysqli_fetch_assoc($result))
			{
				?>
					<div class="info-item" data-id="<?php echo $audienc['number']; ?>" style="top: <?php echo $audienc['y'];?>px; left: <?php echo $audienc['x'];?>px; width: 50px">
						<div class="info-name"><?php echo $audienc['number']; ?></div>
						<div class="info-popup"><p class="title-info"><?php echo $audienc['title']; ?></p>
							<p><strong>Кабинет: </strong><?php echo $audienc['info']; ?></p>
							<p><strong>Преподаватель: </strong><?php echo $audienc['teacher']; ?></p>
						</div>
					</div>
				<?php
			}
		?>

<!-- 		<div class="info-item" data-id="womanToilet" style="top: 895px; left: 1282px; width: 25px;">
			<div class="info-name-icon"><img src="svg/womantoilet.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 900px; left: 1235px; width: 35px;">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 900px; left: 915px; width: 35px;">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 576px; left: 1233px; width: 20px;">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 311px; left: 1233px; width: 25px;">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="womanToilet" style="top: 276px; left: 1240px; width: 15px; transform: rotate(-90deg);">
			<div class="info-name-icon"><img src="svg/manToilet.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 550px; left: 855px; width: 30px">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div>

		<div class="info-item" data-id="stairs" style="top: 550px; left: 640px; width: 30px">
				<div class="info-name-icon"><img src="svg/stairs.svg" /></div> 
			</div>
		</div> -->

	</div>



	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<script src="script.js"></script>
<script src=""></script>
</body>
</html>