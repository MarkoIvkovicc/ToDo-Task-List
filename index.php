<?php

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
 
require('vendor/autoload.php');

require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
