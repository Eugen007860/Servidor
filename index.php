<?php

    $url = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4b1dedac-0e37-4e18-9e5a-97121201f06a&response_type=code&response_mode=query&redirect_uri=http://localhost/TrabajoFinal_V2/php/Autorizacion/pedirTokenBueno.php&'
    .'scope=offline_access%20user.read%20mail.read'
    .'%20files.readWrite.all%20files.read%20tasks.readWrite'
    .'%20mail.readWrite%20group.read.all%20mail.send'
    .'%20notes.readWrite.all%20sites.readWrite.all'
    .'&state=12345';

    session_start();
    error_reporting(-1);
    ini_set('display_errors', 'On');
       
    header('Location: '.$url);

?>

