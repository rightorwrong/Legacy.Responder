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

function display(ExecuteInterface $responder, DomainInterface $domain)
{
	return $responder->provide($domain)->execute();
}

function view($name, ResolverInterface $resolver = null)
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

function domainFromArray(array $data)
{
	return new Domain\FromArray($data);
}

function fixPathSeparators($path)
{
	return str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
}

function example(array $data)
{
	return display(responder(view('test'), renderer()), domainFromArray($data));
}
