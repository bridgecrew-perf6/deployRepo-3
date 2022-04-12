<?php
require_once 'vendor/autoload.php';

#$handler = new \Deploy\Handler();
#$handler->run();

echo 'AWS_ACCESS_KEY_ID:' . getenv('AWS_ACCESS_KEY_ID') . "\n";
echo 'AWS_SECRET_ACCESS_KEY:' . getenv('AWS_SECRET_ACCESS_KEY') . "\n";
echo 'AWS_REGION:' . getenv('AWS_REGION') . "\n";
echo 'AWS_CONFIG_SET:' . getenv('AWS_CONFIG_SET') . "\n";
echo 'AWS_VPC_NAME:' . getenv('AWS_VPC_NAME') . "\n";
echo 'AWS_SCRIPTS_GROUP_NAME:' . getenv('AWS_SCRIPTS_GROUP_NAME') . "\n";
echo 'AWS_ADMIN_GROUP_NAME:' . getenv('AWS_ADMIN_GROUP_NAME') . "\n";
echo 'AWS_FRONTEND_GROUP_NAME:' . getenv('AWS_FRONTEND_GROUP_NAME') . "\n\n";

print_r($argv);

print_r($_ENV);
print_r($_SERVER);
