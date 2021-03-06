<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Cache
 * @author Aaron Schulz
 */

/**
 * A cache class that directs writes to one set of servers and reads to
 * another. This assumes that the servers used for reads are setup to slave
 * those that writes go to. This can easily be used with redis for example.
 *
 * In the WAN scenario (e.g. multi-datacenter case), this is useful when
 * writes are rare or they usually take place in the primary datacenter.
 *
 * @ingroup Cache
 * @since 1.26
 */
class ReplicatedBagOStuff extends BagOStuff {
	/** @var BagOStuff */
	protected $writeStore;
	/** @var BagOStuff */
	protected $readStore;

	/**
	 * Constructor. Parameters are:
	 *   - writeFactory : ObjectFactory::getObjectFromSpec parameters yeilding BagOStuff.
	 *                    This object will be used for writes (e.g. the master DB).
	 *   - readFactory  : ObjectFactory::getObjectFromSpec parameters yeilding BagOStuff.
	 *                    This object will be used for reads (e.g. a slave DB).
	 *
	 * @param array $params
	 * @throws InvalidArgumentException
	 */
	public function __construct( $params ) {
		parent::__construct( $params );

		if ( !isset( $params['writeFactory'] ) ) {
			throw new InvalidArgumentException(
				__METHOD__ . ': the "writeFactory" parameter is required' );
		} elseif ( !isset( $params['readFactory'] ) ) {
			throw new InvalidArgumentException(
				__METHOD__ . ': the "readFactory" parameter is required' );
		}

		$this->writeStore = ( $params['writeFactory'] instanceof BagOStuff )
			? $params['writeFactory']
			: ObjectFactory::getObjectFromSpec( $params['writeFactory'] );
		$this->readStore = ( $params['readFactory'] instanceof BagOStuff )
			? $params['readFactory']
			: ObjectFactory::getObjectFromSpec( $params['readFactory'] );
	}

	public function setDebug( $debug ) {
		$this->writeStore->setDebug( $debug );
		$this->readStore->setDebug( $debug );
	}

	public function get( $key, &$casToken = null ) {
		return $this->readStore->get( $key, $casToken );
	}

	public function getMulti( $keys ) {
		return $this->readStore->getMulti( $keys );
	}

	public function set( $key, $value, $exptime = 0 ) {
		return $this->writeStore->set( $key, $value, $exptime );
	}

	public function delete( $key ) {
		return $this->writeStore->delete( $key );
	}

	public function add( $key, $value, $exptime = 0 ) {
		return $this->writeStore->add( $key, $value, $exptime );
	}

	public function incr( $key, $value = 1 ) {
		return $this->writeStore->incr( $key, $value );
	}

	public function decr( $key ) {
		return $this->writeStore->decr( $key );
	}

	public function lock( $key, $timeout = 6, $expiry = 6 ) {
		return $this->writeStore->lock( $key, $timeout, $expiry );
	}

	public function unlock( $key ) {
		return $this->writeStore->unlock( $key );
	}

	public function merge( $key, $callback, $exptime = 0, $attempts = 10 ) {
		return $this->writeStore->merge( $key, $callback, $exptime, $attempts );
	}

	public function getLastError() {
		return ( $this->writeStore->getLastError() != self::ERR_NONE )
			? $this->writeStore->getLastError()
			: $this->readStore->getLastError();
	}

	public function clearLastError() {
		$this->writeStore->clearLastError();
		$this->readStore->clearLastError();
	}
}
