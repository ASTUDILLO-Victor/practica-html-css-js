<html lang="es">
    <head>
        <title>EQUIPARACION 2024</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>

    </head>

    <body>

        <center>
            <div>

                <div class="row">
                    <div class="col-md-6 bg-primary">
                        <h1>heading 1</h1>
                    </div>
                    <div class="col-md-6 bg-dark text-white">
                        <h2>heading 2</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 bg-secondary">
                        <h3 class="text-uppercase">heading 3</h3>
                    </div>
                    <div class="col-md-1 bg-black text-white">
                        <h4 class="text-lowercase">heAdIng 4</h4>
                    </div>
                    <div class="col-md-2 bg-success">
                        <h5 class="text-capitalize">heading 5</h5>
                    </div>
                    <div class="col-md-5 bg-info">
                        <h6 class="text-end">heading 6</h6>
                    </div>

                </div>

            </div>
        </center>


        <div>
            <p> Pablito <b class="fst-italic">clavo</b> un <i class="text-decoration-underline">clavito</i>. Cuántos <s class="fw-bold">clavos</s> clavo <u class="text-decoration-line-through">Pablito</u>? </p>
        </div>

        <div>
            <ol>
                <li>Ordenado 1</li>
                <li>Ordenado 2</li>
                <li>Ordenado 3</li>
            </ol>
            <ul>
                <li>Desordenado 1</li>
                <li>Desordenado 2</li>
                <li>Desordenado 3</li>
            </ul>
        </div>


        <div class="row" >
            <center>
            <div class="col-md-8">
            <table class="table table-striped table-bordered table-hover border-danger">
                <thead class="border-2">
                    <tr class="bg-info">
                        <th class="bg-warning">NOMBRE</th>
                        <th class="bg-warning">APELLIDO</th>
                        <th>CEDULA</th>
                        <th>CUMPLEAÑOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Charles</td>
                        <td>Perez</td>
                        <td>0914256697</td>
                        <td>26-octubre</td>
                    </tr>
                    <tr>
                        <td>Winston</td>
                        <td>Alvarado</td>
                        <td>0915143754</td>
                        <td>05-Febreo</td>
                    </tr>
                    <tr>
                        <td>Winston</td>
                        <td>Alvarado</td>
                        <td>0915143754</td>
                        <td>05-Febreo</td>
                    </tr>
                </tbody>
