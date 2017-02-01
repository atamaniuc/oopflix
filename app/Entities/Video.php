<?php namespace Entities;

use Core\Classes\AbstractEntity;
use Core\Traits\VideoInfoProviderTrait;
use Core\Traits\TitleTrait;

/**
 * Class Video
 * @package Entities
 */
class Video extends AbstractEntity {
	use TitleTrait, VideoInfoProviderTrait;

	#region Fields

	/**
	 * @var string
	 */
	protected $genre;

	/**
	 * @var string
	 */
	protected $length;

	#endregion

	/**
	 * Video constructor.
	 *
	 * @param string $title
	 * @param string $genre
	 * @param string $length
	 */
	public function __construct( $title = '', $genre = '', $length = '' ) {
		$this->setTitle( $title );
		$this->setGenre( $genre );
		$this->setLength( $length );
	}

	#region Getters and Setters

	/**
	 * @return string
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * @param $genre
	 *
	 * @return $this
	 */
	public function setGenre( $genre ) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * @return integer
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param $length
	 *
	 * @return $this
	 */
	public function setLength( $length ) {
		$this->length = $length;

		return $this;
	}

	#endregion

}