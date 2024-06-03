# Programmation orientée objet - Php/Python

Dans le but d'animer une soirée de JdR, un Game Master emmène un ensemble de matériel pour gérer les tirages aléatoires conséquents aux choix des joueurs.

À chaque action, le Game Master choisira au hasard l'un des éléments en sa possession pour tirer la valeur.
Cette valeur pourra être une réussite, un échec, une réussite critique ou un fumble. Selon l'action, le taux de réussite, de critique et de fumble sera variable.

1/ Modéliser une classe qui représente un résultat de tirage aléatoire.

2/ Modéliser un comportement correspondant au tirage de ces valeurs aléatoires.

3/ Le GM a à sa disposition 3 types de matériels. Créez et implémentez les classes correspondantes en Php, en utilisant le comportement créé précédemment.
 - le dé : il peut être créé avec un nombre de face. Il génère une valeur correspondante à l'une de ses faces lors du tirage
 - une pièce : elle ne peut renvoyer que deux valeurs, mais est dépendante d'un nombre de lancés : la génération ne renverra 1 que si les x lancés valent 1 (tips: utilisez une fonction récursive)
 - un deck de cartes : il est dépendant d'un nombre de couleurs et de valeurs, sa méthode de génération renvoie une valeur entre 1 et nombre couleurs * nombres valeurs, après deux tirages le premier sur la couleur, le second sur la valeur.

4/ Créez maintenant la méthode de tirage aléatoire pour chacun des éléments précédents. Selon l'élément, le statut du lancé doit être calculé à partir du résultat de la fonction aléatoire.

4/ Créez maintenant une classe GameMaster.
 - Un GameMaster dispose d'un nombre de dés conséquents de différents types, de deux decks de cartes l'un de trois couleurs de et 18 valeurs, le deuxième de 4 couleurs de 13 valeurs, et de deux pièces.
 - un GameMaster peut effectuer des tirages via la méthode `pleaseGiveMeACrit`. Le GameMaster sélectionne l'une des instances de Dice / Deck et Coin au hasard et renvoie une constante correspondant au type de résultat. Les valeurs de succès / critique / fumble sont pour le moment fixées à 40% / 15% / 5%.
