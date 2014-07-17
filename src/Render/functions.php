<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Render
 */

namespace EvolveCMS\Responder\WP\Render;

function renderer(RenderInterface $render = null)
{
	return $render ?: new File;
}
