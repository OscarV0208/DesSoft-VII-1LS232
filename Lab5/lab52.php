<?php
// Configurar el límite máximo de tamaño (1 MB)
$limiteTamano = 1024 * 1024; // 1 MB en bytes

if (isset($_FILES['nombre_archivo_cliente']) && $_FILES['nombre_archivo_cliente']['error'] === UPLOAD_ERR_OK) {
    // Verificar el tamaño del archivo
    if ($_FILES['nombre_archivo_cliente']['size'] > $limiteTamano) {
        echo "El archivo es demasiado grande. El límite máximo es 1 MB.";
    } else {
        // Obtener la extensión del archivo
        $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
        $extension = pathinfo($nombrearchivo, PATHINFO_EXTENSION);

        // Lista de extensiones de imagen permitidas
        $extensionesPermitidas = array('jpg', 'jpeg', 'gif', 'png');

        // Verificar si la extensión es válida
        if (in_array(strtolower($extension), $extensionesPermitidas)) {
            $nombreDirectorio = "archivos/";

            // Mover el archivo subido al directorio especificado
            if (move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo)) {
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio";
            } else {
                echo "No se pudo subir el archivo.";
            }
        } else {
            echo "El archivo no es una imagen válida. Los formatos permitidos son JPG, JPEG, GIF y PNG.";
        }
    }
} else {
    echo "No se ha podido subir el archivo.";
}
?>