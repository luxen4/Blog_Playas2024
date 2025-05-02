


<style>


@media (max-width: 767px) {
    #parte_derecha {
        display: none !important;
    }
}


    li,
    h1,
    h2,
    h3,
    h4,
    p {
        text-align: left;
    }

    .highlight {
        font-weight: bold;
    }

    figcaption {
        font-size: 0.80em;
    }
</style>

<style>
    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1500px;
        }
    }


    .content-wrapper {
        height: 100vh;
        /* Ajusta según necesites */
        overflow-y: auto;
        /* Activa el scroll vertical */
    }

    main {
        padding: 1em;
        /* Añade un poco de espacio interno */
    }
</style>




<?php require "./../../../../bloques/estructura/basico.php"; ?>

<?php require $atras_5niveles . "/bloques/estructura/header.php"; ?>
<?php require $atras_5niveles . '/bloques/estructura/main.php'; ?>
<?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


<?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
<?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>