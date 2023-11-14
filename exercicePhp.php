<?php
// remboursement 
// $mont= 2500;
// $mois = 0;

// while ($mont > 110) {

//     $mont = $mont - 110;
//     $mois++ ;

    
// }
// echo " le nombre de mois rembourse est " . $mois ." mois\n";
// echo " il reste " . $mont ."euros";



?> 
<?php
//exercice Rebond Ball
// echo"Entrez la hauteur de la balle :";
// $haut=fgets(STDIN); // Lecture 


// $rebond=0;


// while ($haut>20) {
//     $haut=$haut*0.88;
//     $rebond++;
//     # code...
// }

// echo"nb de rebond" . $rebond ."\n";
// echo"hauteur final ".$haut;


?>

<?php
// calcul of sinus with for crémenté de 0.1
// for ($x=0; $x <=0.63 ; $x +=0.1 ) {
//     $sinValue = sin($x);
//     echo "x a pour valeur " .$x . "\n"; 
//     echo " son sinus est " . $sinValue  ;
// }
?>


<?php
// Affichage de la table de multiplication
echo "Veuillez entrer un nombre: ";
$nombre = fgets(STDIN);

for ($i = 1; $i <= 10; $i++) { 
    $resultat = $i * $nombre;
    echo $i . " x " . $nombre . " = " . $resultat . "\n";
}

echo "Voici la table de " . $nombre;
?>



<?php
// show table multiplication
echo"veuillez rentrez un nombre";
$nombre = fgets(STDIN);
for ($i=0; $i <10 ; $i++) { 
    $i=$i*$nombre;
    
}
echo " voici la table". $nombre
?>
