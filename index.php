<?php

// require_once "autoload.php";

// carte configuration
$carte = new carte();
$carte->buildcarte(8,7);
$cellules = $carte->getcellules();
// Test -> block the cellule if row+column is divisible by four
foreach ($cellules as $cellule) {
	if (($cellule->getRow() + $cellule->getColumn())%4 == 0) {
		$cellule->setOpen(false);
	}
}

// Path configuration
$chemin = new Chemin($carte);
$chemin->setStart(1,4);
$chemin->setEnd(4,3);
$chemin->getShortestPath($path->getStart());
$chemin->displayPath();
echo "<br>".$path->displayPathLength();