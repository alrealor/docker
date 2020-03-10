<html>
	<body>
		<h1>Apparel prices:</h1>
		<ul>
		<?php 
			foreach(json_decode(file_get_contents('http://prices')) as $apparel_price_item) {
				echo "<li>$apparel_price_item->name: $$apparel_price_item->price</li>";
			}
		?>
		</ul>
		<h1>Core apparel:</h1>
		<ul>
		<?php 
			foreach(json_decode(file_get_contents('http://apparel')) as $apparel_item) {
				echo "<li>$apparel_item->name</li>";
			}
		?>
		</ul>				
	</body>
</html>