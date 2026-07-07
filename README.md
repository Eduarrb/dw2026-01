# 🚀 Curso Completo de Desarrollo Web: HTML, CSS, JavaScript, PHP & MySQL 🚀

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Sass](https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white)](https://sass-lang.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![Made with love](https://img.shields.io/badge/Made%20with-Love-ff69b4.svg?style=for-the-badge)](https://github.com/your-username)

## 🌟 Propósito del Proyecto

Este repositorio es una colección exhaustiva de módulos de aprendizaje y proyectos prácticos, diseñado para guiar a los estudiantes a través de las bases del desarrollo web. Cubre un amplio espectro de tecnologías esenciales, desde la construcción de interfaces de usuario interactivas con HTML, CSS y JavaScript, hasta la gestión de bases de datos y la lógica del lado del servidor con MySQL y PHP. Es una herramienta ideal para quienes buscan adquirir habilidades fundamentales y aplicadas en el desarrollo web front-end y back-end.

## 🛠️ Tecnologías Utilizadas

Aquí tienes un desglose de las principales tecnologías y herramientas empleadas en este curso:

*   **HTML5** 🌐: Estructura semántica y base de todas las páginas web.
*   **CSS3** 🎨: Estilización y diseño visual de los elementos HTML.
*   **Sass/SCSS** 💅: Preprocesador CSS para una estilización más eficiente y organizada (utilizado en el proyecto `Vogue` y `CMS`).
*   **JavaScript (ES6+)** 🚀: Lógica interactiva en el lado del cliente y manipulación del DOM.
    *   **Axios** 📡: Cliente HTTP basado en promesas para realizar peticiones a APIs (ej. Pokedex).
    *   **Chart.js** 📊: Biblioteca JavaScript para la creación de gráficos interactivos (ej. Dashboard de Admin en `Vogue` y `CMS`).
*   **Node.js / npm** 📦: Entorno de ejecución JavaScript y gestor de paquetes para herramientas de desarrollo.
    *   **Live Server** 🔄: Servidor de desarrollo con recarga en vivo para HTML/CSS/JS.
    *   **Concurrently** 🤝: Ejecuta múltiples comandos npm en paralelo.
*   **Font Awesome** ✨: Conjunto de iconos vectoriales para mejorar la interfaz de usuario.
*   **MySQL** 🗄️: Sistema de gestión de bases de datos relacionales para almacenar y consultar información.
*   **PHP** 🐘: Lenguaje de programación del lado del servidor para lógica de negocio y comunicación con la base de datos.
    *   **Composer** 🎶: Gestor de dependencias para PHP (utilizado en el proyecto `CMS`).
    *   **Dotenv** 🔒: Carga variables de entorno desde un archivo `.env` para configuraciones seguras (utilizado en el proyecto `CMS`).
    *   **Bootstrap** 🅱️: Framework CSS para el desarrollo rápido de interfaces responsivas (utilizado en el proyecto `Peliculas`).

## ✨ Características Principales

El repositorio está organizado en capítulos que cubren los siguientes temas y proyectos:

### 📄 Capítulo 01: HTML y CSS
*   **Introducción a HTML**: Conceptos básicos de etiquetas, estructura del documento y comentarios (`01-intro`).
*   **Modelo de Bloque y en Línea**: Entendimiento de cómo los elementos HTML se renderizan por defecto (`02-modeloBloque`).
*   **Maquetación Web Básica**: Aplicación de CSS para layout, incluyendo Flexbox y técnicas de posicionamiento para una página de portafolio simple (`03-maquetacion`).
*   **Proyecto "Vogue" (E-commerce Frontend)**: Un proyecto completo de front-end que demuestra maquetación avanzada con Sass, navegación responsiva, filtros de productos, carrito de compras y un panel de administración básico.

### 💡 Capítulo 02: JavaScript
*   **Fundamentos de JavaScript**: Tipos de datos (strings, numbers, booleans, null, undefined, objects, arrays), variables (let, const), operadores y plantillas literales (`capitulo-01`).
*   **Funciones**: Declaraciones de funciones, parámetros, retorno de valores, funciones flecha y el concepto de ámbito (scope) (`capitulo-01`, `capitulo-04`).
*   **Manipulación del DOM**: Selección de elementos HTML, modificación de su contenido y estructura, y adición dinámica de elementos (`capitulo-01`, `capitulo-03`, `capitulo-05`).
*   **Eventos y Delegación de Eventos**: Gestión de interacciones del usuario, como añadir y eliminar elementos de una lista de tareas de forma eficiente (`capitulo-02`).
*   **Componentes UI Interactivos**:
    *   **Ventana Modal (Popup)**: Implementación de un popup interactivo que se abre y cierra al hacer clic o presionar una tecla (`capitulo-03`).
    *   **Visibilidad de Contraseña**: Un campo de contraseña con un icono para alternar su visibilidad y mostrar validación básica (`capitulo-04`).
*   **Asincronía y Consumo de APIs (Pokedex)**: Introducción a las ejecuciones síncronas/asíncronas, el formato JSON y el consumo de APIs externas utilizando `fetch` y `Axios`, manejo de promesas y `async/await` para construir una aplicación Pokedex interactiva (`capitulo-05`).

### 🗄️ Capítulo 03: MySQL y PHP
*   **Introducción a MySQL**: Comandos básicos DDL (CREATE DATABASE, CREATE TABLE, DESCRIBE, ALTER TABLE) y DML (INSERT, SELECT, UPDATE, DELETE, TRUNCATE) para gestión de tablas de personas y películas (`01-intro.sql`, `02-peliculas.sql`).
*   **Diseño de Bases de Datos Relacionales**: Creación de tablas para películas, actores, personajes y directores con definición de claves primarias y establecimiento de relaciones de claves foráneas (`02-peliculas.sql`, `04-foraneas.sql`).
*   **Consultas Avanzadas**: Uso de `JOIN`s (INNER JOIN, LEFT JOIN, RIGHT JOIN) para combinar datos de múltiples tablas y alias para tablas y columnas, incluyendo consultas con tres tablas (`03-joins.sql`).
*   **Proyecto "Peliculas.com" (CRUD con PHP)**: Una aplicación web CRUD completa que permite añadir, listar, editar y eliminar películas y directores, demostrando la conexión y manipulación de una base de datos MySQL desde PHP, con interfaz estilizada con Bootstrap.

### 🌐 Capítulo 04: Proyecto CMS/E-commerce
*   **Arquitectura Modular PHP**: Estructura de proyecto organizada con un sistema de rutas básico, y una clara separación de vistas, controladores y recursos para un CMS de e-commerce.
*   **Configuración y Variables de Entorno**: Uso de Composer y Dotenv para gestionar dependencias de PHP y cargar configuraciones de forma segura desde un archivo `.env`.
*   **Funcionalidades de Autenticación**: Flujos de inicio de sesión, registro y recuperación de contraseña (con esqueletos en PHP y validaciones).
*   **Panel de Administración**:
    *   **Dashboard**: Vista general con estadísticas visuales (gráfico de ventas usando Chart.js).
    *   **Gestión de Productos**: Interfaz para añadir y administrar productos con formularios interactivos.
    *   **Mensajes**: Sección para gestionar comunicaciones de clientes.
*   **Secciones de la Tienda (Frontend)**: Páginas públicas para la navegación (inicio, productos, contacto, carrito) con una interfaz de usuario interactiva y responsiva.
*   **Front-end Interactivo**: Menú responsivo con JavaScript, filtros de productos y carrito de compras con funcionalidades de filtrado y visualización.

## 🚀 Instalación y Uso

Para explorar y ejecutar los diferentes módulos y proyectos, sigue los pasos a continuación.

### Requisitos Previos

Asegúrate de tener instalado lo siguiente en tu sistema:
*   **Node.js y npm**: Para los proyectos frontend que utilizan `live-server` y `sass`.
*   **PHP**: Versión 7.4 o superior (recomendado PHP 8+), para los proyectos del lado del servidor.
*   **MySQL**: Versión 8.0 o superior, para la gestión de bases de datos.
*   **Composer**: Para la gestión de dependencias en el proyecto `04-CMS`.
*   **Servidor Web**: Apache o Nginx configurado para servir proyectos PHP.

### Pasos Generales

1.  **Clona el repositorio:**
    ```bash
    git clone https://github.com/tu-usuario/nombre-del-repo.git
    cd nombre-del-repo
    ```

### Módulos Específicos

#### 📂 Capítulo 01: HTML y CSS
*   **`01-intro`, `02-modeloBloque`, `03-maquetacion`**:
    *   Simplemente abre los archivos `index.html` en tu navegador (`file:///path/to/index.html`) para ver los ejemplos de código.
*   **`04-proyecto` (Proyecto Vogue)**:
    1.  Navega a la carpeta del proyecto: `cd 01-HTML-CSS/04-proyecto`
    2.  Instala las dependencias de Node.js: `npm install`
    3.  Inicia el servidor de desarrollo (que incluye compilación de Sass y Live Server): `npm run dev`
    4.  Abre tu navegador en la URL proporcionada por `live-server` (generalmente `http://127.0.0.1:8080`).

#### 💡 Capítulo 02: JavaScript
*   **`capitulo-01` a `capitulo-04`**:
    *   Abre el archivo `index.html` en cada subcarpeta de `02-JAVASCRIPT` en tu navegador. Los scripts JavaScript están enlazados directamente desde el HTML.
*   **`capitulo-05` (Pokedex)**:
    1.  Abre `02-JAVASCRIPT/capitulo-05/index.html` en tu navegador.
    2.  La aplicación utiliza `Axios` a través de un CDN, por lo que no requiere instalación de Node.js para funcionar.

#### 🗄️ Capítulo 03: MySQL y PHP
*   **`01-MYSQL` (Ejercicios SQL)**:
    1.  Asegúrate de que tu servidor MySQL esté en funcionamiento.
    2.  Accede a tu cliente MySQL (por ejemplo, desde la terminal con `mysql -u root -p`).
    3.  Puedes ejecutar los comandos SQL directamente desde los archivos `.sql` o copiarlos y pegarlos en tu cliente MySQL para crear la base de datos `stream` y poblar las tablas.
*   **`02-PHP\02-peliculas` (Proyecto Peliculas.com)**:
    1.  Crea la base de datos `stream` en MySQL.
    2.  Importa el script `03-MYSQL-Y-PHP/02-PHP/02-peliculas/stream.sql` en tu base de datos `stream` para crear las tablas y datos iniciales.
    3.  Asegúrate de que `db.php` (`03-MYSQL-Y-PHP/02-PHP/02-peliculas/db.php`) tenga las credenciales correctas de tu base de datos MySQL (host, usuario, contraseña, nombre de la base de datos). Si usas XAMPP/WAMP, la configuración predeterminada suele ser `localhost`, `root`, `''` (vacío).
    4.  Coloca la carpeta `02-peliculas` dentro de la raíz de tu servidor web (e.g., `htdocs` para Apache o `www` para Nginx).
    5.  Accede a la aplicación a través de tu navegador (e.g., `http://localhost/ruta/a/02-peliculas`).

#### 🌐 Capítulo 04: Proyecto CMS/E-commerce
1.  **Configuración de la Base de Datos**:
    *   Crea una base de datos llamada `tienda` en MySQL.
    *   Importa el archivo `04-CMS/public/tienda.sql` (o `04-CMS/public/consultas.sql`) en esta base de datos para crear las tablas y datos iniciales.
2.  **Configuración de PHP y Dependencias**:
    *   Navega a la carpeta `public` del proyecto: `cd 04-CMS/public`
    *   Instala las dependencias de PHP con Composer: `composer install`
    *   Regresa a la raíz del proyecto (`cd ..` desde `public` para estar en `04-CMS`).
    *   Crea un archivo `.env` en la raíz del proyecto (`04-CMS/.env`) con tus credenciales de base de datos. Ejemplo:
        ```env
        DB_HOST=localhost
        DB_USER=root
        DB_PASS=tu_contraseña_mysql
        DB_NAME=tienda
        ```
3.  **Despliegue en Servidor Web**:
    *   Configura tu servidor web (Apache o Nginx) para que el `document root` o alias apunte directamente a la carpeta `04-CMS/public`.
    *   Asegúrate de que PHP esté configurado y funcionando correctamente con tu servidor web.
    *   Si realizas cambios en los archivos `.scss` ubicados en `04-CMS/public/sass`, necesitarás un compilador Sass configurado para generar `04-CMS/public/css/estilos.css`. Puedes adaptar un script similar a `npm run sass` del proyecto Vogue o usar una herramienta externa.
4.  **Acceso a la Aplicación**:
    *   Abre tu navegador y navega a la URL configurada para tu servidor (e.g., `http://localhost/` si `public` es la raíz, o `http://localhost/nombre_proyecto/public/`).
    *   Para el panel de administración, navega a `http://localhost/admin` (o la ruta correspondiente).
    *   Para el sistema de autenticación, navega a `http://localhost/auth/login` (o la ruta correspondiente).

---
*🤖 README generado por la extensión [README.IA](https://github.com/lazlodev/README.IA) - Desarrollado con ❤️ por [@lazlodev](https://github.com/lazlodev)*