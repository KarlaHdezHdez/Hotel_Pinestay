<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <title>Reserva</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s7QASuTecN" once="menu" id="menu2-19">
    <?php   
            include ('header.php');
    ?>
    </section>

<section class="header1 cid-s7QASohrZl" id="header16-13">

    

    

    <div class="container">
        <nav aria-label="breadcrumb">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./paquetes.php">Paquetes</a></li>
                            <li class="breadcrumb-item"><a href="./comodidades.php">Comodidades</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reserva</li>
                            <li class="breadcrumb-item"><a href="./contacto.php">Contacto</a></li>
                            <li class="breadcrumb-item"><a href="./acerca.php">Acerca de</a></li>
                            <li class="breadcrumb-item"></li>
                        </ol>
                    </div>
                </nav>
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Reservar una habitación</h1>
                
                
                
            </div>
        </div>
    </div>

</section>

<section class="header1 cid-s7QGvUbia5 mbr-parallax-background" id="header16-1c">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(70, 80, 82);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
           
          
          
          
          <div class="hotel_reserve_box">
         <h3> Formulario de reserva de hotel </h3><br>
         <form>
             <div class="form-group">
                 <label>Tipo de habitación/suite</label>
                 <select class="form-control" id="room_type" onchange="finalCost()" required>
                     <option value="0"> Estándar </option>
                     <option value="1"> De lujo </option>
                     <option value="2"> Superior de luju </option>
                     <option value="3"> Premier de lujo  </option>
                     <option value="4"> Suite ejecutiva </option>
                     <option value="5"> Suite Junior </option>
                     <option value="6"> Suite luna de miel </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Número de habitación/suite</label>
                 <select class="form-control" id="room_number" onchange="finalCost()" required>
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Número de personas</label>
                 <select class="form-control" id="person_number" onchange="finalCost()" required>
                     <option value="0"> 1 </option>
                     <option value="1"> 2 </option>
                     <option value="2"> 3 </option>
                     <option value="3"> 4 </option>
                     <option value="4"> 5 </option>
                     <option value="5"> 6 </option>
                     <option value="6"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Número de niños</label>
                 <select class="form-control" id="child_number" onchange="finalCost()" required>
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>¿Instalaciones del restaurante?</label>
                 <select class="form-control" id="res_facilities" onchange="finalCost()">
                     <option value="0" selected=""> No </option>
                     <option value="1"> Si </option>
                 </select>
             </div><br>
             
             <br> 
                    <input type="submit" value="Guardar" class="btn btn-warning">
                    <input type="reset" value="Limpiar" class="btn btn-danger">
         </form>
     </div>
          
          
          

        </div>
    </div>

</section>

<section class="mbr-section content8 cid-s7QO0DgOTJ" id="content8-1d">

    

    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="./contacto.php">¿NECESITAS AYUDA? LLÁMANOS</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="witsec-custom-html-block-17" data-rv-view="380" style="background-color: rgb(255, 255, 255);">
 
 <div class="witsec-custom-html-container elements-content" style="padding-top: 3rem; padding-bottom: 2rem;">
     
    <div class="mbr-section__container block" style="width: 100%;"></div>
 </div>

</section>




<section class="cid-s7QAStHeeS" id="footer1-18">
    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                      <span class="mbr-iconfont mbri-globe" style="color: rgb(45, 169, 108); fill: rgb(45, 169, 108); font-size: 60px;"></span>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Dirección
                </h5>
                <p class="mbr-text">
                    1234 Street Name
                    <br>Ciudad, Street 12345</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contactos
                </h5>
                <p class="mbr-text">
                    Correo electrónico: support@xxxx.com
                    <br>Teléfono: +1 (0) 345 5675 451
                    <br>Fax: +1 (0) 456 5677 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Comodidades</h5>
                <p class="mbr-text"><a href="http://webdesignvista.com/">Desayuno&nbsp;</a><br><a class="text-primary" href="http://webdesignvista.com/">Gimnasio Gratis&nbsp;</a><br><a class="text-primary" href="http://webdesignvista.com/">Visita turística</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">© Copyright 2019 web design vista - All Rights Reserved</p><p></p><p></p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-pinterest socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>