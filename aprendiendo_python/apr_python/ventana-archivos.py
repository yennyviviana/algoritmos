import tkinter as tk
from tkinter import filedialog

def open_file():
    file_path = filedialog.askopenfilename()
    print("Archivo seleccionado:", file_path)

root = tk.Tk()

# Crear un botón para abrir el archivo
button = tk.Button(root, text="Abrir archivo", command=open_file)
button.pack()

root.mainloop()
