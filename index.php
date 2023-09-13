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
    <div class="card">
  <div class="card-header">
    Pago con Culqui
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-2">
          <button class="btn btn-success" id="btn_pagar">Comprar</button>
        </div>
    </div>
  </div>
</div>
    <script>
    Culqi.publicKey = 'pk_test_XBWsfPU0w7KmcLF9';

    

  /*Culqi.options({
      style: {
        logo: 'https://culqi.com/LogoCulqi.png',
        bannerColor: '', // hexadecimal
        buttonBackground: '', // hexadecimal
        menuColor: '', // hexadecimal
        linksColor: '', // hexadecimal
        buttonText: '', // texto que tomará el botón
        buttonTextColor: '', // hexadecimal
        priceColor: '' // hexadecimal
      }
  });*/

  const btn_pagar = document.getElementById('btn_pagar');

  btn_pagar.addEventListener('click', function (e) {
      // Abre el formulario con la configuración en Culqi.settings y CulqiOptions

      Culqi.settings({
    title: 'Culqi Store',
    currency: 'PEN',  // Este parámetro es requerido para realizar pagos yape
    amount: 1000,  // Este parámetro es requerido para realizar pagos yape
    //order: 'ord_live_0CjjdWhFpEAZlxlz', // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo
  });

  Culqi.options({
    lang: "auto",
    installments: false, // Habilitar o deshabilitar el campo de cuotas
    paymentMethods: {
      tarjeta: true,
      yape: true,
      bancaMovil: false,
      agente: true,
      billetera: true,
      cuotealo: true,
    },
  });

      Culqi.open();
      e.preventDefault();
  })

  function culqi() {
    if (Culqi.token) {  // ¡Objeto Token creado exitosamente!
      const token = Culqi.token.id;
      const token = Culqi.token.email;
      console.log('Se ha creado un Token: ', token);
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax
      $.ajax({
        url:"procesarPago.php" ,
        type:"POST" ,
        data:{
          token:token,
          email:email
        }
      }).done(function(resp){
        alert(resp);
      })

    } else if (Culqi.order) {  // ¡Objeto Order creado exitosamente!
      const order = Culqi.order;
      console.log('Se ha creado el objeto Order: ', order);

    } else {
      // Mostramos JSON de objeto error en consola
      console.log('Error : ',Culqi.error);
    }
  };

  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>