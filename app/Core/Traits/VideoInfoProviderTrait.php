<?php namespace Core\Traits;

/**
 * Class VideoInfoProviderTrait
 * @package Core\Traits
 */
trait VideoInfoProviderTrait {
	/**
	 * @param string $name
	 *
	 * @return \stdClass
	 */
	public function imbd( $name = '' ) {
		$json = file_get_contents( "http://www.omdbapi.com/?t=" . urlencode( $name ) );

		return json_decode( $json );
	}

	public function kinopoisk() {
		// TODO: Implement kinopoisk() method.
	}

	public function wikipedia() {
		// TODO: Implement wikipedia() method.
	}

}