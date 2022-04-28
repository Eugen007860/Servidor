<?php
session_start();

$curl = curl_init();
$code = $_GET['code'];
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',                                                                                
  CURLOPT_POSTFIELDS => 'grant_type=authorization_code&client_id=4b1dedac-0e37-4e18-9e5a-97121201f06a&code='.$code.'&redirect_uri=https%3A%2F%2Feugen007860.github.io%2FServidor&client_secret=Uhy7Q~v6i~7duqsE_Au~~YBhKrjJrtcyJkuMc',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer EwCgA8l6BAAUwihrrCrmQ4wuIJX5mbj7rQla6TUAAehZwIgtAhEHHFUofvyJnujpf1PrRA0+yORLq5FTERIqWPXNlT3L8YL0vLg7m8z/MMok9H1w5dff0ZCNTzn5PrKRno22reB3He0yLwQtYM6vvpxrYhLw3B5ewdEjQVD7KECXGLu45M8HQ0XvSSxkYFjDuCtVpTDmlKIFXK3cFZmSROBMmLsmau37ycq30Ie+YwEnUQB4WGAmFj/a3BE0tL8LELh7GMN5OjmID6lFUaSXxOmrgFC5D6MO2OO/2BRWgCXLrzz6DSAOGwxTVhj8KZKJo75uJ9VARUioP8SnmnF47oqNpmsO4HK0N1KwC8wf0ZAJPY3i2yWHYdHXfuMCfloDZgAACE6yvLrawXQ8cAJoVhbfTgnhONPI4V+C6STvwz1vESJluNl13N45nCFO7yR2ZSZXFMrWyBFoGfvRGt7At7JKtTYneUGjvScB7fphkL59/92IzVj1ceJHqv5Zb5Pln2fs2p6048xj4ScFFW6vg1PQ2GK2pZMDmj2OUsVf77qVyI6YZAIfOkBo11/nDpdJcCNX/PrHa090xGQjPcyxFRdRP3K1BconsXqmV8uaADQh+8+k8kvGPC9c96pHN5PEfxW3Lvv2wSOv9G5chrJ11C38CnpI7FRJbXQPgQdYNM2hTP/U0qPfBh9kxF7f9HWcphipvh8WsIDqBUDeJ9szkJecTsGOBOOdKVmcB5T7dzg6nyFByWqaw85uKIa2HvvgmUdfTShO8l36vaA6FIGLoDboyQWnn0f2OS3GbnkMDzm2S3FUywBcUXmP6j238xCsgzjnuIeBrHRW9yEaTmrCwl5NzaPTE/piawrb2pTbMBhbD2+ia1CRlZhtKBctpeCLLNtEQi9ppmx77XsEUWttr91+O/ppPBYu/9sjxhUvOsnFkZ9DtUBdeVPjDraQLf1TZJZas20RaEPTpgtJ2joObyAtzfMRAX+zYQ+EY4h3kgw1ibl9TUByoQL1rIELzR09dlK8GDPU1cB6evil+3Y42SzlXY/IIL6a1raX4fABl9CA1I/J3ifW9vgSUUUGFiLyjfSoPUvuFqj04lqkZKqwEh0N4JmrDcdFwVQR9eNneGVzpqpDzVlGcPjmhtBhYEXUQS/PKkfj3tfAP0vDoK2eVyyOHNjpf/ybL0+OBclfOZTXlVfNlCuCU49lk3WPDWcxSLaqHfiIfOZ8W9sXtgueAg==',
    'Cookie: buid=0.AYIAhNGlUFiTZkuT94kc0NYNcaeSw3a4bahJgkxXzlqOLZxOAAA.AQABAAEAAAD--DLA3VO7QrddgJg7WevrXuX4267JUcJpwm4kYzJU3ta1st4cL8z4Rf4JU8TNLfoct2tpr7LK5y43CQaNBvU7ktwETlUNK0vDI_FMjb8CYnqB679_YQxlMmcuCr3lydUgAA; esctx=AQABAAAAAAD--DLA3VO7QrddgJg7WevrzV39z1ztHZ_eTirbAUGY32KAD--VjdIh-PBdoimP2MbFAs745KBARzuPYOGRElXRHFTMEyu9-CU63HZg-1zpVRlfpjsKBTnaELg7_k8K9QIXDyvPWQxsW3oi5BA34Jy0DGqEV9dPdAJnfhfbQdDTdMDTAy_GQoVO8Fz4YTVW7fsgAA; fpc=AgbeUkYBp-BKr0NXRu-cj49z9AMTAwAAAFYyztkOAAAA; stsservicecookie=estsfd; x-ms-gateway-slice=estsfd'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
//echo $response; 

$arr = json_decode($response, true);
echo $arr['acces_token'];

header("Location: http://webalumnos.tlm.unavarra.es:10725/TrabajoFinal_V2/?tokenAcceso=".$arr['access_token']);
exit();


