import random

class Scenario:
    def __init__(self, rencontres):
        self.rencontres = rencontres
        self.rencontres_terminees = []

    def lancer(self, personnage, game_master):
        while len(self.rencontres) > len(self.rencontres_terminees):
            rencontre = random.choice([r for r in self.rencontres if r not in self.rencontres_terminees])
            critique, succes, echec, fumble = rencontre.calculer_taux(personnage)
            result = game_master.pleaseGiveMeACrit()
            print(f"Rencontre: {rencontre}, Résultat: {result}")

            if result == "Critique":
                personnage.ajouter_equipement(rencontre.equipement_bonus)
            elif result == "Échec" or result == "Fumble":
                personnage.statistiques_de_base.vitalite -= rencontre.perte_vitalite

            self.rencontres_terminees.append(rencontre)
