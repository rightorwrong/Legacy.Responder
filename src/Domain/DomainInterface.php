<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Domain
 */

namespace EvolveCMS\Responder\WP\Domain;

/**
 * Interface DomainInterface
 *
 * @package EvolveCMS\Responder\WP\Domain
 */
interface DomainInterface
{

	/**
	 * Access data for responder.
	 *
	 * @return array
	 */
	public function toArray();
} 