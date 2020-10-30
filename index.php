<!DOCTYPE HTML>
<html LANG="es">

    <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDCX4NX');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UFT-8">
    <title>VendoMiPropiedad</title>  
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/mlogo.png"/>
        
    <link rel="stylesheet" href="css/parallax.css">
    <link rel="stylesheet" href="css/Menu.css"> 
    <link rel="stylesheet" href="css/propiedades.css">
    <link rel="stylesheet" href="css/secciones.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/ubicacion.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/visitas.css">
    <link rel="stylesheet" href="css/fotter.css">
     
        
    

    <?php
        $gclid = $_GET["gclid"]; 
    ?>
 
    
        
    <!-- CSS only -->

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
<!--<script src='js/bootstrap.js'></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
     <link rel="stylesheet" href="css/floating-wpp.css"/>
    <script type="text/javascript" src="js/floating-wpp.js"></script>
<script>
    var sended = false;
</script>
<script>
    function processData() {
        sended = false;
        var nombre = document.getElementById("FNombre").value;
        var telefono = document.getElementById("FTelefono").value;
        var metodo = document.getElementById("FMetodo").value;
        var lote = document.getElementById("FLote").value;
        var urlAux = 'contacto.php';
        if (nombre != "" && telefono != "" && lote != "" && metodo != "") {
            $.ajax({
                type: 'POST',
                url:urlAux,
                data:{nombre:nombre,telefono:telefono, metodo:metodo, lote:lote},
                success: function (response) {
                    console.log(response)
                    document.getElementById("EyR").innerHTML = "<h4 style=\"color:#D4145A\">Pronto te contactaremos</h4>";
                    document.getElementById("FNombre").value = "";
                    document.getElementById("FTelefono").value = "";
                    document.getElementById("FMetodo").value = "";
                    document.getElementById("FLote").value = "";
                    sended = true;
                    return true;
                },
                error: function (response) {
                    console.log(response)
                    sended = false;
                    return false;
                }
            });
        }
        else {
            sended = false;
            return false;
        }
    }

     function ToTheServer(url, isMessage) {
        var gclidAux = '<?php echo $gclid; ?>';
        var urlAux = 'hora.php';
        $.ajax({
            type: 'POST',
            url:urlAux,
            data: {gclid: gclidAux, isMessage:isMessage},
            success: function (response) {
                        if (typeof(url) != 'undefined') {
                                window.open(url);
                        }
                    }           
        });
      return false;
    }

  </script>      
   
        
    
   
<!-- Latest compiled and minified css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        


    
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDCX4NX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
        <header>
            
            <div class="MenuMobil">
                
                <div class="bluebar">
        
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">

                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <img class="logoimg" src="img/Logo.png">
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                            </div>

                                    </div>
                            </div> 
                    
                </div>
<!--                 <div class="container">

                                    <div class="row">

                                            <div class="col-xs-5 col-md-4">
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                
                                            </div>

                                            <div class="col-xs-3 col-md-4">
                                                <a  href="#contacto"><img  class="contactb" src="img/contacto.png"></a>
                                            </div>

                                    </div>
                        </div>-->
                
                <div class="graybar">
        
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <a  href="#nosotros"><img class="iconM" src="img/IconNosotros.png"></a>
                                                <a class="btm"  href="#nosotros"><p class="textBM">Nosotros</p></a>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <a  href="#contacto"><img class="iconM" src="img/IContacto.png"></a>
                                                <a class="btm"  href="#contacto"><p class="textBM">Contacto</p></a>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <a  href="#visita"><img class="iconM" src="img/IconVisita.png"></a>
                                                <a class="btm"  href="#visita"><p class="textBM">Hora Visitas</p></a>
                                            </div>

                                    </div>
                            </div> 
                    
                </div>
                
                
            </div>
            
        </header>
