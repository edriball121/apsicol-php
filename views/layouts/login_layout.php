<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detalles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <body>
    
        <?php
        /*if (isset($_SESSION['nombre'])) {
            echo "(" .$_SESSION['nombre'] . ")";
        }*/
        ?>
        
        <?php
        require_once 'views/' . $current_view;
        ?>


        <footer class="backg1" style="position: absolute; bottom: 0; width: 100%">
            Apsicol - <?php echo date("Y"); ?>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.2.1.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="js/validaciones.jquery.js" type="text/javascript"></script>
        <script src="./js/principal.js"></script>
    </body>
</html>
