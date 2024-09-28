<section?php

require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
$DB = conectDB();

$query = "SELECT * FROM users";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="font-family" >
    <link rel ="stylesheet" href="styles.css">
    <link rel="icon" href="logo_gralco_blanco.png">
    <link rel="stylesheet" href="normalize.css">
    
    <title>Gralco</title>
    
</head>
<body> 
    
   
    <div class="container">
        <img src="logo_gralco_blanco.png" alt="Gralco" class="menu-navegacion">
        <nav class="menu">        
            <li><a href="quienesSomos.php" class="menu-navegacion">Quienes Somos</a></li>
            <li><a href="Sostenibilidad.php" class="menu-navegacion">Sostenibilidad</a></li>
            <li><a href="certificaciones.php" class="menu-navegacion">Certificaciones</a></li>
            <li><a href="lineaDeNegocios.php" class="menu-navegacion">Linea de Negocio</a></li>
            <li><a href="login.php" class="menu-navegacion">Portal de Empleados</a></li>
        </u>
    </div>
</nav>



<header>
    <div>
        <img src="Diseno-sin-titulo-3_preview_rev_1-1.png" class="diseño" alt="diseño">
        <aside>
            <div class="parrafos"> 
            <p class="parrafo">enfoque hacia la productividad</p>
            <p class="parrafo">sistema integrado de gestion robusto</p>
            <p  class="parrafo">cumpliendo en los niveles de servicio</p>
            <p class="parrafo" > compromiso con nuestro plan de RSE</p>
            <p class="parrafo" > estrategia orientada al cliente</p>
        </div>
        </aside>
    
</header>


<section>
    <h2> Quiénes Somos</h2> 
    <div>

   
   
        <div class="quienes-somos">                                             
        <p>  
    Somos parte de la división industrial de Tri Marine Group, enfocados en suplir productos derivados del atún, con altos estándares de productividad, calidad, niveles de servicio y responsabilidad social y ambiental.
        <p>Estamos ubicados en la ciudad de Barranquilla, Colombia.</p>
            
        <div>
            <a href="conoce.html" class="boton-conoce">Conoce más</a>
        </div>
       
    </div>
    
    
</div>
    </p>


</section>


<section>
    <h3>Contactanos</h3>
    <div class="contactos">
      <div class="columna-izquierda">
        <div class="ubicacion">
          <img class="logo-ubicacion" src="Citycons_location_icon-icons.com_67931.ico"ubicacion" >
          <p>calle 1#38-121-<br> Zona industrial</p>
        </div>
        <div class="ubicacion">
          <img class="telefono" src="phone-volume_icon-icons.com_56474.ico" alt="telefono">
          <p>+57 (605) 319 76 06</p>
        </div>
        <div class="ubicacion">
          <img class="telefono" src="mail_22591.ico" alt="telefono">
          <p>info@gralco.co</p>
        </div>
      </div>
      <div class="columna-central">
        <div class="mapa">
          <img src="image.png" alt="mapa">
        </div>
      </div>
      <div class="columna-derecha">
        <form>
          <input type="text" placeholder="nombre">
          <input type="email" placeholder="correo">
          <input type="tel" placeholder="telefono">
          <input type="text" placeholder="empresa">
          <label for="mensaje" ></label>
           <textarea id="mensaje" placeholder="que quiere decirnos" ></textarea>
          <p>*Términos, condiciones y políticas:</p>
          <label><input type="checkbox" name="terminos" value="1"> He leído y estoy de acuerdo con los términos y condiciones</label><br>
          <a href="https://www.gralco.co/wp-content/uploads/2021/01/Politica-de-Privacidad-y-Tratamiento-de-Datos-Personales-de-GRALCO.pdf" target="_blank">términos y condiciones  y con las políticas de privacidad y cookies</a>
          <button class="boton-conoce" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </section>





