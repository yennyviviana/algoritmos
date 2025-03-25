import tkinter as tk

# Crear la ventana principal
root = tk.Tk()

# Crear la barra de menú
menubar = tk.Menu(root)

# Crear el menú "Archivo" con sus elementos
file_menu = tk.Menu(menubar, tearoff=0)
file_menu.add_command(label="Nuevo")
file_menu.add_command(label="Abrir")
file_menu.add_command(label="Guardar")
file_menu.add_separator()
file_menu.add_command(label="Salir", command=root.quit)

# Agregar el menú "Archivo" a la barra de menú
menubar.add_cascade(label="Archivo", menu=file_menu)

# Crear el menú "Editar" con sus elementos
edit_menu = tk.Menu(menubar, tearoff=0)
edit_menu.add_command(label="Copiar")
edit_menu.add_command(label="Pegar")
edit_menu.add_command(label="Cortar")

# Agregar el menú "Editar" a la barra de menú
menubar.add_cascade(label="Editar", menu=edit_menu)

# Mostrar la barra de menú
root.config(menu=menubar)

# Ejecutar el bucle principal de la ventana
root.mainloop()
