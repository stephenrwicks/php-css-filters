<?php

ob_start();
include 'index.php';
$html = ob_get_clean();

file_put_contents('index.html', $html);

echo "Built index.html\n";