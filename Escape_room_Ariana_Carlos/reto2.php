<?php
if (!isset($_SESSION['progreso']) || $_SESSION['progreso'] != 1){
        header("Location: ./reto1.php?error=2");
        exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto2.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto2.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton3'])) { 
        header("Location: reto2.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: reto3.php");
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
    <h2>Pregunta2. Un virus...</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Pista: Piensa en cómo los virus transmiten información genética a las células huésped</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="No puede persistir en su hospedador durante más de una generación celular.">
        <input type="submit" name="boton2" value="Solo puede infectar un hospedador único.">
        <input type="submit" name="boton3" value="Es un tipo de célula anucleada.">
        <input type="submit" name="boton4" value="Puede actuar como vector de transferencia génica.">

    </form>
    </div>
</body>
</html>