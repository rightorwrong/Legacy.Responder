<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP\Resolver;

use EvolveCMS\Responder\WP\ResolverInterface;

use Exception;


class File implements ResolverInterface
{
	protected $_path;

	public function __construct($view = null)
	{
		$this->view($view);
	}

	public function view($name)
	{
		if (strcasecmp(substr($name, -4), '.php') === 0) {
			$name = str_replace('.php', '', $name);
		}

		$path = fixPathSeparators(__DIR__."/../../views/{$name}.php");
		if (!file_exists($path)) {
			throw new Exception("View does not exist.");
		}

		$this->_path = $path;

		return $this;
	}

	public function resolve()
	{
		return $this->_path;
	}
} 