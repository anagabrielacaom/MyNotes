## Tarea 4 - Tecnologías y Atributos de Calidad

Para el desarrollo del software se implementó la tecnología PHP Frameworks Full Web App - Laravel v8.68.0

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Autores

- Miguel Páez - 1151613
- Gabriela Cárdenas - 1151614
- Karen Ontiveros - 1151629

## Herramientas

- PHP v8
- Laravel v8.68.0 PHP Framework
- MySQL

- Visual Studio Code
- AWS Educate

## Instrucciones de despliegue Nube aws:
# •	Creación de EC2
Crear instancia Amazon EC2 con Ubuntu server 20.04 LTS con sus respectivas configuraciones.
# •	Conexión SSH
En consola abrimos la ruta donde se encuentra la clave en formato .pem
Copiamos y pegamos: El ssh ssh -i "nombredelaclave.pem" ubuntu@ec2-50-17-18-203.compute-1.amazonaws.com
# •	Actualización de paquetes Ubuntu
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get update
# •	Instalar Apache2
    sudo apt-get install apache2
# •	Instar PHP 7.4
    sudo apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
# •	Instalar Composer 

Ingresamos a la página oficial de Composer: https://getcomposer.org/download/

En el apartado de Download  copiar Command-line installation

    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    
Nos dirigimos a Getting Started > Globally
Copiamos y pegamos con el commando sudo : 
    sudo mv composer.phar /usr/local/bin/composer
    
# •	Activar el modo reescritura Apache2
    sudo a2enmod rewrite
# •	Reiniciar el servidor 
    sudo service apache2 restart 
# •	Configuración Apache2
    sudo nano /etc/apache2/apache2.conf
    
    Comentamos con # las líneas: User ${APACHE_RUN_USER} 
                                 Group ${APACHE_RUN_GROUP}
    
    Ingresamos: User ubuntu 
                User Ubuntu
      
    
    Nos dirigimos hasta Directory y pegamos:
    
            <Directory /home/ubuntu/>
             Options Indexes FollowSymLinks 
             AllowOverride All 
             Require all granted 
            </Directory>
            
# •	Configurar Sitio por defecto Apache2
    sudo nano /etc/apache2/sites-enabled/000-default.conf
Nos ubicamos en DocumentRoot Y reemplazamos por:
    DocumentRoot /home/Ubuntu/NombreCarpetaDelProyecto/public
# •	Reiniciar el servidor 
    Sudo service apache2 restart 
# •	Para clonar nuestro proyecto ingresamos el comando:
    git clone https://github.com/anagabrielacaom/MyNotes.git NombreCarpetaDelProyecto
# •	Accedemos a la ubicación del proyecto: 
    cd NombreCarpetaDelProyecto
#   •	Ingresamos el comando: 
    composer install
# •	Ejecutar el comando para configurar el archivo .env
Se copiará el contenido del archivo .env.example y lo pegará el otro archivo llamado .env
    cp .env.example .env 
# •	Generar la clave privada de la aplicación
Laravel nos provee de un comando para generar dicha clave, vamos a ejecutar el siguiente comando:
    php artisan key:generate
# •	Crear un RDS en AWS e importamos a la base de datos
# •	Actualizar datos en la base de datos
Ingresamos nuevamente al archivo .env y actualizaremos los datos correspondientes a estas variables:
   
    DB_CONNECTION=mysql 
    
    DB_HOST=            <-- 
    
    DB_PORT=3306
    
    DB_DATABASE=        <--                 
    
    DB_USERNAME=        <--              
    
    DB_PASSWORD=        <--                
