<?php
$action = $_GET['action'] ?? 'dashboard';
define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH . '/template/types/' .$action.'.php';
require_once BASE_PATH.'/../core/db.php';

require_once BASE_PATH.'/template/admin_layout.php';
