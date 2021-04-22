<?php

# If you need to add custom configuration settings to the CMS settings.php file,
# this is the place to do it.

# For example, if you want to configure SAML authentication, you can add the
# required configuration here

$authentication = new \Xibo\Middleware\SAMLAuthentication();
$samlSettings = array (
   'workflow' => array(
        // Enable/Disable Just-In-Time provisioning
        'jit' => true,
        // Attribute to identify the user 
        'field_to_identify' => 'email',   // Alternatives: UserID, UserName or email
        // Default libraryQuota assigned to the created user by JIT
        'libraryQuota' => 1000,
        // Initial User Group
        'group' => 'Users',
        // Home Page
        'homePage' => 'icondashboard',
        // Enable/Disable Single Logout
        'slo' => true,
        // Attribute mapping between XIBO-CMS and the IdP
        'mapping' => array (
            'UserID' => '',
            'usertypeid' => '',
             'UserName' => 'name',
             'email' => 'emailaddress',
        ),
    ),
#   // Settings for the PHP-SAML toolkit. 
#   // See documentation: https://github.com/onelogin/php-saml#settings 
  'strict' => false,
  'debug' => true,
  'idp' => array (
            'entityId' => 'https://sts.windows.net/50ba719b-5dc7-4690-a2a2-0180b49543a5/',
            'singleSignOnService' => array (
                'url' => 'https://login.microsoftonline.com/50ba719b-5dc7-4690-a2a2-0180b49543a5/saml2',
            ),
            'singleLogoutService' => array (
               'url' => 'https://login.microsoftonline.com/50ba719b-5dc7-4690-a2a2-0180b49543a5/saml2',
            ),
            'x509cert' => 'MIIC8DCCAdigAwIBAgIQXSJLqNxC0ZlJ/rjg1YALdDANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMTA0MjIyMTQyMTFaFw0yNDA0MjIyMTQyMTFaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxxQLTJYa8+LjMGheX2FG2IiGuQwFxG3LVV+BewYsCOsLmd9YQ3NM9uyXQQgub96l8prnocVTORvbizDXGewR2TafcZp8hzRI7Fl9puTdEfRbXS/ViUbDbg3IlBywwfJh/lqAp2Go/cwoH1hMlt/vMUeM/bQRU73nqU2dlR+oxdUnDMIW+7anleD5Wz0l+/dgMFiz8GppRPuzXC5YGPJEB5vKkFPw2/31KYQX3n8UaDrzPl0WyNQKTZdOa3ygFjC/yyRfga8oytnCS895YTyouNLJjx5IbqdnzTq2koLODFAI0uhhgWa3bQ0u1QNw33xfqcXjeamIGGq4F2IXcJTkZQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQC27QDDn0opQywNlxHzB908wAaRXua+XsjjTF5LYR+6SK7GYhUNUnWd3QfwGClpSTvF4vJOQUdbbcVCpK9YtZy6RUFAJXqGa+XQMr3eCvGEs4UA4sa8P4J3gHRS0MINcoebHk5cpf6Y0kg2n3/B40Ti67yTGb121ogloNNMRvDyF+wcjVFJCDBvbg+JalpzvzQMufdiEA6AMhZHnPApBx/Kk9Aj699uHdp4fUGNjp0Lcv9kW6C060PCZQmYXzGp+INsh3SyW8lsXbEqgMk2i1M8Q6S/rMnr/8tdlYenU1HQpEC2fAkluyIpcSkFW3yMdUu8dMq+bKL/jQdbiPYmf2kk',
        ),
   'sp' => array (
        'entityId' => 'https://xibo.dcplibrary.org/saml/metadata',
        'assertionConsumerService' => array (
            'url' => 'https://xibo.dcplibrary.org/saml/acs',
        ),
        'singleLogoutService' => array (
            'url' => 'https://xibo.dcplibrary.org/saml/sls',
        ),
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'x509cert' => '',
        'privateKey' > '',
    ),
    'security' => array (
        'nameIdEncrypted' => false,
        'authnRequestsSigned' => false,
        'logoutRequestSigned' => false,
        'logoutResponseSigned' => false,
        'signMetadata' => false,
        'wantMessagesSigned' => false,
        'wantAssertionsSigned' => false,
        'wantAssertionsEncrypted' => false,
        'wantNameIdEncrypted' => false,
    )
);

?>
