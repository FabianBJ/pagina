<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="Estilos/estiloFormulario.css">

    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Goldman&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            
            <ul>
                <li><a href="indexsitiooficial.html"><img src="images/Logo.png"></a></li>
                
                
            <tr>
            <td><a href="indexpaletadecolores.html"><img id="paletacolor" src="images/Colores.jpg"></a></td>
            
            <td><a href="https://www.facebook.com/Umbra-Nosferatu-101521812569306" target="_blank"><img id="Facebook" src="images/Facebook.png"></a></td>
            
            <td><a href="https://www.instagram.com/umbranosferatu767/" target="_blank"><img id="Instagram" src="images/Instagram.png"></a></td>
          
            <td><a href="https://twitter.com/UNosferatu" target="_blank"><img id="Twitter" src="images/Twitter.png"></a></td>
            <td><a href="indexFormulario.php"_blank""><img id="contacto" src="images/Contactar.png"></a></td>

    
            </tr>
                
            </ul>
        </nav>
        </header>
        
        <main>
        
            <article id="relleno">
            </article>
        
    <section>
    <article id="left">

    <p class="Título">¡ESCRIBENOS!</p>

    <form class="usuarios" action="guardadoEncuesta.php" method="POST" id="usuarios" runat="server" enctype="multipart/form-data">
        <div id="Align">
        <label for="Nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre" pattern="[a-z] {1-30}" maxlength="30"required ><br><br>

        <label for="Apellido">Apellido Paterno:</label><br>
        <input type="text" id="Apellido" name="Apellido" pattern="[a-z] {1-60}"  maxlength="60"required ><br><br>

        <label for="Pais">País:</label><br>
        <input type="text" id="Pais" name="Pais" pattern="[a-z] {1-60}"  maxlength="60"required ><br><br>

        <label for="Correo">Correo:</label><br>
        <input type="email" id="Correo" name="Correo" maxlength="60"required ><br><br>

        <label for="message">Mensaje:</label><br>
        <input type="text" id="message" name="message" pattern="[a-z] {1-500}" maxlength="500"required ><br><br>

        <button class="submit" type="submit">Enviar Registro</button>
        </div> 
    </form>
    </article>
    </section>
    
    </main>

    <footer id="pie">
        betancefabian934@gmail.com
        <br>
        MAYO 2022
        <br>
        <a href="indexIdentidad.html">El Creador</a>
    </footer>
</body>


</html>