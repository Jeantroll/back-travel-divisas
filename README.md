# Proyecto Laravel - Gestión de Países y Ciudades

## Tabla de Contenidos
1. [Descripción del Proyecto](#descripción-del-proyecto)
2. [Características](#características)
3. [Requisitos del Sistema](#requisitos-del-sistema)
4. [Instalación](#instalación)
5. [Configuración](#configuración)
6. [Estructura del Proyecto](#estructura-del-proyecto)
7. [Uso](#uso)
8. [Rutas del Proyecto](#rutas-del-proyecto)
9. [Controladores Principales](#controladores-principales)
10. [Modelos](#modelos)
11. [Recursos](#recursos)
12. [Migraciones](#migraciones)
13. [Contribución](#contribución)
14. [Licencia](#licencia)

## Descripción del Proyecto
Este es un proyecto Laravel diseñado para gestionar información de países y ciudades, permitiendo operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre estos recursos. El proyecto también maneja la conversión de divisas y la consulta del clima basado en la ciudad seleccionada.

## Características
- Gestión de países y ciudades.
- Consulta de clima basada en la ciudad seleccionada.
- Conversión de divisas.
- API RESTful.

## Requisitos del Sistema
- PHP >= 7.3
- Composer
- MySQL
- Laravel 7.x

## Instalación
1. Clonar el repositorio:

    ```sh
        git clone https://github.com/tu_usuario/tu_repositorio.git

2. Navegar al directorio del proyecto:

    ```sh
        cd tu_repositorio

3. Instalar las dependencias de PHP:

    ```sh
        composer install

4. Copiar el archivo de ejemplo de configuración y ajustar las variables de entorno:

    ```sh
        cp .env.example .env

5. Generar la clave de la aplicación:

    ```sh
        php artisan key:generate

6. Configurar la base de datos en el archivo .env:

    ```ini
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nombre_de_tu_base_de_datos
        DB_USERNAME=tu_usuario
        DB_PASSWORD=tu_contraseña

7. Ejecutar las migraciones:

    ```sh
        php artisan migrate

## Configuración
Configura las variables de entorno necesarias en el archivo .env.

## Estructura del Proyecto
- app/Http/Controllers/API: Contiene los controladores de la API.
- app/Models: Contiene los modelos de Eloquent.
- app/Http/Resources: Contiene los recursos para la transformación de JSON.
- database/migrations: Contiene las migraciones de la base de datos.
## Uso
Para iniciar el servidor de desarrollo:
    
    ```sh
        php artisan serve

Navega a http://localhost:8000 en tu navegador.

## Rutas del Proyecto
Las rutas de la API están definidas en routes/api.php:
    ```php
        Route::apiResource('countries', CountryController::class);
        Route::apiResource('cities', CityController::class);
        Route::apiResource('all-data', AllDataController::class);

## Controladores Principales
# CountryController
- index: Lista todos los países.
- store: Crea un nuevo país.
- show: Muestra un país por su ID.
- update: Actualiza un país por su ID.
- destroy: Elimina un país por su ID.

# CityController
- index: Lista todas las ciudades.
- store: Crea una nueva ciudad.
- show: Muestra una ciudad por su ID.
- update: Actualiza una ciudad por su ID.
- destroy: Elimina una ciudad por su ID.

# AllDataController
- index: Lista todos los registros de datos.
- store: Crea un nuevo registro de datos.
- show: Muestra un registro de datos por su ID.
- update: Actualiza un registro de datos por su ID.
- destroy: Elimina un registro de datos por su ID.

## Modelos
# Country
- id: Identificador único del país.
- name: Nombre del país.
- code: Código del país.

# City
- id: Identificador único de la ciudad.
- name: Nombre de la ciudad.
- country_id: Identificador del país asociado.
# AllData
- id: Identificador único del registro.
- country_id: Identificador del país.
- city_id: Identificador de la ciudad.
- money_cop: Dinero en COP (puede ser nulo).
- money_foreign_currency: Dinero en otra divisa (puede ser nulo).
- climate: Clima (puede ser nulo).
- exchange_rate: Tasa de cambio (puede ser nulo).
## Recursos
# CountryResource
-Transforma los datos del modelo Country para la respuesta JSON.

# CityResource
- Transforma los datos del modelo City para la respuesta JSON.

# AllDataResource
- Transforma los datos del modelo AllData para la respuesta JSON.

## Migraciones
# CreateCountriesTable
- Define la estructura de la tabla countries.

# CreateCitiesTable
- Define la estructura de la tabla cities.

# CreateAllDataTable
- Define la estructura de la tabla all_data.

## Contribución

Las contribuciones son bienvenidas. Por favor, sigue los siguientes pasos:

Haz un fork del repositorio.
Crea una nueva rama (git checkout -b feature/nueva-caracteristica).
Haz tus cambios (git commit -am 'Añadir nueva característica').
Sube los cambios (git push origin feature/nueva-caracteristica).
Abre un Pull Request.
    


















