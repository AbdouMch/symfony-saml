<?php
$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:password' => [
            'uid' => ['user1'],
            'roles' => ['ROLE_ADMIN'],
        ],
        'user2:password' => [
            'uid' => ['user2'],
            'roles' => ['ROLE_USER'],
        ],
    ),
);