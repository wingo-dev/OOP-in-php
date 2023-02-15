<?php

error_reporting(E_NOTICE);

$x = $y + 4;
echo "script is not terminated.";

$file = "error.txt";

try {
    if (!file_exists($file)) {
        throw new Exception("File does not exist");
    }
} catch (Exception $e) {
    echo "Message:" . $e->getMessage()();
}