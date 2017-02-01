<?php namespace Core\Classes;

use Core\Interfaces\CollectionInterface;

/**
 * Class Collection
 * @package Core\Classes
 */
class Collection implements CollectionInterface {
	/**
	 * @var array
	 */
	private $items = [];

	/**
	 * Create a new collection.
	 *
	 * @param  array  $items
	 */
	public function __construct(array $items = [])
	{
		$this->items = $items;
	}

	/**
	 * @param $obj
	 * @param null $key
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function addItem( $obj, $key = null ) {
		if (  null === $key ) {
			$this->items[] = $obj;

			return $this;
		} else {
			if ( $this->keyExists( $key ) ) {
				throw new \Exception( "Key $key already in use." );
			} else {
				$this->items[ $key ] = $obj;

				return $this;
			}
		}
	}

	/**
	 * @param $key
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function deleteItem( $key ) {
		if ( $this->keyExists( $key ) ) {
			unset( $this->items[ $key ] );

			return $this;
		} else {
			throw new \Exception( "Invalid key $key." );
		}
	}

	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	public function getItem( $key ) {
		return $this->keyExists( $key ) ? $this->items[ $key ] : null;
	}

	/**
	 * Count the number of items in the collection.
	 *
	 * @return int
	 */
	public function count() {
		return count( $this->items );
	}

	/**
	 * @param $key
	 *
	 * @return bool
	 */
	public function keyExists( $key ) {
		return isset( $this->items[ $key ] );
	}

}