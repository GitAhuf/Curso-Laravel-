Comandos

php artisan route:cache             //Se guarda para produccion
php artisan route:clear             //Borra el archivo de cache
php artisan r:l                     //Lista todas las rutas del proyecto
php artisan r:l --name=posts        //Lista las rutas con el nombre posts 
php artisan make:controller PruebaController --resource
php artisan make:controller AboutController --resource

php artisan make:migration categories //crea un archivo de migracion con el nombre  que se le ha enviado
php artisan migrate                   //Ejecuta una nueva migracion

Metodos destructivos
php artisan migrate:rollback          //Revierte la ultima migracion ejecutada por lotes
php artisan migrate:rollback --step=2 //Revierte las dos ultimas migraciones ejecutadas sin importar el lote
php artisan migrate:reset             //Elimina todas las migraciones existentes
php artisan migrate:refresh           //Ejecuta el metodo down() y el metodo up() eliminando y creando nuevamente todas las tablas exepto las que se crearon sin migracion (manualmente)
php artisan migrate:fresh             //Elimina todas las tablas incluso las que se crearon sin mogracion  

crear migracion
php artisan make:migration create_posts_table //crea una migracion y define los metodos up() y down con el nombre posts
