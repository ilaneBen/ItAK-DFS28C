<?php
// Contrôleur

// Inclure le fichier contenant les classes du modèle
require_once './classGM.php';
require_once './classCoin.php';
require_once './classDeck.php';
require_once './classDice.php';
require_once './classRandomTirage.php';
require_once './classResult.php';
require_once './classResultatSortie.php';
require_once './main.php';

// Vérifier le type de requête reçue
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Appeler la fonction main() pour obtenir les objets nécessaires
    $gm = main();

    // Appeler la méthode pleaseGiveMeACrit() pour effectuer le tirage
    $result = $gm->pleaseGiveMeACrit();

    // Retourner le résultat sous forme de texte
    echo $result;
} else {
    // Si la requête n'est pas GET, renvoyer une erreur
    http_response_code(405); // Méthode non autorisée
    echo "Méthode non autorisée";
}
?>