<!--                <tfoot>-->
<!--                <tr>-->
<!--                    <th>COLUMNA 1</th>-->
<!--                    <th>COLUMNA 2</th>-->
<!--                    <th>COLUMNA 3</th>-->
<!--                    <th>COLUMNA 4</th>-->
<!--                </tr>-->
<!--                </tfoot>-->
            </table>
            </div>
            </center>
        </div>


        <center>
        <div>
            <img src="https://es.la-croix.com/images/4000/como-leer-la-biblia.jpeg" width="15%" />
            <!--       <img src="img/biblia.jpeg" title="fuente: es.la-croix.com" />-->
        </div>
        </center>

        <br/><br/><br/>

        <div class="row">
            <center>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3>FORMULARIO DE INSCRIPCION</h3>
                    </div>
                    <div class="card-body">
                        <form method="get" action="forms/grabar.php" id="formulario1" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-12 text-start">
                                    <label class="form-label">Nombre:</label>
                                    <input onkeypress="return SoloLetras(event);" class="form-control border-success text-uppercase" onchange="validarNombre(); agregarEmail();" type="text" maxlength="50" minlength="3" name="nombre" id="nombre" placeholder="Nombre y Apellido" required />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1 text-end">
                                    <label class="form-label">Correo:</label>
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" onchange="validarcorreo();" type="email" name="correo" id="correo" placeholder="Aqui escriba el correo" />
                                </div>

                                <div class="col-md-1 text-end">
                                    <label class="form-label">Contraseña:</label>
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" type="password" name="clave" id="clave" placeholder="Aqui escriba el password" />

                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Edad:</label>
                                    <input class="form-control border-danger" onkeypress="return SoloNumeros(event)" onchange="validarEdad()" type="number" min="0" name="edad" id="edad" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Fecha Nacimiento:</label>
                                    <input class="form-control" type="date" min="2024-04-06" max="2024-04-20" name="fecha" id="fecha" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Fecha de Ingreso:</label>
                                    <input class="form-control" type="datetime-local" name="fecha_hora" id="fecha_hora" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Hora de salida:</label>
                                    <input class="form-control" type="time" name="tiempo" id="tiempo" />
                                </div>
                            </div>

                            <input type="hidden" name="esc" id="esc" />

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label CLASS="form-label">Sexo:</label>
                                    <input class="form-check-inline" type="radio" name="sexo" id="sexo1" checked  /> Masculino
                                    <input class="form-check-inline" type="radio" name="sexo" id="sexo2" /> Femenino
                                    <input class="form-check-inline" type="radio" name="sexo" id="sexo3" /> Indeterminado

                                </div>
                                <div class="col-md-4">
                                    <label CLASS="form-label">Foto:</label>
                                    <input class="form-control" type="file" name="arch" id="arch"   />
                                </div>
                                <div class="col-md-4">
                                    <label CLASS="form-label">Términos y Condiciones:</label>
                                    <input class="form-check-inline" type="checkbox" name="terminos" id="terminos" /> Acepta terminos y condiciones

                                </div>
                            </div>

                            <br>

                            <button class="btn btn-success" type="button" onclick="mensaje()"  >Presiona aqui</button>
                            <button class="btn btn-info" type="submit" >Enviar el formulario</button>
                            <button class="btn btn-danger" type="reset" >Limpiar el formulario</button>
                        </form>

                        <form method="post" action="forms/grabar.php" id="formulario2">
                            <input type="text" name="apellido" id="apellido" />
                            <input type="submit" value="Enviar datos post" />
                        </form>

                    </div>
                    <div class="card-footer">

                    </div>



                </div>

            </div>
            </center>
        </div>


        <div>
            <a class="btn btn-warning" href="https://google.com" target="_blank">Ir a google</a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://youtube.com" target="_blank">Ir a Yotube</a> <br/>
            <hr />
            <a href="https://facebook.com" target="_self">Ir a facebook</a>
            <p>Mi mamá <span>me mima</span> mucho </p>
        </div>

    </body>
<script>
    function mensaje(){
        alert("Mensaje que queramos poner");
    }

    function mostrarEdad(){
        // cuando tengo jquery
        let edad = $("#edad").val(); //var
        alert(edad);
        //cuando no tengo jquery "DOM"
        var ed = document.getElementById("edad").value;
        alert("Su edad es: " + ed);
    }

    function validarEdad(){
        var edad = $("#edad").val();
        if (edad < 18){
            $("#edad").removeClass("border-success");
            $("#edad").addClass("border-danger");
        }else{
            $("#edad").removeClass("border-danger");
            $("#edad").addClass("border-success");
        }
    }

    function validarNombre(){
        let nom = $("#nombre").val();
        var numletras = nom.length;
        if(numletras<5){
            $("#nombre").removeClass("text-primary");
            $("#nombre").addClass("text-warning");
            $("#nombre").addClass("text-decoration-line-through");
        }else{
            $("#nombre").removeClass("text-warning");
            $("#nombre").addClass("text-primary");
            $("#nombre").removeClass("text-decoration-line-through");
        }
    }

    function agregarEmail(){
        var nom = $("#nombre").val();
        nom = nom.toLowerCase();
        var nuevocorreo = nom + "@hotmail.com"
        $("#correo").val(nuevocorreo);

    }

    function SoloLetras(e){
        var tecla = (document.all) ? e.keyCode : e.which;// 2
        if (tecla==8) return true; // 3
        var patron =/[A-Za-z\s]/; // 4
        var te = String.fromCharCode(tecla); // 5
        return patron.test(te); // 6
    }

    function SoloNumeros(e){
        var tecla = (document.all) ? e.keyCode : e.which;// 2
        if (tecla==8) return true; // 3
        var patron =/[0-9]/; // 4
        var te = String.fromCharCode(tecla); // 5
        return patron.test(te); // 6
    }

    function validarcorreo(){
        var correo = $("#correo").val();
        var patron  = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
        if (patron.test(correo) == false){
            alert("Valiste, escribe de nuevo el correo burr@");
            $("#correo").val("");
        }

    }



</script>



</html>