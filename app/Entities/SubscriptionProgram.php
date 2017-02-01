<?php namespace Entities;

use Core\Classes\AbstractEntity;
use Core\Traits\TitleTrait;

/**
 * Class SubscriptionProgram
 * @package Entities
 */
class SubscriptionProgram extends AbstractEntity {
	use TitleTrait;

	#region Fields

	/**
	 * @var string
	 */
	protected $price;

	/**
	 * @var integer
	 */
	protected $viewsAmountPerMonth;

	#endregion

	/**
	 * SubscriptionProgram constructor.
	 *
	 * @param string $title
	 * @param string $price
	 */
	public function __construct( $title = '', $price = '0', $viewsAmountPerMonth = 100 ) {
		$this->setTitle($title);
		$this->setPrice($price);
		$this->setViewsAmountPerMonth($viewsAmountPerMonth);
	}

	#region Getters and Setters

	/**
	 * @return string
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param string $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}

	/**
	 * @return int
	 */
	public function getViewsAmountPerMonth() {
		return $this->viewsAmountPerMonth;
	}

	/**
	 * @param int $viewsAmountPerMonth
	 */
	public function setViewsAmountPerMonth( $viewsAmountPerMonth ) {
		$this->viewsAmountPerMonth = $viewsAmountPerMonth;
	}

	#endregion

}