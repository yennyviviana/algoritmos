<?php

// Definición de la clase Graph que representará el grafo y el algoritmo de Dijkstra

class Graph {
    // Almacena el grafo como una lista de adyacencia
    private $graph = [];
    // Almacena las distancias más cortas desde el nodo inicial a cada nodo
    private $distances = [];
    // Almacena los nodos que ya han sido visitados
    private $visited = [];
    
    // Constructor que inicializa la clase con un grafo dado
    public function __construct($graph) {
        // Asigna el grafo pasado como parámetro a la variable de clase $graph
        $this->graph = $graph;
    }
    
    // Método que implementa el algoritmo de Dijkstra
    public function dijkstra($start) {
        // Inicializa todas las distancias como infinito, excepto para el nodo de inicio
        $this->distances = array_fill_keys(array_keys($this->graph), INF);
        // La distancia desde el nodo de inicio a sí mismo es 0
        $this->distances[$start] = 0;
        // Cola de prioridad para seleccionar el nodo con la menor distancia
        $pq = new SplPriorityQueue();
        // Inserta el nodo de inicio en la cola de prioridad con distancia 0
        $pq->insert($start, 0);
        
        // Bucle que continúa hasta que la cola de prioridad esté vacía
        while (!$pq->isEmpty()) {
            // Extrae el nodo con la menor distancia de la cola de prioridad
            $currentNode = $pq->extract();
            // Si el nodo ya ha sido visitado, se omite
            if (isset($this->visited[$currentNode])) continue;
            // Marca el nodo como visitado
            $this->visited[$currentNode] = true;
            
            // Itera sobre los vecinos del nodo actual
            foreach ($this->graph[$currentNode] as $neighbor => $weight) {
                // Calcula la nueva distancia desde el nodo de inicio pasando por el nodo actual
                $newDist = $this->distances[$currentNode] + $weight;
                // Si la nueva distancia es menor que la distancia registrada, la actualiza
                if ($newDist < $this->distances[$neighbor]) {
                    $this->distances[$neighbor] = $newDist;
                    // Inserta el vecino en la cola de prioridad con la nueva distancia
                    $pq->insert($neighbor, -$newDist);
                }
            }
        }
    }
    
    // Método que devuelve las distancias más cortas desde el nodo inicial a todos los otros nodos
    public function getDistances() {
        return $this->distances;
    }
}

// Ejemplo de uso del algoritmo de Dijkstra

// Definición de un grafo con nodos y pesos de las aristas
$graph = [
    'A' => ['B' => 1, 'C' => 4],
    'B' => ['A' => 1, 'C' => 2, 'D' => 5],
    'C' => ['A' => 4, 'B' => 2, 'D' => 1],
    'D' => ['B' => 5, 'C' => 1]
];

// Crea una instancia de la clase Graph con el grafo definido
$dijkstra = new Graph($graph);
// Ejecuta el algoritmo de Dijkstra desde el nodo 'A'
$dijkstra->dijkstra('A');

// Imprime las distancias más cortas desde el nodo 'A' a todos los otros nodos
print_r($dijkstra->getDistances());

?>
