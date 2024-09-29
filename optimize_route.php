<?php
// optimize_route.php

require_once 'Graph.php'; // Include the Graph class

// Simulating a graph with predefined nodes and edges
$graph = new Graph();
$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');
$graph->addNode('D');
$graph->addEdge('A', 'B', 1);
$graph->addEdge('A', 'C', 4);
$graph->addEdge('B', 'C', 2);
$graph->addEdge('B', 'D', 5);
$graph->addEdge('C', 'D', 1);

// Get user inputs
$start = $_POST['start'];
$end = $_POST['end'];

// Validate nodes exist in the graph
if (array_key_exists($start, $graph->nodes) && array_key_exists($end, $graph->nodes)) {
    // Calculate the shortest path
    $shortestPath = $graph->shortestPath($start, $end);
    echo "Shortest Path from $start to $end: " . implode(' -> ', $shortestPath);
} else {
    echo "Invalid start or end location.";
}
?>
