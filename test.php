<?php 
	require_once "StoreBase.php";
	require_once "PlaystationStore.php";
	
	$PlaystationStore = new PlaystationStore("GB", "en");
	
	$MostPopular = $PlaystationStore->MostPopular();
	
	foreach ($MostPopular as $game)
	{
		echo $game->name . " - " . $game->default_sku->display_price . "<br>";
		echo "<img src='".$game->images[0]->url."'><hr>";
	}
?>