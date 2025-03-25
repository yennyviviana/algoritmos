import tkinter as tk

def open_popup():
    # Crear una ventana emergente
    popup = tk.Toplevel(root)
    popup.title("Ventana emergente")
    
    # Crear un mensaje en la ventana emergente
    label = tk.Label(popup, text="¡Hola desde la ventana emergente!")
    label.pack(padx=10, pady=10)
    
# Crear la ventana principal
root = tk.Tk()

# Crear un botón que abra la ventana emergente
button = tk.Button(root, text="Abrir ventana emergente", command=open_popup)
button.pack(padx=10, pady=10)

# Ejecutar el bucle principal de la ventana
root.mainloop()
