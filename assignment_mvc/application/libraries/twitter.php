<?php

class Twitter {

	public function __construct() {
		//
	}

	public function getTweetsByName($username) {
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=$username";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;	
	}

	public function getTweetsFromXML() {
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=slicknet";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}

	public function getTweetsFromJSON() {
		$url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=slicknet";
		$jsonString = file_get_contents($url);
		$arrayOfTweets = json_decode($jsonString);
		return $arrayOfTweets;
	}

	public function getTweetsFromXML_CURL() {
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=slicknet";
		// $xmlString = file_get_contents($url);

		$session = curl_init($url);
		curl_setopt($session, CURLOPT_HEADER, false); // suppress the headers, only get contents of the file
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true); // stop from automatically echoing out to the page
		$xmlString = curl_exec($session);
		curl_close($session);
		
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}

	public function searchPhotosFlickr($searchTerm) {
		$searchTerm = urlencode($searchTerm);
		$url = "http://api.flickr.com/services/rest/?api_key=ac797f969a5a664c8ba4426c777c1a01&method=flickr.photos.search&text=$searchTerm";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}

}

?>