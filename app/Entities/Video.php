<?php namespace Entities;

use Core\Classes\Entity;
use Core\Traits\VideoInfoProvider;

/**
 * Class Video
 * @package Entities
 */
class Video extends Entity {
	use VideoInfoProvider;

	#region Fields

	/**
	 * @var string
	 */
	protected $genre;

	/**
	 * @var integer
	 */
	protected $length;

	#endregion

	/**
	 * Video constructor.
	 *
	 * @param $title
	 * @param $genre
	 * @param $length
	 */
	public function __construct( $title = '', $genre = '', $length = 0 ) {
		$this->setTitle($title);
		$this->setGenre($genre);
		$this->setLength($length);
	}

	#region Getters and Setters

	/**
	 * @overridden
	 *
	 * @return mixed
	 */
	public function getTitle() {
		return urlencode($this->title);
	}

	/**
	 * @return mixed
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * @param mixed $genre
	 */
	public function setGenre( $genre ) {
		$this->genre = $genre;
	}

	/**
	 * @return mixed
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param mixed $length
	 */
	public function setLength( $length ) {
		$this->length = $length;
	}

	#endregion

}