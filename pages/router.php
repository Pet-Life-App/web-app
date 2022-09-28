<?php
//get the path the router needs to go to
$path = $_GET['path'];
if (!$path) {
    die("Where do you want to go?");
}

//if its /, default to index
if ($path == "/") $path = "/index";

//parse params correctly, enabling things like /1/2/3, this takes the [] from the filenames and maps them to variables
$parsedPath = "";
foreach(explode("/", $path) as $part) {
    $parsedPath .= strpos($part, ":") !== false ? str_replace(":", "[", $part)."]" : "/".$part; 
}

//put params inside of array from javascript
$_PARAMS = [];
if (isset($_GET['params'])) {
    //decode the params from query string
    $_PARAMS = json_decode($_GET['params'], true);
}

//check if the file exists
if (file_exists("files{$parsedPath}.php")) {
    //require it if it exists
    require_once("files{$parsedPath}.php");
    //if not require index
} else if (file_exists("files{$parsedPath}/index.php")) {
    //require it
    require_once("files{$parsedPath}/index.php");
} else {
    //404
    http_response_code(404);
    require_once("./404.html");
}
?>
