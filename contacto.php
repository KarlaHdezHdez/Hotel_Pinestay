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
  
  <title>Contacto</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  

  <!---->
  <style>
        body {
  font: 15px arial, sans-serif;
  background-color: #d9d9d9;
  padding-top: 15px;
  padding-bottom: 15px;
}

#bodybox {
  margin: auto;
  max-width: 550px;
  font: 15px arial, sans-serif;
  background-color: white;
  border-style: solid;
  border-width: 1px;
  padding-top: 20px;
  padding-bottom: 25px;
  padding-right: 25px;
  padding-left: 25px;
  box-shadow: 5px 5px 5px grey;
  border-radius: 15px;
}

#chatborder {
  border-style: solid;
  background-color: #f6f9f6;
  border-width: 3px;
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 20px;
  padding-left: 15px;
  border-radius: 15px;
}

.chatlog {
   font: 15px arial, sans-serif;
}

#chatbox {
  font: 17px arial, sans-serif;
  height: 22px;
  width: 100%;
}

h1 {
  margin: auto;
}

pre {
  background-color: #f0f0f0;
  margin-left: 20px;
}
    </style>

    
    
    
    
    
    
    <script>
        //links
//http://eloquentjavascript.net/09_regexp.html
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions


var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = 'Chatbot', //name of the chatbot
  talking = true; //when false the speach function doesn't work
//
//
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//edit this function to change what the chatbot says
function chatbotResponse() {
  talking = true;
  botMessage = "No entiendo...escriba más claro porfavor"; //the default message

  if (lastUserMessage === 'hola' || lastUserMessage =='Hola') {
    const hi = ['Hola, ¿qué duda tiene?', 'En este momento no estamos disponibles']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];;
  }

  if (lastUserMessage === 'name') {
    botMessage = 'Mi nombre es ' + botName;
  }
}
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//
//
//
//this runs each time enter is pressed.
//It controls the overall input and output
function newEntry() {
  //if the message from the user isn't empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    messages.push(lastUserMessage);
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
    //add the chatbot's name and message to the array messages
    messages.push("<b>" + botName + ":</b> " + botMessage);
    // says the message using the text to speech function written below
    Speech(botMessage);
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 8; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
  }
}

//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {
  if ('speechSynthesis' in window && talking) {
    var utterance = new SpeechSynthesisUtterance(say);
    //msg.voice = voices[10]; // Note: some voices don't support altering params
    //msg.voiceURI = 'native';
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 0.1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = 'Hello World';
    //utterance.lang = 'en-US';
    speechSynthesis.speak(utterance);
  }
}

//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is 'enter' runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  if (key == 38) {
    console.log('hi')
      //document.getElementById("chatbox").value = lastUserMessage;
  }
}

//clears the placeholder text ion the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}
    </script>

<!---->
  
  
</head>
<body>
    <section class="menu cid-s7QOdTVZl0" once="menu" id="menu2-1j">
        <?php   
            include ('header.php');
        ?>
    </section>

<section class="header1 cid-s7QOdPR31Y mbr-parallax-background" id="header16-1e">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">

                <nav aria-label="breadcrumb">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./paquetes.php">Paquetes</a></li>
                            <li class="breadcrumb-item"><a href="./comodidades.php">Comodidades</a></li>
                            <li class="breadcrumb-item"><a href="./reserva.php">Reserva</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                            <li class="breadcrumb-item"><a href="./acerca.php">Acerca de</a></li>
                            <li class="breadcrumb-item"></li>
                        </ol>
                    </div>
                </nav>

        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Contáctenos</h1>
                
                
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section form4 cid-s7QOtkIQZh" id="form4-1k">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12093.907838489706!2d-74.00521567793007!3d40.72952932994996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599af55395c1%3A0xda30743171b5f305!2sNew%20York%20University!5e0!3m2!1sen!2sin!4v1597599988564!5m2!1sen!2sin" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Tira una linea
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            No dude en contactarnos
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Listo para ofertas y cooperación.
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Teléfono: 7713004754<br>
                            Correo electrónico: pinestay@gmail.com
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="./contacto.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Vi5aIFbnTxvtDEOJtcnOZsedKV/QAoECR9sySZp48+WBkgqCBTwhsc04WkaMKDDeLE051Z7D77+/32pReyRZ4LiZ20a2wgaurhD3fZe+dnlM0mDOtYX9CtNw+JtSjuNO">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">¡Tu mensaje se ha enviado con exito!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <label for="nombre" class="form-label">Nombre completo: </label>
                                <input type="text" name="name" placeholder="Nombre" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-1k">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <label for="telefono" class="form-label">Teléfono: </label>
                                <input type="tel" name="phone" placeholder="Télefono" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-1k" pattern="[0-9]{10}">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <label for="correo" class="form-label">Correo electrónico: </label>
                                <input type="email" name="email" placeholder="Correo" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-1k">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <label for="mensaje" class="form-label">Ingrese el mensaje: </label>
                                <textarea name="message" placeholder="Mensaje" data-form-field="Message" class="form-control input display-7" required="required" id="message-form4-1k"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4"> ENVIAR MENSAJE</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="witsec-custom-html-block-1h" data-rv-view="412" style="background-color: rgb(255, 255, 255);">
                    <div class="container-fluid">
                    
                        <div id='bodybox'>
                        <h5 class="align-left aling center mbr-fonts-style display-7">Chatea con nosotros</h5>
                            <div id='chatborder'>
                                Hola, en que podemos ayudarte? <br><br>
                                <p id="chatlog4" class="chatlog">&nbsp;</p>
                                <p id="chatlog3" class="chatlog">&nbsp;</p>
                                <p id="chatlog2" class="chatlog">&nbsp;</p>
                                <p id="chatlog1" class="chatlog">&nbsp;</p>
                                
                                <input type="text" name="chat" id="chatbox" placeholder="Escribir mensaje..." onfocus="placeHolder()">
                            </div>
                            <br>
                            <br>

                        </div>
                        
                    </div>

 <div class="witsec-custom-html-container elements-content" style="padding-top: 3rem; padding-bottom: 2rem;">
     
    <div class="mbr-section__container block" style="width: 100%;"></div>
 </div>

</section>




<section class="cid-s7QOdSGuZU" id="footer1-1i">
    
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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>