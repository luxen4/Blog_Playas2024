<?php
// Función que inserta una Nueva Agencia de Viajes | Recive un array de datos
function nuevoProduct($datos)
{
    include './conexion_mysql_pdo.php';

    try {
        $sql = "INSERT INTO $datos[categoria] (id, href, src, alt, marca, precio, direccion)
                        VALUES (default,'$datos[href]', '$datos[src]', '$datos[alt]','$datos[marca]','$datos[precio]', '$datos[opciones_direccion]')";
        var_dump($sql); //die();

        $acentos = $gbd->query("SET NAMES 'utf8'");
        $result = $gbd->query($sql); ?>
        <script>
            alert("¡NUEVA ARTICULO INSERTADO CON EXITO EN LA BASE DE DATOS!");
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

                    

function nuevaMarca($datos)
{
    include './conexion_mysql_pdo.php';

    try {
        $sql = "INSERT INTO marca (id, nombre)
                        VALUES (default,'$datos[nueva_marca]')";
        //var_dump($sql); //die();

        $acentos = $gbd->query("SET NAMES 'utf8'");
        $result = $gbd->query($sql); ?>
        <script>
            alert("¡NUEVA MARCA INSERTADA CON EXITO EN LA BASE DE DATOS!");
        </script>

    <?php return  true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        //throw $ex; //die();
    ?>
        <script>
            alert("¡HA HABIDO UN ERROR CON LA INSERCIÓN DE LA NUEVA MARCA, un campo podría estar repetido!");
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
function nuevaCategoria($datos)
{
    include './conexion_mysql_pdo.php';

    try {
        $sql = 'CREATE TABLE amazon_' .$datos["nueva_categoria"].'_images (
                id INT AUTO_INCREMENT PRIMARY KEY,
                href VARCHAR(255) NOT NULL,
                src VARCHAR(255) NOT NULL,
                alt VARCHAR(255) NOT NULL,
                marca VARCHAR(100) NOT NULL,
                precio DECIMAL(10, 2) NOT NULL,
                direccion VARCHAR(100) NOT NULL,
                UNIQUE (href)  -- Esto asegura que no haya enlaces duplicados
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;';

        //var_dump($sql); //die();

        $acentos = $gbd->query("SET NAMES 'utf8'");
        $result = $gbd->query($sql); ?>
        <script>
            alert("¡NUEVA TABLA CREADA CON EXITO!");
        </script>

    <?php return  true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        //throw $ex; //die();
    ?>
        <script>
            alert("¡HA HABIDO UN ERROR CON LA CREACIÓN DE LA TABLA!");
        </script>


    <?php
    } catch (Exception $ex) {
        throw $ex; //die();
    ?>
        <script>
            alert("¡HA HABIDO UN ERROR CON LA CREACIÓN DE LA TABLA!");
        </script><?php
                } finally {
                    $gbd = null;
                }
            


} 


if (isset($_POST['nueva_marca'])) { ?>
    <script>alert("Premio");</script>  <?php
    
    $datos = $_POST['datos'];
    //var_dump($datos);
    //echo htmlspecialchars($datos['categoria']); // Ejemplo de uso de datos ingresados.
    //if (isset($datos['estaseguro'])) {

        //if ($datos['option_crud'] == 1) {
            //echo ("Select"); //die();
        //} elseif ($datos['option_crud'] == 2) {
            //echo ("Insert"); //die();
            //echo "Opción seleccionada: " . htmlspecialchars($datos['categoria']);

            nuevaMarca($datos);
        //} elseif ($datos['option_crud'] == 3) {
            //echo ("Eliminar"); //die();
        //}
    //}
}


if (isset($_POST['nueva_categoria'])) { ?>
    <script>alert("Premio");</script>  <?php
    
    $datos = $_POST['datos'];
    var_dump($datos);
    //echo htmlspecialchars($datos['categoria']); // Ejemplo de uso de datos ingresados.
    //if (isset($datos['estaseguro'])) {

        //if ($datos['option_crud'] == 1) {
            //echo ("Select"); //die();
        //} elseif ($datos['option_crud'] == 2) {
            //echo ("Insert"); //die();
            //echo "Opción seleccionada: " . htmlspecialchars($datos['categoria']);

            nuevaCategoria($datos);
        //} elseif ($datos['option_crud'] == 3) {
            //echo ("Eliminar"); //die();
        //}
    //}
}


if (isset($_POST['nuevo_articulo'])) {
    $datos = $_POST['datos'];
    var_dump($datos); //die();
    //echo htmlspecialchars($datos['categoria']); // Ejemplo de uso de datos ingresados.
    /*if (isset($datos['estaseguro'])) {

        if ($datos['option_crud'] == 1) {
            echo ("Select"); //die();
        } elseif ($datos['option_crud'] == 2) {
            echo ("Insert"); //die();
            echo "Opción seleccionada: " . htmlspecialchars($datos['opciones_direccion']);*/

            nuevoProduct($datos);
        /*} elseif ($datos['option_crud'] == 3) {
            echo ("Eliminar"); //die();
        }
    }*/
}



/*
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
}*/






if (isset($_POST['enviar'])) {

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

