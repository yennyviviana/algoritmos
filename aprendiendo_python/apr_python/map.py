import tkinter as tk
from PIL import Image, ImageTk

# Crear una instancia de la clase Tk
root = tk.Tk()

# Cargar la imagen del mapa
map_image = Image.open("mapa.png")
map_image = map_image.resize((800, 600))
map_image = ImageTk.PhotoImage(map_image)

# Crear un widget de etiqueta para mostrar la imagen del mapa
map_label = tk.Label(root, image=map_image)

# Mostrar el widget de etiqueta en la ventana
map_label.pack()

# Ejecutar el bucle principal de la ventana
root.mainloop()
