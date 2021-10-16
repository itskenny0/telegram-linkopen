<?php
$input = file_get_contents("php://input"); // Retrieve information sent by webhook
$decoded = json_decode($input); // decode JSON supplied by webhook to PHP array

$from = $sJ->message->chat->id;
$text = $decoded->message->text . PHP_EOL;

if(!preg_match("/^http/", $text)) $text = "http://" . $text;
file_put_contents("urls.log", $text, FILE_APPEND);
