<?php

error_reporting( error_reporting() & ~E_NOTICE & ~E_WARNING );
date_default_timezone_set('Europe/Belgrade');

require_once 'core/Router.php';
require_once 'core/Request.php';