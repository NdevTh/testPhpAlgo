// Fonction pour compter les voyelles et les consonnes
function compterVoyellesEtConsonnes(ch) {
    let nbc = 0; // Nombre de consonnes
    let nbv = 0; // Nombre de voyelles
    let lettre;
  
    // Boucle pour examiner chaque caractère
    for (let i = 0; i < ch.length; i++) {
      lettre = ch[i].toLowerCase(); // Convertir en minuscule pour la vérification
  
      // Vérifier si le caractère est une voyelle
      if ('aeiouy'.includes(lettre)) {
        nbv++;
      } else if (lettre >= 'a' && lettre <= 'z') { // Vérifier si c'est une consonne (en ignorant les espaces et caractères spéciaux)
        nbc++;
      }
    }
  
    // Afficher les résultats
    console.log("nombre de consonnes :", nbc);
    console.log("nombre de voyelles :", nbv);
  }
  
  // Utilisation de la fonction avec une interaction utilisateur
  const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
  });
  
  readline.question("entrer une phrase: ", function(ch) {
    compterVoyellesEtConsonnes(ch);
    readline.close();
  });
  