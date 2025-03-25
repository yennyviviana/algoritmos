class Persona:
    def __init__(self, nombre, edad):
        self.nombre = nombre
        self.edad = edad

    def saludar(self):
        print("Hola, mi nombre es", self.nombre, "y tengo", self.edad, "años.")

# Crear un objeto Persona
mi_persona = Persona("Juan", 30)

# Llamar al método saludar del objeto Persona
mi_persona.saludar() # imprime "Hola, mi nombre es Juan y tengo 30 años."
