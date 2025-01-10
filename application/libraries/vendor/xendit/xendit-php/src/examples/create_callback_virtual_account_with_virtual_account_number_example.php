<?php
    require('config/xendit_php_client_config.php'); 
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $bank_code = $argv[2];
    $name = $argv[3];
    $virtual_account_number = $argv[4];

    $response = $xenditPHPClient->createCallbackVirtualAccount($external_id, $bank_code, $name, $virtual_account_number);
    print_r($response);
?>