<!--            <div class="container-fluid">
                  <div class="row">
                                <div class="col-0 col-md-4">
                                </div>
                                <div class="col-12 col-md-4">
                                    <img class="financiados" src="img/financiados.jpg">
                                </div>
                   </div>
            </div>-->
            
            <div class="propiedades">
            
                <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <p class="sections">Propiedades</p>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                            </div>

                                    </div>
                 </div>
            </div>
        
        
        
             <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-1">
                                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               <p class="zone">Po&aacute;s</p>
                                            </div>

                                            <div class="col-xs-7 col-md-4">
                                            </div>

                                    </div>
                 </div>
            
            <div class="propiedades"> 
            
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-3">
                                               <a class="inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><div class="BP">
                                                   
                                                   <a class="inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><img class="picpro" src="img/Lote1/Pic5.jpg"></a>
                                                   
                                                   <a class="inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><p class="price">&#8353; 16.000.000</p></a>
                                                   
                                                   <a  class="btm inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><p class="tittle"><strong>Lote 1: </strong>  425 m<sup>2</sup> frente a calle p&uacute;blica</p></a>
                                                   
                                                   <a  class="btm inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><p class="location">Ubicacion: Alajuela, P&oacute;as, Chilamate</p></a>
                                                   
                                                   <a  class="inte" onclick="MakeAndOpenUrl('lote1.php', '<?php echo $gclid; ?>')" href="#"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>
                                        
                                        

                                            <div class="col-xs-6 col-md-3">
                                               <a class="inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><div class="BP">
                                                   
                                                   <a class="inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><img class="picpro" src="img/Lote2/Lote2.jpg"></a>
                                                   
                                                   <a class="inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><p class="price">&#8353; 16.000.000</p></a>
                                                   
                                                   <a  class="btm inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><p class="tittle"><strong>Lote 2: </strong>  425 m<sup>2</sup> frente a calle p&uacute;blica</p></a>
                                                   
                                                   <a  class="btm inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><p class="location">Ubicacion: Alajuela, P&oacute;as, Chilamate</p></a>
                                                   
                                                   <a  class="inte" href="lote2.php?gclid=<?php echo $gclid; ?>"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>
                                        
                                        

                                            <div class="col-xs-6 col-md-3">
                                               <a class="inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><div class="BP">
                                                   
                                                   <a class="inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><img class="picpro" src="img/Lote3/photo4.jpg"></a>
                                                   
                                                   <a class="inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><p class="price">&#8353; 30.000.000</p></a>
                                                   
                                                   <a  class="btm inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><p class="tittle"><strong>Lote 3: </strong>  935 m<sup>2</sup> frente a calle p&uacute;blica</p></a>
                                                   
                                                   <a  class="btm inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><p class="location">Ubicacion: Alajuela, P&oacute;as, Chilamate</p></a>
                                                   
                                                   <a  class="inte" href="lote3.php?gclid=<?php echo $gclid; ?>"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>

                                    </div>
                        </div> 
            
            
            </div>
        
        
        
