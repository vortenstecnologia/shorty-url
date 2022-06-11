<?php
require 'src/helpers/shorty.php';
require 'src/config/config.php';

$shorty = new Shorty($hostname, $connection);

$shorty->set_chars($chars);
$shorty->set_salt($salt);
$shorty->set_padding($padding);

$shorty->run();
?>
