<?php
// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'Requests-develop/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'culqi-php-master/lib/culqi.php';

// Configurar tu API Key y autenticación
$SECRET_KEY = "{sk_test_IDNqehAAX2dMtK1P}";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
    array(
      "amount" => 1000,
      //"capture" => true,
      "currency_code" => "PEN",
      "description" => "Venta de prueba",
      "email" => $_POST["email"],
      "source_id" => $_POST["token"]
    )
);

// Respuesta
print_r($charge);

echo "exitoso";
?>