# Implementación del Patrón MVC en Laravel

## 📚 Descripción de la Actividad
Este proyecto demuestra la implementación del patrón arquitectónico **MVC (Modelo-Vista-Controlador)** en Laravel mediante el desarrollo de una aplicación funcional.  
Se aplican conceptos fundamentales como enrutamiento, controladores y modelos, comprendiendo el ciclo de vida completo de una petición HTTP y el flujo de datos entre las capas de presentación y lógica de negocio.

### Caso de Estudio
Se desarrolló un catálogo web simple de **lugares turísticos de El Salvador** utilizando archivos JSON como fuente de datos.  
Los usuarios pueden:
- Explorar destinos turísticos disponibles.
- Visualizar información detallada de cada lugar.
- Enviar formularios de contacto para solicitar más información.

---

## ⚙️ Requisitos Funcionales
La aplicación permite:
- Listar lugares turísticos desde un archivo JSON creado manualmente (`places.json`).
- Visualizar el detalle de un lugar específico mostrando:
  - Título
  - Departamento
  - Categoría
  - Precios
  - Otros datos relevantes
- Enviar formularios de contacto, cuyos datos se almacenan en un archivo JSON (`contact.json`).

---

## 🚀 Instalación y Ejecución
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/Jorgev2017/lugares-turisticos-laravel.git

2. Entrar al proyecto en CMD:
    cd lugares-turisticos-laravel

3. Instalar dependencias:
    composer install

4. Configurar el archivo .env (copiar desde .env.example y ajustar según tu entorno).

5. Ejecutar el servidor de desarrollo:
    php artisan serve
   
7. Abrir en el navegador:
    http://localhost:8000

## Flujo MVC en Laravel
Request (Petición HTTP) → El usuario accede a una ruta como /places o envía un formulario en /contact.

Route (Enrutamiento) → El archivo routes/web.php define qué controlador manejará la petición.

Controller (Controlador) →

PlaceController lee datos de places.json y los envía a la vista.

ContactController valida el formulario y guarda los datos en contact.json.

Model (Modelo) → Place.php representa la estructura de los lugares turísticos.

View (Vista) → Archivos Blade (index.blade.php, show.blade.php, create.blade.php) muestran la información al usuario.

Response (Respuesta HTTP) → El navegador renderiza la vista con los datos procesados.

## Archivos JSON
storage/app/places.json → catálogo de lugares turísticos.

storage/app/contact.json → mensajes enviados desde el formulario de contacto.

## Estructura del Proyecto
app/Http/Controllers/ → Controladores (PlaceController, ContactController).

app/Models/ → Modelos (Place.php).

resources/views/ → Vistas Blade (index, show, create).

routes/web.php → Definición de rutas.

storage/app/ → Archivos JSON de datos.

.gitignore → Configuración para excluir vendor/, .env, etc.

## Conclusión
Este proyecto permite comprender cómo Laravel implementa el patrón MVC, mostrando el ciclo de vida de una petición HTTP y el flujo de datos entre las capas de presentación y lógica de negocio, utilizando archivos JSON como fuente de datos.
