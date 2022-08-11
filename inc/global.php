<?php

$isPost = ($_SERVER['REQUEST_METHOD'] == "POST");

require_once(dirname(__FILE__) . "/config.inc.php");
require_once(dirname(__FILE__) . "/auth.inc.php");
require_once(dirname(__FILE__) . "/user.inc.php");
$sql = $config['sql'];
$db = mysqli_connect($sql['host'], $sql['username'], $sql['password'], $sql['database']);

$auth = new Auth();

if (!$db) {
    die(mysqli_connect_error());
}
