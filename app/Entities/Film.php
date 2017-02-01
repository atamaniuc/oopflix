<?php namespace Entities;

use Entities\Video;

/**
 * Class Film
 * @package Entities
 */
class Film extends Video {
	/**
	 * @var string
	 */
	private $uid;

	/**
	 * Film constructor.
	 *
	 * @param string $title
	 * @param string $genre
	 * @param string $length
	 */
	public function __construct( $title = '', $genre = '', $length = '' ) {
		parent::__construct($title, $genre, $length);

		$this->setUid(uniqid("$title-", true));
	}

	/**
	 * @return string
	 */
	public function getUid() {
		return $this->uid;
	}

	/**
	 * @param $uid
	 *
	 * @return $this
	 */
	public function setUid( $uid ) {
		$this->uid = $uid;

		return $this;
	}

	/**
	 * @param string $name
	 *
	 * @override
	 *
	 * @return \stdClass
	 */
	public function imbd( $name = '' ) {
		$imbd = parent::imbd( $name );

		if ( is_object( $imbd ) && $imbd->Response === 'True' ) {
			$this->setGenre( $imbd->Genre );
			$this->setLength( $imbd->Runtime );
		}

		return $imbd;
	}

}