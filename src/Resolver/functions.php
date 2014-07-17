<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP\Resolver
 */

namespace EvolveCMS\Responder\WP\Resolver;

function resolver(ResolverInterface $resolver = null)
{
	return $resolver ?: new File;
}

function fixPathSeparators($path)
{
	return str_replace(array('\\', '/'), \DIRECTORY_SEPARATOR, $path);
}