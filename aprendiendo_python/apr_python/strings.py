
"""En Python, los strings son una secuencia de caracteres y se definen entre comillas 
simples o dobles. Pueden contener letras, números, símbolos y espacios. Aquí hay algunos ejemplos:"""

cadena = "Hola, mundo!"
otra_cadena = 'Esto es otra cadena.'


print(cadena[0]) # imprime "H"
print(cadena[1]) # imprime "o"
print(cadena[2]) # imprime "l"

print(cadena[-1]) # imprime "!"
print(cadena[-2]) # imprime "o"
print(cadena[-3]) # imprime "d"


saludo = "Hola"
nombre = "Juan"
mensaje = saludo + ", " + nombre + "!"
print(mensaje) # imprime "Hola, Juan!"

saludo_repetido = saludo * 3
print(saludo_repetido) # imprime "HolaHolaHola"

cadena = "Hola, mundo!"

# Convertir a mayúsculas
mayusculas = cadena.upper()
print(mayusculas) # imprime "HOLA, MUNDO!"

# Convertir a minúsculas
minusculas = cadena.lower()
print(minusculas) # imprime "hola, mundo!"

# Buscar una subcadena
busqueda = cadena.find("mundo")
print(busqueda) # imprime 6

# Dividir en subcadenas
dividido = cadena.split(",")
print(dividido) # imprime ["Hola", " mundo!"]



