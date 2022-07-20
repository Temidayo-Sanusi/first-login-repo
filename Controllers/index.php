<?php

$details = App::get('database')->selectAll('login');


require 'views/index.view.php';