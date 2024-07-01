import requests
url = 'https://www.fixdate.io/modelo-invitacion/24/img/portada-mobile.webp'

# Hacer una solicitud GET
response = requests.get(url)

# Verificar que la solicitud fue exitosa
if response.status_code == 200:
    # Guardar el contenido en un archivo local
    with open('portada-mobile.webp', 'w', encoding='utf-8') as file:
        file.write(response.text)
else:
    print(f'Error al descargar el archivo: {response.status_code}')
