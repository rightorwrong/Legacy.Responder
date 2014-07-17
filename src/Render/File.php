<?php
/**
 * @license MIT
 * @package EvolveCMS\Responder\WP
 */

namespace EvolveCMS\Responder\WP\Render;

use Exception;

class File implements RenderInterface
{
	public function render($view, array $data)
	{
		if (!file_exists($view)) {
			throw new Exception("View is not a file path.");
		}

		// Attempt to "jail" class and extract contents for view.
		$template = function($view, $data) {
			extract($data);
			unset($data);
			include $view;
		};

		ob_start();

		$template($data);

		$contents = ob_get_contents();

		ob_end_flush();

		return $contents;
	}
} 