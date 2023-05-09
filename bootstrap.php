<?php

require_once dirname(__FILE__) .'/vendor/autoload.php';

set_error_handler("QuickApi\\ErrorHandler::handleError");
set_exception_handler("QuickApi\\ErrorHandler::handleException");

header("Content-type: application/json; charset=UTF-8");