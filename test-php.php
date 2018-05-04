<?php
/*
Wordpress Challenge
*/

/*----------
1. What is the purpose of the following code?  
   Please explain who can view the results of this code
---------- */


add_action('admin_menu', 'custom_menu');

add_action() Es una funcion nativa de WordPress para agregar una acción

Funcion para hacer menus personalizados, es una lista de enlaces
function custom_menu(){
    add_menu_page('Custom Menu', 'Custom Menu', 'manage_options', 'custom-menu-slug', 'custom_menu_page_display');
/*con la funcion add_menu_page() podemos enviar como parámetros los enlaces y determina si una página está incluida o no en el menú*/
/*Estos después se visualizarán por los usuarios de la página*/


}

/*Al hacer click en algun elemento de la lista WordPress llamara a la función custom_menu_page_display() y mostrara 
la pagina Titulada, y el menú personalizado, con el encabezado "Hello World" y un parrafo que dice "This is a custom page"*/
function custom_menu_page_display(){
    echo '<h1>Hello World</h1>';
    echo '<p>This is a custom page</p>';
}





/*----------
2. Please write a Javascript code that change the backgoround color of the body 
   in a post Page.

---------- */
?>

<!DOCTYPE html>
<html>
<head>
  <title>Prueba WordPress</title>
</head>
<!--Realice un seleccionador para que fuera más dinámico -->
<body id="bodyFondo">
<select name="fondobody" id="fondobody" onchange="cambioColor(this)">
<!--En la funcion onchange() llamo la función y como parámetro agrego this el cual hace referencia a los atributos de la etiqueta select  -->

  <option value="#F14913">Rojo</option><!-- en el value envió los colores -->
  <option value="#2195BA">Azul</option>
  <option value="#ECE80E">Amarillo</option>
  <option value="#18EF1B">Verde</option>
</select>
</body>
</html>



<script type="text/javascript">
  
  function cambioColor(x){/*Recibo el parámetro con la letra x*/
   /*Verifico que llegue el parámetro this*/
   console.log(x.value); 
    /*creo un variable la cual tendrá el valor del body de la página, y lo obtengo con el id*/
    var body = document.getElementById("bodyFondo");
    /*A esta variable le añado el estilo el cual es el fondo del color. Y este va a tener como valor el color que se seleccione*/
    body.style.backgroundColor = x.value;

  }


</script>

<?php  /*----------
3. What will be necessary to integrate the javascript in the theme? 
   so that all the post pages "on load" change its background color. 

---------- */

/* Para insertar nuestro código JavaScript en WordPress podemos utilizar el plugin Script n Styles
Lo bueno de este es que permite insértalo de manera Global.

*/





/*----------
4. What will be necessary to integrate the javascript in the theme? 
   so that all the post pages "on load" change its background color. 

---------- */


/* Para insertar nuestro codigo javascript en wordpress podemos utilizar el plugin Script n Styles
Lo bueno de este es que permite insertalo de manera Global.


NOTA ES LA MISMA PREGUNTA
*/




/*----------
5. What is a potential problem in the following snippet of code
   from a WordPress theme file named “footer.php”?

   /*Lo que veo es que hay un problema de sintaxis por ejemplo al momento de comentariar el texto end of body section esta mal comentariado.*/
/*De igual manera la etiqueta <footer> no esta dentro de la etiqueta <section>*/

?>
        </section><!—end of body section- ->
        <footer>All rights reserved</footer>
    </body>
</html>






