import hashlib

password = "mi_contraseña"

# Encriptar la contraseña
hashed_password = hashlib.sha256(password.encode()).hexdigest()

# Imprimir el hash resultante
print(hashed_password)
