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
echo"Entrez la hauteur de la balle :";
$haut=fgets(STDIN); // Lecture 


$rebond=0;


while ($haut>20) {
    $haut=$haut*0.88;
    $rebond++;
    # code...
}

echo"nb de rebond" . $rebond ."\n";
echo"hauteur final ".$haut;


?>

<?php
// Exercice Rebond Ball
// echo "Entrez la hauteur de la balle :";
// $haut = fgets(STDIN); // Lecture de la hauteur initiale

// $rebond = 0;

// while ($haut > 20) {
//     $haut = $haut * 0.88; // Calcul de la nouvelle hauteur après rebond
//     $rebond++; // Incrémenter le nombre de rebonds
// }

// echo "Nombre de rebonds : " . $rebond . "\n";
// echo "Hauteur finale : " . $haut . "\n";
?>
