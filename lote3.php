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
    <link rel="stylesheet" href="css/bootstrap1.css">
    <link rel="stylesheet" href="css/menupropiedades.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/iformacionpropiedad.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/fotter.css">    
    <link rel="stylesheet" href="css/visitas.css">
     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
<!--<script src='js/bootstrap.js'></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
     <link rel="stylesheet" href="css/floating-wpp.css"/>
    <script type="text/javascript" src="js/floating-wpp.js"></script>
        
        
        
        
        <?php
        $gclid = $_GET["gclid"]; 
    ?> 
        
            <script>
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
            
            <div class="header">
                
                
                
                
                <div class="bluebar">
        
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-4 col-md-4">
                                                <a href="javascript:history.back()"><img class="arrow" src="img/arrow.png"></a>
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                <a href="javascript:history.back()"><img class="logop" src="img/Logo.png"></a>
                                            </div>

                                    </div>
                        </div> 
                    
                </div>
                
<!--                    <div class="container">

                                    <div class="row">

                                            <div class="col-xs-5 col-md-4">
                                            </div>

                                            <div class="col-xs-4 col-md-4">
                                                
                                            </div>

                                            <div class="col-xs-3 col-md-4">
                                                <a  href="javascript:history.back()#contacto"><img  class="contactb" src="img/contacto.png"></a>
                                            </div>

                                    </div>
                        </div>-->
                
            </div>
            
    </header>
        
        
        <div class="carrucelweb">
            
                    <div id="carrusel1" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                                <li data-target="#carrusel1" data-slide-to="0" class="active"></li>
                                <li data-target="#carrusel1" data-slide-to="1"></li>
                                <li data-target="#carrusel1" data-slide-to="2"></li>
                                <li data-target="#carrusel1" data-slide-to="3"></li>
                                <li data-target="#carrusel1" data-slide-to="4"></li>
                          </ul>

                          <!-- The slideshow -->
                          <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="img/Lote3/foto4.jpg" alt="Los Angeles" width="100%" height="">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/Lote3/foto2.jpg" alt="Chicago" width="100%" height="">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/Lote3/foto3.jpg" alt="New York" width="100%" height="">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/Lote3/foto1.jpg" alt="New York" width="100%" height="">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/Lote3/foto5.jpg" alt="New York" width="100%" height="">
                                </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#carrusel1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#carrusel1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>
                </div>
            
            </div>
        
        
            
            <div class="carrucelMobile"> 
            
                        <div id="demo" class="carousel slide" data-ride="carousel">

                              <!-- Indicators -->
                              <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                    <li data-target="#demo" data-slide-to="3"></li>
                                    <li data-target="#demo" data-slide-to="4"></li>
                              </ul>

                              <!-- The slideshow -->
                              <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img src="img/Lote3/photo4.jpg" alt="Los Angeles" width="100%" height="">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="img/Lote3/photo2.jpg" alt="Chicago" width="100%" height="">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="img/Lote3/photo3.jpg" alt="New York" width="100%" height="">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="img/Lote3/photo1.jpg" alt="New York" width="100%" height="">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="img/Lote3/photo5.jpg" alt="New York" width="100%" height="">
                                    </div>
                              </div>

                              <!-- Left and right controls -->
                                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                  </a>
                </div>
            
            </div>
            
            <div class="Infolotes">
                <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-0">
                                            </div>

                                            <div class="col-xs-10 col-md-12">
                                                <p class="infpt"><strong>Lote 1:</strong> 935m2 con frente a calle p&uacute;blica y <strong>hermosa vista</strong></p>
                                                
                                            </div>

                                            <div class="col-xs-1 col-md-0">
                                            </div>

                                    </div>
                    </div>
                
                
                
                
                    <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-1">
                                            </div>

                                            <div class="col-xs-10 col-md-10">
                                                <p class="pricel">&#8353; 30.000.000</p>
                                                
                                            </div>

                                            <div class="col-xs-1 col-md-1">
                                            </div>

                                    </div>
                    </div>
                
                <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-0">
                                            </div>

                                            <div class="col-xs-10 col-md-12">
                                                <p class="textprop">Le ofrecemos un lote con una vista privilegiada. Este est&aacute; ubicado en Chilamate de Po&aacute;s con un area de 935 m2 listos para construir. Con 11 metros de frente y sobre calle p&uacute;blica. Este lote tiene acceso a servicios de agua, luz e internet. Es una propiedad que fue dise&ntilde;ada especialmente para aprovechar su hermosa vista panor&aacute;mica y la mayor cantidad de espacio &uacute;til para construcci&oacute;n. Este lote por su ubicaci&oacute;n tiene la certeza de que simepre tendr&aacute; una vista panor&aacute;mica del Valle Central</p>
                                                
                                            </div>

                                            <div class="col-xs-1 col-md-0">
                                            </div>

                                    </div>
                    </div>
                
                
                
                      <div class="container">

                                    <div class="row">

                                             <div class="col-xs-6 col-md-6">
                                                
                                                    <div class="col-xs-3 col-md-3">
                                                        <img class="iconif" src="img/icona.png"> 
                                                    </div>
                                                     <div class="col-xs-9 col-md-9">
                                                        <p class="extinf"><strong>Area del lote:</strong> 425m2</p> 
                                                    </div>
                                               
                                            </div>

                                             <div class="col-xs-6 col-md-6">
                                                <div class="col-xs-3 col-md-3">
                                                    <img class="iconif" src="img/iconf.png"> 
                                                </div>
                                                 <div class="col-xs-9 col-md-9">
                                                    <p class="extinf"><strong>tamano del frente:</strong> 11 metros</p>
                                                </div>
                                            </div>

                                    </div>
                        </div>
                
                        <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-6">
                                                <div class="col-xs-3 col-md-3">
                                                    <img class="iconif" src="img/iconh.png"> 
                                                </div>
                                                 <div class="col-xs-9 col-md-9">
                                                   <p class="extinf"><strong>propiedad para construir</strong></p>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-md-6">
                                                <div class="col-xs-3 col-md-3">
                                                    <img class="iconif" src="img/iconl.png"> 
                                                </div>
                                                 <div class="col-xs-9 col-md-9">
                                                    <p class="extinf">Alajuela, Poas, <strong>Chilamate,</strong> Calle chaperno.</p>
                                                </div>
                                            </div>

                                    </div>
                        </div>
                
            </div>
                
            <div class="Ubicacion">
                     
            <div class="inflocation">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1928.4944071231407!2d-84.26929964198543!3d10.049499998204329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f7e1be8e8da1%3A0x2b4ea6eac5aca526!2sCalle%20Chaperno%2C%20Provincia%20de%20Alajuela%2C%20Carrillos!5e1!3m2!1ses!2scr!4v1582173508261!5m2!1ses!2scr" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                            <div class="container">

                                        <div class="row">

                                                <div class="col-xs-12 col-md-12">
                                                    <p class="direction">Alajuela, Póas, Chilamate, <strong>Calle chaperno</strong>, 150mtrs Sur</p>
                                                </div>


                                        </div>
                             </div>
                
                            <div class="container">

                                       <div class="row">

                                            <div class="col-xs-6 col-md-6">
                                                <a class="btn btn-primary bu" href="https://goo.gl/maps/RWZpcDUw6ArczVPs6" role="button" target="_blank">Google Maps</a>
                                            </div>

                                            <div class="col-xs-6 col-md-6">
                                                <a class="btn btn-primary bu" href="https://waze.com/ul/hd1u14mv3q" role="button" target="_blank">Waze</a>
                                               
                                            </div>

                                        </div>
                                </div>

                
                        </div>
               
            </div>    
                
                
                
                
             <div>   
                    <div class="container">

                                    <div class="row">

                                            <div class="col-xs-1 col-md-1">
                                            </div>

                                            <div class="col-xs-10 col-md-10">
                                                <p class="viewp">Vista de la propiedad</p>
                                                
                                            </div>

                                            <div class="col-xs-1 col-md-1">
                                            </div>

                                    </div>
                    </div>
                
                    <div class="container">
                        <div class="row">
                                 <div class="col-xs-12 col-md-12">
                                         
                                             <img class="picview" src="img/LoteVista.jpg">
                                </div>
                        </div>   
                     </div>
                </div>
                        
            
        
            <div class="Horarios">
                
                 <div class="container">

                                    <div class="row">

                                            <div class="col-xs-6 col-md-6">
                                                <p class="buyls">Horario visitas</p>
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