<?php
// Función que inserta una Nueva Agencia de Viajes | Recive un array de datos
function nuevoProduct($datos)
{
    include './conexion_mysql_pdo.php';

    try {
        $sql = "INSERT INTO amazon_sneakers_images (id, href, src, alt, marca, precio, direccion)
                        VALUES (default,'$datos[href]', '$datos[src]', '$datos[alt]','$datos[marca]','$datos[precio]', '$datos[opciones_direccion]')";
        var_dump($sql); //die();

        $acentos = $gbd->query("SET NAMES 'utf8'");
        $result = $gbd->query($sql); ?>
        <script>
            alert("¡NUEVA ANUNCIO INSERTADO CON EXITO!");
        </script>

    <?php return  true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        //throw $ex; //die();
    ?>
        <script>
            alert("¡HA HABIDO UN ERROR CON LA INSERCIÓN DE LOS DATOS, un campo podría estar repetido!");
        </script>


    <?php
    } catch (Exception $ex) {
        throw $ex; //die();
    ?>
        <script>
            alert("¡HA HABIDO UN ERROR CON LA INSERCIÓN DE LOS DATOS, un campo podría estar repetido!");
        </script><?php
                } finally {
                    $gbd = null;
                }
            }

                    ?>


<?php
if (isset($_POST['nuevaAgenciaViajes'])) {
    $datos = $_POST['datos'];
    //var_dump($datos);
    //echo htmlspecialchars($datos['categoria']); // Ejemplo de uso de datos ingresados.
    if (isset($datos['estaseguro'])) {

        if ($datos['option_crud'] == 1) {
            echo ("Select"); //die();
        } elseif ($datos['option_crud'] == 2) {
            echo ("Insert"); //die();
            echo "Opción seleccionada: " . htmlspecialchars($datos['opciones_direccion']);

            nuevoProduct($datos);
        } elseif ($datos['option_crud'] == 3) {
            echo ("Eliminar"); //die();
        }
    }
}



if (isset($_POST['enviar'])) {
    echo("Entro");
    $datos = $_POST['datos'];

    if (isset($datos['estaseguro'])) {
        $opcion_direccion = $_POST['datos']['opcion_direccion'];

        // Preparar y bindear
        $stmt = $conn->prepare("INSERT INTO amazon_direccion_images (nombre) VALUES (?)");
        $stmt->bind_param("s", $opcion_direccion);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Nuevo registro creado con éxito";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conn->close();
    } else {
        echo ("Marque si está seguro");
    }
}




?>

