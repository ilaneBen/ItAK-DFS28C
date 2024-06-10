
class ModifStat:
    def __init__(self, condition, modificateurs_stats, modificateurs_taux):
        self.condition = condition
        self.modificateurs_stats = modificateurs_stats
        self.modificateurs_taux = modificateurs_taux

    def appliquer(self, personnage, critique, succes, echec, fumble):
        stats = personnage.calculer_statistiques()
        if eval(self.condition):
            for attr, value in self.modificateurs_stats.items():
                setattr(stats, attr, getattr(stats, attr) + value)
            critique += self.modificateurs_taux.get('critique', 0)
            succes += self.modificateurs_taux.get('succes', 0)
            echec += self.modificateurs_taux.get('echec', 0)
            fumble += self.modificateurs_taux.get('fumble', 0)
        return critique, succes, echec, fumble
