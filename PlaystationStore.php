<?php 
/*
	store key comes from the web store url. e.g. https://store.playstation.com/en-gr/grid/STORE-MSF75508-GAMELATEST/1
	content type is also based on the web store url. e.g. ?gameContentType=bundles%2Cdemos
*/
class PlaystationStore extends StoreBase
{
	public function LatestGames($start = 0, $size = 30, $types = "games")
	{
		return $this->GetStorePageObject('STORE-MSF75508-GAMELATEST', $start, $size, $types);
	}
	
	public function ComingSoon($start = 0, $size = 30, $types = "games")
	{
		return $this->GetStorePageObject('STORE-MSF75508-COMINGSOON', $start, $size, $types);
	}
	
	public function SpecialOffers($start = 0, $size = 30, $types = "games")
	{
		return $this->GetStorePageObject('STORE-MSF75508-GAMESPECIALOFF', $start, $size, $types);
	}	
	
	public function MostPopular($start = 0, $size = 30, $types = "games")
	{
		return $this->GetStorePageObject('STORE-MSF75508-GAMESPOPULAR', $start, $size, $types);
	}		
	
	public function FreeToPlay($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-FREETOPLAYSEEALL', $start, $size, $types);
    }
	
    public function OnlyOnPlaystation($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-ONLYONPSTIONPS4', $start, $size, $types);
    }
	
    public function PriceDrop($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-PRICEDROPSCHI', $start, $size, $types);
    }
	
    public function DigitalZone($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-DIGITALZONE', $start, $size, $types);
    }	

    public function PS4Content($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-PS4CAT', $start, $size, $types);
    }	

    public function PSVRContent($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-PLAYSTATIONVRHUB', $start, $size, $types);
    }	

    public function PS3Content($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-PLATFORMPS3', $start, $size, $types);
    }	

    public function VitaContent($start = 0, $size = 30, $types = "games")
    {
        return $this->GetStorePageObject('STORE-MSF75508-PLATFORMPSVITA', $start, $size, $types);
    }
}
?>