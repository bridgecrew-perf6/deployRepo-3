<?php
require_once 'vendor/autoload.php';

#$handler = new \Deploy\Handler();
#$handler->run();

echo 'AWS_ACCESS_KEY_ID:' . getenv('AWS_ACCESS_KEY_ID');

print_r($_ENV);
print_r($_SERVER);