<!--            <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-1">
                                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               <p class="zone">Calle San Jos&eacute;</p>
                                            </div>

                                            <div class="col-xs-7 col-md-7">
                                            </div>

                                    </div>
                 </div>
            
            <div class="propiedades"> 
            
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-3">
                                               <a href="lote1.php"><div class="BP">
                                                   
                                                   <a href="Lote4.html"><img class="picpro" src="img/Lote4/mfoto.jpg"></a>
                                                   
                                                   <a href="Lote4.html"><p class="price">&#8353; 23.000.000</p></a>
                                                   
                                                   <a  class="btm" href="Lote4.html"><p class="tittle"><strong>Lote 4: </strong>  425 m<sup>2</sup> frente con a calle pública</p></a>
                                                   
                                                   <a  class="btm" href="Lote4.html"><p class="location">Ubicacion: Alajuela, P&oacute;as, Sonora, Calle San Jos&eacute;</p></a>
                                                   
                                                   <a  class="" href="Lote4.html"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>
                                        
                                        

                                            <div class="col-xs-6 col-md-3">
                                               <a href="Lote5.html"><div class="BP">
                                                   
                                                   <a href="Lote5.html"><img class="picpro" src="img/Lote5/foto1.jpg"></a>
                                                   
                                                   <a href="Lote5.html"><p class="price">&#8353; 23.000.000</p></a>
                                                   
                                                   <a  class="btm" href="Lote5.html"><p class="tittle"><strong>Lote 5: </strong>  425 m<sup>2</sup> frente con a calle pública</p></a>
                                                   
                                                   <a  class="btm" href="Lote5.html"><p class="location">Ubicacion: Alajuela, P&oacute;as, Sonora, Calle San Jos&eacute;</p></a>
                                                   
                                                   <a  class="" href="Lote5.html"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>
                                        

                                    </div>
                        </div> 
            
            
            </div>
        
        
             <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-1">
                                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               <p class="zone">Carrillos Alto</p>
                                            </div>

                                            <div class="col-xs-7 col-md-4">
                                            </div>

                                    </div>
                 </div>
            
            <div class="propiedades"> 
            
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-3">
                                               <a href="Lote6.html"><div class="BP">
                                                   
                                                   <a href="Lote6.html"><img class="picpro" src="img/Lote6/mfoto6.jpg"></a>
                                                   
                                                   <a href="Lote6.html"><p class="price">&#8353; 23.000.000</p></a>
                                                   
                                                   <a  class="btm" href="Lote6.html"><p class="tittle"><strong>Lote 6: </strong>  425 m<sup>2</sup> frente con a calle pública</p></a>
                                                   
                                                   <a  class="btm" href="Lote6.html"><p class="location">Ubicacion: Alajuela, P&oacute;as, Carrillos Alto</p></a>
                                                   
                                                   <a  class="" href="Lote6.html"><p class="contac"><strong>M&aacute;s Informaci&oacute;n</strong></p></a>
                                                </div> </a>
                                            </div>
                                        

                                    </div>
                        </div> 
            
            
            </div>-->
            
            <a name="nosotros"></a>
            <div class="Nosotros">
            
                <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <p class="nosotrostitle">Nosotros</p>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                            </div>

                                    </div>
                    
                            </div>
                
                 <div class="Textonosotros">
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <img class="iconus" src="img/NiconW.png">
                                            </div>

                                            <div class="col-xs-8 col-md-8">
                                               <p class="textus">Somos una familia oriunda de P&oacute;as de Alajuela y due&ntilde;os de todos las propiedades que se encuentran ofertadas en esta pagina. No somos intermediarios. Gracias a eso vendemos nuestras propiedades a un excelente precio y, al mismo tiempo, con mayor rapidez al momento de negociar y cerrar la compra. Estas propiedades estan en zonas muy tranquilas e ideales para fundar un hogar. Nosotros mismos <a style="color:#D4145A" href="#contacto"> te llamamos </a> para darte m&aacute;s informaci&oacute;n. </p>
                                            </div>

                                    </div>
                            </div>
                </div>
                
            </div>
            
             
           
            
            
           
            
            
         <div class="Formulario"><a name="contacto"></a><a name="contacto2"></a>
                
                <div class="container">

                                    <div class="row">

                                            <div class="col-xs-8 col-md-10">
                                                 <p class="Cform">Nosotros te llamamos!</p>
                                            </div>

                                            <div class="col-xs-2 col-md-1">
                                                                                             
                                            </div>

                                            <div class="col-xs-2 col-md-1">
                                            </div>

                                    </div>
                    </div>
                
                
                <div class="container">
                
                    <form action="" onSubmit="processData(); return false">
                        
                        
                        
                       <div class="col-xs-12 col-md-12"> <label for="exampleFormControlSelect1">Sus datos de contacto (*)</label></div>
                      <div class="form-row">
                        <div class="col-xs-6 col-md-6">
                          <input id="FNombre" required type="text" class="form-control" placeholder="Nombre y Apellido">
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <input id="FTelefono" required type="tel" pattern="[0-9]{8}" class="form-control" placeholder="Telefono">
                        </div>
                      </div>
                        
                         <div class="form-group">
                            <br> <br> <br><br>
                            <div class="col-xs-12 col-md-12"><label for="exampleInputEmail1">Como prefiere que te contactemos?</label></div>
                            <div class="col-xs-12 col-md-12"><select required class="form-control" id="FMetodo">
                              <option value="">M&eacute;todo de contacto</option>
                              <option value="Whatsapp">Whatsapp</option>
                              <option  value="LLamada">LLamada</option>
                            </select></div>
                          </div>
                         <div class="form-group">
                             <br> <br> <br>
                            <div class="col-xs-12 col-md-12"><label for="exampleFormControlSelect1">Lote de inter&eacute;s</label></div>
                            <div class="col-xs-12 col-md-12"><select required class="form-control" id="FLote">
                              <option value="">Elija su lote</option>
                              <option value="1">Lote 1: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8353; 16.000.000</option>
                              <option value="2">Lote 2: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8353; 16.000.000</option>
                              <option value="3">Lote 3: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8353; 30.000.000</option>
                              <option value="4"> Lote 1 + Lote 2: &#8353; 45.000.000</option>
                            </select><br></div>
                          </div>
                        
