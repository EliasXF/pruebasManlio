<?php namespace App\Controllers;


// Crear un controlador en PHP utilizando CodeIgniter 4
class upload_controller  extends BaseController
{
// Método para manejar la subida del archivo CSV y su procesamiento
public function upload()
{
// Comprobar si se ha subido un archivo CSV
if (isset($_FILES["csv_file"]) && !empty($_FILES["csv_file"]["name"])) {
// Obtener la información del archivo CSV subido
$file = $_FILES["csv_file"];
// Mover el archivo CSV subido a un directorio en el servidor
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
// Abrir el archivo CSV subido
$handle = fopen("uploads/" . $file["name"], "r");
// Recorrer las filas del archivo CSV
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
// Insertar los datos en la base de datos MySQL
$this->db->insert("table_name", [
"column1" => $data[0],
"column2" => $data[1],
// ...
]);
}
// Cerrar el archivo CSV
fclose($handle);
// Mostrar un mensaje al usuario
echo "Los datos del archivo CSV han sido insertados en la base de datos";
}
}
}