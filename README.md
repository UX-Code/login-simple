# LOGIN BASICO
Esta practica es un login basico desarrollado en PHP Orientado a objetos utilizando el patrón MVC. Dentro del ejemplo se encuentra la practica y uso 
de eventos de jquery, ajax y validación a traves de parsley.js

El funcionamiento de la practica, es que el sistema primero valida si el correo del usuario existe antes de ingresar la contraseña, de 
lo contrario el boton de ingresar quedaria anulado. 

Si el email existe, entonces el siguiente paso es que a traves de ajax el sistema valida si la contraseña ingresada correspone al hash en 
la base de datos, de lo contrario mandaria un mensaje de error a traves de JSON, de lo contrario el sistema ingresa al panel principal.

El manejo de la practica fue utilizada con URL amigables a traves de la configuración del htaccess. 

# IMPORTANTE:

los datos de acceso son email: prueba@gmail.com clave: prueba, el script de la base de datos se encuentra en la carpeta model/data
