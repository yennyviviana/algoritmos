print("Escriba usted su nombre:")
nombre = input()

print("Escriba su edad:")
edad_input = input()

# Convertir la edad a un número entero, si es posible.......
try:
    edad = int(edad_input)
except ValueError:
    print("La edad debe ser un número entero.")
    edad = None

if edad is not None:
    print(f"Bienvenidos a la campaña, {nombre}. Tu edad es {edad}.")
