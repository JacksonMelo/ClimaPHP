<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clima e Tempo de Brusque-SC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="js/clima.js"></script>
        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações de Brusque e região - Desenvolvido por JacksonMelo"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="Clima,temperatura, temperatura em Brusque,  Tempo de brusque, umidade de Brusque, Previsão para Brusque, Clima para Brusque, Temperatura climática em Brusque, Por do sol em Brusque, Nascer do sol em Brusque, Velociodade do vento em Brusque, Previsão de chuva para Brusque"/>
        <meta NAME="title" CONTENT="Clima e Tempo de Brusque-SC" />
        <meta NAME="identifier-url" content="https://jackson-clima-senai.herokuapp.com" />
        <meta NAME="author" content="Jackson Melo" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="jackson_nascimento@estudante.sc.senai.br"/>    
        
        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://jackson-clima-senai.herokuapp.com" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="WebSite" />
        <meta property="og:title" content="Clima e Tempo de Brusque-SC" />
        <meta property="og:description" content="Site de informações de Brusque e região - Desenvolvido por JacksonMelo" />
        <meta property="og:image" content="https://jackson-clima-senai.herokuapp.com/img/porDoSol.jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações de Brusque e região - Desenvolvido por JacksonMelo" />
        <meta name="twitter:title" content="Clima e Tempo de Brusque-SC" />
    </head>
    <body>
        <div class="alert alert-secondary" role="alert">
         
        </div>  
        
       <div class="row">
        
           <div class="col-md-12">
               
               <div class="jumbotron" style="background-color:red">
                   <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                   <p>
                       <span id="situacao"></span>
                       <img id="icone" src="img/icones/02d.png"/>
                       
                       
                   </p>
               </div> 
               
           </div>
           
        </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white'>Umidade do ar</h1>
                   <img src="img/umidade1.png"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>A umidade atual de Brusque-SC | <span id="umidade"></span>  </h1>
                        </div>
                    </div>
               </div> 
           </div>
        </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white'>Velocidade do ar</h1>
                   <img src="img/pressaoDoAr.png"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>A Velocidade atual de Brusque-SC | <span id="pressaoAr"></span>  </h1>
                        </div>
                    </div>
               </div> 
           </div>
        </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white' >Temperatura</h1>
                   <img src="img/TemperaturaMaxima.png"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>A Temperatura Máxima de Brusque-SC | <span id="temperaturaMaxima"></span>  </h1>
                        </div>
                    </div>
                    

                   <img src="img/STemperaturaMinima.png"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>A Temperatura Mínima de Brusque-SC | <span id="temperaturaMinima"></span>  </h1>
                        </div>
                    </div>
               </div> 
            </div> 
               
               
           </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white'>Velocidade do ar</h1>
                   <img src="img/velocidadeDoAr.png"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>A velocidade do ar atual de Brusque-SC | <span id="velocidadeVento"></span>  </h1>
                        </div>
                    </div>
               </div> 
           </div>
        </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white'>Amanhecer</h1>
                   <img src="img/amanhecer.jpg"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>Amanhecer | <span id="amanhecer"></span>  </h1>
                        </div>
                    </div>
               </div> 
           </div>
        </div>
        
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron" style="background-color:blue ">
                   <h1 style='color:white'>Por do sol</h1>
                   <img  src="img/porDoSol.jpg"/>
                    <span id="situacao"></span>
                    <div class="jumbotron jumbotron-fluid" style="background-color:blue">
                        <div class="container">
                            <h1 style='color:white'>Por do sol | <span id="pordosol"></span>  </h1>
                        </div>
                    </div>
               </div> 
           </div>
        </div>
        
    </body>
</html>
