<?php
$alumnos = [
    ['Atienza Bermúdez, Alejandro', 'm'],
    ['Calderer Sánchez, Lucas', 'm'],
    ['Cano Merino, Carlos', 'm'],
    ['Chari, Abdelali', 'm'],
    ['García Zarco, Francisco José', 'm'],
    ['Gómez Pérez, Samuel', 'm'],
    ['Iáñez Navarro, Daniel', 'm'],
    ['López Lasheras, Alan', 'm'],
    ['Maldonado Cabezas, Francisco', 'm',],
    ['Martín Arias, Carlos', 'm',],
    ['Moreno González, Alexandra', 'f',],
    ['Muñoz Moreno, Elisabet', 'f',],
    ['Ourhzif, Aymane', 'm',],
    ['Sánchez Ortiz, Emilio David', 'm',],
    ['Sánchez Rodríguez, Beatriz', 'f',],
    ['Torres Gómez, Ignacio', 'm',],
    ['Uréndez Jiménez, Alba', 'f',],
    ['Uribe Aranda, Francisco', 'm',],
    ['Velasco Clavero, Pablo', 'm'],
];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visualizando Array con Edades</title> 
        <style>
            .par { color: blue; font-weight: bold; }
            .impar { color: green; font-weight: bold; }
        </style>
    </head>
    <body>
        <h1>Visualizando el array</h1>

        <table border="1px" style="border-collapse: collapse; cellpadding: 5px;">
            <tr>
                <td>#</td>
                <td>Alumno</td>
                <td>Género</td>
                <td>Edad</td>
            </tr>

            <?php
            foreach($alumnos as $indice => $alumnoGenero) {
                $edad = rand(18, 30); 
                $claseColor = ($edad % 2 == 0) ? 'par' : 'impar';
                ?>
                <tr>
                    <td><?= $indice ?></td>
                    <td><?= $alumnoGenero[0] ?></td>
                    <td><?= $alumnoGenero[1] ?></td>
                    <td class="<?= $claseColor ?>"><?= $edad ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
