<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto3.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto3.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton3'])) {
        header("Location: reto4.php");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: reto3.php?error=1");
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
    <h2>Pregunta3. ¿Cuál de las siguientes opciones existe como ARN rodeado por una capa de proteína?</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Pista: Recuerda la estructura y composición básica de los virus. </p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="Procariota">
        <input type="submit" name="boton2" value="Prion">
        <input type="submit" name="boton3" value="Retrovirus.">
        <input type="submit" name="boton4" value=" Streptococcus.">

    </form>
    </div>
</body>
</html>