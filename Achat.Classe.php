<?php 
global $start;
/**
 * 
 */
class Achat extends Requettes
{
	private $_id_achat;
	private $_prix;
	private $_nom_produit;
	private $_Montant_Total;
	private $_photo_article=array();


	public function AjouteListe($id,$prix,$nom_produit,$photo)
	{
		global $start;

		$this->_id_users=$id;
		$this->_prix=$prix;
		$this->_nom_produit=$nom_produit;
		$this->_photo_article[]=$photo;

		if (
	isset($this->_id_users) AND !empty($this->_id_users) AND
	isset($this->_nom_produit) AND !empty($this->_nom_produit) AND
	isset($this->_prix) AND !empty($this->_prix) AND
	isset($this->_photo_article) AND !empty($this->_photo_article)
	) {
$basededonnee=$start->bdd->prepare('INSERT INTO Liste(id_vendeur,nom_produit,prix,photo,date_achat)VALUES(:i,:n,:p,:h,NOW())
');
$basededonnee->execute(array(
'i' =>$this->_id_users , 
'n' =>$this->_nom_produit,
'p' =>$this->_prix,
'h' =>$this->_photo_article
));
		}

	}
public function RecupProduit()
	{
		global $start;

		$tableau=array();
		$basededonnee=$start->bdd->query('SELECT users.nom,users.prenom,users.photo AS tof ,Liste.nom_produit,Liste.prix,Liste.photo,Liste.date_achat FROM users INNER JOIN Liste ON users.id_users=Liste.id_vendeur');
		while ($basededonnees=$basededonnee->fetch()) {
			$tableau[]=$basededonnees;
		}
		return $tableau;
	}
	public function RecupPubl()
	{
		global $start;

		$tableau=array();
		$basededonnee=$start->bdd->query('SELECT id_pub,titre_public,photo,validation FROM  Publicite WHERE validation=1');
		while ($basededonnees=$basededonnee->fetch()) {
			$tableau[]=$basededonnees;
		}
		return $tableau;
	}
		public function Recupemojin()
	{
		global $start;

		$tableau=array();
		$basededonnee=$start->bdd->query('SELECT * FROM  emojin ');
		while ($basededonnees=$basededonnee->fetch()) {
			$tableau[]=$basededonnees;
		}
		return $tableau;
	}
}