<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Render
 */

namespace EvolveCMS\Responder\WP\Render;


interface RenderInterface
{
	public function render($view, array $data);
} 