# Playstation Store API

This PHP class will wrap around the public Playstation store API. The API will grant access to everything that can be accessed via the web store. All data from the store will be returned in the response. You do not need to drill down into the individual pages for each sku in order to get additional data about it. Available data includes

- Title
- Description
- Images
- Ratings
- Related Products
- Price
- Trophy information is not returned, but can be accessed using the Sku separately. See below.

## Usage
I have included a test file to give a basic usage example. 
```
	require_once "StoreBase.php";
	require_once "PlaystationStore.php";
	
	$PlaystationStore = new PlaystationStore("GB", "en");
	
	$MostPopular = $PlaystationStore->MostPopular();
	
	foreach ($MostPopular as $game)
	{
		echo $game->name . " - " . $game->default_sku->display_price . "<br>";
		echo "<img src='".$game->images[0]->url."'><hr>";
	}
```

## Obtaining Trophy Counts
The store does not give back trophy counts in the response. Multiple Skus on the store will share the same trophy list. I have setup a custom API that will allow you to obtain trophy list data based on the sku. If you want access to the trophy data let me know, I can expose the data from all the [Playstation Trophy Lists][NerdBurglarsTrophies] on this list.



[NerdBurglarsTrophies]: <https://nerdburglars.net/psn/>
