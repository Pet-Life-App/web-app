<?php

$isPost = ($_SERVER['REQUEST_METHOD'] == "POST");
$db = mysqli_connect("localhost", "hotgrandad", "qgGZNjXaVUEpfhZzAZHZBSKr", "petlife");

if (!$db) {
    die(mysqli_connect_error());
}