<?php 

    include("conexion.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Fallo Consulta");
        }

        $_SESSION['message'] = 'Mantenimiento Eliminado';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

?>