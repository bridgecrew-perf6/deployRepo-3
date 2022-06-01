<?php

for ($i = 0; $i <= 100; $i++) {

    ob_clean();
    echo "Current index: \e[" . rand(1, 120) . "m{$i}\n";
    

    sleep(1);
}
