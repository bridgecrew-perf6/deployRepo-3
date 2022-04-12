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

echo "Parse args: \n";

$options = getopt("h", ['pwa-tag:', 'm2-tag:', 'maintenance', 'help', 'vendor-update', 'skip-suspense', 'show-commands']);
$optionKeys = array_keys($options);

if (count(array_intersect(['maintenance'], $optionKeys)) > 0) {
  echo "Need maintenance\n";
}

if (count(array_intersect(['vendor-update'], $optionKeys)) > 0) {
  echo "Need vendor-update\n";
}

if (count(array_intersect(['skip-suspense'], $optionKeys)) > 0) {
  echo "Need skip-suspense\n";
}

echo "end.\n";


print_r($_ENV);
print_r($_SERVER);
