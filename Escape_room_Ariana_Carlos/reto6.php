<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto6.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto6.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton3'])) {
        header("Location: reto6.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: final.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOSPITAL ABANDONADO</title>
    <link rel="stylesheet" href="./CSS/retos.css">
</head>
<body class="class3">
    <div>
    <h2>Pregunta6. ¿Cuál de los siguientes enunciados sobre el citoesqueleto es falso?</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Pista : Para identificar el enunciado falso sobre el citoesqueleto es considerar la naturaleza de las uniones que forman las estructuras proteicas dentro de las células.</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="El citoesqueleto de una célula puede cambiar como una respuesta al medio ambiente">
        <input type="submit" name="boton2" value="El citoesqueleto está formado por hasta tres tipos de filamentos de proteína.">
        <input type="submit" name="boton3" value=" El citoesqueleto de las bacterias es importante para la división celular y la segregación de ADN.">
        <input type="submit" name="boton4" value="Los filamentos citoesqueléticos son monómeros de proteínas unidos entre sí mediante enlaces covalentes.">

    </form>
    </div>
</body>
</html>