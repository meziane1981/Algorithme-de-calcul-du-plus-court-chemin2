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

	/**
	 * Obtenir la valeur de la ligne
	 */ 
	public function getligne(): int
	{
		return $this->ligne;
	}

	/**
	 *Obtenir la valeur de la colonne
	 */ 
	public function getColonne(): int
	{
		return $this->Colonne;
	}

	 