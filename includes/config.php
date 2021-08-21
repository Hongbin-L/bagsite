<?php

ob_start();
define('DEBUG', 'TRUE');

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));