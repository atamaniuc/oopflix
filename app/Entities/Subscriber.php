<?php namespace Entities;

use Core\Classes\AbstractEntity;
use Core\Traits\TitleTrait;
use Core\Classes\Collection;

/**
 * Class Subscriber
 * @package Entities
 */
class Subscriber extends AbstractEntity {
	use TitleTrait;

	#region Fields

	/**
	 * @var bool
	 */
	protected $status;

	/**
	 * @var SubscriptionProgram
	 */
	protected $subscriptionProgram;

	/**
	 * @var array|Collection
	 */
	protected $watchedVideos = [];

	/**
	 * @var array|Collection
	 */
	protected $interestedInVideos = [];

	#endregion

	/**
	 * Subscriber constructor.
	 *
	 * @param array $params
	 */
	public function __construct(
		array $params = []
	) {
		$title = isset($params['title']) ? $params['title'] : '';
		$subscriptionProgram = isset($params['subscriptionProgram']) ? $params['subscriptionProgram'] : null;
		$status = isset($params['status']) ? $params['status'] : false;
		$watchedVideos = isset($params['watchedVideos']) ? $params['watchedVideos'] : null;
		$interestedInVideos = isset($params['interestedInVideos']) ? $params['interestedInVideos'] : null;

		if (!$title) {
			$title = uniqid('subscriber-',true);
		}

		$this->setTitle($title);
		$this->setSubscriptionProgram($subscriptionProgram);
		$this->setStatus($status);
		$this->setWatchedVideos($watchedVideos);
		$this->setInterestedInVideos($interestedInVideos);
	}

	#region Getters and Setters

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param $status
	 *
	 * @return $this
	 */
	public function setStatus( $status ) {
		$this->status = $status;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSubscriptionProgram() {
		return $this->subscriptionProgram;
	}

	/**
	 * @param SubscriptionProgram $subscriptionProgram
	 *
	 * @return $this
	 */
	public function setSubscriptionProgram( SubscriptionProgram $subscriptionProgram ) {
		$this->subscriptionProgram = $subscriptionProgram;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getWatchedVideos() {
		return $this->watchedVideos;
	}

	/**
	 * @param $watchedVideos
	 *
	 * @return $this
	 */
	public function setWatchedVideos( $watchedVideos ) {
		$this->watchedVideos = $watchedVideos;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getInterestedInVideos() {
		return $this->interestedInVideos;
	}

	/**
	 * @param $interestedInVideos
	 *
	 * @return $this
	 */
	public function setInterestedInVideos( $interestedInVideos ) {
		$this->interestedInVideos = $interestedInVideos;

		return $this;
	}

	#endregion

}