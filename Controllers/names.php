<?php

$app['database']->insert('login', [ 
    'username' => $_POST['name'],
    'password' => $_POST['password']
]); 

header('Location: /');