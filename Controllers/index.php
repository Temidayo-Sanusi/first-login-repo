<?php

$details = $app['database']->selectAll('login');


require 'views/index.view.php';