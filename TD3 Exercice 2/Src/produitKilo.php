<?php
	class produitKilo{
		public function prixKilo ($poids, $prixKilo){
			parent:: __construct();
			$this->poids=$poids;
			$this->prixKilo=$prixKilo;
		}
		abstract public function calculPrix (){
			return ($this->poids*$this->prixKilo);
		}
	}
?>