<?php namespace Core\Classes;

use Core\Interfaces\JsonableInterface;
use JsonSerializable;

/**
 * Class Entity
 * @package Core\Classes
 */
abstract class AbstractEntity implements JsonableInterface, JsonSerializable {
	/**
	 * Convert the instance to JSON.
	 *
	 * @param  int $options
	 *
	 * @return string
	 */
	public function toJson( $options = 0 ) {
		return json_encode( $this, $options );
	}

	/**
	 * @return array
	 */
	public function jsonSerialize() {
		return get_object_vars( $this );
	}

}