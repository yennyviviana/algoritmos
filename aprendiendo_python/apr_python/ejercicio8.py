import tkinter as tk

# Crear una instancia de la clase Tk
root = tk.Tk()

# Definir el título de la ventana
root.title("Mi primera ventana con Tkinter")

# Crear una etiqueta
label = tk.Label(root, text="Hola, mundo!", fg="yellow")

# Mostrar la etiqueta en la ventana
label.pack()

# Ejecutar el bucle principal de la ventana
root.mainloop()
