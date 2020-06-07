# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Documentación Oficial

La documentación del Framework la puedes encontrar en [Lumen website](https://lumen.laravel.com/docs).

## Paso a Paso para Instalar.
Este es un proyecto basico desarrollado con algunos ejemplos sencillos para entender el funcionamiento del Framework. Además de poder utilizarse como base si deseas empezar un API REST con Autenticación JWT (Json Web Token) para empezar a utilizarlo debes hacer lo siguiente:

1. Instalar el manejador de paquetes Composer. Lo Puedes conseguir aqui [Composer Website](https://getcomposer.org)

Debes asegurarte de cumplir los siguientes requisitos del sistema:

* PHP >= 7.2
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

2. Descarga este proyecto. Puedes hacerlo directamente desde aqui o utilizando git a través de la siguiente instrucción:

    git clone https://github.com/villasana26enrique/API-Lumen.git

3. Luego de tener el codigo del proyecto, tomar el archivo que se encuentra ubicado en la raíz llamado .env.example y renombrarlo a .env (Debes saber que el archivo .env tiene las configuraciones de tu sistema en particular y debes configurarlo como tal)

4. Ejecutar el comando: 

    composer install
    
 - Este comando se encargará de instalar los paquetes necesarios para que funcione la aplicación.

5. Ejecutar el siguiente comando para iniciar el Servidor:

    php artisan start:serve

6. Luego de activar el servidor local debes acceder a través del navegador a la ruta:

    http://localhost:8000/api/key
    
 - El valor del "Key" que se muestra al acceder a esta ruta, debes seleccionarlo y pegarlo en tu archivo .env, especificamente asignarlo al valor: APP_KEY

### Como está descrito al empezar la sección "Paso a Paso" esta API cuenta con seguridad JWT (Json Web Token) y debe hacer lo siguiente para que funcione correctamente: 

1. Luego de haber hecho todos los pasos anteriores, lo primero que debe hacer es ejecutar el comando:

    php artisan jwt:secret

2. Crear una Base de Datos y realizar las configuraciones necesarias en el archvivo .env para que el API se conecte a su BD.

3. Ejecutar el comando:

    php artisan migrate
    
- Este comando se encarga de crear la tabla "Users" la cual es necesaria para el funcionamiento del JWT.

4. Y Listo! el proyecto está listo para funcionar. A través de las rutas "api/auth/register" y "api/auth/login" utilizando alguna herramienta como [Postman](https://www.postman.com) o alguna de su preferencia, puede obtener el Token necesario para acceder a las rutas protegidas.
