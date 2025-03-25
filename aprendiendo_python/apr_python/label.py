import tkinter as tk

# Crear una instancia de la clase Tk
root = tk.Tk()

# Agregar una imagen de fondo
"""bg_image = tk.PhotoImage(file="ruta/de/tu/imagen.png")
background = tk.Label(root, image=bg_image)
background.place(relwidth=1, relheight=1)
"""

# Configurar el tamaño de la ventana
root.geometry("600x400")

# Permitir redimensionar la ventana
root.resizable(True, True)

# Crear una etiqueta
label = tk.Label(root, text="Hola, bienvenidos!", fg="red")

# Mostrar la etiqueta en la ventana
label.pack()

# Ejecutar el bucle principal de la ventana
root.mainloop()
