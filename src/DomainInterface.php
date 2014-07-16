<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;

/**
 * Interface DomainInterface
 *
 * @package EvolveCMS\Responder\WP
 */
interface DomainInterface
{

	/**
	 * Retrieve data for responder.
	 *
	 * @return array
	 */
	public function toArray();
} 