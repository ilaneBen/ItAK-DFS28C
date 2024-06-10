import Statistiques

class Personnage:
    def __init__(self, statistiques_de_base, classe):
        self.statistiques_de_base = statistiques_de_base
        self.classe = classe
        self.equipements = []

    def ajouter_equipement(self, equipement):
        self.equipements.append(equipement)

    def calculer_statistiques(self):
        stats = Statistiques(
            self.statistiques_de_base.force,
            self.statistiques_de_base.rapidite,
            self.statistiques_de_base.intelligence,
            self.statistiques_de_base.vitalite
        )
        stats.appliquer_modificateurs(self.classe.modificateurs)
        for equipement in self.equipements:
            stats.appliquer_modificateurs(equipement.modificateurs)
        return stats

    def afficher_statistiques(self):
        stats = self.calculer_statistiques()
        print(f"Force: {stats.force}, Rapidité: {stats.rapidite}, Intelligence: {stats.intelligence}, Vitalité: {stats.vitalite}")

