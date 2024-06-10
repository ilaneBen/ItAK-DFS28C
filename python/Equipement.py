import Statistiques
class Equipement:
    def __init__(self, nom, modificateurs):
        self.nom = nom
        self.modificateurs = modificateurs

    def get_modificateurs(self):
        return self.modificateurs

