import tkinter as tk

def do_something():
    print("Something was done")

def do_something_else():
    print("Something else was done")

# Crear una instancia de la clase Tk
root = tk.Tk()

# Crear una instancia de la clase Menu
menu_bar = tk.Menu(root)

# Crear opciones del menú
file_menu = tk.Menu(menu_bar, tearoff=0)
file_menu.add_command(label="Abrir", command=do_something)
file_menu.add_command(label="Guardar", command=do_something_else)
file_menu.add_separator()
file_menu.add_command(label="Salir", command=root.quit)

# Agregar las opciones del menú a la barra del menú principal
menu_bar.add_cascade(label="Archivo", menu=file_menu)

# Mostrar la barra del menú en la ventana
root.config(menu=menu_bar)

# Ejecutar el bucle principal de la ventana
root.mainloop()
