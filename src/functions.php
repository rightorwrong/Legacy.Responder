<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;


function responder(ResolverInterface $resolver, RenderInterface $render)
{
	return new Responder($resolver, $render);
}

function view(ExecuteInterface $responder)
{
	return $responder->execute();
}

function name($name, ResolverInterface $resolver = null)
{
	return resolver($resolver)->view($name);
}

function resolver(ResolverInterface $resolver = null)
{
	return $resolver ?: new Resolver\File;
}

function renderer(RenderInterface $render = null)
{
	return $render ?: new Render\File;
}

function fixPathSeparators($path)
{
	return str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
}

function example()
{
	return view(responder(name('test'), renderer()));
}
