<?php
/**
 * Created by PhpStorm.
 * User: na1k0n
 * Date: 2/1/17
 * Time: 3:21 PM
 */

namespace Core\Interfaces;

/**
 * Interface CollectionInterface
 * @package Core\Interfaces
 */
interface CollectionInterface {
	/**
	 * @param $obj
	 * @param null $key
	 *
	 * @return mixed
	 */
	public function addItem( $obj, $key = null );

	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	public function deleteItem( $key );

	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	public function getItem( $key );

	/**
	 * @return mixed
	 */
	public function count();

}