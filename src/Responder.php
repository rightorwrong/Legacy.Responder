<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;

use EvolveCMS\Responder\WP\Resolver\ResolverInterface;
use EvolveCMS\Responder\WP\Render\RenderInterface;
use EvolveCMS\Responder\WP\Domain\DomainInterface;

use Exception;

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
	 * @var \EvolveCMS\Responder\WP\DomainInterface
	 */
	protected $_domain;

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

		if ($interface instanceof DomainInterface) {
			$this->_domain = $interface;
		}

		return $this;
	}

	public function execute()
	{
		if (!$this->_render || $this->_resolver || $this->_domain) {
			throw new Exception('Interfaces are required.');
		}

		return $this->_render->render(
			$this->_resolver->resolve(),
			$this->_domain->toArray()
		);
	}
} 