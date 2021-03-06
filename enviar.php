<?php 
$myemail = 'rodalbertlopez@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['correo'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Has recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Rodrigo Sánchez</title>
    <meta name="author" content="Rodrigo Alberto Sanchez Lopez">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/Laptop.ico">
    <!--Fonts-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
</head>
<body>
    <nav class="navigation">
        <ul class="navRight">            
            <li>
                <a href="#about">Sobre Mi</a>
            </li>
            <li>
                <a href="#skills">Conocimientos</a>
            </li>
            <li>
                <a href="#projects">Proyectos</a>
            </li>
            <li>
                <a href="#contact">Contacto</a>
            </li>
        </ul>
        <ul class="navLeft">
            <li>
                <a href="https://www.linkedin.com/in/rodrigo-alberto-s%C3%A1nchez-l%C3%B3pez-bb3b101ab/" target="blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/RodrigoSanchez2807" target="blank">
                    <i class="fab fa-github-square"></i>
                </a>
            </li>            
        </ul>
    </nav>

    <div class="container">
        <header class="banner">
            <h1>Rodrigo Alberto Sánchez López</h1>
            <h2>Ing. en Sistemas Computacionales</h2>
        </header>

        <section id="about">
            <h2>Acerca de mi</h2>
            <img src="images/rodrigo_sanchez.png" alt="Rodrigo_Sanchez">
            <p>Mi nombre es Rodrigo Alberto Sánchez López, tengo 27 años, soy recien egresado de la Ingeniería en Sistemas Computacionales y actualmente me encuentro cursando una especialidad en Proyectos Informáticos y Tecnología Web. Soy una persona autodidacta, responsable, comprometida y trabajadora. Tengo conocimientos en el área del desarrollo web front-end y back-end ya que he realizado proyectos de ambas ramas.</p>
        </section>

        <section id="skills">
            <div class="tec">
                <h2>Conocimientos</h2>
                <p>Estas son las tecnologias con las que he trabajado</p>
            </div>

            <div class="card">
                <img src="images/html.png" alt="html5">
                <h4>Html</h4>
            </div>
            <div class="card">
                <img src="images/css.png" alt="css">
                <h4>Css</h4>
            </div>
            <div class="card">
                <img src="images/javascript.png" alt="js">
                <h4>JavaScript</h4->
            </div>
            <div class="card">
                <img src="images/php.png" alt="php">
                <h4>php</h4>
            </div>
            <div class="card">
                <img src="images/mysql.png" alt="mysql">
                <h4>MySql</h4>
            </div>  
        </section>

        <section id="projects">
            <div class="tittle">
                <h2>Proyectos</h2>
            </div>      
            <div class="projectCard">
                <img src="images/projects/home_md.png" alt="mdPage">
                <h4>Mortem Dextrophia band page</h4>
                <a href="#" class="btnVer" >Visitar</a>
            </div>
            <div class="projectCard">
                <img src="images/projects/logotech.jpg" alt="techcology">
                <h4>Techcology - Empresa de reciclaje</h4>
                <a href="#" class="btnVer" >Visitar</a>
            </div>
            <div class="projectCard">
                <img src="images/projects/Tecnoelement.png" alt="technoelement">
                <h4>Technoelement - Tienda virtual</h4>
                <a href="#" class="btnVer" >Visitar</a>
            </div>
        </section>

        <section id="contact">
            <form method="POST" action="enviar.php">
                <h2>Contacto</h2>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="correo" placeholder="Correo" required>
                <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                <br>
                <input type="submit" value="Enviar" id="btn">
            </form>
        </section>

    </div>
    <hr>
    <footer>
        <h2>Página creada por : <span>Rodrigo Alberto Sánchez López</span></h2>
    </footer>
</body>
</html>