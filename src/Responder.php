<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;

/**
 * Class Responder
 *
 * Technically, not a responder in the true sense of the Action-Domain-Responder
 * pattern {@todo Need link}. Ignore pattern for now and just refactor the code
 * to a view functionality using classes.
 *
 * @package EvolveCMS\Responder\WP
 */
class Responder implements ExecuteInterface, ProvideInterface
{

	/**
	 * @var \EvolveCMS\Responder\WP\ResolverInterface
	 */
	protected $_resolver;

	/**
	 * @var \EvolveCMS\Responder\WP\RenderInterface
	 */
	protected $_render;

	/**
	 * @param ResolverInterface $resolver
	 * View file location resolver.
	 * @param RenderInterface   $render
	 * View render class.
	 */
	public function __construct(ResolverInterface $resolver = null, RenderInterface $render = null)
	{
		$this->_resolver = $resolver;
		$this->_render = $render;
	}

	/**
	 * Provide implementations for class.
	 *
	 * @param ResolverInterface|RenderInterface $interface
	 * Provided object may implement one or both of the interfaces.
	 * @return static
	 */
	public function provide($interface)
	{
		if ($interface instanceof ResolverInterface) {
			$this->_resolver = $interface;
		}

		if ($interface instanceof RenderInterface) {
			$this->_render = $interface;
		}

		return $this;
	}

	public function execute()
	{

	}
} 