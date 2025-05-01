import os
import unicodedata

# Ruta a la carpeta donde están los PNG
carpeta = "C:/xampp/htdocs/FEDEPAL/images/socios"

# Recorre todos los archivos en la carpeta
for nombre_archivo in os.listdir(carpeta):
    if nombre_archivo.lower().endswith(".png"):
        # Normaliza y elimina las tildes
        nuevo_nombre = unicodedata.normalize("NFKD", nombre_archivo).encode("ASCII", "ignore").decode("ASCII")
        
        # Si el nombre cambió, renombrar
        if nuevo_nombre != nombre_archivo:
            ruta_antigua = os.path.join(carpeta, nombre_archivo)
            ruta_nueva = os.path.join(carpeta, nuevo_nombre)
            os.rename(ruta_antigua, ruta_nueva)
            print(f"Renombrado: {nombre_archivo} → {nuevo_nombre}")
