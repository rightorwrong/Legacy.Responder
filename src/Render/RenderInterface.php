<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;


interface RenderInterface
{
	public function render($view, array $data);
} 