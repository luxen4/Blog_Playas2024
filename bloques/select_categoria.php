<?php
// Parámetros de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
$database = "blogplayas2025_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los nombres de las tablas
$sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$database'";
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados

// Cerrar la conexión
$conn->close();
?>

<div class="form-group">
    <label for="categoria">Categoria:</label>
    <div style="display: flex;">
        <select style="width: 70%;" name="datos[categoria]" id="categoria" class="form-control">
            <?php
            // Generar dinámicamente las opciones del select
            if ($result->num_rows > 0) {
                // Mostrar los nombres de las tablas
                while ($row = $result->fetch_assoc()) {
                    // Corregido: Generar opciones dinámicamente para el select
                    echo '<option value="' . htmlspecialchars($row["table_name"], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($row["table_name"], ENT_QUOTES, 'UTF-8') . '</option>';
                }
            } else {
                echo "No se encontraron tablas.";
            }
            ?>
        </select>



        <div style="margin-left: 1em; width: 70%;">
            <input type="text" name="datos[nueva_categoria]" id="categoria" class="form-control" placeholder="Nueva Categoria..." maxlength="100">
        </div>
        <div style="margin-left: 1em;">
            <input type="submit" name="nueva_categoria" value="Crear Categoría" class="btn btn-primary">
        </div>
    </div>
</div>