<?php

session_start();

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


?>