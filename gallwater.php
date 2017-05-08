<?php
if (!defined(strtoupper($cfg['SessionName']))) { header('Location: ../'); }

$almenu_id = ( isset($_GET['almenu']) ) ? get_data('id','menuk','short_url="'.$_GET['almenu'].'"') : 0;
$almenu = ($almenu_id) ? $_GET['almenu'] : "";

?>

<!-- ABOUT / Start
=========================================== -->
<section class="slide" id="gallwater" data-slide="3">
	<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg">
		<filter id="drop-shadow">
			<feGaussianBlur in="SourceAlpha" stdDeviation="2.2"/>
			<feOffset dx="12" dy="12" result="offsetblur"/>
			<feFlood flood-color="rgba(0,0,0,0.5)"/>
			<feComposite in2="offsetblur" operator="in"/>
			<feMerge>
				<feMergeNode/>
				<feMergeNode in="SourceGraphic"/>
			</feMerge>
		</filter>
	</svg>

	<!-- 960 Container -->
	<div class="container">
		<div class="product-slider">
			
			<? for ($i=1;$i<4;$i++) { ?>
			<div>
				<article class="product-container">
					<img src="./images/gallwater/vizesslid_<?=$i?>.png" alt="" style="width: 100%;" />
				</article>
			</div>
			<? } ?>
				
		</div>

 	</div>
	<!-- 960 Container / End -->

</section>
<!-- ABOUT / End
=========================================== -->
