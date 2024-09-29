<?php
class Graph {
    private $nodes = [];

    public function addNode($name) {
        $this->nodes[$name] = [];
    }

    public function addEdge($from, $to, $distance) {
        $this->nodes[$from][$to] = $distance;
        $this->nodes[$to][$from] = $distance; // For undirected graph
    }

    public function dijkstra($start) {
        $distances = [];
        $previous = [];
        $queue = new SplPriorityQueue();

        foreach ($this->nodes as $node => $edges) {
            $distances[$node] = INF;
            $previous[$node] = null;
            $queue->insert($node, INF);
        }

        $distances[$start] = 0;
        $queue->insert($start, 0);

        while (!$queue->isEmpty()) {
            $current = $queue->extract();

            foreach ($this->nodes[$current] as $neighbor => $distance) {
                $alt = $distances[$current] + $distance;

                if ($alt < $distances[$neighbor]) {
                    $distances[$neighbor] = $alt;
                    $previous[$neighbor] = $current;
                    $queue->insert($neighbor, $alt);
                }
            }
        }

        return ['distances' => $distances, 'previous' => $previous];
    }

    public function shortestPath($start, $end) {
        $result = $this->dijkstra($start);
        $path = [];
        $current = $end;

        while ($current !== null) {
            array_unshift($path, $current);
            $current = $result['previous'][$current];
        }

        return $path;
    }
}
?>
