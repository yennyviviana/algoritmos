import tkinter as tk

class Formulario:
    def __init__(self, ventana):
        # Crea la ventana
        self.ventana = ventana
        self.ventana.title("Formulario")

        # Etiqueta para el campo de nombre
        self.lbl_nombre = tk.Label(ventana, text="Nombre:")
        self.lbl_nombre.grid(row=0, column=0)

        # Campo de entrada de texto para el nombre
        self.entry_nombre = tk.Entry(ventana)
        self.entry_nombre.grid(row=0, column=1)

        # Etiqueta para el campo de correo electrónico
        self.lbl_correo = tk.Label(ventana, text="Correo electrónico:")
        self.lbl_correo.grid(row=1, column=0)

        # Campo de entrada de texto para el correo electrónico
        self.entry_correo = tk.Entry(ventana)
        self.entry_correo.grid(row=1, column=1)

        # Botón de envío
        self.btn_enviar = tk.Button(ventana, text="Enviar", command=self.enviar_formulario)
        self.btn_enviar.grid(row=2, column=1)

    def enviar_formulario(self):
        # Obtiene los valores de los campos de entrada de texto
        nombre = self.entry_nombre.get()
        correo = self.entry_correo.get()

        # Realiza alguna acción con los valores obtenidos, como enviar un correo electrónico o guardarlos en una base de datos
        print("Nombre: ", nombre)
        print("Correo electrónico: ", correo)

# Crea la ventana y muestra el formulario
ventana = tk.Tk()
formulario = Formulario(ventana)
ventana.mainloop()
