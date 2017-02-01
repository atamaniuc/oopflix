<?php namespace Core\Traits;

/**
 * Class VideoInfoProvider
 * @package Core\Traits
 */
trait VideoInfoProvider {
	/**
	 * @param string $name
	 *
	 * @return \stdClass
	 */
	public function imbd($name) {
		$json = file_get_contents("http://www.omdbapi.com/?t={$name}");
		
		return json_decode($json);
	}

	public function kinopoisk() {
		// TODO: need to implement
	}

	public function wikipedia() {
		// TODO: need to implement
	}

}