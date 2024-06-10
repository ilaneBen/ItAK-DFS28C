import Statistiques

class Personnage:
    def get_modifier(self):
        pass

class Guerrier(Personnage):
    def get_modificateurs(self):
        return Statistiques.Statistiques(5, 2, -1, 3)

class Archer(Personnage):
    def get_modificateurs(self):
        return Statistiques.Statistiques(2, 5, 1, 2)

class Magicien(Personnage):
    def get_modificateurs(self):
        return Statistiques.Statistiques(0, 1, 5, 1)
