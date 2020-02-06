<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = new mysqli('localhost', 'narf', 'narf', 'webalquiler');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "SELECT * FROM webalquiler.usuarios where usuario = '$username'";
if (!$resultado = $db->query($sql)) {
    die('Ocurriu un erro executando a query [' . $db->error . ']');
} else {
    if ($resultado->num_rows != 1) {
        header("Location: index.html");                                     //TODO: ir a registro
    } else {
        $sql2 = "SELECT * FROM webalquiler.usuarios where usuario = '$username' and contrasenha = '$password'";
        if (!$resultado2 = $db->query($sql2)) {
            die('Ocurriu un erro executando a query [' . $db->error . ']');
        } else {
            if ($resultado2->num_rows != 1) {
                echo('contaseña incorrecta');
                header("Location: index.html");
//        die("Contraseña Incorrecta");
            } else {
//        $fila = $resultado->fetch_object();
                echo "login correcto";
                header("Location: UserMenu.html");
            }
        }
        //header("Location: http://Err1");
    }
}
echo "por que demo chego aquí?";
sleep(10);
//header("Location: http://Err2");

?>