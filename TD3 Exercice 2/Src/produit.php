<?p
	class produit{
		protected $poids;
		protected $prixKilo;
		static public function nbr_produit{
			$nombreProduit=0;
		}
		public function __construct ($poids, $nombreVendu){
			self::$nbr_produit++;
		}
		abstract public function calculPrix();
	}
?>