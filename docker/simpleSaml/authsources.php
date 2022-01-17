<?php
$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:password' => [
            'uid' => ['user1'],
            'roles' => ['sub_admin'],
        ],
        'user2:password' => [
            'uid' => ['user2'],
            'roles' => ['admin'],
        ],
    ),
);