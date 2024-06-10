import ModifStat

class Rencontre:
    def __init__(self, critique, succes, echec, fumble, modificateurs, perte_vitalite, equipement_bonus):
        self.critique = critique
        self.succes = succes
        self.echec = echec
        self.fumble = fumble
        self.modificateurs = modificateurs
        self.perte_vitalite = perte_vitalite
        self.equipement_bonus = equipement_bonus

    def calculer_taux(self, personnage):
        critique = self.critique
        succes = self.succes
        echec = self.echec
        fumble = self.fumble

        for modif_stat in self.modificateurs:
            critique, succes, echec, fumble = modif_stat.appliquer(personnage, critique, succes, echec, fumble)

        return critique, succes, echec, fumble