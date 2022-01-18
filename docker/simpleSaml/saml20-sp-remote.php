<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['http://127.0.0.1:8741/saml/metadata'] = [
    'AssertionConsumerService' => 'http://127.0.0.1:8741/saml/acs',
    'SingleLogoutService' => 'http://127.0.0.1:8741/saml/logout',
];