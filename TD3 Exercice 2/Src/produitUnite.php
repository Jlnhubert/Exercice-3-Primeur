<?php
	class produitKilo{
		public function prixUnite ($nombreVendu, $prixUnite){
			parent:: __construct();
			$this->nombreVendu=$nombreVendu;
			$this->prixUnite=$prixUnite;
		}
		
		abstract public function calculPrix (){
			return ($this->nombreVendu*$this->prixUnite);
		}
	}
?>