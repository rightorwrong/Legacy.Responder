<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Domain
 */

namespace EvolveCMS\Responder\WP\Domain;


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