# VLC System Status Tracker Pro v2.0

[Castellano](#castellano) | [English](#english)

---

<a name="castellano"></a>
## 🇪🇸 Castellano: Documentación Detallada

**VLC System Status Tracker Pro** es un componente de software de alta fidelidad desarrollado para la identidad digital de **Velmont Lario & Co.** Este plugin de WordPress trasciende el concepto de un simple widget, ofreciendo una terminal de comandos interactiva que fusiona la estética *high-tech* con funcionalidades de red reales.

### 🛠️ Especificaciones Técnicas y Arquitectura

El desarrollo se ha basado en un modelo de **Separación de Responsabilidades (SoC)**, dividiendo el proyecto en tres capas fundamentales:

#### 1. Capa de Servidor (Backend - PHP)
* **Detección Dinámica de Nodos:** El núcleo del plugin utiliza la superglobal `$_SERVER['REMOTE_ADDR']` para capturar la dirección IP del visitante, personalizando la experiencia de conexión de forma instantánea.
* **Seguridad de Entorno:** Implementa protecciones contra acceso directo mediante la validación de la constante `ABSPATH`, asegurando que el script solo se ejecute dentro del ecosistema seguro de WordPress.
* **Optimización de Assets:** Utiliza `wp_enqueue_scripts` para registrar estilos y scripts de forma eficiente. El JavaScript se carga específicamente en el *footer* (`true`) para no bloquear el renderizado inicial de la página (FCP).

#### 2. Capa de Lógica de Interfaz (Frontend - JS)
* **Motor de Estados Asíncrono:** Se ha implementado un sistema de fases secuenciales que simula protocolos de seguridad críticos como `ENCRYPTING_DATA_PACKETS` y `SSL_HANDSHAKE_VERIFIED`.
* **Gestión de Memoria:** El bucle de ejecución mediante `setInterval` está optimizado para mantener la interactividad visual sin generar una sobrecarga de CPU en el navegador del cliente.

#### 3. Capa Visual y UX (Diseño - CSS3)
* **Identidad Visual:** Uso del color hexadecimal `#C6A75E` (oro corporativo) sobre fondo negro para maximizar el contraste técnico.
* **Animaciones de Sistema:** Implementación de `@keyframes` para el parpadeo del cursor y transiciones de opacidad sincronizadas con la lógica de JavaScript para una sensación de terminal fluida.

### 🚀 Instrucciones de Instalación
1. Descarga el repositorio y coloca la carpeta `vlc-status-widget` en `/wp-content/plugins/`.
2. Activa el plugin desde el panel de administración de WordPress.
3. Despliega la terminal en cualquier parte de tu web usando el shortcode: `[vlc_status]`.

---

<a name="english"></a>
## 🇺🇸 English: Detailed Documentation

**VLC System Status Tracker Pro** is a high-fidelity software component developed for **Velmont Lario & Co.** This WordPress plugin goes beyond a simple widget, offering an interactive command terminal that merges high-tech aesthetics with real-world networking functionalities.

### 🛠️ Technical Specifications & Architecture

The development is based on the **Separation of Concerns (SoC)** model, dividing the project into three fundamental layers:

#### 1. Server Layer (Backend - PHP)
* **Dynamic Node Detection:** The core utilizes `$_SERVER['REMOTE_ADDR']` to capture the visitor's IP address, instantly personalizing the connection experience.
* **Environment Security:** It implements direct access protection by validating the `ABSPATH` constant, ensuring the script only runs within the secure WordPress ecosystem.
* **Asset Optimization:** Uses `wp_enqueue_scripts` to efficiently register styles and scripts. JavaScript is specifically loaded in the *footer* (`true`) to avoid blocking the initial page render (FCP).

#### 2. Interface Logic Layer (Frontend - JS)
* **Asynchronous State Engine:** A sequential phase system manages transitions between critical security protocols such as `ENCRYPTING_DATA_PACKETS` and `SSL_HANDSHAKE_VERIFIED`.
* **Memory Management:** The `setInterval` execution loop is optimized to maintain visual interactivity without causing CPU overhead in the client's browser.

#### 3. Visual & UX Layer (Design - CSS3)
* **Visual Identity:** Employs the hex color `#C6A75E` (corporate gold) on a deep black background to maximize technical contrast.
* **System Animations:** Implementation of `@keyframes` for cursor blinking and opacity transitions synchronized with JavaScript logic for a fluid terminal feel.

### 🚀 Installation Instructions
1. Download the repository and place the `vlc-status-widget` folder in `/wp-content/plugins/`.
2. Activate the plugin through the WordPress admin dashboard.
3. Deploy the terminal anywhere on your site using the shortcode: `[vlc_status]`.

---
© 2026 **VELMONT LARIO & CO.** - Engineering Excellence for Digital Environments.
