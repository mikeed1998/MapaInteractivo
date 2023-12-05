<?php
    $miarreglo = array(317, 269, 317, 268, 319, 268, 319, 269, 320, 269, 320);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Coordenadas</title>
  <script>
    // Obtener el valor de la variable PHP y convertirlo a un array de JavaScript
    var coordsOriginal = <?php echo json_encode($miarreglo); ?>;

    // Función para multiplicar las coordenadas por un factor
    function multiplicarCoordenadas(factor) {
  var coordsArray = coordsOriginal.map(Number);

  // Multiplicar cada número en el array por el factor
  var coordsMultiplicadas = coordsArray.map(function (coord) {
    return coord * factor;
  });

  // Crear una cadena de coordenadas modificadas
  var coordsModificadas = coordsMultiplicadas.join(', ');

  // Actualizar el valor del atributo coords
  document.getElementById('miArea').coords = coordsModificadas;

  // Forzar la recarga de la imagen asociada al área (puedes ajustar el selector según tu estructura HTML)
  document.querySelector('img').src = document.querySelector('img').src;
}


    // Llamar a la función con un valor hardcodeado (por ejemplo, 2)
    multiplicarCoordenadas(2);
  </script>
</head>
<body>

<area id="miArea" data-id-estado="1" alt="AGU" title="Aguascalientes" class="area" href="www.cofemer.gob.mx" shape="poly" coords="<?php echo implode(',', $miarreglo); ?>" />

</body>
</html>
