<?php
/**
 * Función que implementa la búsqueda binaria.
 * Parámetros
 * $arr: El arreglo ordenado en el que se busca el valor.
 * $searchValue: El valor que se desea buscar.
 * Devuelve el índice del valor si se encuentra, o -1 si no se encuentra.
 */
function binarySearch($arr, $searchValue) {
    // Definir el límite inferior y superior del arreglo
    $low = 0;
    $high = count($arr) - 1;

    // Mientras el límite inferior sea menor o igual al límite superior
    while ($low <= $high) {
        // Calcular el índice del medio
        $middle = floor(($low + $high) / 2);

        // Comprobar si hemos encontrado el valor
        if ($arr[$middle] === $searchValue) {
            return $middle; // Retorna el índice donde se encuentra el valor
        }

        // Si el valor objetivo es mayor que el valor en el medio
        if ($arr[$middle] < $searchValue) {
            $low = $middle + 1; // El valor objetivo está en la mitad derecha
        } else {
            $high = $middle - 1; // El valor objetivo está en la mitad izquierda
        }
    }

    // Si llegamos aquí, significa que no se encontró el valor
    return -1;
}

// Ejemplo de uso:
$arraycito = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$number = 7;

$result = binarySearch($arraycito, $number);

if ($result !== -1) {
    echo "El valor buscado $number se encuentra en el índice $result.";
} else {
    echo "El valor buscado $number no se encuentra en el arreglo.";
}

?>
