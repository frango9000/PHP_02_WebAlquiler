<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = new mysqli('localhost', 'narf', 'narf', 'webalquiler');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "SELECT * FROM webalquiler.usuarios where usuario = '$username' limit 1";
if (!$resultado = $db->query($sql)) {
    die('Ocurriu un erro executando a query [' . $db->error . ']');
}
if($numfilas = $resultado->num_rows != 0) {
    header("inicio.html");
//    die('Usuario inexistente');

}else {
        $fila = $resultado->fetch_object();
        if($fila->contrasenha == $password){
            header("UserMenu.html");
        } else {
            echo "Contraseña Incorrecta";
            sleep(1000);
            header("inicio.html");

        }
}

?>