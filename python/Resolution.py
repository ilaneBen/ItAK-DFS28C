import random
import subprocess

class Resolution:
    def pleaseGiveMeACrit(self):
        result = random.randint(1, 100)
        if result <= 5:
            return "Fumble"
        elif result <= 20:
            return "Critique"
        elif result <= 40:
            return "Succès"
        elif result <= 40:
            return "Échec"
