<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;

/**
 * Interface ProvideInterface
 *
 * Class delegates its functionality to other classes by using interfaces. Check
 * with the class for which interfaces are expected.
 *
 * @todo Move this interface to a generic package.
 * @package EvolveCMS\Responder\WP
 */
interface ProvideInterface
{

	/**
	 * Provide implementations for executing required actions.
	 *
	 * @param mixed $interface
	 *
	 * @return static
	 */
	public function provide($interface);
} 