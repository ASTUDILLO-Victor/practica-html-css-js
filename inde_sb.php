<html lang="es">
    <head>
        <title>EQUIPARACION 2024</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="css/estilo.css" />
        <script src="js/java.js"></script>

    </head>

    <body>

        <center>
            <div>
                <h1>heading 1</h1>
                <h2>heading 2</h2>
                <h3>heading 3</h3>
                <h4>heading 4</h4>
                <h5>heading 5</h5>
                <h6>heading 6</h6>
            </div>
        </center>


        <div>
            <p> Pablito <b>clavo</b> un <i>clavito</i>. Cuántos <s>clavos</s> clavo <u>Pablito</u>? </p>
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

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
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

        <center>
        <div>
            <img src="https://es.la-croix.com/images/4000/como-leer-la-biblia.jpeg" width="15%" />
            <!--       <img src="img/biblia.jpeg" title="fuente: es.la-croix.com" />-->
        </div>
        </center>

        <div>
            <form method="get" action="forms/grabar.php" id="formulario1" enctype="multipart/form-data">
                <label>Nombre:</label>
                <input type="text" maxlength="10" minlength="3" name="nombre" id="nombre" placeholder="Nombre y Apellido" />
                <label>Edad:</label>
                <input type="number" min="0" name="edad" id="edad" />
                <input type="hidden" name="esc" id="esc" />
                <label>Correo:</label>
                <input type="email" name="correo" id="correo" placeholder="Aqui escriba el correo" />
                <label>Fecha Nacimiento:</label>
                <input type="date" min="2024-04-06" max="2024-04-20" name="fecha" id="fecha" />
                <label>Fecha de Ingreso:</label>
                <input type="datetime-local" name="fecha_hora" id="fecha_hora" />
                <label>Hora de salida:</label>
                <input type="time" name="tiempo" id="tiempo" />
                <label>Contraseña:</label>
                <input type="password" name="clave" id="clave" placeholder="Aqui escriba el password" />
                <label>Foto:</label>
                <input type="file" name="arch" id="arch"   />
                <label>Sexo:</label>
                <input type="radio" name="sexo" id="sexo1" /> Masculino
                <input type="radio" name="sexo" id="sexo2" /> Femenino
                <input type="radio" name="sexo" id="sexo3" /> Indeterminado

                <label>Términos y Condiciones:</label>
                <input type="checkbox" name="terminos" id="terminos" /> Acepta terminos y condiciones

                <button type="button" >Presiona aqui</button>
                <button type="submit" >Enviar el formulario</button>
                <button type="reset" >Limpiar el formulario</button>
            </form>

            <form method="post" action="forms/grabar.php" id="formulario2">
                <input type="text" name="apellido" id="apellido" />
                <input type="submit" value="Enviar datos post" />
            </form>

        </div>


        <div>
            <a href="https://google.com" target="_blank">Ir a google</a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://youtube.com" target="_blank">Ir a Yotube</a> <br/>

            <hr />

            <a href="https://facebook.com" target="_self">Ir a facebook</a>

            <p>Mi mamá <span>me mima</span> mucho </p>
        </div>




    </body>
</html>