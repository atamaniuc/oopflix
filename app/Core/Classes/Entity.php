<?php namespace Core\Classes;

use Core\Interfaces\JsonableInterface;
use JsonSerializable;

/**
 * Class Entity
 * @package Core\Classes
 */
abstract class Entity implements JsonableInterface, JsonSerializable {
	#region Fields

	/**
	 * @var string
	 */
	protected $title;

	#endregion

	#region Getters and Setters

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	#endregion

	/**
	 * Convert the instance to JSON.
	 *
	 * @param  int  $options
	 * @return string
	 */
	public function toJson($options = 0)
	{
		return json_encode($this, $options);
	}

	/**
	 * @return array
	 */
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}

}