<?php
/**
 * Created by PhpStorm.
 * User: na1k0n
 * Date: 2/1/17
 * Time: 4:11 PM
 */

namespace Core\Traits;

/**
 * Class TitleTrait
 * @package Core\Traits
 */
trait TitleTrait {
	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param $title
	 *
	 * @return $this
	 */
	public function setTitle( $title ) {
		$this->title = $title;

		return $this;
	}

}