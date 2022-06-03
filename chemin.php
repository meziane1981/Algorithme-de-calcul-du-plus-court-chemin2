<?php


require "cellele.php";
require_once "cart.php";
 

class chemin
{

    
    private  $cart;
    private  $debut;
    private  $fin;
    private  $chemincourt;


    public function __construct($cart, $debut,$fin,$chemincourt)
    {
        $this->cart = $cart;
        $this->debut = $debut;
        $this->fin= $fin;
        $this->chemincourt = $chemincourt;
    }


    public function do($carte, $debut, $fin, $chemincourt)
    {
        $chemincourt[] = $actuelPoint;
        if (!empty($chemincourt) && count($cheminaAtuel) >= count($chemincourt)) {
            return;
        }
        //si le point actuel = à l'arrivée alors le chemin le plus court = le chemin actuel
        if ($actuelPoint[0] == $end[0] && $actuelPoint[1] == $fin[1]) {
            $chemincourt = $cheminaAtuel;
            return;
        }

        
	}