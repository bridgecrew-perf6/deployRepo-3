<?php

for ($i = 0; $i <= 300; $i++) {

    echo "Current index: \e[" . rand(1, 120) . "m{$i}\n";

    sleep(1);
}
