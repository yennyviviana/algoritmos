import tkinter as tk
from tkinter import ttk

def show_popup():
    popup = tk.Tk()
    popup.title("Ventana emergente")
    popup.geometry("200x100")

    # Personalizar el esquema de colores
    style = ttk.Style(popup)
    style.theme_use('clam')
    style.configure('TLabel', background='#ECECEC', foreground='#404040', font=('TkDefaultFont', 10))
    style.configure('TButton', background='#008CBA', foreground='#FFFFFF', font=('TkDefaultFont', 10), padding=5)

    label = ttk.Label(popup, text="¡Hola! Esto es una ventana emergente.")
    label.pack(padx=10, pady=10)

    button = ttk.Button(popup, text="Cerrar", command=popup.destroy)
    button.pack(padx=10, pady=10)

    popup.mainloop()

root = tk.Tk()
root.geometry("300x200")
button = tk.Button(root, text="Mostrar ventana emergente", command=show_popup)
button.pack(pady=50)
root.mainloop()
