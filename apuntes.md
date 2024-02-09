## Apunte sobre laravel

primer comando para crear un proyecto 

- opcion 1: comando de composer

`composer create-proyect laravel/laravel miproyecto`

- opcion 2: comando de laravel

para ello vamos a instalar laravel

`composer global require laravel/installer`

y luego ejecutamos 

`laravel new [nombre del proyecto]`

## rutas importantes

1. routes 

    aquí se verán las rutas para la infraestructura del proyecto tanto para la api como para la web

2. resources/views

    aquí se crearan las views para las partes de la aplicación que tengan html

3. app/Models y app/Http/Controllers
 
    donde se ubicaran los modelos y para los controllers. 

4. artisan

    son todos los comandos necesarios, donde vamos a crear nuevos modelos etc...

5. storage

    aquí almacenaremos todos los archivos que se suban al servidor por ejemplo fotos de perfil.

> importante 
> 
> a mi me faltan vendor y lang no sé porque

para poder ver todo esto levantamos el servidor con `php artisan serve`
