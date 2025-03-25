import tkinter as tk

root = tk.Tk()
root.geometry("300x200")

# Variables de control para los botones
check_var_1 = tk.BooleanVar()
check_var_2 = tk.BooleanVar()

# Funciones que se ejecutarán cuando se cambie el estado de los botones
def check_1_changed():
    print(f"Check 1: {check_var_1.get()}")

def check_2_changed():
    print(f"Check 2: {check_var_2.get()}")

# Crear los botones
check_button_1 = tk.Checkbutton(root, text="Opción 1", variable=check_var_1, command=check_1_changed)
check_button_2 = tk.Checkbutton(root, text="Opción 2", variable=check_var_2, command=check_2_changed)

# Mostrar los botones
check_button_1.pack()
check_button_2.pack()

root.mainloop()
