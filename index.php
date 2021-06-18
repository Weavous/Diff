<?php

require_once "bootstrap.php";

use Src\DirectoryMapper;

$dirname_one = "ONE";

$dirname_two = "TWO";

$e = DirectoryMapper::factory()->map($dirname_one, $dirname_two);

print_r($e);