<!--                         <div class="form-group">
                             <br> <br> <br>
                            <div class="col-xs-12 col-md-12"><label for="exampleFormControlTextarea1">Mensaje</label></div>
                            <div class="col-xs-12 col-md-12"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                             <br> <br> <br> <br> <br>
                          </div>-->
                    
                        
                        <div class="col-xs-12 col-md-12" id="EyR"><button class="btn btn-primary">Enviar mis datos</button></div>
                        
                        
                        <div class="col-xs-12 col-md-12"><small id="emailHelp" class="form-text text-muted">Estaremos contactandole lo antes posible.</small></div>
                        
                    </form>
                    
                </div>
                
            
        
            </div> 
        
    
            
            <a name="visita"></a>
            
            
            
            <div class="Horarios">
                
                    <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-6">
                                                <p class="sections">Horario visitas</p>
                                            </div>

                                            <div class="col-xs-3 col-md-3">
                                               
                                            </div>

                                            <div class="col-xs-3 col-md-3">
                                            </div>

                                    </div>
                         </div>
            
                    <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <p class="day">Lunes</p>
                                                <p class="hour"><strong>8:00</strong>am - <strong>11:00</strong>am</p>
                                                <p class="hour"><strong>2:00</strong>am - <strong>5:00</strong>am</p>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                               <p class="day">Mi&oacute;rcoles</p>
                                                <p class="hour"><strong>8:00</strong>am - <strong>11:00</strong>am</p>
                                                <p class="hour"><strong>2:00</strong>am - <strong>5:00</strong>am</p>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <p class="day">Domingo</p>
                                                <p class="hour"><strong>2:00</strong>pm - <strong>5:00</strong>pm</p>
                                            </div>

                                    </div>
                         </div>
            
            </div>
            
             <div class="barrafootter">
        
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">

                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <img class="LogoFotter" src="img/Logo.png">
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                            </div>

                                    </div>
                            </div> 
                    
                </div>
            
            
            
    <a onclick="return ToTheServer('tel:+50684956146', false);" class="phonelink" href="tel:+50684956146"><img title="Tel&eacute;fono de contacto" class="phoneicon" alt="Tel&eacute;fono" src="img/callB.png"></a>



    <a class="phonelink"><div id="myButton"></div></a>
        
       <script src='js/scrollmenu.js'></script> 
    
    
        
    <script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '50684956146',
            popupMessage: 'Hola, podemos ayudarte?',
            message: "",
            showOnIE: true,
            headerTitle: 'Lotes (8495 6146)',
			autoOpen: true, // true or false
            headerColor: '#25d366',
			position: "right",
            backgroundColor: '#25d366',
            buttonImage: '<img title="Whatsapp" alt="Icono de Whatsapp" src="img/wModal.png" />'
        });
    });
</script>
        
    
    </body>