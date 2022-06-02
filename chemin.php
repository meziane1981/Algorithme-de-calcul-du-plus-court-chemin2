<?php



<?php

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


    public function do($carte, $currentPoint, $end, $currentPath)
    {
        $currentPath[] = $currentPoint;
        if (!empty($shortestPath) && count($currentPath) >= count($shortestPath)) {
            return;
        }
        //si le point actuel = à l'arrivée alors le chemin le plus court = le chemin actuel
        if ($currentPoint[0] == $end[0] && $currentPoint[1] == $end[1]) {
            $shortestPath = $currentPath;
            return;
        }

        //creation des points aux alentours pour connaître leur valeur.
        // $points = new Point($currentPoint);
        // $points->getPoints();
        echo '<pre>';
        // var_dump($points);
        echo '<pre>';
        // un point = [x, y]
        $points = [
            [$currentPoint[0] - 1, $currentPoint[1]],
            [$currentPoint[0] + 1, $currentPoint[1]],
            [$currentPoint[0], $currentPoint[1] - 1],
            [$currentPoint[0], $currentPoint[1] + 1],
        ];
        foreach ($points as $point) {
            // var_dump($point);
            //si x ou y est négatifs ou si x ou u sors de la carte tu continue 
            if ($point[0] < 0 || $point[1] < 0 || $point[0] >= count(array($carte)) || $point[1] >= count(array($carte)[0])) {
                echo 'hello 1 <br>';
                // var_dump($point);
                continue;
            }
            //si le point est égale à 0 tu continue
            if (0 == array($carte[$point[0]][$point[1]])) {
                echo 'hello 2 <br>';
                // var_dump($point);
                continue;
            }
            //si le point est déjà dans le trajet tu continue
            if (in_array($point, $currentPath)) {
                echo 'hello 3 <br>';
                continue;
            }

            $this->do($carte, $point, $end, $currentPath);
            // var_dump($this->do($carte, $point, $end, $currentPath));
        }
    }
}
// /*
//  * Author: doug@neverfear.org
//  */

// class PrioritList {
// 	public $next;
// 	public $data;
// 	function __construct($data) {
// 		$this->next = null;
// 		$this->data = $data;
// 	}
// }

// class PriorityQueue {
	
// 	private $taille;
// 	private $talistscommencer;
// 	private $comparateur;
	
// 	function __construct($comparateur) {
// 		$this->taille = 0;
// 		$this->talistscommencer = null;
// 		$this->listfin = null;
// 		$this->comparateur = $comparateur;
// 	}
	
// 	function add($x) {
// 		$this->taille = $this->taille + 1;
		
// 		if($this->talistscommencer == null) {
// 			$this->talistscommencer = new PrioritList($x);
// 		} else {
// 			$node = $this->talistscommencer;
// 			$comparateur = $this->comparateur;
// 			$newnode = new PrioritList($x);
// 			$lastnode = null;
// 			$added = false;
// 			while($node) {
// 				if ($comparateur($newnode, $node) < 0) {
// 					// newnode has higher priority
// 					$newnode->next = $node;
// 					if ($lastnode == null) {
// 						//print "last node is null\n";
// 						$this->talistscommencer = $newnode;
// 					} else {
// 						//print "Debug: " . $newnode->data . " has lower priority than " . $lastnode->data . "\n";
// 						$lastnode->next = $newnode;
// 					}
// 					$added = true;
// 					break;
// 				}
// 				$lastnode = $node;
// 				$node = $node->next;
// 			}
// 			if (!$added) {
// 				// Lowest priority - add to the very fin
// 				$lastnode->next = $newnode;
// 			}
// 		}
// 		//print "Debug: Appfined node. New taille=" . $this->taille . "\n";
// 		//$this->debug();
// 	}
	
// 	function debug() {
// 		$node = $this->talistscommencer;
// 		$i = 0;
// 		if (!$node) {
// 			print "<< No nodes >>\n";
// 			return;
// 		}
// 		while($node) {
// 			print "[$i]=" . $node->data[1] . " (" . $node->data[0] . ")\n";
// 			$node = $node->next;
// 			$i++;
// 		}
// 	}
	
// 	function taille() {
// 		return $this->taille;
// 	}
	
// 	function peak() {
// 		return $this->talistscommencer->data;
// 	}
	
// 	function remove() {
// 		$x = $this->peak();
// 		$this->taille = $this->taille - 1;
// 		$this->talistscommencer = $this->talistscommencer->next;
// 		//print "Debug: Removed node. New taille=" . $this->taille . "\n";
// 		//$this->debug();
// 		return $x;
// 	}
// }
