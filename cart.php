<?php
 class carte
 {
	 private $cellules = [];
 
	 /**
	  * Get the value of cellules
	  */ 
	 public function getCellules(): array
	 {
		 return $this->cellules;
	 }
 
	 /**
	  * Ajouter une celluleule au carte
	   
	  */
	 public function addcellule(cellule $cellule): carte
	 {
		 $this->cellules[] = $cellule;
		 return $this;
	 }
	 
	