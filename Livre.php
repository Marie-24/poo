<?php
class Livre{

	public $format;
	public $genre ;
	public $auteur;
	public $annee ;
	public $ref;
	public $extrait;



	public function auteurContemporain($annee,$auteur){
			if($annee>1930){
				return "".$auteur." est contemporain<br>";
			}
			else{
				return "c'est un vieux<br>";
			}

	}
	public function searchWord($word){
		$word_position = strpos($this->extrait,$word);
		if($word_position !==false){
			return "Le livre contient le mot <strong>".$word."</strong> à la position ".$word_position."<br>";
		}
		else {
			return "Le livre ne contient pas ".$word."<br>";
		}

	}

	public function getTitle($titre){
		return "Le titre du livre est <em> ".$titre."</em><br>";


	}

}


$livre = new livre();
$nom_auteur = $livre->auteur ="Dahl";
$intitule = $livre->titre = "Bizarre";
$livre->extrait = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar in dolor a bibendum. Maecenas ut varius risus. Duis ullamcorper mollis magna, sed lobortis felis tempor quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vel venenatis quam. Vestibulum interdum scelerisque dui, at efficitur dolor elementum vehicula. Maecenas eu cursus metus, id mollis justo. Donec accumsan mauris in consequat dignissim. Curabitur ornare non metus in aliquam. Pellentesque tincidunt molestie justo porta eleifend. Duis laoreet egestas arcu. Curabitur et justo ullamcorper augue tincidunt dictum.";


$periode = $livre->annee=1950;



echo $livre->searchWord('mollis');
echo $livre->auteurContemporain($periode,$nom_auteur);
echo $livre->getTitle($intitule);

echo"<pre>";
print_r ($livre);
echo"</pre>";