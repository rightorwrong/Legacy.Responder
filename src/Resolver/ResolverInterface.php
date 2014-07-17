<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP\Resolver;

/**
 * Interface ResolverInterface
 *
 * Interacts with the responder to return the path of the view.
 *
 * @package EvolveCMS\Responder\WP
 */
interface ResolverInterface
{

	/**
	 * Mutator view name to view path.
	 *
	 * @param string $name
	 * View name.
	 *
	 * @return static
	 * Must return the $this to match specification.
	 */
	public function view($name);

	/**
	 * Accessor path to view file.
	 *
	 * @return string
	 */
	public function resolve();
} 