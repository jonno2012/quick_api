<?php

require_once dirname(__FILE__) . '/bootstrap.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$parts = array_map('strip_tags', explode('/', $path));

echo json_encode(['sdf']);