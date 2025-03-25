import tkinter as tk
import sqlite3

# Crear una conexión a la base de datos
conn = sqlite3.connect('productos.db')
cursor = conn.cursor()

# Crear la tabla de productos si no existe
cursor.execute('''
CREATE TABLE IF NOT EXISTS productos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT,
    precio REAL
)
''')

# Función para agregar un nuevo producto a la base de datos
def agregar_producto():
    nombre = nombre_entry.get()
    precio = precio_entry.get()
    cursor.execute('INSERT INTO productos (nombre, precio) VALUES (?, ?)', (nombre, precio))
    conn.commit()
    mostrar_productos()

# Función para actualizar un producto en la base de datos
def actualizar_producto():
    id = id_entry.get()
    nombre = nombre_entry.get()
    precio = precio_entry.get()
    cursor.execute('UPDATE productos SET nombre=?, precio=? WHERE id=?', (nombre, precio, id))
    conn.commit()
    mostrar_productos()

# Función para eliminar un producto de la base de datos
def eliminar_producto():
    id = id_entry.get()
    cursor.execute('DELETE FROM productos WHERE id=?', (id,))
    conn.commit()
    mostrar_productos()

# Función para mostrar los productos en una lista
def mostrar_productos():
    # Borrar los productos anteriores de la lista
    for widget in productos_listbox.winfo_children():
        widget.destroy()
    # Obtener los productos de la base de datos
    cursor.execute('SELECT * FROM productos')
    productos = cursor.fetchall()
    # Agregar los productos a la lista
    for producto in productos:
        id, nombre, precio = producto
        producto_label = tk.Label(productos_listbox, text=f'{id}. {nombre} - ${precio:.2f}')
        producto_label.pack()

# Crear una instancia de la clase Tk
root = tk.Tk()
root.title('Productos')

# Crear una etiqueta
label = tk.Label(root, text='Ingrese el nombre y precio del producto:')
label.grid(row=0, column=0, columnspan=2, padx=10, pady=10)

# Crear campos de entrada de texto
id_entry = tk.Entry(root, width=5)
id_entry.grid(row=1, column=0, padx=5, pady=5)
nombre_entry = tk.Entry(root)
nombre_entry.grid(row=1, column=1, padx=5, pady=5)
precio_entry = tk.Entry(root)
precio_entry.grid(row=1, column=2, padx=5, pady=5)

# Crear botones para CRUD
agregar_button = tk.Button(root, text='Agregar', command=agregar_producto)
agregar_button.grid(row=2, column=0, padx=10, pady=10)
actualizar_button = tk.Button(root, text='Actualizar', command=actualizar_producto)
actualizar_button.grid(row=2, column=1, padx=10, pady=10)
eliminar_button = tk.Button(root, text='Eliminar', command=eliminar_producto)
eliminar_button.grid(row=2, column=2, padx=10, pady=10)

# Crear un botón para mostrar los productos
mostrar_button = tk.Button(root, text='Mostrar productos', command=mostrar_productos)
mostrar_button.grid(row=3, column=0, columnspan=3, padx=10, pady=10)

# Crear una lista para mostrar los productos
productos_listbox = tk.Listbox(root)

# Cerrar la conexión a la base de datos
conn.close()

# Iniciar el loop de eventos de la ventana
root.mainloop()

