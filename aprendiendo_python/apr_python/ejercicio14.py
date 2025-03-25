import tkinter as tk
from tkinter import messagebox
from urllib import request

def open_file():
    url = "https://example.com/file.txt"
    try:
        response = request.urlopen(url)
        content = response.read().decode('utf-8')
        messagebox.showinfo("Contenido del archivo", content)
    except Exception as e:
        messagebox.showerror("Error", f"No se pudo abrir el archivo: {e}")

# Crear una instancia de la clase Tk
root = tk.Tk()

# Crear un botón para abrir el archivo
button = tk.Button(root, text="Abrir archivo", command=open_file)
button.pack()

# Ejecutar el bucle principal de la ventana
root.mainloop()
