<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto5.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto6.php");
        exit(); 
    } elseif (isset($_POST['boton3'])) {
        header("Location: reto5.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: reto5.php?error=1");
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
    <h2>Pregunta5. ¿Cuál de las siguientes opciones apoya mejor la siguiente afirmación?
</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Pista: Que las mitocondrias son descendientes de bacterias endosimbióticas se encuentra en la similitud de ciertas estructuras y componentes genéticos.</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="Solo puede infectar un hospedador único.">
        <input type="submit" name="boton2" value="Puede actuar como vector de transferencia génica.">
        <input type="submit" name="boton3" value="No puede persistir en su hospedador durante más de una generación celular.">
        <input type="submit" name="boton4" value="Es un tipo de célula anucleada.">

    </form>
    </div>
</body>
</html>