<?php

class Twitter_Controller extends Base_Controller {

	public function action_index() {
		$data = array(
			'users' => Twitter::getAll()
		);

		return View::make('home.display', $data);
	}

	public function action_search() {
		return View::make('home.search');
	}

	public function action_results() {
		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);

		$twitter_search = Twitter::getTweetsByName($search_term);

		$name = Twitter::formatName($search_term);

		// dd($twitter_search);

		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search->status,
			'name' => $name
		);

		return View::make('home.results', $data);
	}

	public function action_add() {
		return View::make('home.add');
	}

	public function action_success() {
		$username = Input::get('twitter_username');
		$realname = Input::get('real_name');

		Twitter::add($username, $realname);

		$data = array(
			'users' => Twitter::getAll()
		);

		return View::make('home.success', $data);
	}

}