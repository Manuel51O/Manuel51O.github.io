<html>
    <head>
        <title>Ejemplo Formulario</title>
    <head>
    <body>
        <?php
        $var1=fopen("ej1solicitudes.txt", "a")or
        die("Hay un error en su solicitud y no fue enviada, por favor intentelo mas tarde.");
        fputs($var1,"\n");
        echo "Su nombre es ";
        fputs($var1,$_REQUEST['nombre']);
        fputs($var1,"\n");
        echo "Su fecha de nacimiento es";
        fputs($var1,$_REQUEST['nacimiento']);
        fputs($var1,"\n");
        echo "Número de horas semanales que le dedica a videojuegos: ";
        fputs($var1,$_REQUEST['nhoras']);
        fputs($var1,"\n");
        echo "Su email es ";
        fputs($var1,$_REQUEST['email']);
        fputs($var1,"\n");
        echo "Videojuego favorito: ";
        fputs($var1,$_REQUEST['videojuego']);
        fputs($var1,"\n");
        echo "Descripción: ";
        fputs($var1,$_REQUEST['descripcion']);
        fputs($var1,"\n");
        echo "Esta cursando en ";
        fputs($var1,$_REQUEST['grupos']);
        fputs($var1,"\n");
        fputs($var1,"/-----------------------------------");
        fclose($var1);
        echo " Su solicitud fue registrada con éxito.";
        ?>
    </body>
</html>
