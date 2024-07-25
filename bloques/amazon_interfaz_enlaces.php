<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Agencia de Viajes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-radio {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            font-size: 18px;
            user-select: none;
        }

        .custom-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #ccc;
            border-radius: 50%;
        }

        .custom-radio:hover input~.checkmark {
            background-color: #b3b3b3;
        }

        .custom-radio input:checked~.checkmark {
            background-color: #4CAF50;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-radio input:checked~.checkmark:after {
            display: block;
        }

        .custom-radio .checkmark:after {
            top: 6px;
            left: 6px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

        /* Asegura que las imágenes ocupen todo el ancho del contenedor */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <?php include './crud_productos/index.php'; ?>

    <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left" style="border: 1px solid black;">
                    <h2>Selecciona una opción para los anuncios:</h2>
                    <label class="custom-radio">Ver visitas
                        <input type="radio" name="datos[option_crud]" value="1">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                    <label class="custom-radio">Insertar Producto
                        <input type="radio" name="datos[option_crud]" value="2">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                    <label class="custom-radio">Eliminar Producto
                        <input type="radio" name="datos[option_crud]" value="3">
                        <span class="checkmark"></span>
                    </label>

                    <?php include './select_categoria.php'; ?>

                    <div class="form-group">
                        <label for="href">Href:</label>
                        <input type="text" name="datos[href]" id="href" class="form-control" placeholder="Ingrese el href" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label for="src">Src de la imagen:</label>
                        <input type="text" name="datos[src]" id="src" class="form-control" placeholder="Ingrese el src de la imagen" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label for="alt">Alt de la imagen:</label>
                        <input type="text" name="datos[alt]" id="alt" class="form-control" placeholder="Ingrese el alt de la imagen" maxlength="50" required>
                    </div>
                    <div class="form-group">


                        <label for="opciones_direccion">Opciones de dirección de la imagen de presentación:</label>
                        <select name="datos[opciones_direccion]" id="opciones_direccion" class="form-control">
                            <option value="derecha0">Derecha_0º</option>
                            <option value="izquierda0">Izquierda_0º</option>
                            <option value="izquierda15">Izquierda_15º</option>
                            <option value="izquierda45">Izquierda_45º</option>

                            <option value="frente">Frente</option>
                        </select>

                        
                        
                            <!--
                            <label for="opcion_direccion">Nueva opción de dirección</label>
                            <input type="text" name="datos[opcion_direccion]" id="opcion_direccion" class="form-control" placeholder="Ingrese opcion_direccion" maxlength="50" required>
                        
                            <input type="submit" value="enviar" class="btn btn-primary">-->

                   

                    </div>

                    <div class="form-group">
                        <label for="opciones_marca">Marca:</label>
                        <select name="datos[marca]" id="opciones_marca" class="form-control">
                            <option value="rebook">Rebook</option>
                            <option value="nike">Nike</option>
                            <option value="jordan">Jordan</option>
                            <option value="underarmour">UNDER ARMOUR</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" name="datos[precio]" id="precio" class="form-control" placeholder="Ingrese el precio" step="0.01" required>
                    </div>


                    <div class="text-center">
                        <input type="submit" name="nuevaAgenciaViajes" value="Crear" class="btn btn-primary">
                        <input type="reset" value="Limpiar" class="btn btn-secondary">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                    <img src="./../web/img/sneakers_derecha0grados.jpg" alt="Sneakers Derecha 0º" class="img-fluid">
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                    <img src="./../web/img/sneakers_izquierda0grados.jpg" alt="Sneakers Izquierda 0º" class="img-fluid">
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                    <img src="./../web/img/sneakers_izquiera15grados.jpg" alt="Sneakers Izquierda 15º" class="img-fluid">
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                    <img src="./../web/img/sneakers_izquiera45grados.jpg" alt="Sneakers Izquierda 45º" class="img-fluid">
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12  text-center col-lg-12 col-md-12 col-sm-12 col-12">
                    <label for="estaseguro">
                        <input id="estaseguro" type="checkbox" name="datos[estaseguro]"> Estoy seguro de eliminar los datos de la Agencia de Buses.</label>
                </div>
            </div>

        </div>

    </form>
</body>

</html>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
    /*<link rel="stylesheet" href="./../../../../styles.css">*/
    h3,
    h4,
    p {
        text-align: left;
    }
</style>