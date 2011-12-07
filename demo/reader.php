<?php

namespace Application;

require_once __DIR__ . '/../library/Opengraph/Meta.php';
require_once __DIR__ . '/../library/Opengraph/Opengraph.php';
require_once __DIR__ . '/../library/Opengraph/Reader.php';

use Opengraph;

$reader = new Opengraph\Reader();
$reader->parse(file_get_contents('./images.html'));
print_r($reader->getArrayCopy());