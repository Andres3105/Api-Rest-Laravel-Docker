# 🐳 Arquitectura de Microservicios con Laravel, MySQL y Docker

## 📌 Descripción del Proyecto

Este proyecto implementa una arquitectura de microservicios utilizando **Laravel**, **MySQL** y **Docker Compose**, permitiendo la ejecución de una API REST con operaciones CRUD para la gestión de productos.

El entorno está completamente containerizado, siguiendo principios modernos de desarrollo como aislamiento de servicios, infraestructura como código y persistencia de datos.

---

## 🎯 Objetivos

* Comprender arquitecturas basadas en contenedores
* Implementar un entorno con Laravel + MySQL usando Docker
* Gestionar comunicación entre servicios mediante red interna
* Desarrollar y probar una API REST (CRUD)
* Diagnosticar problemas en entornos Docker

---

## 🏗️ Arquitectura

El sistema está compuesto por tres servicios principales:

### 🔹 1. Aplicación Laravel (`laravel_app`)

* PHP 8.x con Apache
* Ejecuta la API REST
* Puerto: `8080`

### 🔹 2. Base de Datos (`laravel_mysql`)

* MySQL 8.0
* Persistencia mediante volumen Docker
* Puerto: `3307`

### 🔹 3. phpMyAdmin (`laravel_pma`)

* Interfaz web para la base de datos
* Puerto: `8081`

---

## ⚙️ Tecnologías Utilizadas

* Laravel
* PHP
* MySQL
* Docker
* Docker Compose
* Apache

---

## 📂 Estructura del Proyecto

```
laravel-class-activity/
│
├── apache-config/
│   └── 000-default.conf
│
├── laravel-app/
│   └── (Proyecto Laravel)
│
├── docker-compose.yml
├── Dockerfile
└── README.md
```

---

## 🚀 Instalación y Ejecución

### 1. Clonar el repositorio

```bash
git clone <tu-repositorio>
cd laravel-class-activity
```

---

### 2. Construir y levantar contenedores

```bash
docker compose build app
docker compose up -d
```

---

### 3. Configurar Laravel

```bash
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

---

## 🌐 Acceso a los Servicios

* Laravel: http://localhost:8080
* phpMyAdmin: http://localhost:8081

**Credenciales MySQL:**

* Usuario: `laravel_user`
* Contraseña: `laravel_pass`

---

## 🔌 API REST

### Base URL

```
http://localhost:8080/api/v1/products
```

---

### 📥 Crear producto (POST)

```bash
curl.exe -X POST "http://localhost:8080/api/v1/products" \
-H "Content-Type: application/json" \
-d "{\"name\":\"Laptop\",\"price\":999.99,\"stock\":5}"
```

---

### 📤 Obtener productos (GET)

```bash
curl http://localhost:8080/api/v1/products
```

---

### ✏️ Actualizar producto (PUT)

```bash
curl.exe -X PUT "http://localhost:8080/api/v1/products/1" \
-H "Content-Type: application/json" \
-d "{\"name\":\"Laptop Pro\",\"price\":1200}"
```

---

### ❌ Eliminar producto (DELETE)

```bash
curl.exe -X DELETE "http://localhost:8080/api/v1/products/1"
```

---

## 🧠 Principios Arquitectónicos

* **Aislamiento de componentes:** cada servicio en su contenedor
* **Comunicación por red privada:** uso de `laravel_net`
* **Infraestructura como código:** uso de `docker-compose.yml`
* **Configuración externa:** variables en `.env`
* **Persistencia de datos:** volúmenes Docker
* **Escalabilidad:** posibilidad de escalar servicios

---

## 🛠️ Comandos Útiles

```bash
docker compose ps
docker compose logs -f
docker compose down
docker compose up -d
```

---

## ⚠️ Problemas Comunes

* ❌ Error 500 → revisar logs con `docker compose logs -f app`
* ❌ Rutas no funcionan → verificar `api.php` y `bootstrap/app.php`
* ❌ Error de base de datos → ejecutar migraciones

---

## 👨‍💻 Autor

**Andrés Bohórquez**
Estudiante de Ingeniería de Sistemas

---

## 📄 Licencia

Este proyecto es de uso académico.
