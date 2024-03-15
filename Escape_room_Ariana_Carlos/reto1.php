<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['boton1'])) {
        header("Location: reto2.php");
        exit(); 
    } elseif (isset($_POST['boton2'])) {
        header("Location: reto1.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton3'])) {
        header("Location: reto1.php?error=1");
        exit(); 
    } elseif (isset($_POST['boton4'])) {
        header("Location: reto1.php?error=1");
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
    <h2>Pregunta1. Cuando la iluminación cambia de intensa (brillante) a débil (tenue), la pupila del ojo</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Pista: La pupila regula la cantidad de luz que entra en el ojo para mantener una visión adecuada en diferentes condiciones de iluminación. </p>';
    }
  
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="boton1" value="Se contrae">
        <input type="submit" name="boton2" value="Se dilata">
        <input type="submit" name="boton3" value="No cambia">
        <input type="submit" name="boton4" value="Cambia de color">

    </form>
    </div>
</body>
</html>