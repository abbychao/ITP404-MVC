<?php

class Twitter {
	public static function add($username, $realname) {
		$query = DB::table('users')->insert_get_id(array(
			'username' => $username,
			'real_name' => $realname
		));
		return $query;
	}

	public static function getAll() {
		$results = DB::table('users')->get();

		return $results;
	}

	public static function getAllNames() {
		$query = DB::table('users')->get();
		$results = array();
		foreach ($query as $users => $user) {
			array_push($results, Twitter::formatName($user));
		}

		return $results;
	}

	public static function getTweetsByName($username) {
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=$username";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;	
	}

	public static function formatName($username) {
		$realname = DB::table('users')->where('username','=',$username)->only('real_name');
		$name = '<a href="'.URL::to('twitter/results').'?search-term='.$username.'">'.$username.' ('.$realname.')</a>';

		return $name;
	}


}