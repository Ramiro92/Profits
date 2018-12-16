<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/miestilo.css">
  <title>Principal</title>
</head>
<body>
<header>
  <img id="logo" src="IMG/LOGO.png" class="img-fluid" alt="Responsive image"> 
    <?php 
      include("menu.php");
    ?>
</header>    
    <br>
  <div class="container-fluid">     
    <div class="row">
<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">¿Quién es Alfredo Martínez?</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">¿Cuál es la historia de Profits?</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Objetivo</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Valores</a>
</div>
<div class="col-md-9" data-spy="scroll" data-target="#list-example" data-offset="" class="scrollspy-example">
  <center><h4 id="list-item-1">¿Quién es Alfredo Martínez?</h4>
  <img id="imagen" src="IMG/alf.jpg" class="img-fluid" alt="Responsive image"></center>
  <br>
  <p class="text-justify">Un hombre emprendedor, visionario, profesional en Ciencias Humanas, con un historial de nueve años de experiencia en docencia y siete años de experiencia en el mercado bursátil de divisas.</p>
  <p class="text-justify">
  Alguien comprometido con la formación de las presentes y futuras generaciones.</p>
  <p class="text-justify">
  Feliz y apasionado por la vida y por dar lo mejor de sí para hacer de este mundo un lugar donde  todos vivamos en perfecta armonía, paz y amor. 
  </p>
<br>
  <center><h4 id="list-item-2">¿Cuál es la historia de Profits?</h4></center>
  <p class="text-justify">La historia de Profits está estrechamente ligada a la de su autor. Todo comienza el año 2011 cuando Alfredo Martínez estaba pasando por una difícil crisis financiera. Él queriendo buscar una solución a su problema comenzó a probar el sistema de mercadeo multinivel pero no le dio resultados. Luego probó vender pollos, en este negocio le iba muy  bien y se mantuvo durante un año, sin embargo, no se pudo mantener por problemas ambientales.
  </p>
  <p class="text-justify"> 
Alfredo Martínez tenía la convicción de que se podía vivir haciendo negocio online y, buscando oportunidades, se encontró con el mercado bursátil. El primer contacto lo tuvo con un bróker americano, hizo una pequeña inversión de $200.00 pero debido al nulo conocimiento sobre el tema dicha inversión iba en perdida por lo que decidió retirar los fondos que aún quedaban. Luego tuvo contacto con una persona que conocía más sobre el tema, aprendió bastante pero no lo suficiente como para ser rentable, esto pudo comprobarlo cuando, apoyado por una socia, hizo una inversión de $2000.00 de lo cual perdió el 50%.
</p>
<p class="text-justify"> 
Con este historial de perdidas constantes decidió contactar con profesionales en el tema y contactó con un español, especialista en el tema, que llevaba ya muchos años de experiencia y vivía del trading. Además, Tomó otros cursos pagados a precios muy altos. 
</p>
<br>
<center><h5>Ejemplo de rentabilidad</h5></center>
<center><img src="IMG/resultados sistema.png" class="img-fluid" alt="Responsive image"></center>
<p class="text-justify">Una vez aprendido todo respecto al mercado bursátil de divisas, creó su propio sistema basado en la acción del precio. Probó el sistema en cuentas de práctica, vio que era rentable con el 80% de precisión, es decir, con el sistema se gana ocho de diez operaciones introducidas al mercado. Por lo tanto no dudó en emplearlo para cuentas reales, logrando una alta rentabilidad. Y es en este momento cuando nace Profits, como un proyecto para compartir el sistema basado en la acción del precio.
El proyecto Profits, ahora convertido en una entidad de servicio bursátil online, tiene como objetivo orientar a las personas emprendedoras e inversoras que se sienten atraídas por el mercado bursátil para que tengan claridad de la estructura y funcionamiento de dicho mercado, en vistas a lograr la rentabilidad.  
</p>
  <h4 id="list-item-3">Objetivo</h4>
  <p class="text-justify">El objetivo de Profits es orientar a los emprendedores e inversores que empatizan con el mercado bursátil para que conozcan la estructura, funcionamiento y logística de este mercado y, a la vez, logren la rentabilidad empleando el sistema basado en la acción del precio.   </p>
  <h4 id="list-item-4">Valores</h4>
<p class="text-justify">
1.  Respeto a la dignidad humana
</p>
<p class="text-justify">
Para Profits tú ocupas el primer lugar, se te reconocen tu valor, derechos y deberes.  
</p>
<p class="text-justify">
2.  Transparencia e integridad
</p>
<p class="text-justify">
Profits es una entidad dedicada a orientar al emprendedor e inversor en materia bursátil, expresa en obras y palabras lo que cree. 
</p>
<p class="text-justify">
3.  Ética y profesionalidad 
</p>
<p class="text-justify">
Se fundamenta en la ética y brinda los servicios de modo profesional.   
</p>
<p class="text-justify">
4.  Calidad de servicio
</p>
<p class="text-justify">
El servicio que se presta es profesional, completo y actualizado. 
</p>
<p class="text-justify">
5.  Solidaridad 
</p>
<p class="text-justify">
Nos solidarizamos con las personas que buscan una respuesta a sus inquietudes emprendedoras y les ofrecemos una solución adaptada a sus necesidades 
</p>
<p class="text-justify">
6.  Responsabilidad social y ambiental 
</p>
<p class="text-justify">
Promovemos el respeto y cuido de la ecología humana, como también el respeto al medio ambiente.  
</p>
</div>
      </div>
    </div>

<div class="col-md-1 offset-">
<a href="#" id="js_up" class="boton-subir">arriba
  <!-- link del icono http://fontawesome.io/icon/rocket/ -->
  <i class="fa fa-rocket" aria-hidden="true"></i>
</a>
</div>
<br>  
    <?php 
      include("footer.php");
    ?>    
</body>
<script src="JS/subir.js"type="text/javascript"></script>
<script src="JS/jquery.js" type="text/javascript"></script>
<script src="JS/bootstrap.js" type="text/javascript"></script>
</html>
