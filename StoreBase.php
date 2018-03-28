<?php 
class StoreBase
{
	private $region;
	private $language;
	public function __construct($region, $language)
    {
        $this->region = $region;
		$this->language = $language;
    }

    protected function GetStorePageObject($storepagekey, $start, $size, $contentType)
    {
		$baseurl = "https://store.playstation.com/chihiro-api/viewfinder/" . $this->region ."/" . $this->language . "/999/";
		$storeurl = $baseurl . $storepagekey;
        $storeurl .= "?size=" . $size . "&gkb=1&start=" . $start;
		if($contentType != null) $storeurl .= "&game_content_type=". $contentType;
			
		$dataRequest = file_get_contents($storeurl);
        $dataObject = json_decode($dataRequest);	

		if (!isset($dataObject->links) || empty($dataObject->links)) return [];
		else return $dataObject->links;
    }
}
?>