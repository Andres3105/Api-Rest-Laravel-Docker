# 🐳 Arquitectura de Microservicios con Laravel, MySQL y Docker

## 📌 Descripción del Proyecto

Este proyecto implementa una arquitectura basada en contenedores utilizando **Laravel**, **MySQL** y **Docker Compose**, permitiendo ejecutar una API REST para la gestión de productos (CRUD).

Se aplican principios como aislamiento de servicios, comunicación por red interna y persistencia de datos.

---

## 🏗️ Arquitectura

El sistema está compuesto por:

* **Laravel (app)** → API REST (Puerto 8080)
* **MySQL (db)** → Base de datos (Puerto 3307)
* **phpMyAdmin (pma)** → Administración (Puerto 8081)

---

## ⚙️ Tecnologías

* Laravel
* PHP
* MySQL
* Docker
* Docker Compose
* Apache

---

## 📂 Estructura del Proyecto

```id="4l4k7z"
laravel-class-activity/
├── apache-config/
├── laravel-app/
├── docker-compose.yml
├── Dockerfile
└── README.md
```

---

## 🚀 Instalación y Ejecución

### 🐧 Linux / 🍎 macOS

```bash id="7z0z4i"
git clone <repo-url>
cd laravel-class-activity

docker compose build app
docker compose up -d

docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

---

### 🪟 Windows (PowerShell)

```powershell id="f3g5rj"
git clone <repo-url>
cd laravel-class-activity

docker compose build app
docker compose up -d

docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

---

## 🌐 Acceso

* Laravel → http://localhost:8080
* phpMyAdmin → http://localhost:8081

**Credenciales MySQL:**

* Usuario: `laravel_user`
* Contraseña: `laravel_pass`

---

## 🔌 API REST

### Base URL

```id="oj2p3i"
http://localhost:8080/api/v1/products
```

---

## 📥 Crear producto (POST)

### 🐧 Linux / 🍎 macOS

```bash id="v2y84o"
curl -X POST http://localhost:8080/api/v1/products \
-H "Content-Type: application/json" \
-d '{"name":"Laptop","price":999.99,"stock":5}'
```

---

### 🪟 Windows (PowerShell)

```powershell id="u8v1yk"
Invoke-RestMethod -Uri "http://localhost:8080/api/v1/products" `
-Method POST `
-Headers @{ "Content-Type" = "application/json" } `
-Body '{"name":"Laptop","price":999.99,"stock":5}'
```

---

### 🪟 Windows (CMD con curl)

```cmd id="h1i7gq"
curl -X POST http://localhost:8080/api/v1/products ^
-H "Content-Type: application/json" ^
-d "{\"name\":\"Laptop\",\"price\":999.99,\"stock\":5}"
```

---

## 📤 Obtener productos (GET)

```bash id="y6q5jt"
curl http://localhost:8080/api/v1/products
```

---

## ✏️ Actualizar producto (PUT)

```bash id="s2p4nb"
curl -X PUT http://localhost:8080/api/v1/products/1 \
-H "Content-Type: application/json" \
-d '{"name":"Laptop Pro","price":1200}'
```

---

## ❌ Eliminar producto (DELETE)

```bash id="k3r8dc"
curl -X DELETE http://localhost:8080/api/v1/products/1
```

---

## 🧠 Principios Aplicados

* Aislamiento de servicios (contenedores independientes)
* Red privada (`laravel_net`)
* Infraestructura como código (`docker-compose.yml`)
* Persistencia con volúmenes Docker
* Configuración externa con `.env`

---

## 🛠️ Comandos Útiles

```bash id="6d7y1h"
docker compose ps
docker compose logs -f
docker compose down
docker compose up -d
```

---

## ⚠️ Problemas Comunes

* Error 500 → revisar logs

  ```bash id="jq7t9m"
  docker compose logs -f app
  ```

* Rutas no funcionan → verificar `api.php` y `bootstrap/app.php`

* Base de datos no conecta → ejecutar migraciones

---

## 👨‍💻 Autor

**Andrés Bohórquez**

---

## 📄 Licencia

Uso académico.
