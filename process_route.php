<?php
// process_route.php

// Include the Graph class
require_once 'Graph.php';

// Create the graph instance
$graph = new Graph();
// Add nodes and edges (you can also pull these from a database or API)
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

// Validate if origin and destination exist in the graph
if (!array_key_exists($start, $graph->nodes) || !array_key_exists($end, $graph->nodes)) {
    echo "Invalid nodes. Please try again.";
    exit;
}

// Calculate the shortest path
$shortestPath = $graph->shortestPath($start, $end);

// Output the shortest path
echo "Shortest Path from $start to $end: " . implode(' -> ', $shortestPath);
?>
