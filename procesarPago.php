<?php
// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/culqi-php/lib/culqi.php';

// Configurar tu API Key y autenticación
$PUBLIC_KEY = "{pk_test_XBWsfPU0w7KmcLF9}";
$SECRET_KEY = "{sk_test_IDNqehAAX2dMtK1P}";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
    array(
      "amount" => 1000,
      //"capture" => true,
      "currency_code" => "PEN",
      "description" => "Venta de prueba",
      "email" => $_POST["email"],
      "installments" => 0,
      "antifraud_details" => array(
          "address" => "Av. Lima 123",
          "address_city" => "LIMA",
          "country_code" => "PE",
          "first_name" => "Test_Nombre",
          "last_name" => "Test_apellido",
          "phone_number" => "9889678986",
      ),
      "source_id" => $_POST["token"]
    )
);

echo "exitoso";

// Respuesta
// print_r($charge);