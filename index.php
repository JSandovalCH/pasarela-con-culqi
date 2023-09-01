<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css">
    <script src="https://checkout.culqi.com/js/v4"></script>
  
    <title>Hola Mundo</title>
  </head>
  <body>
    <h1>Hola Mundo</h1>
    <script>
    Culqi.publicKey = 'pk_test_07e2b9f728f921sd';

    Culqi.settings({
    title: 'Culqi Store',
    currency: 'PEN',  // Este parámetro es requerido para realizar pagos yape
    amount: 1000,  // Este parámetro es requerido para realizar pagos yape
    order: 'ord_live_0CjjdWhFpEAZlxlz', // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo
    xculqirsaid: 'Inserta aquí el id de tu llave pública RSA',
    rsapublickey: 'Inserta aquí tu llave pública RSA',
  });

  Culqi.options({
    lang: "auto",
    installments: false, // Habilitar o deshabilitar el campo de cuotas
    paymentMethods: {
      tarjeta: true,
      yape: true,
      bancaMovil: true,
      agente: true,
      billetera: true,
      cuotealo: true,
    },
  });

  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>