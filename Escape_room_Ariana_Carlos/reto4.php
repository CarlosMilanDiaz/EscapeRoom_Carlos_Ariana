<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto5.php");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto4.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton3'])) {
        header("Location: reto4.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: reto4.php?error=1");
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
    <h2>Pregunta4. ¿Cuál de los siguientes procesos tiene lugar en el citoplasma de una célula eucariota?</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;"> Pista: Se centra en la similitud de componentes genéticos y estructurales que son esenciales para la función celular.</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="Glicosas">
        <input type="submit" name="boton2" value="Transporte de electrones.">
        <input type="submit" name="boton3" value="El ciclo de Krebs.">
        <input type="submit" name="boton4" value="Biogénesis de ribosomas.">

    </form>
    </div>
</body>
</html>