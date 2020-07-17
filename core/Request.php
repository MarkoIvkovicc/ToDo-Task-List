<?php

/**
 * Class for handling what user opened, url path, and recognize is it GET or POST method
 *
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class Request
{
	public static function uri()
	{
		return trim(
			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
		);
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}