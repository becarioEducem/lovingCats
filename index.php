<?php
    //TODO: #1: Carrega el tag escollit, ja sigui de la cookie 'tagQuery' o bé del paràmetre rebut via POST del formulari
    //TODO: #2: Obté tots els gats de la categoria seleccionada via la funció getCats($tag,$limit,$skip) de model/catAPI.php
    //TODO: #3: Obté tots els tags de gats disponibles via la funció getTags() de model/catAPI.php
    //TODO: #4: Obté la taula html amb els gats de la categoria seleccionada via la funció getHTMLCatGrid($cats) de view/cats.php
    //TODO: #5: Desa la cookie 'tagQuery' amb el tag seleccionat
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="David González" />
    <link rel="icon" href="./img/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>Loving Cats - Examen Parcial M7UF1 - DAM2</title>
</head>
<body>
    <h1 class="m-3">Loving Cats</h1>
    <?php
        //TODO: #6: Implementa el formulari per a seleccionar la categoria de gats a mostrar (utilitzar una llista desplegable)
        //TODO: #7: Mostra la taula de gats obtinguda prèviament
        //TODO: #8: Implementa el formulari per desar localment els gats presentats a la taula HTML (cal fer la petició a controller/storeCats.php)
        //TODO: #9: No t'oblidis que també s'ha de mostrar un missatge d'èxit quan s'han pogut desar tots els gats de la taula
    ?>
    
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>