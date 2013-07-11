1. Cambiar las rutas de deployment dentro del archivo build.properties
2. Cambiar las rutas del framework y de la carpeta protected dentro del archivo www/index.php

Cuando la aplicación esté en producción, hay que borrar lo siguiente del archivo www/index.php:
	defined('YII_DEBUG') or define('YII_DEBUG',true);

Si tienes problemas con URLs revisa la configuración dentro del archivo protected/config/main.php
y en el archivo www/.htaccess
