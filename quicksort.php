<?php
// Función que implementa el algoritmo QuickSort
function quicksort($arr) {
    // Si el array tiene 0 o 1 elementos, ya está ordenado
    if (count($arr) < 2) {
        return $arr;
    }

    // Elegimos el pivote (según indica la investigación), en este caso el primer elemento
    $pivote = $arr[0];
    
    // Separa los elementos menores o iguales, mayores al pivote
    $menor = [];
    $mayor = [];
    
    // Recorre el array a partir del segundo elemento
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivote) {
            $menor[] = $arr[$i]; // Menores o iguales al pivote
        } else {
            $mayor[] = $arr[$i]; // Mayores que el pivote
        }
    }

    // Recursión para ordenar las dos mitades
    return array_merge(quicksort($menor), [$pivote], quicksort($mayor));
}

// Ejemplo de uso
$array = [7, 2, 9, 4, 5, 3, 8, 1];
echo "Array original: ";
print_r($array);

// Ordenamos el array usando QuickSort
$sortedArray = quicksort($array);
echo "Array ordenado: ";
print_r($sortedArray);
?>
