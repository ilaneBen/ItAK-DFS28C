

class Statistiques :
    def __init__(self, force, rapidite, intelligence, vitalite) :
        self.force = force
        self.rapidite = rapidite
        self.intelligence = intelligence
        self.vitalite = vitalite

    def modifier(self, force, rapidite,intelligence, vitalite):
        self.force += force
        self.rapidite += rapidite
        self.intelligence += intelligence
        self.vitalite += vitalite 

    def __str__(self) -> str:
        return f"Force:{self.force}, Rapidité:{self.rapidite}, Intélligence:{self.intelligence}, Vitalité:{self.vitalite}"