import tkinter as tk

root = tk.Tk()
root.geometry("200x150")

# Crear la variable de control
var = tk.IntVar()

# Definir los valores y etiquetas de los botones
values = [("Opción 1", 1), ("Opción 2", 2), ("Opción 3", 3)]

# Crear los botones de opción
for text, value in values:
    rb = tk.Radigobutton(root, text=text, variable=var, value=value)
    rb.pack(anchor=tk.W)

valor_seleccionado = var.et()

root.mainloop()
