<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP;

use EvolveCMS\Responder\WP\Resolver\ResolverInterface;
use EvolveCMS\Responder\WP\Render\RenderInterface;
use EvolveCMS\Responder\WP\Domain\DomainInterface;

use Exception;
use Closure;

function responder(ResolverInterface $resolver, RenderInterface $render)
{
	return new Responder($resolver, $render);
}

function response(ExecuteInterface $responder, DomainInterface $domain)
{
	return $responder->provide($domain)->execute();
}

function view($name, ResolverInterface $resolver = null)
{
	return resolver($resolver)->view($name);
}

function example(array $data)
{
	return response(responder(view('test'), Render\renderer()), Domain\fromArray($data));
}

function throwIf(Closure $check, Exception $exception)
{
	if ( $check() )
	{
		throw $exception;
	}
}

function isNull($var)
{
	return function() use ($var) {
		return is_null($var);
	};
}

function isCallable($action)
{
	return function() use ($action) {
		switch(true) {
			case $action instanceof InvokeInterface:
			case $action instanceof Closure:
			case method_exists($action, '__invoke'):
				return true;
		}
		return false;
	};
}

function not(Closure $check)
{
	return function() use ($check) {
		return !$check();
	};
}
