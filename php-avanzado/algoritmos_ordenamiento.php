<?php

Los **algoritmos de ordenamiento** son fundamentales en la programación y se 
utilizan para reorganizar los elementos de un conjunto (como un array o una lista) de acuerdo con algún criterio, generalmente en orden ascendente o descendente. A continuación, te explico en detalle cada uno de los algoritmos de ordenamiento que mencionaste:

### 1. **Burbuja (Bubble Sort)**
   - **Descripción:** 
     - Es uno de los algoritmos de ordenamiento más simples.
     - Compara cada par de elementos adyacentes y los intercambia si están en el orden incorrecto.
     - Este proceso se repite hasta que toda la lista esté ordenada.
   - **Complejidad:** 
     - Peor caso: \(O(n^2)\)
     - Mejor caso: \(O(n)\) (si la lista ya está ordenada)
   - **Ejemplo:**
     ```php
     function bubbleSort(&$arr) {
         $n = count($arr);
         for ($i = 0; $i < $n - 1; $i++) {
             for ($j = 0; $j < $n - $i - 1; $j++) {
                 if ($arr[$j] > $arr[$j + 1]) {
                     $temp = $arr[$j];
                     $arr[$j] = $arr[$j + 1];
                     $arr[$j + 1] = $temp;
                 }
             }
         }
     }
     ```

### 2. **Selección (Selection Sort)**
   - **Descripción:**
     - Encuentra el elemento mínimo de la lista y lo coloca en la primera posición.
     - Luego, encuentra el siguiente elemento más pequeño y lo coloca en la segunda posición.
     - Este proceso se repite hasta que la lista esté ordenada.
   - **Complejidad:** 
     - Peor caso: \(O(n^2)\)
     - Mejor caso: \(O(n^2)\) (en todos los casos)
   - **Ejemplo:**
     ```php
     function selectionSort(&$arr) {
         $n = count($arr);
         for ($i = 0; $i < $n - 1; $i++) {
             $minIdx = $i;
             for ($j = $i + 1; $j < $n; $j++) {
                 if ($arr[$j] < $arr[$minIdx]) {
                     $minIdx = $j;
                 }
             }
             $temp = $arr[$i];
             $arr[$i] = $arr[$minIdx];
             $arr[$minIdx] = $temp;
         }
     }
     ```

### 3. **Inserción (Insertion Sort)**
   - **Descripción:**
     - Construye una lista ordenada uno por uno.
     - Toma un elemento de la lista de entrada y lo inserta en la posición correcta en la lista ordenada.
   - **Complejidad:**
     - Peor caso: \(O(n^2)\)
     - Mejor caso: \(O(n)\) (si la lista ya está ordenada)
   - **Ejemplo:**
     ```php
     function insertionSort(&$arr) {
         $n = count($arr);
         for ($i = 1; $i < $n; $i++) {
             $key = $arr[$i];
             $j = $i - 1;
             while ($j >= 0 && $arr[$j] > $key) {
                 $arr[$j + 1] = $arr[$j];
                 $j--;
             }
             $arr[$j + 1] = $key;
         }
     }
     ```

### 4. **Rápido (Quick Sort)**
   - **Descripción:**
     - Utiliza la técnica de **divide y vencerás**.
     - Selecciona un elemento como "pivote" y particiona la lista en dos sublistas: una con elementos menores que el pivote y otra con elementos mayores.
     - Luego, ordena las sublistas de forma recursiva.
   - **Complejidad:**
     - Peor caso: \(O(n^2)\) (si la partición es muy desigual)
     - Mejor caso: \(O(n \log n)\) (promedio)
   - **Ejemplo:**
     ```php
     function quickSort(&$arr, $low, $high) {
         if ($low < $high) {
             $pi = partition($arr, $low, $high);
             quickSort($arr, $low, $pi - 1);
             quickSort($arr, $pi + 1, $high);
         }
     }

     function partition(&$arr, $low, $high) {
         $pivot = $arr[$high];
         $i = ($low - 1);
         for ($j = $low; $j < $high; $j++) {
             if ($arr[$j] <= $pivot) {
                 $i++;
                 $temp = $arr[$i];
                 $arr[$i] = $arr[$j];
                 $arr[$j] = $temp;
             }
         }
         $temp = $arr[$i + 1];
         $arr[$i + 1] = $arr[$high];
         $arr[$high] = $temp;
         return $i + 1;
     }
     ```

### 5. **Fusión (Merge Sort)**
   - **Descripción:**
     - También utiliza la técnica de **divide y vencerás**.
     - Divide la lista en dos mitades, las ordena recursivamente y luego las fusiona en una lista ordenada.
   - **Complejidad:**
     - Peor caso: \(O(n \log n)\)
     - Mejor caso: \(O(n \log n)\) (en todos los casos)
   - **Ejemplo:**
     ```php
     function mergeSort(&$arr) {
         if (count($arr) > 1) {
             $mid = floor(count($arr) / 2);
             $left = array_slice($arr, 0, $mid);
             $right = array_slice($arr, $mid);

             mergeSort($left);
             mergeSort($right);

             $i = 0;
             $j = 0;
             $k = 0;
             
             while ($i < count($left) && $j < count($right)) {
                 if ($left[$i] < $right[$j]) {
                     $arr[$k] = $left[$i];
                     $i++;
                 } else {
                     $arr[$k] = $right[$j];
                     $j++;
                 }
                 $k++;
             }
             
             while ($i < count($left)) {
                 $arr[$k] = $left[$i];
                 $i++;
                 $k++;
             }
             
             while ($j < count($right)) {
                 $arr[$k] = $right[$j];
                 $j++;
                 $k++;
             }
         }
     }
     ```

### Resumen de Complejidades
- **Bubble Sort:** \(O(n^2)\)
- **Selection Sort:** \(O(n^2)\)
- **Insertion Sort:** \(O(n^2)\) (mejor caso \(O(n)\))
- **Quick Sort:** \(O(n \log n)\) (peor caso \(O(n^2)\))
- **Merge Sort:** \(O(n \log n)\)

Cada uno de estos algoritmos tiene su propio conjunto de ventajas y
 desventajas, dependiendo del contexto en el que se utilice y la naturaleza de los datos a ordenar.

 ?>