<?php
require_once ("vendor\autoload.php");
use Openpay\Data\Openpay;
use Openpay\Data\OpenpayApiTransactionError;
use Openpay\Data\OpenpayApiRequestError;
use Openpay\Data\OpenpayApiConnectionError;
use Openpay\Data\OpenpayApiAuthError;
use Openpay\Data\OpenpayApiError;
$openpay = Openpay::getInstance('m38tzl06ati97otvqcu0', 'sk_391a5d2b63f0455090f90ff4ae0a86a5', 'MX');

$customer = array(
     'name' => "Sebastian",
     'last_name' => "Moreno",
     'phone_number' => "4499123456",
     'email' => "SEBAS@HOT.COM",);


$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => "20000.00", // formato númerico con hasta dos dígitos decimales. 
    'description' => "prueba",
    //'use_card_points' => false, // Opcional, si estamos usando puntos
    'device_session_id' => $_POST["device_id"],
    'customer' => $customer
    );


 $charge = $openpay->charges->create($chargeData);
    echo $charge;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>