<section>
    <h3 class="lineaDeNegocios">Líneas de Negocio</h3>
    <div class="logo">
        <div>
            <img src="atun-1-e1605905319250.png" class="imagen-logo" alt="atun">
            <h3>Producto Terminado</h3>
            <p>Conservas de atún en diferentes tamaños y presentaciones: lomos, trozos, rallado, preparaciones con verduras, salsas, arroz, etc. </p> 
            <p>Garantizamos calidad, nivel de servicio, agilidad en nuestras entregas, trazabilidad y cumplimiento de especificaciones con el menor costo del mercado.</p>
        </div>
        <div>
            <img src="fish64.png" class="imagen-logo" alt="atun">
            <h3>Lomos Congelados</h3>
            <p>Producimos lomos y rallados precocidos congelados de atún de las diferentes especies y limpiezas, de acuerdo a los requerimientos de nuestros clientes. </p>
               <p> Somos el mejor socio para desarrollar negocios de atún exitosos en todo el mundo. </p>
        </div>
        <div>
            <img src="harina-2-e1605905308768.png" class="imagen-logo" alt="atun">
            <h3>Productos Especiales</h3>
            <p>Producimos harina y aceite de pescado para la industria de alimento animal.</p>
                <p> Aseguramos el pleno cumplimiento de las especificaciones técnicas, entrega y trazabilidad de sus suministros.</p>
        </div>
    </div>
</section>

<h2 class="clientes">Nuestros Clientes</h2>
<div class="patrocinadores" >
<img src="/imagenes/CostaBlanco_logo-e1607287772780.png\" alt="">
<img src="/imagenes/frescampo_logo.png" alt="">
<img src="/imagenes/LOGO-ALAMAR-e1607288439390.png" alt="">
<img src="/imagenes/LOGO-ISABEl-Azul-Solo-e1607291371571.png" alt="">
<img src="/imagenes/taeq_logo-e1607287815580.png" alt="">
<img src="/imagenes/logo-colsubsidio.jpg" alt="">
</div>






<section class="contactos">
    <div class="column  column1 ">
        <img class="imagen-contacto" src="/LOGO-GRALCO-SIN-FONDO.png" alt="logo-azul">
        <a class="imagen-contacto texto-parrafo" href="https://www.gralco.co/wp-content/uploads/2021/01/Politica-de-Privacidad-y-Tratamiento-de-Datos-Personales-de-GRALCO.pdf" target="_blank">
            Políticas<br>Privacidad
        </a>
    </div>
    <div class="column">
        <h4 class="contactanos">Contactanos</h4>
        <p>calle 1#38-121-<br> Zona industrial <br>     
        +57 6053197606  <br> info@gralco.co</p>
    </div>
    <div class="column">
        <h4 class="contactanos">Trabaja con <br>nosotros</h4>       
        <button class="boton-infinito" onclick="window.open('https:///www.gralco.co/es/trabaja-con-nosotros/', '_blank')">Unete al equipo</button>
    </div>
    <div class="column">
        <h4 class="contactanos">Siguenos en redes sociales</h4>
        <div class="logo-redes">
        <img src="/imagenes/icons8-facebook-nuevo-48.png" alt="">
        <img src="/imagenes/icons8-linkedin-48.png" alt="">
        <img src="/imagenes/icons8-youtube-64.png" alt="">
        </div>
       
    </div>
    <div class="column">
        <h4 class="contactanos">Gremios</h4>
        <div class="enlaces">
    <a href="https://www.andi.com.co/">andi</a>
    <a href="https://www.analdex.org/">analdex</a>
    <a href="https://probarranquilla.org/">pro Barranquilla</a>
    <a href="https://www.amchambaq.com/es_co/">Amcham Colombia</a>
    <a href="">Camcomercio Barranquilla</a>
</div>

    </div>
</section>





<footer class="final">
    <p>
        &copy; Gralco S.A. | Diseñado y Desarrollado por Sergio Fontalvo
    </p>
</footer>


<script src="./js/script.js"></script>


</body>
</html>



