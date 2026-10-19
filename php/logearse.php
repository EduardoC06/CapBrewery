<?php
#leer usuario y password de la base de datos, mostrar id si se puede
#Darle la condicion si existe o no 
ob_start();

if (!empty($_POST["btnIngresar"])) {
    if (!empty($_POST["usuario"]) and empty($_POST["password"])) {
        # code...
        echo '<div class="alert alert danger"> Los campos están vacíos</div>';
    } else {
        $usuarioC = $_POST["usuario"];
        $passwordC = $_POST["password"];
        $query = "SELECT * FROM DatosInicio WHERE usuario='$usuarioC' AND PASSWORD='$passwordC'";
                
        $result = $conexion->query($query);

        // Verificar si la consulta fue exitosa
        if ($result && $datos = $result->fetch_object()) {
            header("location:index.php?id=" . $datos->idusuario);
            
        } else {
            echo "Usuario o contraseña incorrecta";
        }
    }    
}
ob_end_flush();
?>