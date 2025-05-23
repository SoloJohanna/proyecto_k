# 🏢 Proyecto K

Este proyecto es una aplicación desarrollada con **Laravel** diseñada como una _landing page_ para un edificio actualmente en venta. Proporciona información clave del inmueble, imágenes destacadas y un formulario de contacto para posibles compradores.

---

## ✨ Características

-   **Formulario de Contacto**  
    Permite a los interesados enviar consultas directamente.

-   **Diseño Responsivo**  
    Adaptado para funcionar perfectamente en móviles, tablets y escritorios.

---

## 📦 Requisitos

-   PHP `^8.2`
-   Composer
-   Node.js y npm
-   Laravel Framework `^12.0`

---

## 🚀 Instalación

1. **Clonar el repositorio**

2. **Instalar dependencias**

    ```bash
    composer install
    ```

3. **Configurar entorno**

    - Copiar el archivo de entorno:
        ```bash
        cp .env.example .env
        ```
    - Editar `.env` con datos de configuración.

4. **Generar la clave de la aplicación**

    ```bash
    php artisan key:generate
    ```

---

## 🧪 Uso en desarrollo

1. Iniciar el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

2. Acceder a la aplicación en tu navegador:  
   [http://localhost:8000](http://localhost:8000)
