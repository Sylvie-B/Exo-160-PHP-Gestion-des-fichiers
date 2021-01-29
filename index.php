<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$content = "Omnes hora vulnerant ultima necat.";
file_put_contents('monText.txt', $content);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$tab = ["lorem", "ipsum", "dolor", "sit", "amet", "elit", "ducimus", "fugit", "illum", "ipsam"];
$file = fopen('monText.txt', 'a+b');

foreach ($tab as $word){
    fwrite($file, $word);
}

fclose($file);
/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$way = pathinfo('index.php');
echo $way['extension'];
echo "<br><br>";

/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if(!file_exists('toto.txt')){
    echo "Le fichier n'existe pas !";
}
echo "<br><br>";
/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
$file = fopen('monText.txt', 'r+b');

while ($char = fgetc($file)) {
    if($char !== 'a') {
        echo $char;
    }
    else{
        echo "@";
    }
}

fclose($file);
