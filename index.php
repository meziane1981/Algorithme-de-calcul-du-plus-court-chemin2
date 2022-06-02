<?php

require_once "cart.php";

// carte configuration
$carte = new carte();
 
$cellules = $carte->getcellules();
 
foreach ($cellules as $cellule) {
	if (($cellule->getRow() + $cellule->getColumn())%4 == 0) {
		$cellule->setOpen(false);
	}
}
 
$chemin = new Chemin($carte);
$chemin->setStart(1,4);
$chemin->setEnd(4,3);
$chemin->getchemincourt($path->getStart());
$chemin->displayPath();
echo "<br>".$path->displayPathLength();