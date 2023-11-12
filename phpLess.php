<?php


// ------>>>>année bissextile
// echo "Veuillez entrer une année : ";
// $date = trim(fgets(STDIN));

// if (($date % 4 == 0 && $date % 100 != 0) || ($date % 400 == 0)) {
//     echo "Votre année est bissextile";
// } else {
//     echo "Année normale";
// }
// ---->>> l'ordre des nom / mot <<<<------
// echo " veuillez saisir le premier nom1 :";
// $nam1 = trim(fgets(STDIN));
// echo " veuillez saisir le premier nom2 : ";
// $nam2 = trim(fgets(STDIN));
// echo " veuillez saisir le premier nom3 : ";
// $nam3 = trim(fgets(STDIN));

// if ($nam1<$nam2 && $nam2<$nam3 ) {
//     echo "les noms sont dans l'ordre alphabet";
//     }
//     elseif ($nam1>$nam2 && $nam2>$nam3) {
//         echo" les noms sont dans l'ordre décroissant";
//         # code...
//     } else {
//         echo"c'est désordre";
//     }


//-->>>>>>>>> count  words and caracter
// $mots = 0;
// echo "veuillez entrée une phrase";


class CompteurDeLettres {
    private $phrase;

    public function __construct($phrase) {
        $this->phrase = $phrase;
    }

    public function compterVoyellesEtConsonnes() {
        $nbc = 0; // Nombre de consonnes
        $nbv = 0; // Nombre de voyelles
        $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

        // Boucle pour examiner chaque caractère
        for ($i = 0; $i < strlen($this->phrase); $i++) {
            $lettre = strtolower($this->phrase[$i]); // Convertir en minuscule pour la vérification

            // Vérifier si le caractère est une voyelle
            if (in_array($lettre, $voyelles)) {
                $nbv++;
            // Vérifier si c'est une consonne (en ignorant les espaces et caractères non alphabétiques)
            } elseif ($lettre >= 'a' && $lettre <= 'z') {
                $nbc++;
            }
        }

        // Retourner les résultats sous forme de tableau associatif
        return ['consonnes' => $nbc, 'voyelles' => $nbv];
    }
}

// Interaction avec l'utilisateur
echo "Entrer une phrase : ";
$ch = fgets(STDIN); // Lire une ligne depuis l'entrée standard (le clavier)

// Création d'une instance de CompteurDeLettres et appel de la méthode
$compteur = new CompteurDeLettres(trim($ch));
$resultat = $compteur->compterVoyellesEtConsonnes();

// Afficher les résultats
echo "nombre de consonnes : " . $resultat['consonnes'] . "\n";
echo "nombre de voyelles : " . $resultat['voyelles'] . "\n";



?>

