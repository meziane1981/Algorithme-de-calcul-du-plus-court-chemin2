<?php

class cellule 
{
	private int $ligne;
	private int$colonne;


	public function __construct(int $ligne, int$colonne)
	{
		$this->ligne = $ligne;
		$this->Colonne =$colonne;
		 
	}


	public function getligne(): int
	{
		return $this->ligne;
	}


	public function getColonne(): int
	{
		return $this->Colonne;
	}

	 