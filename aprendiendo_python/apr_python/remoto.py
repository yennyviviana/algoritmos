import paramiko

# Crear instancia de SSHClient
cliente_ssh = paramiko.SSHClient()

# Añadir política de host para permitir la conexión
cliente_ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())

# Conectar al servidor remoto
cliente_ssh.connect('192.168.0.100', username='usuario', password='contraseña')

# Ejecutar comando en la terminal remota
stdin, stdout, stderr = cliente_ssh.exec_command('ls -l')
for linea in stdout:
    print(linea.strip())

# Cerrar la conexión SSH
cliente_ssh.close()
