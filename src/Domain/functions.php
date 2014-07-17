<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Domain
 */

namespace EvolveCMS\Responder\WP\Domain;


function fromArray(array $data)
{
	return new FromArray($data);
}