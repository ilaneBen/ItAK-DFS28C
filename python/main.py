import Statistiques
from Classe import Guerrier, Archer, Magicien
import Equipement
import Personnage
import Rencontre
import Resolution
import Scenario
import ModifStat
from statistiques import Statistiques

# Création des statistiques de base
statistiques_base = Statistiques(10, 5, 3, 7)

# Création d'un personnage de type Guerrier
guerrier = Guerrier()
personnage = Personnage.Personnage(statistiques_base, guerrier)

# Ajout d'équipements
epee = Equipement.Equipement("Épée", Statistiques.Statistiques(3, 0, 0, 1))
bouclier = Equipement.Equipement("Bouclier", Statistiques.Statistiques(0, -1, 0, 5))

personnage.ajouter_equipement(epee)
personnage.ajouter_equipement(bouclier)

# Affichage des statistiques du personnage
personnage.afficher_statistiques()

# Création de quelques rencontres
modif1 = ModifStat.ModifStat("stats.force >= 10", {"force": 0}, {"critique": 5})
modif2 = ModifStat.ModifStat("stats.rapidite <= 5", {"rapidite": 0}, {"fumble": 5})

rencontre1 = Rencontre.Rencontre(10, 50, 30, 10, [modif1], 2, Equipement.Equipement("Amulette", Statistiques.Statistiques(0, 0, 1, 0)))
rencontre2 = Rencontre.Rencontre(5, 60, 25, 10, [modif2], 3, Equipement.Equipement("Cape", Statistiques.Statistiques(0, 2, 0, 0)))

# Création du scénario
scenario = Scenario.Scenario([rencontre1, rencontre2])

# Création du Resolution
gm = Resolution.Resolution()

# Lancer le scénario
scenario.lancer(personnage, gm)

# Afficher les statistiques finales
personnage.afficher_statistiques()
