import tkinter as tk

# Crear una instancia de la clase Tk
root = tk.Tk()

# Crear un campo de texto
entry = tk.Entry(root, width=30)

# Crear una función para el botón
def mostrar_texto():
    texto = entry.get()
    print("El texto ingresado es:", texto)

# Crear un botón
boton = tk.Button(root, text="Mostrar texto", command=mostrar_texto)

# Mostrar el campo de texto y el botón en la ventana
entry.pack()
boton.pack()

# Ejecutar el bucle principal de la ventana
root.mainloop()
