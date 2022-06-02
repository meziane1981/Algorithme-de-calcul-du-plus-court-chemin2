<?php
 class carte
 {
	 private $cellules = [];
 
	 
	 public function getCellules(): array
	 {
		 return $this->cellules;
	 }
  
	 public function addcellule(cellule $cellule): carte
	 {
		 $this->cellules[] = $cellule;
		 return $this;
	 }
	}