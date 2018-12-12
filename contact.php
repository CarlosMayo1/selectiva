<?php

$nameError="";
$lastnameError="";
$emailError="";
$multipleOptionError="";


if(isset($_POST["submit"])) {
    
    //Check if the input "name" is empty
    if(empty($_POST["name"])){
        
        $nameError="Debe ingresar su nombre";
    }
    
    else {
        
        $name=Test_User_Input($_POST["name"]);
        if(!preg_match("/^[A-Za-z\. ]*$/",$name)){
            
            $nameError="Solo se permite letras y espacios vacíos!";
        }
        
    }
    
    //Check if the input "lastname" is empty
    
    if(empty($_POST["lastname"])){
        
        $lastnameError="Debe ingresar su apellido";
    }
    
    else {
        
        $lastname=Test_User_Input($_POST["lastname"]);
        if(!preg_match("/^[A-Za-z\. ]*$/",$lastname)){
            
            $lastnameError="Solo se permite letras y espacios vacíos!";
        }
        
    }
    
    //Check if the input "email" is empty
    if(empty($_POST["email"])){
        
        $emailError="Debe ingresar su email";
    }
    
    else {
        
        $email=Test_User_Input($_POST["email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email)){
            
            $emailError="Email inválido";
        }
        
    }
    
    //Check if the input "multiple Option" is empty
    if($_POST['validation-multipleOption'] == "Elegir Motivo") {
        $multipleOptionError = "Debe elegir el motivo";
    }

    
    
}
    
  

function Test_User_Input($data){
    
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACTENOS || SELECTIVA</title>
    <!--- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--- This is my CSS file -->
    <link rel="stylesheet" type="text/css" href="style_contact.css">
    <!--- Lates compiled and minified js-->
    <link type="text/javascript" href="js/bootstrap.min.js">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="p_home">
     <div class="wrapper">
         <header class="c_header">
             <div class="c_header__inner">
                 <div class="c_header__left">
                     <a href="index.html"><button type="button" class="btn btn-outline-primary">Página Principal</button></a>
                 </div>
                 <div class="c_header__logo-container">
                     <img class="selectiva-logo" src="img/logo-selectiva.jpg" width="400">
                 </div>
                 <div class="c_header__right">
                     <div class="dropdown dropdown--login">
                         <a class="dropdown_main-link" href="#">Iniciar sesión</a>
                     </div>
                     <div class="dropdown dropdown--signup">
                         <a class="dropdown__main-link button" href="#"><button type="button" class="btn btn-outline-danger">Regístrate</button></a>
                     </div>
                 </div>
             </div>
         </header>
         <section class="contact">
             <div class="container">
                 <form action="contact.php"class="needs-validation form-1" onsubmit="return validation()" method="POST" novalidate >
                      <div class="form-row">
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom01">Nombre(s)</label>
                          <input type="text" name="name" class="form-control" id="validation-name" placeholder="First name" value="" required>
                          <!--<div class="valid-feedback">
                            Correcto!
                          </div>-->
                          <div class="invalid-feedback">
                            <?php echo $nameError; ?>
                          </div>
                        </div>
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom02">Apellido(s)</label>
                          <input type="text" name="lastname" class="form-control" id="validation-lastname" placeholder="Last name" value="" required>
                          <!--<div class="valid-feedback">
                            Correcto!
                          </div>-->
                            <div class="invalid-feedback">
                            <?php echo $lastnameError; ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationCustom03">Correo Electrónico</label>
                          <input type="text" name="email" class="form-control" id="validation-email" placeholder="Email" required>
                          <div class="invalid-feedback">
                            <?php echo $emailError; ?>
                          </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom01">Empresa</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="" value="">
                          <!-- <div class="invalid-feedback" id="nameError">
                            
                          </div> -->
                        </div>
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom02">Cargo del solicitante</label>
                          <input type="text" class="form-control" id="validationCustom02" placeholder="" value="">
                          <!-- <div class="invalid-feedback" id="nameError">
                            
                          </div> -->
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom01">País</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Country" value="Perú">
                          <!-- <div class="invalid-feedback">
                            Debe ingresar el País
                          </div> -->
                        </div>
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom02">Provincia </label>
                          <input type="text" class="form-control" id="validationCustom02" placeholder="District. / State." value="">
                          <!-- <div class="valid-feedback">
                            Looks good!
                          </div> -->
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom01">Teléfono Fijo</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="" value="">
                          <!-- <div class="invalid-feedback">
                            Debe ingresar número de teléfono
                          </div> -->
                        </div>
                        <div class="col-md-6 mb-6">
                          <label for="validationCustom02">Teléfono Móvil</label>
                          <input type="text" class="form-control" id="validationCustom02" placeholder="" value="">
                          <!-- <div class="invalid-feedback">
                            Debe ingresar número de teléfono
                          </div> -->
                        </div>
                     </div>
                     <br>
                     <div class="form-group">
                        <select class="custom-select" required>
                          <option value="">Elegir Motivo</option>
                          <option value="1">Reclutamiento y Selección</option>
                          <option value="2">Evaluaciones Psicológicas</option>
                          <option value="3">Manual de Operaciones y Funciones</option>
                          <option value="4">Talleres</option>
                          <option value="5">Asesoría en Reubicación Laboral</option>
                          <option value="6">Otros</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo $multipleOptionError; ?>
                        </div>
                  </div>
                     <!--  <div class="form-row">
                         <div class="col-md-12 mb-6">
                            <select class="custom-select" name="validation-multipleOption">
                                <option value="0">Elegir Motivo</option>
                                  <option value="1">Reclutamiento y Selección</option>
                                  <option value="2">Evaluaciones Psicológicas</option>
                                  <option value="3">Manual de Operaciones y Funciones</option>
                                  <option value="4">Talleres</option>
                                  <option value="5">Asesoría en Reubicación Laboral</option>
                                  <option value="6">Otros</option>
                            </select>
                            
                        </div>
                                           </div> -->
                     <div class="form-group s_comment">
                        <label for="exampleFormControlTextarea1">Comentarios</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                    </div>
                    <button class="btn btn-primary container" name="submit" type="submit">Enviar</button>
                </form>
                <script type="text/javascript" src="warning.js"></script>
            </div>
         </section>
         <!--<script src="js/jquery-3.3.1.min.js"></script>
         <script>
             function validation(){
                 var name = document.getElementById('validation-name').value;
                 var lastname = document.getElementById('validation-lastname').value;
                 var email = document.getElementById('validation-email').value;

                 if(name == "" && lastname == "" && email == "") {
                     document.getElementById('Error').innerHTML = "Campo son obligatorio";
                     return false;
                 }
                 
                 if(lastname== "") {
                     document.getElementById('lastnameError').innerHTML = "Por favor ingrese su apellido";
                     return false;
                 }
                 
                 if(email== "") {
                     document.getElementById('emailError').innerHTML = "Por favor ingrese su correo";
                     return false;
                 }
                 
                 
                 
                 
             }
         </script>-->
         <!--<section class="c_hero">
             <div class="container">
             <ul id="menu-header-menu-spanish" class="c_nav c_nav--main">
                <li id="menu-item" class="menu-item">
                     <a href="#">
                         Contactenos
                     </a>
                 </li>
                 <li id="menu-item" class="menu-item">
                     <a href="reclutamiento.html">
                         Reclutamiento & Seleccion
                     </a>
                 </li>
                 <li id="menu-item" class="menu-item">
                     <a href="e_competencias.html">
                         Evaluacion por Competencias
                     </a>
                 </li>
             </ul>
             <div class="vertical-align">
                 <h2 class="c_hero__title">BUSQUEDA DIRECTA</h2>
                  
             </div>
         </div>
        </section>
        <section class="c_section p_home__trasforming">
            <div class="container">
                <h2 class="c_section__title">
                    FASES DEL SERVICIO DE BUSQUEDA DIRECTA (ENFOCADOS EN EJECUTIVOS Y MANDOS MEDIOS)
                </h2>
            </div>
            </section>
            <section>
               <div class="card-container flex text-left ">
                   <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #1</h2>
                        <p class="card-container-text text-center">Asesoramiento previo y definicion de perfil</p>
                        <ul card-container-list>
                            <li>Conocimiento de la empresa: Cultura, valores y negocios, expectativas y proyeccion.</li>
                            <li>Levantamiento del perfil, asesoramiento de la posicion en el mercado, estructura salarial y complejidad.</li>
                            <li>Elaboracion de cronograma de trabajo.</li>
                        </ul>
                    </div>
                    <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #2</h2>
                        <p class="card-container-text text-center">Planificacion</p>
                        <ul card-container-list>
                            <li>Analisis de las necesidades del cliente:
                            Empresa y perfil de la posicion.</li>
                            <li>Definicion de la estretegia de busqueda y envio de cronograma de trabajo.</li>
                            <li>Analisis de la industria y posicion a investigar.</li>
                            <li>Definicion de las industrias transferibles y posiciones objetivo.</li>
                        </ul>
                    </div>
                    <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #3</h2>
                        <p class="card-container-text text-center">Investigacion de Objetivos</p>
                        <ul card-container-list>
                            <li>Identificacion y detalle del mercado objetivo.</li>
                            <li>Busqueda en base de datos, referencia e investigacion del mercado a traves de mapeo de empresas.</li>
                            <li>Filtro inicial a traves de una pre-entrevista telefonica con posibles candidatos potenciales.</li>
                            <li>Elaboracion del Long List de candidatos.</li>
                        </ul>
                    </div>
                    <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #4</h2>
                        <p class="card-container-text text-center">Resultados</p>
                        <ul card-container-list>
                            <li>Coordinacion con el cliente para la presentacion de resultados.</li>
                            <li>Presentacion del Short List de candidatos.</li>
                            <li>Definicion con el cliente de los candidatos preseleccionados para la siguiente etapa del proceso.</li>
                        </ul>
                    </div>
                    <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #5</h2>
                        <p class="card-container-text text-center">Evaluacion y terna finalista.</p>
                        <ul card-container-list>
                            <li>Entrevista por competencias a los candidatos preseleccionados.</li>
                            <li>Preparacion y ejecucion de las evaluaciones (dinamica, pruebas psicotecnicas, etc., segun sae el caso).</li>
                            <li>Verificacion de referencias laborales y situacion de riesgo criditicio.</li>
                            <li>Presentacion de informes y de coordinacion de entrevistas con el cliente.</li>
                        </ul>
                    </div>
                    <div class="card-container-column">
                        <h2 class="card-container-title text-center">Fase #6</h2>
                        <p class="card-container-text text-center">Cierre del proceso y seguimiento</p>
                        <ul card-container-list>
                            <li>Intercambio de la informacion con el cliente sobre las entrevistas de la terna.</li>
                            <li>Seguimiento y apoyo al cliente sobre la presentacion de la oferta laboral y cierre del proceso.</li>
                            <li>Seguimiento periodico a la incorporacion del candidato hasta el termino del periodo de garantia.</li>
                        </ul>
                    </div>
               </div>
            </section>-->
           
                
         </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>