<?php 

$file = fopen('popper.html', 'w');

fwrite($file, date(time()));

shell_exec('bash pull.sh');
