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
for ($x=0; $x <=0.63 ; $x +=0.1 ) {
    $sinValue = sin($x);
    echo "x a pour valeur " .$x . "\n"; 
    echo " son sinus est " . $sinValue  ;
}
?>

<?php
// Calculating and displaying the sine of values in increments of 0.1
for ($x = 0; $x <= 0.63; $x += 0.1) {
    $sinValue = sin($x); // Calculate the sine of x
    echo "Sine of " . $x . " is: " . $sinValue . "\n";
}
?>
