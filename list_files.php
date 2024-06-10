<?php

$dir = './docs/';
$files = array_diff(scandir($dir), array('..', '.'));

header('Content-Type: application/json');
echo json_encode(['files' => $files]);
