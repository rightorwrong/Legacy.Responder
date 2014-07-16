<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP\Domain;

use EvolveCMS\Responder\WP\DomainInterface;


class FromArray implements DomainInterface
{
	protected $_data;

	public function __construct(array $data)
	{
		$this->_data = $data;
	}

	public function toArray()
	{
		return $this->_data;
	}
} 